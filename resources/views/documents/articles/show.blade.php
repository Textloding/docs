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
        .chapter-title  {

            font-weight: bold;
            color: #138496;
            text-decoration: none;
        }
        .article-title a {
            padding-left: 25px;
            font-weight: bold;
            color: #d9d9d9;
            text-decoration: none;
        }

        .chapter-title:hover, .article-title a:hover {
            color: #FF7F50;
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

        .copy-btn {
            position: absolute;
            top: 0px;
            right: 5px;
            display: none;
            padding: 5px 10px;
            font-size: 12px;
            color: white;
            background-color: #17a2b8;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0.7;
            transition: background-color 0.3s, opacity 0.3s;
        }

        .copy-btn:hover {
            background-color: #138496;
            opacity: 1;
        }

        .code-block {
            position: relative;
        }

        .code-block:hover .copy-btn {
            display: block;
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
                                <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $articleItem->slug, 'article_id' => $articleItem->id]) }}">{{ $articleItem->title }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    @else
        @foreach($articles as $articleItem)
            <div class="article-title">
                <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $articleItem->slug, 'article_id' => $articleItem->id]) }}">{{ $articleItem->title }}</a>
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
            <div>
                <select id="version-selector">
                    @foreach($document->versions as $ver)
                        <option value="{{ $ver->version_number }}" {{ $ver->version_number == $version->version_number ? 'selected' : '' }}>
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
    $(document).ready(function() {
        let lastVersion = $('#version-selector').val(); // 初始化时存储当前选中的版本号

        $('#version-selector').on('focus', function () {
            // 在下拉菜单获得焦点时记录当前的值
            lastVersion = $(this).val();
        }).change(function() {
            const newVersion = $(this).val(); // 获取新选中的版本号
            updateArticleLink(newVersion, lastVersion); // 调用函数，并传递当前选择和上次选择
        });

        function updateArticleLink(newVersion, lastVersion) {
            const documentSlug = '{{ $document->slug }}';
            const articleSlug = '{{ $article->slug }}';
            const chapterId = '{{ $article->chapter_id }}';

            // 检查 chapterId 是否存在，如果不存在或为空，则使用不同的 URL
            const url = chapterId ?
                `/documents/${documentSlug}/${newVersion}/${chapterId}/find-article/${articleSlug}` :
                `/documents/${documentSlug}/${newVersion}/find-article/${articleSlug}`;

            $.get(url, function(data) {
                if (data.success) {
                    const newLink = `/documents/${documentSlug}/${newVersion}/articles/${articleSlug}/${data.article_id}`;
                    window.location.href = newLink;
                    // 请求成功后更新 lastVersion
                    $('#version-selector').data('last', newVersion);
                } else {
                    alert(data.message);
                    $('#version-selector').val(lastVersion); // 请求失败时，恢复原来的选择
                }
            }).fail(function() {
                alert('该版本对应文章没有找到！');
                $('#version-selector').val(lastVersion); // 网络请求本身失败也恢复原来的选择
            });
        }
        // 页面加载时，恢复每个章节的展开/折叠状态
        $('.chapter').each(function() {
            var chapterId = $(this).find('.chapter-title').attr('data-target');
            var isExpanded = localStorage.getItem(chapterId) === 'true';
            if (isExpanded) {
                $(chapterId).addClass('show');
                $(this).find('.toggle-icon').css('transform', 'rotate(90deg)');
                $(chapterId).collapse('show'); // 确保Bootstrap的collapse状态更新
            }
        });

        // 点击章节标题时，保存章节的展开/折叠状态
        $('.chapter-title').on('click', function() {
            var target = $(this).data('target');
            $(target).collapse('toggle').on('shown.bs.collapse hidden.bs.collapse', function() {
                var isExpanded = $(this).hasClass('show');
                localStorage.setItem(target, isExpanded); // 更新localStorage状态
                var icon = $(this).prev('.chapter-title').find('.toggle-icon');
                icon.css('transform', isExpanded ? 'rotate(90deg)' : 'rotate(0deg)'); // 更新图标状态
            });
        });
        // 高亮当前查看的文章
        highlightCurrentArticle();

        function highlightCurrentArticle() {
            var currentArticleId = '{{ $article->id }}'; // 当前文章ID
            $('.article-title a').each(function() {
                var href = $(this).attr('href');
                var hrefArticleId = href.split('/').pop(); // 假设URL结构最后一部分是文章ID
                if (hrefArticleId === currentArticleId) {
                    $(this).css('color', '#FF7F50'); // 设置当前文章链接的颜色
                }
            });
        }
    });
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



        processImages();
        initLightbox();
        addCopyButtons();

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

        function addCopyButtons() {
            document.querySelectorAll('pre').forEach(function(pre) {
                var codeBlock = pre.querySelector('code');
                var button = document.createElement('button');
                button.className = 'copy-btn';
                button.textContent = '复制';

                button.addEventListener('click', function() {
                    var textArea = document.createElement('textarea');
                    textArea.value = codeBlock.textContent;
                    document.body.appendChild(textArea);
                    textArea.select();
                    try {
                        var successful = document.execCommand('copy');
                        button.textContent = successful ? '复制完成！' : '复制失败';
                        setTimeout(() => { button.textContent = '复制'; }, 2000);
                    } catch (err) {
                        button.textContent = '复制失败';
                        console.error('Error copying text: ', err);
                    }
                    document.body.removeChild(textArea);
                });

                if (!pre.parentNode.classList.contains('code-block')) {
                    var div = document.createElement('div');
                    div.className = 'code-block';
                    pre.parentNode.insertBefore(div, pre);
                    div.appendChild(pre);
                }
                pre.appendChild(button);
            });
}




        // 获取当前文章的索引
        function getCurrentArticleIndex() {
            var currentArticleId = {{ $article->id }};
            var articles = @json($articles);

            if (articles instanceof Array) {
                // 处理没有章节的情况
                for (var i = 0; i < articles.length; i++) {
                    if (articles[i].id == currentArticleId) {
                        return { chapterId: null, articleIndex: i };
                    }
                }
            } else {
                // 假设文章仍然按章节分组
                for (var chapterId in articles) {
                    if (articles.hasOwnProperty(chapterId)) {
                        var chapterArticles = articles[chapterId];
                        for (var i = 0; i < chapterArticles.length; i++) {
                            if (chapterArticles[i].id == currentArticleId) {
                                return { chapterId: chapterId, articleIndex: i };
                            }
                        }
                    }
                }
            }
            return null;
        }

