<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationModels extends Model
{
    use HasFactory;

    protected $table = "education_of_employed";

    protected $fillable = [
        'district_or_region',
        'total_thousand',
        'junior_high_below_total',
        'junior_high_below_primary_total',
        'junior_high_total',
        'senior_high_total',
        'junior_college_above_total',
        'junior_college_total',
        'university_total',
        'graduate_school_total',
        'age_15_24_total',
        'age_15_19',
        'age_20_24',
        'age_25_44_total',
        'age_25_29',
        'age_30_34',
        'age_35_39',
        'age_40_44',
        'age_45_64_total',
        'age_45_49',
        'age_50_54',
        'age_55_59',
        'age_60_64',
        'age_65_above_total',
    ];
}
