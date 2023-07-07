<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Enquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;
use App\Models\Testimonial;

class ConsultantFormController extends Controller
{
    public function index(Request $request)
    {
        $testimonial=Testimonial::where('status','1')->get();

        return view('website.index',compact('testimonial'));
    }

    public function submitConsultantForm(Request $request)
    {

        $validator      = Validator::make($request->all(), [
            'name' => 'required',
            //'email' => 'required',
            'mobile_no' => 'required',
            //'from' => 'required',
            //'services' => 'required_if:from,=,homepage',
            //'subject' => 'required_if:from,=,contact',
            //'message' => 'required',
        ]);

        if ($validator->passes()) {
            $ins = [];
            $ins['name'] = $request->name;
            $ins['type'] = $request->from == 'contact' ? 'contact' : 'consult';
            $ins['enquiry_from'] = $request->from;
            $ins['email'] = $request->email;
            $ins['moble_no'] = $request->mobile_no;
            $ins['message'] = $request->message;
            $ins['services'] = $request->services ?? null;
            $ins['subject'] = $request->subject ?? null;
            Enquiries::create($ins);

            if($request->from == 'contact')
            {
                $subject='Website Online Contact Us Enquiry';
            }   
            else
            {
                $subject='Website Online Consult Enquiry';
            }
            $mailData = [
                'type'=> $request->from,
                'services' => $request->services,
                'name' => $request->name,
                'email' =>  $request->email,
                'mobile_no' =>$request->mobile_no,
                'message' => $request->message,
                'subject' => $subject
            ];
           // dd($mailData);
             
            Mail::to(env('CLIENT_MAIL'))->send(new EnquiryMail($mailData));
            $error                      = 0;
            $message                    = 'Form submitted successfully';
            $from_page                  =   $request->from; 
        } else {
            $error                      = 1;
            $message                    = $validator->errors()->all();
            $from_page                  =    $request->from;
        }
        return response()->json(['error' => $error, 'message' => $message,'from_page' =>  $from_page ]);
    }
    public function submitConsultantReqForm(Request $request)
    {

        $validator      = Validator::make($request->all(), [
            'ecustomername' => 'required',          
            'emobileno' => 'required',
           
        ]);

        if ($validator->passes()) {
            $ins = [];
            $ins['name'] = $request->ecustomername;         
            $ins['moble_no'] = $request->emobileno;
            $ins['type'] = $request->from;
         
            Enquiries::create($ins);
            $mailData = [
                'type' => 'request_call_back',
                'name' => $request->ecustomername,
                'mobile_no' =>$request->emobileno,
                'subject' => 'Website Online Request Call Back Enquiry'
            ];
           // dd($mailData);
             
            Mail::to(env('CLIENT_MAIL'))->send(new EnquiryMail($mailData));
            $error                      = 0;
            $message                    = 'Form submitted successfully';
        } else {
            $error                      = 1;
            $message                    = $validator->errors()->all();
        }
        return response()->json(['error' => $error, 'message' => $message ]);
    }
    public function contactThanks()
    {
        return view('website.thanks-contactus');
    }
    public function consultantThanks()
    {
        return view('website.consult-thanks');
    }
    public function callBackThanks()
    {
        return view('website.request-call-back-thanks');
    }
    public function careerThanks()
    {
        return view('website.carrer-thanks');
    }
    public function doctorAppThanks()
    {
        return view('website.doctor-appointmnet-thanks');
    }
    public function serviceAppThanks()
    {
        return view('website.service-appointmnet-thanks');
    }
    public function departmentAppThanks()
    {
        return view('website.book-appointmnet-thanks');
    }
    

}
