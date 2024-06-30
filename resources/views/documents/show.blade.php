<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $document->name }}</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        .container {
            margin-top: 40px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .document-info {
            display: grid;
            grid-template-columns: 300px 1fr;
            grid-gap: 20px;
            align-items: start;
            margin-bottom: 20px;
        }
        .document-cover {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .default-image {
            width: 100%;
            height: 300px;
            background-color: grey;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .document-details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .document-title {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .document-description {
            margin-top: 10px;
        }
        .version-select-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .version-select {
            width: 200px;
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
            background-color: #fff;
            transition: all 0.3s ease;
            margin-left: 10px;
        }
        .version-select:hover {
            border-color: #bbb;
        }
        .version-select:focus {
            border-color: #999;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .icon {
            margin-right: 5px;
        }
        .articles-list {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
        }

        .article-link {
            padding: 5px 10px;
            margin: 5px 0;
            background-color: #f9f9f9;
            border-radius: 4px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .article-link:hover {
            background-color: #e2e2e2;
            color: #000;
        }

        .chapter {
            margin-top: 20px;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .chapter-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .article-title {
            margin-left: 20px;
        }
        .fade-out {
            opacity: 0;
            transition: opacity 0.5s;
        }
        .fade-in {
            opacity: 1;
            transition: opacity 0.5s;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="document-info">
        @if($document->cover_image_url)
            <img src="{{ $document->cover_image_url }}" alt="{{ $document->name }}" class="document-cover">
        @else
            <div class="default-image">暂无</div>
        @endif
        <div class="document-details">
            <div class="document-title">
                <h1>{{ $document->name }}</h1>
            </div>
            <div class="version-select-container">
                <span class="icon">📄</span>
                <select class="version-select" onchange="location.href='{{ url('documents/' . $document->slug) }}/' + this.value">
                    @foreach($document->versions as $v)
                        <option value="{{ $v->version_number }}" {{ $v->id == $version->id ? 'selected' : '' }}>{{ $v->version_number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="document-description">
                <p>{{ $document->description }}</p>
            </div>
        </div>
    </div>
    <div class="articles">
        @if($document->has_chapters)
            @foreach($chapters as $chapter)  <!-- 使用排序后的章节 -->
            <div class="chapter">
                <div class="chapter-title">第{{ $chapter->order }}章: {{ $chapter->title }}</div>
                <div class="articles-list">
                    @if(isset($articles[$chapter->id]) && $articles[$chapter->id]->isNotEmpty())
                        @foreach($articles[$chapter->id] as $article)
                            <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $article->slug, 'article_id' => $article->id]) }}" class="article-link">{{ $chapter->order }}.{{ $article->order }} {{ $article->title }}</a>
                        @endforeach
                    @else
                        <div class="article-title">暂无文章</div>
                    @endif
                </div>
            </div>
            @endforeach
        @else
            <div class="articles-list">
                @foreach($articles as $article)
                    <a href="{{ route('articles.show', ['document_slug' => $document->slug, 'version' => $version->version_number, 'article_slug' => $article->slug, 'article_id' => $article->id]) }}" class="article-link">{{ $article->order }} {{ $article->title }}</a>
                @endforeach
            </div>
        @endif
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const body = document.body;

        // 页面切换过渡动画
        document.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                body.classList.add('fade-out');
                setTimeout(() => {
                    window.location.href = link.href;
                }, 500);
            });
        });

        // 检查本地存储中的主题设置
        if (localStorage.getItem("theme") === "dark") {
            body.classList.add("dark-mode");
        }

        // 页面加载过渡动画
        body.classList.add('fade-in');
    });
</script>
</body>
</html>
