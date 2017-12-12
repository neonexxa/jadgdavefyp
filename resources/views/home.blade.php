@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Interview assestment form</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('applicant.store') }}">
                        {{ csrf_field() }}
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="appname">Applicant Name</label>  
                            <div class="col-md-3">
                                <input id="appname" name="appname" type="text" placeholder="Applicant Name" class="form-control input-md">
                            </div>
                            <label class="col-md-3 control-label" for="email">Email</label>  
                            <div class="col-md-3">
                                <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="joi">Job Opening ID</label>  
                            <div class="col-md-3">
                                <input id="joi" name="joi" type="text" placeholder="Job Opening ID" class="form-control input-md">
                            </div>
                            <label class="col-md-3 control-label" for="dept">Department</label>  
                            <div class="col-md-3">
                                <input id="dept" name="dept" type="text" placeholder="Department" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="interviewer">Interviewer</label>  
                            <div class="col-md-3">
                                <input id="interviewer" name="interviewer" type="text" placeholder="Interviewer" class="form-control input-md">
                            </div>
                            <label class="col-md-3 control-label" for="inttype">Interview Type</label>  
                            <div class="col-md-3">
                                <input id="inttype" name="inttype" type="text" placeholder="Interview Type" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="intdate">Interview Date</label>  
                            <div class="col-md-3">
                                <input id="intdate" name="intdate" type="date" placeholder="Interview Date" class="form-control input-md">
                            </div>
                        </div>
                        <legend>Rate the applicant :  <span style="font-size: 14px"> 0 (Not applicable) 1 (Unsatisfactory) 2 (Marginal) 3 (Satisfactory) 4 (Superior)</span></legend>
                        <!-- Multiple Radios (inline) -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="radiostech">Technical skills A</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="radiostech-0"><input type="radio" name="radiostech" id="radiostech-0" value="0">0</label> 
                            <label class="radio-inline" for="radiostech-1"><input type="radio" name="radiostech" id="radiostech-1" value="1">1</label> 
                            <label class="radio-inline" for="radiostech-2"><input type="radio" name="radiostech" id="radiostech-2" value="2">2</label> 
                            <label class="radio-inline" for="radiostech-3"><input type="radio" name="radiostech" id="radiostech-3" value="3">3</label>
                            <label class="radio-inline" for="radiostech-4"><input type="radio" name="radiostech" id="radiostech-4" value="4">4</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="edutrain">Educaiton / Training</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="edutrain-0"><input type="radio" name="edutrain" id="edutrain-0" value="0">0</label> 
                            <label class="radio-inline" for="edutrain-1"><input type="radio" name="edutrain" id="edutrain-1" value="1">1</label> 
                            <label class="radio-inline" for="edutrain-2"><input type="radio" name="edutrain" id="edutrain-2" value="2">2</label> 
                            <label class="radio-inline" for="edutrain-3"><input type="radio" name="edutrain" id="edutrain-3" value="3">3</label>
                            <label class="radio-inline" for="edutrain-4"><input type="radio" name="edutrain" id="edutrain-4" value="4">4</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="workexp">Work Experience</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="workexp-0"><input type="radio" name="workexp" id="workexp-0" value="0">0</label> 
                            <label class="radio-inline" for="workexp-1"><input type="radio" name="workexp" id="workexp-1" value="1">1</label> 
                            <label class="radio-inline" for="workexp-2"><input type="radio" name="workexp" id="workexp-2" value="2">2</label> 
                            <label class="radio-inline" for="workexp-3"><input type="radio" name="workexp" id="workexp-3" value="3">3</label>
                            <label class="radio-inline" for="workexp-4"><input type="radio" name="workexp" id="workexp-4" value="4">4</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="orgskill">Organizational Skills</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="orgskill-0"><input type="radio" name="orgskill" id="orgskill-0" value="0">0</label> 
                            <label class="radio-inline" for="orgskill-1"><input type="radio" name="orgskill" id="orgskill-1" value="1">1</label> 
                            <label class="radio-inline" for="orgskill-2"><input type="radio" name="orgskill" id="orgskill-2" value="2">2</label> 
                            <label class="radio-inline" for="orgskill-3"><input type="radio" name="orgskill" id="orgskill-3" value="3">3</label>
                            <label class="radio-inline" for="orgskill-4"><input type="radio" name="orgskill" id="orgskill-4" value="4">4</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="training">Training</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="training-0"><input type="radio" name="training" id="training-0" value="0">0</label> 
                            <label class="radio-inline" for="training-1"><input type="radio" name="training" id="training-1" value="1">1</label> 
                            <label class="radio-inline" for="training-2"><input type="radio" name="training" id="training-2" value="2">2</label> 
                            <label class="radio-inline" for="training-3"><input type="radio" name="training" id="training-3" value="3">3</label>
                            <label class="radio-inline" for="training-4"><input type="radio" name="training" id="training-4" value="4">4</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="comm">Communication</label>
                          <div class="col-md-4"> 
                            <label class="radio-inline" for="comm-0"><input type="radio" name="comm" id="comm-0" value="0">0</label> 
                            <label class="radio-inline" for="comm-1"><input type="radio" name="comm" id="comm-1" value="1">1</label> 
                            <label class="radio-inline" for="comm-2"><input type="radio" name="comm" id="comm-2" value="2">2</label> 
                            <label class="radio-inline" for="comm-3"><input type="radio" name="comm" id="comm-3" value="3">3</label>
                            <label class="radio-inline" for="comm-4"><input type="radio" name="comm" id="comm-4" value="4">4</label>
                          </div>
                        </div>

                        <!-- Multiple Checkboxes (inline) -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="finalrec">Final Recomendation</label>
                          <div class="col-md-4">
                            <label class="radio" for="finalrec-0"><input type="radio" name="finalrec" id="finalrec-0" value="0">18-24 Make Offer</label> 
                            <label class="radio" for="finalrec-1"><input type="radio" name="finalrec" id="finalrec-1" value="1">11-17 Waiting List</label> 
                            <label class="radio" for="finalrec-2"><input type="radio" name="finalrec" id="finalrec-2" value="2">0-11 Not Chosen</label> 
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
