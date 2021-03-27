<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient_hn = $request->hn;
        $patient_data= DB::connection('mysql_hos')->select('
        SELECT * FROM patient WHERE hn = "'.$patient_hn.'"
        ');
        foreach($patient_data as $data){
            $patient_cid = $data->cid;
        }

        return view('welcome', [
            'patient_hn' => $patient_hn,
            'patient_cid' => $patient_cid,
            'patient_data' => $patient_data,
        ]);
    }

    public function checkup(Request $request)
    {
        $patient_hn = $request->hn;
        $patient_data= DB::connection('mysql_hos')->select('
        SELECT * FROM patient WHERE hn = "'.$patient_hn.'"
        ');

        return view('checkup', [
            'patient_hn' => $patient_hn,
            'patient_data' => $patient_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
