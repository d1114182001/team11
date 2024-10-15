<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>可持續發展目標 (SDGs)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #007CBA;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background: #333;
            color: #fff;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        section {
            margin: 20px 0;
            padding: 10px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #007CBA;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>可持續發展目標 (SDGs)</h1>
        <img src="images/sdg_logo.png" alt="SDG Logo">
    </header>

    <nav>
        <ul>
            <li><a href="#goal1">目標 1: 消除貧窮</a></li>
            <li><a href="#goal2">目標 2: 消除饑餓</a></li>
            <li><a href="#goal3">目標 3: 確保健康生活</a></li>
            <li><a href="#goal4">目標 4: 提供優質教育</a></li>
            <li><a href="#goal5">目標 5: 性別平等</a></li>
            <li><a href="#goal6">目標 6: 清潔飲水與衛生設施</a></li>
            <!-- 添加更多目標 -->
        </ul>
    </nav>

    <main>
        <?php
        $goals = [
            1 => "消除貧窮: 確保所有人都能享有貧窮的消除和可持續的發展。",
            2 => "消除饑餓: 消除所有形式的饑餓，確保每個人都有足夠的食物。",
            3 => "確保健康生活: 確保健康生活，促進各年齡層的福祉。",
            4 => "提供優質教育: 確保包容和公平的優質教育，促進終身學習的機會。",
            5 => "性別平等: 實現性別平等，增強所有女性和女孩的權能。",
            6 => "清潔飲水與衛生設施: 確保人人能獲得水和衛生設施的可持續管理。",
            // 这里可以添加更多目标
        ];

        foreach ($goals as $num => $description) {
            echo "<section id='goal$num'>";
            echo "<h2>目標 $num: $description</h2>";
            echo "</section>";
        }
        ?>
    </main>

    <footer>
        <p>版權 &copy; 2024 可持續發展目標網站</p>
    </footer>
</body>
</html>
