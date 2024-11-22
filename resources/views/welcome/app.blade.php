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



<div class="content">

    @include("welcome.header")
    <!-- SDG 4.1 -->
    <div class="sdg-section">
        <h3>SDG 4.1 免費中小學教育</h3>
        <p>在西元2030年以前，確保所有的男女學子都完成免費的、公平的以及高品質的小學與中學教育，得到有關且有效的學習成果。</p>
        <div class="sdg-detail">
            <ul>
                <li>確保每個孩子都能夠進入學校，並且獲得高品質的教育。</li>
                <li>消除任何形式的學習障礙，並提供平等的學習機會。</li>
                <li>加強學校基礎設施，提供足夠的教育資源以促進學習。</li>
            </ul>
        </div>
    </div>

    <!-- SDG 4.2 -->
    <div class="sdg-section">
        <h3>SDG 4.2 優質教育</h3>
        <p>在西元2030年以前，確保所有的孩童都能接受高品質的早期幼兒教育、照護，以及小學前教育，因而為小學的入學作好準備。</p>
        <div class="sdg-detail">
            <ul>
                <li>推動學前教育普及化，特別是對弱勢家庭的孩童。</li>
                <li>提供專業的早期教育師資培訓。</li>
                <li>強化家庭對學前教育的支持，建立家園合作的學習環境。</li>
            </ul>
        </div>
    </div>

    <!-- SDG 4.3 -->
    <div class="sdg-section">
        <h3>SDG 4.3 公平、負擔得起、技職及高品質的教育</h3>
        <p>在西元2030年以前，確保所有的男女都有公平、負擔得起、高品質的技職、職業與高等教育的受教機會，包括大學。</p>
        <div class="sdg-detail">
            <ul>
                <li>加強高等教育的普及，特別是職業教育與技術訓練。</li>
                <li>提供低收入家庭學生的獎學金與學費減免。</li>
                <li>促進學術與產業的合作，提供與市場需求相匹配的技能培訓。</li>
            </ul>
        </div>
    </div>

    <!-- SDG 4.4 -->
    <div class="sdg-section">
        <h3>SDG 4.4 新增擁有相關財務成功技能的人數</h3>
        <p>在西元2030年以前，將擁有相關就業、覓得好工作與企業管理職能的年輕人與成人的人數增加，包括技術與職業技能。</p>
        <div class="sdg-detail">
            <ul>
                <li>提供年輕人技術性職業訓練和職業技能發展。</li>
                <li>提供企業家教育，幫助年輕人創業。</li>
                <li>加強就業市場與教育機構的合作，確保學生所學技能符合市場需求。</li>
            </ul>
        </div>
    </div>

    <!-- SDG 4.5 -->
    <div class="sdg-section">
        <h3>SDG 4.5 消除教育中的一切歧視</h3>
        <p>在西元2030年以前，消除教育上的兩性不平等，確保弱勢族群有接受各階級教育的管道與職業訓練，包括身心障礙者、原住民以及弱勢孩童。</p>
        <div class="sdg-detail">
            <ul>
                <li>消除性別差距，確保所有女孩與男孩獲得平等的教育機會。</li>
                <li>提供適合不同需求的教育資源，保障弱勢群體的學習權益。</li>
                <li>推動社會支持性政策，改善教育平等與包容性。</li>
            </ul>
        </div>
    </div>
    
    <!-- SDG 4.6 -->
    <div class="sdg-section">
        <h3>SDG 4.6 識字比率及算數能力</h3>
        <p>在西元2030年以前，確保所有的年輕人以及很大比例的成人，無論男女，都具備讀寫以及算術能力。</p>
        <div class="sdg-detail">
            <ul>
                <li>提升年輕人和成人的基本讀寫能力，尤其是在低收入和偏遠地區。</li>
                <li>提供成人教育課程，特別是針對無法接受正規教育的群體。</li>
                <li>通過社區學習中心等方式，加強識字和數學的基礎教育。</li>
            </ul>
        </div>
    </div>
    
    <!-- SDG 4.7 -->
    <div class="sdg-section">
        <h3>SDG 4.7 永續發展與全球公民教育</h3>
        <p>在西元2030年以前，確保所有的學子都習得必要的知識與技能而可以促進永續發展，包括永續發展教育、永續生活模式、人權、性別平等、和平及非暴力提倡、全球公民、文化差異欣賞，以及文化對永續發展的貢獻。</p>
        <div class="sdg-detail">
            <ul>
                <li>推動永續發展教育，幫助學生理解環境保護和資源合理利用的重要性。</li>
                <li>加強全球公民意識，鼓勵學生參與國際合作和全球性議題。</li>
                <li>進行性別平等教育，消除性別歧視，促進社會包容。</li>
            </ul>
        </div>
    </div>
    
    <!-- SDG 4.A -->
    <div class="sdg-section">
        <h3>SDG 4.A 興建升級包容性、安全的學校</h3>
        <p>建立及提升適合孩童、身心障礙者以及兩性的教育設施，並為所有的人提供安全的、非暴力的、有教無類的、以及有效的學習環境。</p>
        <div class="sdg-detail">
            <ul>
                <li>建設無障礙設施，確保身心障礙者可以安全、舒適地接受教育。</li>
                <li>加強學校的安全管理，消除暴力和欺凌事件，提供心理健康支持。</li>
                <li>提升學校基礎設施，提供現代化的學習設施和數位教育工具。</li>
            </ul>
        </div>
    </div>
    
    <!-- SDG 4.B -->
    <div class="sdg-section">
        <h3>SDG 4.B 擴大對開發中國家的高等教育獎學金</h3>
        <p>在西元2020年以前，將全球開發中國家的獎學金數目增加，尤其是LDCs、SIDS與非洲國家，以提高高等教育的受教率，包括已開發國家與其他開發中國家的職業訓練、資訊與通信科技（以下簡稱ICT），技術的、工程的，以及科學課程。</p>
        <div class="sdg-detail">
            <ul>
                <li>增加發展中國家的學生赴國際學習的機會，提供更多的獎學金。</li>
                <li>支持來自發展中國家的學生進行職業訓練，並提高他們的ICT技能。</li>
                <li>促進科技、工程和數學等領域的教育，以應對未來全球需求。</li>
            </ul>
        </div>
    </div>
    
    <!-- SDG 4.C -->
    <div class="sdg-section">
        <h3>SDG 4.C 新增開發中國家合格教師的供給</h3>
        <p>在西元2030年以前，將合格師資人數增加，包括在開發中國家進行國際師資培訓合作，尤其是LDCs與SIDS。</p>
        <div class="sdg-detail">
            <ul>
                <li>通過國際合作，支持發展中國家提升師資質量，進行專業發展和培訓。</li>
                <li>提供更多的教師培訓機會，特別是在缺乏合格教師的地區。</li>
                <li>強化教育領域的基礎設施，支持教師的職業發展和教學資源。</li>
            </ul>
        </div>
    </div>

    @include("welcome.footer")
</div>