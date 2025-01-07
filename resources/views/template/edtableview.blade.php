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
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">登出頁面</a>
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