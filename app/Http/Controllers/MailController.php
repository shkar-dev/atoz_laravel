<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){

       $request->validate([
            "name"=>'required',
            "certificate"=>'required',
            "gender" => 'required',
            "city"=> 'required',
            "street"=> 'required',
            "birth"=> 'required',
            "marriage"=> 'required',
            "computer_skills"=> 'required',
            "prev_jobs"=> 'required',
            "language"=> 'required',
            "job_wanted"=> 'required',
            "job_time"=> 'required',
            "traffic_reasons"=> 'required',
            'cv_file' => 'required|mimes:pdf,doc,docx|max:5120', // 5 MB max
        ],[
            'name.required'=> ' تکایە ناوی سیانی بنووسە',
            'certificate.required'=> ' تکایە بڕوانامە بنووسە',
            'gender.required'=> ' تکایە ڕەگەز دیاریبکە  ',
            'city.required'=> ' تکایە شارەکەت بنووسە',
            'street.required'=> ' تکایە شەقام بنووسە',
            'birth.required'=> ' بەرواری لەدایکبوون دیاریبکە ',
            'marriage.required'=> ' تکایە باری خێزانی دیاریبکە',
            'computer_skills.required'=> ' تکایە شارەزایی بنووسە',
            'prev_jobs.required'=> ' تکایە کاری پێشووتر بنووسە',
            'language.required'=> ' تکایە زمان بنووسە',
            'traffic_reasons.required'=> ' تکایە هۆکاری هاتووچۆ دیاریبکە ',
            'cv_file.required'=> ' تکایە سیڤی دیاریبکە ',
            'cv_file.mimes'=> '  تکایە PDF ,WORD هەڵبژێرە ',
        ]);
        try {
            if ($request->hasFile('cv_file')) {
                $filename = time() .'.' . $request->file('cv_file')->extension();
                $request->file('cv_file')->move('attachment',$filename);
             
            Mail::to("shkarshahab1@gmail.com")->send(new WelcomeMail($request->all(), $filename));
            }
        } catch (\Throwable $th) {
            return  $th->getMessage();
        }
        
        return $request;
    }
}
