<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '工作者的教育程度')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d0f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        /* 橫幅圖片容器 */
        .banner {
            width: 100%;
            height: 200px;
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .banner img {
            width: 100%;
            height: 160%;
            margin-top: 40px;
        }
        h1 {
            color: #200f6b;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin: 0 auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #ff7a7a;
            color: #000000;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #e4f5fa;
        }
        tr:hover {
            background-color: #f0efd0;
        }
        .cta-btn {
            background-color: #ff0000;
            color: rgb(255, 255, 255);
            padding: 15px 40px;
            border: none;
            font-size: 1.3em;
            cursor: pointer;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
            display: block;
            margin: 40px auto;
        }
        .cta-btn:hover {
            background-color: #e60000;
            transform: scale(1.05);
        }

        a {
            color: #124296; /* 链接颜色 */
            text-decoration: none; /* 去掉下划线 */
            font-weight: bold; /* 加粗文字 */
        }

        a:hover {
            color: #fff; /* 悬停时文字颜色变白 */
            background-color: #071e62; /* 悬停时背景颜色 */
            border-radius: 5px; /* 圆角效果 */
        }
        .cta-btn2 {
            background-color: #041f51;
            color: #f8f8ff;
            padding: 10px 20px; /* 缩小按钮的内边距 */
            border: none;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
            display: inline-block;
            max-width: 200px; /* 限制按钮最大宽度 */
            text-overflow: ellipsis; /* 长文本溢出时显示省略号 */
            white-space: nowrap; /* 防止文本换行 */
            overflow: hidden; /* 隐藏溢出的文本 */
        }

        .cta-btn:hover {
            background-color: #e60000;
            transform: scale(1.05);
        }
        .cta-btn3 {
    background: linear-gradient(145deg, #3f5efb, #fc466b); /* 渐变背景色 */
    color: #fff;
    padding: 12px 28px;  /* 调整按钮内边距 */
    border: none;
    font-size: 1.2em; /* 稍微增大字体 */
    cursor: pointer;
    border-radius: 50px; /* 圆角更大 */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* 阴影效果 */
    transition: all 0.3s ease-in-out;
    display: inline-block;
    max-width: 250px; /* 增大按钮宽度限制 */
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    text-align: center; /* 确保文本居中 */
    text-decoration: none; /* 去掉默认链接下划线 */
    font-weight: bold; /* 增加文本加粗 */

    position: fixed; /* 固定按钮位置 */
    top: 20px; /* 设置按钮距离页面顶部的距离 */
    right: 20px; /* 设置按钮距离页面右边的距离 */
    z-index: 1000; /* 确保按钮在页面上层显示 */
}

.cta-btn3:hover {
    transform: scale(1.05); /* 鼠标悬停时放大效果 */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* 鼠标悬停时阴影增大 */
    background: linear-gradient(145deg, #fc466b, #3f5efb); /* 鼠标悬停时反转渐变色 */
}
    </style>
</head>
<body>



    @if (!auth()->check())
    <script>
        window.location.href = "{{ route('login') }}";
    </script>
    @endif

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="cta-btn3">登出</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif


    <!-- 引入头部 -->
    @include('template.edtableheader')

    <h1>@yield('viewtital','請輸入')</h1>

    <div class="container">
        @yield('content')  <!-- 这里是页面特定内容 -->
    </div>

    <!-- 引入底部 -->
    @include('template.edtablefooter')

</body>
</html>