<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('editormd/css/editormd.preview.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <style>
        body {
            display: flex;
            font-family: 'Arial', sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .sidebar, .toc {
            height: 100vh;
            overflow-y: auto;
            padding: 20px;
            position: fixed;
            top: 0;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar {
            width: 250px;
            left: 0;
        }
        .toc {
            width: 320px;
            left: 250px;
            border-left: 1px solid #eeeeee;
        }

        /* 新添加的 CSS */
        .markdown-toc-list {
            list-style: none;
            padding-left: 0;
            margin: 0;
            color: #ffffff;
        }

        .markdown-toc-list li {
            margin-bottom: 8px;
        }

        .markdown-toc-list a {
            text-decoration: none;
            color: #17a2b8;
            font-weight: bold;
            display: block;
            padding: 4px 8px;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .markdown-toc-list a:hover {
            background-color: #138496;
            color: #ffffff;
        }

        .toc-level-1 {
            padding-left: 0;
            border-left: 3px solid #17a2b8;
        }

        .toc-level-2 {
            padding-left: 20px;
            border-left: 2px solid #138496;
        }

        .toc-level-3 {
            padding-left: 40px;
            border-left: 2px solid #138496;
        }

        .toc-level-4 {
            padding-left: 60px;
            border-left: 1px solid #138496;
        }

        .toc-level-5 {
            padding-left: 80px;
            border-left: 1px solid #138496;
        }

        .toc-level-6 {
            padding-left: 100px;
            border-left: 1px solid #138496;
        }
        .content-wrapper {
            margin-left: 550px;
            padding: 20px;
            flex-grow: 1;
            max-width: 1200px;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
        }
        .chapter-title {
            cursor: pointer;
            position: relative;
            padding-left: 20px;
            transition: color 0.3s ease;
        }

        .chapter-title:hover {
            color: #138496;
        }

        .toggle-icon {
            position: absolute;
            left: 0;
            transition: transform 0.3s ease;
        }

        .collapse.show .toggle-icon {
            transform: rotate(90deg);
        }
        .chapter-title, .article-title a {
            font-weight: bold;
            color: #17a2b8;
            text-decoration: none;
        }
        .chapter-title:hover, .article-title a:hover {
            color: #138496;
        }
        .article-meta {
            margin-bottom: 20px;
            color: #6c757d;
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
            background-color: #17a2b8;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .nav-buttons button:hover {
            background-color: #138496;
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
                <div class="chapter-title" data-toggle="collapse" data-target="#chapter-{{ $chapterId }}">
                    <span class="toggle-icon">&#9656;</span> <!-- 图标 -->
                    {{ $chapterArticles->first()->chapter->title ?? '未命名章节' }}
                </div>
                <div class="collapse" id="chapter-{{ $chapterId }}">
                    @if ($chapterArticles->isEmpty())
                        <div class="article-title">暂无文章</div>
                    @else
                        @foreach($chapterArticles as $articleItem)
                            <div class="article-title">
                                <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $articleItem->slug]) }}">{{ $articleItem->order }}. {{ $articleItem->title }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <div class="chapter">
            <div class="chapter-title">暂无章节</div>
        </div>
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
<script src="{{ asset('js/prettify.min.js') }}"></script>
<script src="{{ asset('js/raphael.min.js') }}"></script>
<script src="{{ asset('js/underscore-min.js') }}"></script>
<script src="{{ asset('js/sequence-diagram-min.js') }}"></script>
<script src="{{ asset('js/flowchart.min.js') }}"></script>
<script src="{{ asset('js/jquery.flowchart.min.js') }}"></script>
<script src="{{ asset('js/marked.js') }}"></script> <!-- 加载特定版本的 marked.js -->
<script src="{{ asset('js/editormd.min.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script>
    $(function() {
        editormd.markdownToHTML("article-content", {
            htmlDecode: "style,script,iframe",
            emoji: true,
            taskList: true,
            tex: true,
            flowChart: true,
            sequenceDiagram: true,
            toc: true,
            tocContainer: "#toc-content",
            path: '{{ asset('editormd/lib/') }}',
        });

        // 初始化章节状态
        $('.chapter').each(function() {
            var chapterId = $(this).find('.chapter-title').data('target');
            var isExpanded = localStorage.getItem(chapterId) === 'true';
            if (isExpanded) {
                $(chapterId).addClass('show');
                $(this).find('.toggle-icon').css('transform', 'rotate(90deg)');
            }
        });

        // 添加章节展开和折叠的点击事件处理器
        $('.chapter-title').on('click', function() {
            var target = $(this).data('target');
            $(target).collapse('toggle');
            var isExpanded = $(target).hasClass('show');
            localStorage.setItem(target, isExpanded); // 存储状态

            // 更新图标状态
            $(this).find('.toggle-icon').css('transform', isExpanded ? 'rotate(0deg)' : 'rotate(90deg)');
        });

        processImages();
        initLightbox();

        function processImages() {
            console.log("Processing images...");
            $("#article-content img").each(function() {
                var imageSrc = $(this).attr('src');
                console.log("Image found with src:", imageSrc);
                if (!$(this).parent().is("a")) {
                    $(this).wrap('<a href="' + imageSrc + '" data-lightbox="article-images"></a>');
                    console.log("Wrapped image with a tag.");
                }
            });
        }

        function initLightbox() {
            if (typeof lightbox !== 'undefined') {
                lightbox.init();
            }
        }

        // 获取当前文章的索引
        function getCurrentArticleIndex() {
            var currentUrl = window.location.href;
            var articles = @json($articles);
            for (var i = 0; i < articles.length; i++) {
                if (currentUrl.includes(articles[i].slug)) {
                    return i;
                }
            }
            return -1;
        }

        // 获取指定索引的文章URL
        function getArticleUrlByIndex(index) {
            var articles = @json($articles);
            if (index >= 0 && index < articles.length) {
                var article = articles[index];
                return '{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => 'ARTICLE_SLUG']) }}'.replace('ARTICLE_SLUG', article.slug);
            }
            return null;
        }

        window.goToPreviousArticle = function() {
            var currentArticleIndex = getCurrentArticleIndex();
            if (currentArticleIndex > 0) {
                var prevArticleIndex = currentArticleIndex - 1;
                var prevUrl = getArticleUrlByIndex(prevArticleIndex);
                if (prevUrl) {
                    location.href = prevUrl;
                }
            }
        }

        window.goToNextArticle = function() {
            var currentArticleIndex = getCurrentArticleIndex();
            var nextArticleIndex = currentArticleIndex + 1;
            var nextUrl = getArticleUrlByIndex(nextArticleIndex);
            if (nextUrl) {
                location.href = nextUrl;
            }
        }

        window.scrollToTop = function() {
            $("html, body").animate({ scrollTop: 0 }, 500);
        }
    });
</script>
</body>
</html>
