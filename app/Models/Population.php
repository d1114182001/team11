<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    protected $fillable=[
            'region',
            'total',
            'edu_jr_high_below_total',
            'edu_primary_below',
            'edu_jr_high',
            'edu_senior_high_voc',
            'edu_college_above_total',
            'edu_junior_college',
            'edu_university',
            'edu_grad_school',
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
            'age_65_above',
    ];
    protected $table ="populations_educations";
}
