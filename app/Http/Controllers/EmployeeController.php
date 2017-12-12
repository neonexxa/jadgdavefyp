<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("haha");
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
        $param = $request->all();
        $employee = new Employee();
        $employee->fullname             = $param['fullname'];
        $employee->nin                  = $param['nin'];
        $employee->oin                  = $param['oin'];
        $employee->epfnum               = $param['epfnum'];
        $employee->itn                  = $param['itn'];
        $employee->itnnum               = $param['itnnum'];
        $employee->bank                 = $param['bank'];
        $employee->accref               = $param['accref'];
        $employee->accnum               = $param['accnum'];
        $employee->spfullname           = $param['spfullname'];
        $employee->spnin                = $param['spnin'];
        $employee->spoin                = $param['spoin'];
        $employee->spdob                = $param['spdob'];
        $employee->spnationality        = $param['spnationality'];
        $employee->sppn                 = $param['sppn'];
        $employee->spisworking          = $param['spisworking'];
        $employee->spoccupation         = $param['spoccupation'];
        $employee->spcompany            = $param['spcompany'];
        $employee->sppostcode           = $param['sppostcode'];
        $employee->spotn                = $param['spotn'];
        $employee->sphn                 = $param['sphn'];
        $employee->spmd                 = $param['spmd'];
        $employee->child                = json_encode($param['child']);
        
        
        $employee->save();
        
        
        
        
        // "fullname" => "Jagdave Singh Cheema"
        // "nin" => "951205-14-5657"
        // "oin" => null
        // "epfnum" => null
        // "itn" => "OG"
        // "itnnum" => "2234567"
        // "bank" => "Public Bank Berhad"
        // "accref" => "nin"
        // "accnum" => "1234567890"
        // "spfullname" => "Aqila Binti Ahmad Nazmi"
        // "spnin" => "930224-14-4840"
        // "spoin" => null
        // "spdob" => "1993-12-24"
        // "spnationality" => "Malaysian"
        // "sppn" => "-"
        // "spisworking" => "Yes"
        // "spoccupation" => "Finance Officer"
        // "spcompany" => "Bitcoin"
        // "sppostcode" => "12345"
        // "spotn" => "03-26947623"
        // "sphn" => "013-3970001"
        // "spmd" => "2017-10-06"
        // "cname" => "Jalal"
        // "crel" => "Son"
        // "cdob" => "03/12/2017"
        // "cic" => "987612"
        // "cstatus" => "S"
        return redirect()->route('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