// 获取指定索引的文章URL
        function getArticleUrlByIndex(baseUrl, documentName, version, chapterId, articleIndex) {
            var articles = @json($articles);

            if (chapterId === null) {
                // 处理没有章节的情况
                if (articleIndex >= 0 && articleIndex < articles.length) {
                    var article = articles[articleIndex];
                    return `${baseUrl}/documents/${documentName}/${version}/articles/${article.slug}/${article.id}`;
                }
            } else {
                var chapterArticles = articles[chapterId];
                if (articleIndex >= 0 && articleIndex < chapterArticles.length) {
                    var article = chapterArticles[articleIndex];
                    return `${baseUrl}/documents/${documentName}/${version}/articles/${article.slug}/${article.id}`;
                }
            }
            return null;
        }

        window.goToPreviousArticle = function() {
            var currentArticleInfo = getCurrentArticleIndex();
            if (currentArticleInfo && currentArticleInfo.articleIndex > 0) {
                var prevArticleIndex = currentArticleInfo.articleIndex - 1;
                var prevUrl = getArticleUrlByIndex('{{ url("/") }}', '{{ $document->slug }}', '{{ $version->version_number }}', currentArticleInfo.chapterId, prevArticleIndex);
                if (prevUrl) {
                    location.href = prevUrl;
                }
            }
        }

        window.goToNextArticle = function() {
            var currentArticleInfo = getCurrentArticleIndex();
            if (currentArticleInfo) {
                var nextArticleIndex = currentArticleInfo.articleIndex + 1;
                var nextUrl = getArticleUrlByIndex('{{ url("/") }}', '{{ $document->slug }}', '{{ $version->version_number }}', currentArticleInfo.chapterId, nextArticleIndex);
                if (nextUrl) {
                    location.href = nextUrl;
                }
            }
        }


        window.scrollToTop = function() {
            $("html, body").animate({ scrollTop: 0 }, 500);
        }

    });
</script>
</body>
</html>
