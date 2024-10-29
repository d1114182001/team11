<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        DB::table('education_of_employed')->insert([
            [
                'district_or_region' => '臺灣地區 Taiwan Area',
                'total_thousand' => 11528,
                'junior_high_below_total' => 1487,
                'junior_high_below_primary_total' => 447,
                'junior_high_total' => 1040,
                'senior_high_total' => 3503,
                'junior_college_above_total' => 6538,
                'junior_college_total' => 1680,
                'university_total' => 3702,
                'graduate_school_total' => 1156,
                'age_15_24_total' => 735,
                'age_15_19' => 85,
                'age_20_24' => 650,
                'age_25_44_total' => 5793,
                'age_25_29' => 1296,
                'age_30_34' => 1382,
                'age_35_39' => 1431,
                'age_40_44' => 1684,
                'age_45_64_total' => 4589,
                'age_45_49' => 1529,
                'age_50_54' => 1323,
                'age_55_59' => 1050,
                'age_60_64' => 688,
                'age_65_above_total' => 410,
            ],
            [
                'district_or_region' => '北部地區 Northern Region',
                'total_thousand' => 5229,
                'junior_high_below_total' => 451,
                'junior_high_below_primary_total' => 95,
                'junior_high_total' => 356,
                'senior_high_total' => 1421,
                'junior_college_above_total' => 3357,
                'junior_college_total' => 827,
                'university_total' => 1903,
                'graduate_school_total' => 627,
                'age_15_24_total' => 320,
                'age_15_19' => 36,
                'age_20_24' => 284,
                'age_25_44_total' => 2700,
                'age_25_29' => 591,
                'age_30_34' => 642,
                'age_35_39' => 676,
                'age_40_44' => 791,
                'age_45_64_total' => 2070,
                'age_45_49' => 715,
                'age_50_54' => 604,
                'age_55_59' => 465,
                'age_60_64' => 286,
                'age_65_above_total' => 139,
            ],

        ]);
    }*/
    public function run()
    {
        $districts = array('新北市 New Taipei City', '臺北市 Taipei City', '桃園市 Taoyuan City', '基隆市 Keelung City', '新竹市 Hsinchu City', '宜蘭縣 Yilan County', '新竹縣 Hsinchu County',  '臺中市 Taichung City', '苗栗縣 Miaoli County', '彰化縣 Changhua County', '南投縣 Nantou County', '雲林縣 Yunlin County' ,'臺南市 Tainan City', '高雄市 Kaohsiung City', '嘉義市 Chiayi City', '嘉義縣 Chiayi County', '屏東縣 Pingtung County', '澎湖縣 Penghu County','臺東縣 Taitung County', '花蓮縣 Hualien County');
        
        $total_thousand = 0;

        foreach ($districts as $district) {
            $junior_high_below_total = rand(8,200 );
            $junior_high_below_primary_total = rand(2, 40);
            $junior_high_total = rand(6, 200);
            $senior_high_total = rand(35, 600);
            $junior_college_above_total = rand(20, 1400);
            $junior_college_total = rand(5, 400);
            $university_total = rand(11, 700);
            $graduate_school_total = rand(4, 200);
            $age_15_19 = rand(4, 200);
            $age_20_24 = rand(0, 13);
            $age_25_29 = rand(4, 200);
            $age_35_39 = rand(20, 1200);
            $age_40_44 = rand(5, 25);
            $age_45_49 = rand(1, 25);
            $age_50_54 = rand(1, 25);
            $age_55_59 = rand(1, 25);
            $age_60_64 = rand(1, 25);
    
            // 計算 total_thousand
            $total_thousand += $age_15_19 + $age_20_24 +
                               $age_25_29 + $age_35_39 + $age_40_44 + $age_45_49 + $age_50_54 + $age_55_59 +
                               $age_60_64;
    
            // 插入資料
            DB::table('education_of_employed')->insert([
                [
                    'district_or_region' => $district,
                    'total_thousand' => $total_thousand,
                    'junior_high_below_total' => $junior_high_below_total,
                    'junior_high_below_primary_total' => $junior_high_below_primary_total,
                    'junior_high_total' => $junior_high_total,
                    'senior_high_total' => $senior_high_total,
                    'junior_college_above_total' => $junior_college_above_total,
                    'junior_college_total' => $junior_college_total,
                    'university_total' => $university_total,
                    'graduate_school_total' => $graduate_school_total,
                    'age_15_24_total' => 0, // 這部分可以根據需要調整
                    'age_15_19' => $age_15_19,
                    'age_20_24' => $age_20_24,
                    'age_25_44_total' => 5793, // 這部分可以根據需要調整
                    'age_25_29' => $age_25_29,
                    'age_30_34' => rand(1, 25), // 或你可以計算
                    'age_35_39' => $age_35_39,
                    'age_40_44' => $age_40_44,
                    'age_45_64_total' => 4589, // 這部分可以根據需要調整
                    'age_45_49' => $age_45_49,
                    'age_50_54' => $age_50_54,
                    'age_55_59' => $age_55_59,
                    'age_60_64' => $age_60_64,
                    'age_65_above_total' => 410, // 這部分可以根據需要調整
                ],
            ]);

        }
    }
}
