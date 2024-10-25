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
    public function run()
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
    }
}
