<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>访问密码</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #83a4d4, #b6fbff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            color: #343a40;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            position: relative;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .form-label {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .form-control {
            border-radius: 4px;
            border: 1px solid #ddd;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #999;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .btn {
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .alert {
            margin-top: 20px;
        }
        .firework {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            pointer-events: none;
        }
        .firework span {
            position: absolute;
            width: 3px;
            height: 3px;
            background: #ff0;
            border-radius: 50%;
            animation: firework 800ms linear infinite;
            opacity: 0;
        }
        @keyframes firework {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(10);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>{{ $document->name }} - 访问密码</h1>
    <form action="{{ route('documents.check-password', ['slug' => $document->slug]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label">请输入访问密码：</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif
        <button type="submit" class="btn">提交</button>
    </form>
</div>
<div class="firework" id="firework"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fireworkContainer = document.getElementById('firework');

        function createFirework() {
            const firework = document.createElement('span');
            const size = Math.random() * 5 + 5;
            const left = Math.random() * window.innerWidth;
            const top = Math.random() * window.innerHeight;

            firework.style.width = `${size}px`;
            firework.style.height = `${size}px`;
            firework.style.left = `${left}px`;
            firework.style.top = `${top}px`;
            firework.style.animationDuration = `${Math.random() * 800 + 400}ms`;

            fireworkContainer.appendChild(firework);

            setTimeout(() => {
                firework.remove();
            }, 1000);
        }

        setInterval(createFirework, 300);
    });
</script>
</body>
</html>
