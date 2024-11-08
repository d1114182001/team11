<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopulationEducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        for ($i=0; $i<20; $i++)
        {
            $Distrits = array(
                '新北市 New Taipei City',
                '臺北市 Taipei City',
                '桃園市 Taoyuan City',
                '基隆市 Keelung City',
                '新竹市 Hsinchu City',
                '宜蘭縣 Yilan County',
                '新竹縣 Hsinchu County',
                '臺中市 Taichung City',
                '苗栗縣 Miaoli County',
                '彰化縣 Changhua County',
                '南投縣 Nantou County',
                '雲林縣 Yunlin County',
                '臺南市 Tainan City',
                '高雄市 Kaohsiung City',
                '嘉義市 Chiayi City',
                '嘉義縣 Chiayi County',
                '屏東縣 Pingtung County',
                '澎湖縣 Penghu County',
                '臺東縣 Taitung County',
                '花蓮縣 Hualien County'
            );
            $distrits = $Distrits[$i];
            $edu_jr_high = rand(1, 200);
            $edu_primary_below = rand(0, 80);
            $edu_jr_high_below_total =$edu_jr_high+$edu_primary_below;

            $edu_junior_college= rand(5,370);
            $edu_university= rand(10,700);
            $edu_grad_school= rand(10,250);
            $edu_college_above_total=$edu_junior_college+$edu_university+$edu_grad_school;

            $age_15_19 = rand(1,100);
            $age_20_24 = rand(1,110);
            $age_15_24_total = $age_15_19+$age_20_24;

            $age_25_29= rand(5,230);
            $age_30_34= rand(5,250);
            $age_35_39= rand(6,250);
            $age_40_44= rand(6,310);
            $age_25_44_total =  $age_25_29 + $age_30_34 + $age_35_39 + $age_40_44;

            $age_45_49=rand(6,280);
            $age_50_54=rand(6,238);
            $age_55_59=rand(4,180);
            $age_60_64=rand(4,110);
            $age_45_64_total = $age_45_49+$age_50_54+$age_55_59+$age_60_64;
            $age_65_above=rand(1,50);
            $total=$age_15_24_total+$age_25_44_total+$age_45_64_total+$age_65_above;
            DB::table('populations_educations')->insert([
                'region' => $distrits,
                'total' =>$total,
                'edu_jr_high_below_total' => $edu_jr_high_below_total,
                'edu_primary_below' => $edu_primary_below,
                'edu_jr_high' =>$edu_jr_high,
                'edu_senior_high_voc' => rand(50,1100),

                'edu_college_above_total'=> $edu_college_above_total,
                'edu_junior_college'=> $edu_junior_college,
                'edu_university'=> $edu_university,
                'edu_grad_school'=> $edu_grad_school,
                
                'age_15_24_total' =>$age_15_24_total,
                'age_15_19' => $age_15_19,
                'age_20_24' => $age_20_24,
                
                'age_25_44_total' => $age_25_44_total,
                'age_25_29'=>$age_25_29,
                'age_30_34'=>$age_30_34,
                'age_35_39'=>$age_35_39,
                'age_40_44'=>$age_40_44,

                'age_45_64_total' => $age_45_64_total,
                'age_45_49'=>$age_45_49,
                'age_50_54'=>$age_50_54,
                'age_55_59'=>$age_55_59,
                'age_60_64'=>$age_60_64,
                'age_65_above'=>$age_65_above,
                
                
            ]);
        }
    }
}
