<div class="toggle-theme">
    <label class="switch">
        <input type="checkbox" id="toggle-theme">
        <span class="slider"></span>
    </label>
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

        // 初始状态透明
        const themeSwitchDiv = document.querySelector('.toggle-theme');
        themeSwitchDiv.style.opacity = 0.5;
        themeSwitchDiv.style.transition = 'opacity 0.3s';

        // 鼠标悬停时不透明
        themeSwitchDiv.addEventListener('mouseenter', function() {
            themeSwitchDiv.style.opacity = 1;
        });

        // 鼠标离开时透明
        themeSwitchDiv.addEventListener('mouseleave', function() {
            themeSwitchDiv.style.opacity = 0.5;
        });
    });
</script>

<style>
    .toggle-theme {
        position: fixed;
        right: 20px;
        top: 1%;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.5); /* 半透明背景 */
        padding: 10px;
        border-radius: 50px;
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
    .dark-mode .container {
        background-color: #1e1e1e;
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
