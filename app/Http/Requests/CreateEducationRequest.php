<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEducationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'district_or_region' => 'required|string|max:255',
            'junior_high_below_total' => 'required|integer|min:0',
            'junior_high_below_primary_total' => 'required|integer|min:0',
            'junior_high_total' => 'required|integer|min:0',
            'senior_high_total' => 'required|integer|min:0',
            'junior_college_above_total' => 'required|integer|min:0',
            'junior_college_total' => 'required|integer|min:0',
            'university_total' => 'required|integer|min:0',
            'graduate_school_total' => 'required|integer|min:0',
    
            'age_15_19' => 'required|integer|min:0',
            'age_20_24' => 'required|integer|min:0',
            'age_25_29' => 'required|integer|min:0',
            'age_30_34' => 'required|integer|min:0',
            'age_35_39' => 'required|integer|min:0',
            'age_40_44' => 'required|integer|min:0',
            'age_45_49' => 'required|integer|min:0',
            'age_50_54' => 'required|integer|min:0',
            'age_55_59' => 'required|integer|min:0',
            'age_60_64' => 'required|integer|min:0',
    
            'age_65_above_total' => 'required|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'district_or_region.required' => '地區別為必填欄位。',
            'district_or_region.string' => '地區別必須是字符串。',
            'district_or_region.max' => '地區別的長度不能超過255個字符。',
            
            'junior_high_below_total.required' => '國中及以下合計 (千人) 為必填欄位。',
            'junior_high_below_total.integer' => '國中及以下合計 (千人) 必須是整數。',
            'junior_high_below_total.min' => '國中及以下合計 (千人) 必須大於0。',
            
            'junior_high_below_primary_total.required' => '國小及以下 (千人) 為必填欄位。',
            'junior_high_below_primary_total.integer' => '國小及以下 (千人) 必須是整數。',
            'junior_high_below_primary_total.min' => '國小及以下 (千人) 必須大於0。',
            
            'junior_high_total.required' => '國中 (千人) 為必填欄位。',
            'junior_high_total.integer' => '國中 (千人) 必須是整數。',
            'junior_high_total.min' => '國中 (千人) 必須大於0。',
            
            'senior_high_total.required' => '高級中等 (千人) 為必填欄位。',
            'senior_high_total.integer' => '高級中等 (千人) 必須是整數。',
            'senior_high_total.min' => '高級中等 (千人) 必須大於0。',
            
            'junior_college_above_total.required' => '大專及以上合計 (千人) 為必填欄位。',
            'junior_college_above_total.integer' => '大專及以上合計 (千人) 必須是整數。',
            'junior_college_above_total.min' => '大專及以上合計 (千人) 必須大於0。',
            
            'junior_college_total.required' => '專科 (千人) 為必填欄位。',
            'junior_college_total.integer' => '專科 (千人) 必須是整數。',
            'junior_college_total.min' => '專科 (千人) 必須大於0。',
            
            'university_total.required' => '大學 (千人) 為必填欄位。',
            'university_total.integer' => '大學 (千人) 必須是整數。',
            'university_total.min' => '大學 (千人) 必須大於0。',
            
            'graduate_school_total.required' => '研究所 (千人) 為必填欄位。',
            'graduate_school_total.integer' => '研究所 (千人) 必須是整數。',
            'graduate_school_total.min' => '研究所 (千人) 必須大於0。',
            
            'age_15_19.required' => '15-19歲 (千人) 為必填欄位。',
            'age_15_19.integer' => '15-19歲 (千人) 必須是整數。',
            'age_15_19.min' => '15-19歲 (千人) 必須大於0。',
            
            'age_20_24.required' => '20-24歲 (千人) 為必填欄位。',
            'age_20_24.integer' => '20-24歲 (千人) 必須是整數。',
            'age_20_24.min' => '20-24歲 (千人) 必須大於0。',
            
            'age_25_29.required' => '25-29歲 (千人) 為必填欄位。',
            'age_25_29.integer' => '25-29歲 (千人) 必須是整數。',
            'age_25_29.min' => '25-29歲 (千人) 必須大於0。',
            
            'age_30_34.required' => '30-34歲 (千人) 為必填欄位。',
            'age_30_34.integer' => '30-34歲 (千人) 必須是整數。',
            'age_30_34.min' => '30-34歲 (千人) 必須大於0。',
            
            'age_35_39.required' => '35-39歲 (千人) 為必填欄位。',
            'age_35_39.integer' => '35-39歲 (千人) 必須是整數。',
            'age_35_39.min' => '35-39歲 (千人) 必須大於0。',
            
            'age_40_44.required' => '40-44歲 (千人) 為必填欄位。',
            'age_40_44.integer' => '40-44歲 (千人) 必須是整數。',
            'age_40_44.min' => '40-44歲 (千人) 必須大於0。',
            
            'age_45_49.required' => '45-49歲 (千人) 為必填欄位。',
            'age_45_49.integer' => '45-49歲 (千人) 必須是整數。',
            'age_45_49.min' => '45-49歲 (千人) 必須大於0。',
            
            'age_50_54.required' => '50-54歲 (千人) 為必填欄位。',
            'age_50_54.integer' => '50-54歲 (千人) 必須是整數。',
            'age_50_54.min' => '50-54歲 (千人) 必須大於0。',
            
            'age_55_59.required' => '55-59歲 (千人) 為必填欄位。',
            'age_55_59.integer' => '55-59歲 (千人) 必須是整數。',
            'age_55_59.min' => '55-59歲 (千人) 必須大於0。',
            
            'age_60_64.required' => '60-64歲 (千人) 為必填欄位。',
            'age_60_64.integer' => '60-64歲 (千人) 必須是整數。',
            'age_60_64.min' => '60-64歲 (千人) 必須大於0。',
            
            'age_65_above_total.required' => '年齡 65歲及以上 (千人) 為必填欄位。',
            'age_65_above_total.integer' => '年齡 65歲及以上 (千人) 必須是整數。',
            'age_65_above_total.min' => '年齡 65歲及以上 (千人) 必須大於0。',
        ];
    }
}
