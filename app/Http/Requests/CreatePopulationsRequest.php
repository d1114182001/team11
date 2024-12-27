<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreatePopulationsRequest extends FormRequest
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
            'region' => 'required|string|max:255',
            'total' => 'required|numeric|min:0',
            'edu_jr_high_below_total' => 'required|numeric|min:0',
            'edu_primary_below' => 'required|numeric|min:0',
            'edu_jr_high' => 'required|numeric|min:0',
            'edu_senior_high_voc' => 'required|numeric|min:0',
            'edu_college_above_total' => 'required|numeric|min:0',
            'edu_junior_college' => 'required|numeric|min:0',
            'edu_university' => 'required|numeric|min:0',
            'edu_grad_school' => 'required|numeric|min:0',
            'age_15_24_total' => 'required|numeric|min:0',
            'age_15_19' => 'required|numeric|min:0',
            'age_20_24' => 'required|numeric|min:0',
            'age_25_44_total' => 'required|numeric|min:0',
            'age_25_29' => 'required|numeric|min:0',
            'age_30_34' => 'required|numeric|min:0',
            'age_35_39' => 'required|numeric|min:0',
            'age_40_44' => 'required|numeric|min:0',
            'age_45_64_total' => 'required|numeric|min:0',
            'age_45_49' => 'required|numeric|min:0',
            'age_50_54' => 'required|numeric|min:0',
            'age_55_59' => 'required|numeric|min:0',
            'age_60_64' => 'required|numeric|min:0',
            'age_65_above' => 'required|numeric|min:0',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'region.required' => '區域名稱是必填的。',
            'region.string' => '區域名稱必須是字串。',
            'region.max' => '區域名稱不能超過 255 個字元。',
            'total.required' => '總人口數是必填的。',
            'total.numeric' => '總人口數必須是數字。',
            'total.min' => '總人口數不能小於 0。',
            'edu_jr_high_below_total.required' => '初中以下總人口數是必填的。',
            'edu_jr_high_below_total.numeric' => '初中以下總人口數必須是數字。',
            'edu_jr_high_below_total.min' => '初中以下總人口數不能小於 0。',
            'edu_primary_below.required' => '小學及以下人口數是必填的。',
            'edu_primary_below.numeric' => '小學及以下人口數必須是數字。',
            'edu_primary_below.min' => '小學及以下人口數不能小於 0。',
            'edu_jr_high.required' => '初中人口數是必填的。',
            'edu_jr_high.numeric' => '初中人口數必須是數字。',
            'edu_jr_high.min' => '初中人口數不能小於 0。',
            'edu_senior_high_voc.required' => '高中及職業高中人口數是必填的。',
            'edu_senior_high_voc.numeric' => '高中及職業高中人口數必須是數字。',
            'edu_senior_high_voc.min' => '高中及職業高中人口數不能小於 0。',
            'edu_college_above_total.required' => '大學及以上人口數是必填的。',
            'edu_college_above_total.numeric' => '大學及以上人口數必須是數字。',
            'edu_college_above_total.min' => '大學及以上人口數不能小於 0。',
            'edu_junior_college.required' => '大專人口數是必填的。',
            'edu_junior_college.numeric' => '大專人口數必須是數字。',
            'edu_junior_college.min' => '大專人口數不能小於 0。',
            'edu_university.required' => '大學人口數是必填的。',
            'edu_university.numeric' => '大學人口數必須是數字。',
            'edu_university.min' => '大學人口數不能小於 0。',
            'edu_grad_school.required' => '研究所人口數是必填的。',
            'edu_grad_school.numeric' => '研究所人口數必須是數字。',
            'edu_grad_school.min' => '研究所人口數不能小於 0。',
            'age_15_24_total.required' => '15至24歲總人口數是必填的。',
            'age_15_24_total.numeric' => '15至24歲總人口數必須是數字。',
            'age_15_24_total.min' => '15至24歲總人口數不能小於 0。',
            'age_15_19.required' => '15至19歲人口數是必填的。',
            'age_15_19.numeric' => '15至19歲人口數必須是數字。',
            'age_15_19.min' => '15至19歲人口數不能小於 0。',
            'age_20_24.required' => '20至24歲人口數是必填的。',
            'age_20_24.numeric' => '20至24歲人口數必須是數字。',
            'age_20_24.min' => '20至24歲人口數不能小於 0。',
            'age_25_44_total.required' => '25至44歲總人口數是必填的。',
            'age_25_44_total.numeric' => '25至44歲總人口數必須是數字。',
            'age_25_44_total.min' => '25至44歲總人口數不能小於 0。',
            'age_25_29.required' => '25至29歲人口數是必填的。',
            'age_25_29.numeric' => '25至29歲人口數必須是數字。',
            'age_25_29.min' => '25至29歲人口數不能小於 0。',
            'age_30_34.required' => '30至34歲人口數是必填的。',
            'age_30_34.numeric' => '30至34歲人口數必須是數字。',
            'age_30_34.min' => '30至34歲人口數不能小於 0。',
            'age_35_39.required' => '35至39歲人口數是必填的。',
            'age_35_39.numeric' => '35至39歲人口數必須是數字。',
            'age_35_39.min' => '35至39歲人口數不能小於 0。',
            'age_40_44.required' => '40至44歲人口數是必填的。',
            'age_40_44.numeric' => '40至44歲人口數必須是數字。',
            'age_40_44.min' => '40至44歲人口數不能小於 0。',
            'age_45_64_total.required' => '45至64歲總人口數是必填的。',
            'age_45_64_total.numeric' => '45至64歲總人口數必須是數字。',
            'age_45_64_total.min' => '45至64歲總人口數不能小於 0。',
            'age_45_49.required' => '45至49歲人口數是必填的。',
            'age_45_49.numeric' => '45至49歲人口數必須是數字。',
            'age_45_49.min' => '45至49歲人口數不能小於 0。',
            'age_50_54.required' => '50至54歲人口數是必填的。',
            'age_50_54.numeric' => '50至54歲人口數必須是數字。',
            'age_50_54.min' => '50至54歲人口數不能小於 0。',
            'age_55_59.required' => '55至59歲人口數是必填的。',
            'age_55_59.numeric' => '55至59歲人口數必須是數字。',
            'age_55_59.min' => '55至59歲人口數不能小於 0。',
            'age_60_64.required' => '60至64歲人口數是必填的。',
            'age_60_64.numeric' => '60至64歲人口數必須是數字。',
            'age_60_64.min' => '60至64歲人口數不能小於 0。',
            'age_65_above.required' => '65歲及以上人口數是必填的。',
            'age_65_above.numeric' => '65歲及以上人口數必須是數字。',
            'age_65_above.min' => '65歲及以上人口數不能小於 0。',
        ];
    }
}
