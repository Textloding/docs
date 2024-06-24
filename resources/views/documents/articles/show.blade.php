<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/editormd.preview.min.css') }}">
    <style>
        body {
            display: flex;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #777 250px, #999999 450px, #ffffff 451px);
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            overflow-y: auto;
            padding: 20px;
            background-color: transparent;
            position: fixed;
        }
        .toc {
            width: 200px;
            height: 100vh;
            overflow-y: auto;
            padding: 20px;
            background-color: transparent;
            position: fixed;
            left: 250px;
            border-left: 1px solid #EEEEEE;
        }
        .content-wrapper {
            margin-left: 450px;
            padding: 20px;
            flex-grow: 1;
            max-width: 1200px;
            overflow: hidden;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
        }
        .chapter-title {
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
            color: white;
        }
        .article-title {
            margin-left: 20px;
            margin-bottom: 5px;
            cursor: pointer;
            color: white;
        }
        .article-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .article-meta {
            margin-bottom: 20px;
            color: #999;
        }
        .article-content {
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .nav-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .nav-buttons button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .nav-buttons button:hover {
            background-color: #0056b3;
        }
        img {
            max-width: 100%;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h5>目录</h5>
    @if($document->has_chapters)
        @foreach($articles as $chapterId => $chapterArticles)
            <div class="chapter">
                <div class="chapter-title" data-toggle="collapse" data-target="#chapter-{{ $chapterId }}">{{ $chapterArticles->first()->chapter->title ?? '未命名章节' }}</div>
                <div class="collapse" id="chapter-{{ $chapterId }}">
                    @foreach($chapterArticles as $articleItem)
                        <div class="article-title">
                            <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $articleItem->slug]) }}">{{ $articleItem->order }}. {{ $articleItem->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    @else
        @foreach($articles as $articleItem)
            <div class="article-title">
                <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $articleItem->slug]) }}">{{ $articleItem->order }}. {{ $articleItem->title }}</a>
            </div>
        @endforeach
    @endif
</div>

<div class="toc">
    <h5>内容导航</h5>
    <div id="toc-content"></div>
</div>

<div class="content-wrapper">
    <div class="content">
        <div class="article-header">
            <div class="version-selector">
                <select onchange="location = this.value;">
                    @foreach($document->versions as $ver)
                        <option value="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $ver->version_number, 'article_slug' => $article->slug]) }}" {{ $ver->version_number == $version->version_number ? 'selected' : '' }}>
                            {{ $ver->version_number }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <h1 class="article-title">{{ $article->title }}</h1>
        <div class="article-meta">创建时间：{{ $article->created_at }} / 更新时间：{{ $article->updated_at }}</div>
        <div class="article-content" id="article-content">
            <textarea style="display:none;">{{ $article->content }}</textarea>
        </div>
    </div>
</div>

<div class="nav-buttons">
    <button onclick="goToPreviousArticle()">上一文章</button>
    <button onclick="goToNextArticle()">下一文章</button>
    <button onclick="scrollToTop()">返回顶部</button>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/marked.min.js') }}"></script>
<script src="{{ asset('js/prettify.min.js') }}"></script>
<script src="{{ asset('js/raphael.min.js') }}"></script>
<script src="{{ asset('js/underscore-min.js') }}"></script>
<script src="{{ asset('js/sequence-diagram-min.js') }}"></script>
<script src="{{ asset('js/flowchart.min.js') }}"></script>
<script src="{{ asset('js/jquery.flowchart.min.js') }}"></script>
<script src="{{ asset('js/editormd.min.js') }}"></script>
<script>
    $(function() {
        // 确保 marked 已正确加载并定义
        if (typeof marked !== 'undefined') {
            // 使用 marked 解析 Markdown 内容
            var markdownContent = document.querySelector('#article-content textarea').value;
            var htmlContent = marked.parse(markdownContent);
            document.getElementById('article-content').innerHTML = htmlContent;
        } else {
            console.error('Marked 库未加载。');
        }

        // 初始化 Editor.md 并生成 TOC
        editormd.markdownToHTML("article-content", {
            htmlDecode      : "style,script,iframe",  // 你可以过滤标签解码
            emoji           : true,
            taskList        : true,
            tex             : true,  // 默认不解析
            flowChart       : true,  // 默认不解析
            sequenceDiagram : true,  // 默认不解析
            toc             : true,  // 生成 TOC
            tocContainer    : "#toc-content"  // TOC 容器
        });

        // 上一文章和下一文章导航
        window.goToPreviousArticle = function() {
            // 实现跳转到上一文章的逻辑
        }

        window.goToNextArticle = function() {
            // 实现跳转到下一文章的逻辑
        }

        window.scrollToTop = function() {
            $("html, body").animate({ scrollTop: 0 }, 500);
        }
    });
</script>

</body>
</html>
