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
            padding: 10px; /* 添加边距 */
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
            margin: 0 auto; /* 居中图片 */
        }
        .document-card-body {
            width: 189.594px;
            height: 147.984px;
            padding: 10px;
            margin: 0 auto; /* 居中信息块 */
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
            right: 20px;
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
        .toggle-theme {
            position: absolute;
            left: 20px;
            top: 20px;
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #2196F3;
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        .dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }
        .dark-mode .document-card {
            background-color: #1e1e1e;
            border-color: #444;
        }
        .dark-mode .divider {
            background-color: #444;
        }
        .dark-mode .divider-light {
            background-color: rgba(255, 255, 255, 0.8);
        }
        .dark-mode .search-bar input {
            background-color: #333;
            color: #e0e0e0;
            border-color: #555;
        }
        .dark-mode .search-bar button {
            background-color: #333;
            border-color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>文档列表</h1>
    </div>
    <div class="toggle-theme">
        <label class="switch">
            <input type="checkbox" id="toggle-theme">
            <span class="slider"></span>
        </label>
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
                    <h5>{{ $document->name }}</h5>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleSwitch = document.getElementById("toggle-theme");
        const body = document.body;

        // 检查本地存储中的主题设置
        if (localStorage.getItem("theme") === "dark") {
            body.classList.add("dark-mode");
            toggleSwitch.checked = true;
        }

        toggleSwitch.addEventListener("change", function() {
            body.classList.toggle("dark-mode");

            // 保存用户的主题设置到本地存储
            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.removeItem("theme");
            }
        });
    });
</script>
</body>
</html>
