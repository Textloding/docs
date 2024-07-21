<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文档列表</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 40px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .document-card {
            width: 217.594px;
            height: 404.578px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin: 10px;
            transition: box-shadow 0.3s ease;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            padding: 10px;
            background-color: #fff;
        }
        .document-card:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .document-card img {
            width: 197.594px;
            height: 197.594px;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }
        .document-card-body {
            width: 189.594px;
            height: 147.984px;
            padding: 10px;
            margin: 0 auto;
            box-sizing: border-box;
            text-align: center;
        }
        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 10px 0;
        }
        .divider-light {
            height: 1px;
            background-color: rgba(0, 0, 0, 0.8);
            margin: 15px 0;
        }
        .default-image {
            width: 197.594px;
            height: 197.594px;
            background-color: grey;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        .document-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .search-bar {
            position: absolute;
            left: 20px;
            top: 20px;
            width: 250px;
        }
        .search-bar input {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
        .search-bar button {
            margin-top: 10px;
            width: 100%;
        }

        .secret-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            /*opacity: 0;*/
        }
        .toggle-visibility-btn {
            position: fixed;
            bottom: 80px;
            right: 20px;
            display: none;
            z-index: 1000;
        }
        /*//避免标题过长影响显示*/
        .document-card-body h8 {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            width: 100%;
        }

    </style>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
@include('includes.theme-switch') <!-- 引入主题开关 -->
<div class="container">
    <div class="header">
        <h1>文档列表</h1>
    </div>
    <div class="search-bar">
        <form action="{{ route('documents.index') }}" method="GET">
            <input type="text" name="search" placeholder="模糊搜索文档名..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary mt-2">搜索</button>
        </form>
    </div>
    <div class="document-container">
        @foreach($documents as $document)
            @php
                $latestVersion = $document->versions->first();
            @endphp
            <div class="document-card">
                <a href="{{ route('documents.show', ['slug' => $document->slug, 'version' => $latestVersion->version_number ?? null]) }}">
                    @if($document->cover_image_url)
                        <img src="{{ $document->cover_image_url }}" alt="{{ $document->name }}">
                    @else
                        <div class="default-image">暂无</div>
                    @endif
                </a>
                <div class="divider"></div>
                <div class="document-card-body">
                    <h8 data-toggle="tooltip" title="{{ $document->name }}">{{ $document->name }}</h8>
                    <div class="divider-light"></div>
                    @if($document->versions->isNotEmpty())
                        <p><strong>最新版本:</strong> {{ $latestVersion->version_number }}</p>
                    @else
                        <p><strong>最新版本:</strong> 无</p>
                    @endif
                    <p><strong>文章数:</strong> {{ $document->article_count }}</p>
                    <p><strong>总字数:</strong> {{ $document->word_count }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $documents->links() }}
    </div>
</div>
<button class="secret-btn" onclick="location.href='{{ route('password.verify', ['slug' => 'admin']) }}'">🔒</button>
<button class="btn btn-secondary toggle-visibility-btn" onclick="location.href='{{ route('documents.index', ['is_public' => $isPublic ? 0 : 1]) }}'">
    {{ $isPublic ? '显示私有文档' : '显示公共文档' }}
</button>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    document.addEventListener("DOMContentLoaded", function() {

        // 隐秘按钮的触发键盘组合
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.altKey && e.key === 'A') {
                document.querySelector('.secret-btn').click();
            }
        });

        // 显示切换私有/公有文档按钮
        const toggleVisibilityBtn = document.querySelector('.toggle-visibility-btn');
        const isAuthenticated = '{{ session("admin_authenticated") }}';
        if (isAuthenticated) {
            toggleVisibilityBtn.style.display = 'block';
        }
    });
</script>
</body>
</html>
