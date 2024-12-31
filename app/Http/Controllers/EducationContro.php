<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;
use App\Http\Requests\CreateEducationRequest;
use App\Models\EducationModels;


class EducationContro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ed = EducationModels:: all();
        return view('ed.edview',compact('Ed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ed.edcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEducationRequest $request)
    {
        $data = $request->only(
            [
                'district_or_region',
                'junior_high_below_total',
                'junior_high_below_primary_total',
                'junior_high_total',
                'senior_high_total',
                'junior_college_above_total',
                'junior_college_total',
                'university_total',
                'graduate_school_total',
                'age_15_19',
                'age_20_24',
                'age_25_29',
                'age_30_34',
                'age_35_39',
                'age_40_44',
                'age_45_49',
                'age_50_54',
                'age_55_59',
                'age_60_64',
                'age_65_above_total',
            ]
        );

        $data['total_thousand'] = 0;
        $data['age_15_24_total'] = 0;
        $data['age_25_44_total'] = 0;
        $data['age_45_64_total'] = 0;


        $data['total_thousand'] = $data['junior_high_below_total'] + $data['junior_high_below_primary_total'] + $data['junior_high_total']
        + $data['senior_high_total'] + $data['junior_college_above_total'] + $data['junior_college_total']
        + $data['university_total'] + $data['graduate_school_total'];

        // 可以根據具體邏輯調整如何計算總數
        $data['age_15_24_total'] = $data['age_15_19'] + $data['age_20_24'];
        $data['age_25_44_total'] = $data['age_25_29'] + $data['age_30_34'] + $data['age_35_39'] + $data['age_40_44'];
        $data['age_45_64_total'] = $data['age_45_49'] + $data['age_50_54'] + $data['age_55_59'] + $data['age_60_64'];
        
        
        $Ed = EducationModels::create($data);

        return redirect('education');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ed1 = EducationModels:: findOrFail($id);

        return view('ed.edshow',compact('Ed1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Ed1 = EducationModels:: findOrFail($id);

        return view('ed.ededit',compact('Ed1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEducationRequest $request, $id)
    {
        $Ed1 = EducationModels:: findOrFail($id);

        $data = $request->only(
            [
                'district_or_region',
                'junior_high_below_total',
                'junior_high_below_primary_total',
                'junior_high_total',
                'senior_high_total',
                'junior_college_above_total',
                'junior_college_total',
                'university_total',
                'graduate_school_total',
                'age_15_19',
                'age_20_24',
                'age_25_29',
                'age_30_34',
                'age_35_39',
                'age_40_44',
                'age_45_49',
                'age_50_54',
                'age_55_59',
                'age_60_64',
                'age_65_above_total',
            ]
        );

        $data['total_thousand'] = 0;
        $data['age_15_24_total'] = 0;
        $data['age_25_44_total'] = 0;
        $data['age_45_64_total'] = 0;


        $data['total_thousand'] = $data['junior_high_below_total'] + $data['junior_high_below_primary_total'] + $data['junior_high_total']
        + $data['senior_high_total'] + $data['junior_college_above_total'] + $data['junior_college_total']
        + $data['university_total'] + $data['graduate_school_total'];

        // 可以根據具體邏輯調整如何計算總數
        $data['age_15_24_total'] = $data['age_15_19'] + $data['age_20_24'];
        $data['age_25_44_total'] = $data['age_25_29'] + $data['age_30_34'] + $data['age_35_39'] + $data['age_40_44'];
        $data['age_45_64_total'] = $data['age_45_49'] + $data['age_50_54'] + $data['age_55_59'] + $data['age_60_64'];
        
        
        $Ed1 ->fill($data);
        $Ed1 -> save();

        return redirect('education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Ed1 = EducationModels:: findOrFail($id);
        $Ed1->delete();

        return redirect('education');
    }
}
