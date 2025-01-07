<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePopulationsRequest;
use App\Models\Population;
use Illuminate\Http\Request;


class PopulationEducationsController extends Controller
{
    /**public function __construct()
    {
        $this->middleware('auth',['except'=>'index']);
    } */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pop = Population::all();
        
        return view('populationEducations',compact('pop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePopulationsRequest $request)
    {
        $data = $request->only([
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
        ]);

        $population=Population::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $populations=Population::findOrFail($id);
        return view('showdata')->with('populations',$populations);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $populations=Population::findOrFail($id);
        return view('editdata')->with('populations',$populations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePopulationsRequest $request, $id)
    {
        $populations=Population::findOrFail($id);
        $data = $request->only([
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
        ]);
        $populations->fill($data);
        $populations->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $populations=Population::findOrFail($id);
        $populations->delete();
        return redirect('/');
    }
    public function about()
    {
        return view('about');
    }
  

}
