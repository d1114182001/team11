<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EducationTableSeeder extends Seeder
{

        /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $districts = array(
            '新北市 New Taipei City', '臺北市 Taipei City', '桃園市 Taoyuan City', '基隆市 Keelung City',
            '新竹市 Hsinchu City', '宜蘭縣 Yilan County', '新竹縣 Hsinchu County', '臺中市 Taichung City',
            '苗栗縣 Miaoli County', '彰化縣 Changhua County', '南投縣 Nantou County', '雲林縣 Yunlin County',
            '臺南市 Tainan City', '高雄市 Kaohsiung City', '嘉義市 Chiayi City', '嘉義縣 Chiayi County',
            '屏東縣 Pingtung County', '澎湖縣 Penghu County', '臺東縣 Taitung County', '花蓮縣 Hualien County'
        );

        foreach ($districts as $district) {
            // 隨機生成資料
            $juniorHighBelowTotal = rand(8, 200);
            $juniorHighBelowPrimaryTotal = rand(2, 40);
            $juniorHighTotal = rand(6, 200);
            $seniorHighTotal = rand(35, 600);
            $juniorCollegeAboveTotal = rand(20, 1400);
            $juniorCollegeTotal = rand(5, 400);
            $universityTotal = rand(11, 700);
            $graduateSchoolTotal = rand(4, 200);
            $age15to19 = rand(4, 200);
            $age20to24 = rand(0, 13);
            $age25to29 = rand(4, 200);
            $age35to39 = rand(20, 1200);
            $age40to44 = rand(5, 25);
            $age45to49 = rand(6, 700);
            $age50to54 = rand(6, 700);
            $age55to59 = rand(5, 500);
            $age60to64 = rand(4, 300);
            $age30to34 = rand(6, 800);

            // 初始化總和變數
            $totalThousand = 0;
            $total15to24 = 0;
            $total25to44 = 0;
            $total45to64 = 0;

            // 計算各類年齡區段總和
            $totalThousand += $age15to19 + $age20to24 + $age25to29 + $age35to39 + $age40to44 +
                              $age45to49 + $age50to54 + $age55to59 + $age60to64;
            $total15to24 += $age15to19 + $age20to24;
            $total25to44 += $age25to29 + $age35to39 + $age30to34 + $age40to44;
            $total45to64 += $age45to49 + $age50to54 + $age55to59 + $age60to64;

            // 插入資料
            DB::table('education_of_employed')->insert([
                [
                    'district_or_region' => $district,
                    'total_thousand' => $totalThousand,
                    'junior_high_below_total' => $juniorHighBelowTotal,
                    'junior_high_below_primary_total' => $juniorHighBelowPrimaryTotal,
                    'junior_high_total' => $juniorHighTotal,
                    'senior_high_total' => $seniorHighTotal,
                    'junior_college_above_total' => $juniorCollegeAboveTotal,
                    'junior_college_total' => $juniorCollegeTotal,
                    'university_total' => $universityTotal,
                    'graduate_school_total' => $graduateSchoolTotal,
                    'age_15_24_total' => $total15to24,
                    'age_15_19' => $age15to19,
                    'age_20_24' => $age20to24,
                    'age_25_44_total' => $total25to44,
                    'age_25_29' => $age25to29,
                    'age_30_34' => $age30to34,
                    'age_35_39' => $age35to39,
                    'age_40_44' => $age40to44,
                    'age_45_64_total' => $total45to64,
                    'age_45_49' => $age45to49,
                    'age_50_54' => $age50to54,
                    'age_55_59' => $age55to59,
                    'age_60_64' => $age60to64,
                    'age_65_above_total' => rand(1, 200),
                ]
            ]);
        }
    }
}
