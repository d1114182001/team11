<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #c9ebed;
        }
        header {
            background: linear-gradient(to right, #e92f2f, #d16e16);
            color: white;
            text-align: center;
            padding: 30px 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .content {
            padding: 40px 20px;
        }
        .sdg-section {
            background-color: #ffffff;
            margin: 20px 0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }
        .sdg-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        .sdg-section h3 {
            font-size: 1.8em;
            color: #e92f2f;
            font-weight: bold;
        }
        .sdg-section p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #333;
        }
        .sdg-section .sdg-detail {
            background-color: #f1f5f8;
            border-left: 5px solid #1a1244;
            padding-left: 20px;
            margin-top: 15px;
        }
        .sdg-section .sdg-detail ul {
            padding-left: 20px;
            color: #005c99;
        }
        .sdg-section .sdg-detail li {
            margin-bottom: 10px;
            font-size: 1.1em;
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
        .image-item {
            text-align: center;
            flex: 1;
            padding: 10px;
        }
        .image-item img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        .image-item img:hover {
            transform: scale(1.1);
        }
        .image-row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 40px 0;
            background-color: #e92f2f;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .image-item h3 {
            color: #ffffff; /* 將文字顏色設置為白色 */
            font-size: 1.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* 添加陰影增強可讀性 */
            margin: 10px 0;
        }
        .related-links {
            background: linear-gradient(135deg, #e6e6e6, #f5f5f5);
            padding: 30px;
            margin-top: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .related-links:hover {
            transform: scale(1.02);
        }

        .related-links h3 {
            font-size: 2em;
            color: #d14545;
            margin-bottom: 25px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .related-links ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .related-links ul li {
            margin: 15px 0;
            font-size: 1.2em;
        }

        .related-links ul li a {
            color: #0073e6;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            padding-bottom: 5px;
            transition: color 0.3s ease, border-bottom 0.3s ease;
            border-bottom: 2px solid transparent;
        }

        .related-links ul li a:hover {
            color: #d14545;
            border-bottom: 2px solid #d14545;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        }
        .image-item p {
            color: white;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>


<body>



    @include("template.welcomeheader")
    
    <div class="content">
        @yield('content')
    </div>


    @include("template.welcomefooter")


</body>


</html>
