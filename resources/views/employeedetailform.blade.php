@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Employee Details Form - HR Information System</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form class="form-horizontal" method="POST" action="{{ route('employee.store') }}">
                        {{ csrf_field() }}
                        <!-- Text input-->
                        <legend>Personal Details</legend>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="fullname">Full name as per MyKad / Passport</label>  
                            <div class="col-md-10">
                                <input id="fullname" name="fullname" type="text" placeholder="Applicant Name" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="nin">New I/C No</label>  
                            <div class="col-md-4">
                                <input id="nin" name="nin" type="text" placeholder="New I/C No" class="form-control input-md" required>
                            </div>
                            <label class="col-md-2 control-label" for="oin">Old I/C No</label>  
                            <div class="col-md-4">
                                <input id="oin" name="oin" type="text" placeholder="Old I/C No" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="epfnum">EPF No</label>  
                            <div class="col-md-10">
                                <input id="epfnum" name="epfnum" type="text" placeholder="EPF No" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label">*If you would like to opt for 11% of your employee EPF contribution, please fill up the attached KWSP 17A Form</label>
                            <label class="col-md-12 control-label">**For registration of EPF number, proceed to nearest EPF office</label>  
                        </div>
        
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="itn">Income Tax No</label>
                            <div class="col-md-2"> 
                                <select id="itn" name="itn" class="form-control">
                                  <option value="SG">SG</option>
                                  <option value="OG">OG</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input id="itnnum" name="itnnum" type="text" placeholder="Income Tax No" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="bank">Bank</label>
                            <div class="col-md-10"> 
                                <label class="radio-inline" for="bank-0"><input type="radio" name="bank" id="bank-0" value="Maybank Berhad">Maybank Berhad</label> 
                                <label class="radio-inline" for="bank-1"><input type="radio" name="bank" id="bank-1" value="Public Bank Berhad">Public Bank Berhad</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="accref">Account Opened Using</label>
                            <div class="col-md-3"> 
                                <select id="accref" name="accref" class="form-control">
                                  <option value="nin">New I/C No</option>
                                  <option value="oin">Old I/C No</option>
                                  <option value="pn">Passport No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="accnum">Bank Account No</label>  
                            <div class="col-md-10">
                                <input id="accnum" name="accnum" type="text" placeholder="Bank Account No" class="form-control input-md" required>
                            </div>
                        </div>

                        <legend>Spouses Details</legend>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spfullname">Full name as per MyKad / Passport</label>  
                            <div class="col-md-10">
                                <input id="spfullname" name="spfullname" type="text" placeholder="Spouse Name" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spnin">New I/C No</label>  
                            <div class="col-md-4">
                                <input id="spnin" name="spnin" type="text" placeholder="New I/C No" class="form-control input-md" required>
                            </div>
                            <label class="col-md-2 control-label" for="spoin">Old I/C No</label>  
                            <div class="col-md-4">
                                <input id="spoin" name="spoin" type="text" placeholder="Old I/C No" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spdob">Date Of Birth</label>  
                            <div class="col-md-4">
                                <input id="spdob" name="spdob" type="date" placeholder="Date Of Birth" class="form-control input-md" required>
                            </div>
                            <label class="col-md-2 control-label" for="spnationality">Nationality</label>  
                            <div class="col-md-4">
                                <input id="spnationality" name="spnationality" type="text" placeholder="Nationality" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="sppn">Passport No</label>  
                            <div class="col-md-4">
                                <input id="sppn" name="sppn" type="text" placeholder="Passport No" class="form-control input-md" required>
                            </div>
                            <label class="col-md-2 control-label" for="spisworking">Working ?</label>
                            <div class="col-md-4"> 
                                <label class="radio-inline" for="spisworking-0"><input type="radio" name="spisworking" id="spisworking-0" value="Yes">Yes</label> 
                                <label class="radio-inline" for="spisworking-1"><input type="radio" name="spisworking" id="spisworking-1" value="No">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spoccupation">Occupation</label>  
                            <div class="col-md-10">
                                <input id="spoccupation" name="spoccupation" type="text" placeholder="Occupation" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spcompany">Company Name & Address</label>  
                            <div class="col-md-4">
                                <input id="spcompany" name="spcompany" type="text" placeholder="Company Name & Address" class="form-control input-md" required>
                            </div>
                            <label class="col-md-2 control-label" for="sppostcode">Post Code</label>  
                            <div class="col-md-4">
                                <input id="sppostcode" name="sppostcode" type="text" placeholder="Post Code" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spotn">Office Telephone No</label>  
                            <div class="col-md-4">
                                <input id="spotn" name="spotn" type="text" placeholder="Office Telephone No" class="form-control input-md" required>
                            </div>
                            <label class="col-md-2 control-label" for="sphn">Handphone No</label>  
                            <div class="col-md-4">
                                <input id="sphn" name="sphn" type="text" placeholder="Handphone No" class="form-control input-md" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="spmd">Married Date</label>  
                            <div class="col-md-10">
                                <input id="spmd" name="spmd" type="date" placeholder="Married Date" class="form-control input-md" required>
                            </div>
                        </div>

                        <legend>Childrens Details</legend>
                        <!-- Multiple Radios (inline) -->
                        <div class="form-group" id="child">
                            <label class="col-md-4 control-label" for="child">Name</label> 
                            <label class="col-md-2 control-label" for="child">Relationship</label> 
                            <label class="col-md-2 control-label" for="child">DOB</label> 
                            <label class="col-md-2 control-label" for="child">IC</label> 
                            <label class="col-md-2 control-label" for="child">Status</label> 

                        </div>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="button" onclick="addchild()">Add New Child</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="submit">Submit New Applicant</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
