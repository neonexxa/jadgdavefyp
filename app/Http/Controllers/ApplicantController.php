<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppReg;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $param = $request->all();
        $applicant = new Applicant();
        $applicant->appname         = $param['appname'];
        $applicant->email           = $param['email'];
        $applicant->intdate         = $param['intdate'];
        $applicant->joi             = $param['joi'];
        $applicant->dept            = $param['dept'];
        $applicant->interviewer     = $param['interviewer'];
        $applicant->inttype         = $param['inttype'];
        $applicant->radiostech      = $param['radiostech'];
        $applicant->edutrain        = $param['edutrain'];
        $applicant->workexp         = $param['workexp'];
        $applicant->orgskill        = $param['orgskill'];
        $applicant->training        = $param['training'];
        $applicant->comm            = $param['comm'];
        $applicant->overallrate     = $param['radiostech']+$param['edutrain']+$param['workexp']+$param['orgskill']+$param['training']+$param['comm'];
        $applicant->finalrec        = $param['finalrec'];
        $applicant->save();

        $details = ['subject' => 'Congratulation'];

         Mail::to($applicant->email)->send(new AppReg($applicant,$details));

        // $mail = new PHPMailer(true); // notice the \  you have to use root namespace here
        // try {
        //     $mail->isSMTP(); // tell to use smtp
        //     $mail->CharSet = "utf-8"; // set charset to utf8
        //     $mail->SMTPAuth = true;  // use smpt auth
        //     $mail->SMTPSecure = "tls"; // or ssl
        //     $mail->Host = "smtp.gmail.com";
        //     $mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing. 
        //     $mail->Username = "firdaushishamuddin@gmail.com";
        //     $mail->Password = "12haneefa34";
        //     $mail->From        = 'firdaushishamuddin@gmail.com';
        //     $mail->FromName    = 'Nexxa';
        //     $mail->WordWrap    = 900;
        //     $mail->setFrom("firdaushishamuddin@gmail.com", "Firstname Lastname");
        //     $mail->Subject = "Test";
        //     $mail->MsgHTML("This is a test");
        //     $mail->addAddress("firdaus@inkofi.xyz", "Recipient Name");
        //     $mail->send();
        //     $mail->SmtpClose();
        // } catch (phpmailerException $e) {
        //     dd($e);
        // } catch (Exception $e) {
        //     dd($e);
        // }

        // return response()->json(['message' => 'Request completed']);

        return back()->with('status', 'Applicant Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
