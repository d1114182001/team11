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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }



    /* 定义基本的表格样式 */
    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
    }

    th, td {
        padding: 8px;
        text-align: center;
        border: 1px solid #ddd;
        padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 1.1rem;
    }

    /* 为不同区域设置背景颜色 */
    .basic-info {
        background-color: #f1fabf; /* 浅灰色背景 */
    }

    .tital-info {
        background-color: rgb(240, 58, 58); /* 浅灰色背景 */
        color: #ffffff
    }

    .basic-info2 {
        background-color: #b1d694e4; /* 浅灰色背景 */
    }

    .age-data {
        background-color: #fac8a5; /* 浅蓝色背景 */
    }

    .age-group {
        background-color: #fff3e0; /* 浅橙色背景 */
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




    .form-group label {
        font-size: 1.1rem;
        font-weight: bold;
        color: #555;
        margin-right: 1rem; /* 标签与输入框之间的间距 */
        width: 150px; /* 设置所有标签的宽度，使其对齐 */
    }

    .form-group {
        margin-bottom: 1rem;
        position: relative;
        display: flex; /* 使用flex布局让文字与输入框并排 */
        align-items: center; /* 垂直居中对齐文字和输入框 */
    }

    .form-control {
        width: auto;  /* 调整宽度以适应内容 */
        padding: 0.5rem 1rem;  /* 减少输入框的内边距，使其不占太大空间 */
        font-size: 1rem;
        border-radius: 4px;
        border: 1px solid #ccc;
        background-color: #fff;
    }

    .form-control::placeholder {
        color: #888;
        font-style: italic;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        padding: 0.4rem 0.8rem; /* 减少内边距，按钮变小 */
        font-size: 0.9rem; /* 减小字体大小 */
        border-radius: 4px;
        width: auto; /* 根据内容自适应宽度 */
        cursor: pointer;
        display: inline-block; /* 确保按钮不会占满整个行 */
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .age-data15_24{
        background-color: #facda5
    }

    .age-data25_44{
        background-color: #fadfa5
    }

    .age-data45_64{
        background-color: #faeda5
    }

    .age-data64{
        background-color: #bfe05c
    }
    .basic-data {
        background-color: #f5e1e1; /* 浅灰色背景 */
    }

    .basic-data, .age-data15_24, .age-data25_44, .age-data45_64, .age-data64 {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }


    </style>
</head>
<body>


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