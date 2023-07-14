<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\BookAppointment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;

class BookAppointmentController extends Controller
{
    
    public function saveAppointment(Request $request) {

        $validator      = Validator::make($request->all(), [
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'from' => 'required',
            //'services' => 'required_if:from,=,book_an_appointment',
            //'doctor_name' => 'required_if:from,=,book_an_appointment_doctor',
            'name' => 'required',
            //'email' => 'required',
            'mobile_no' => 'required',
            //'details' => 'required',
        ]);
       // dd($request->doctor_name);

        if ($validator->passes()) {
            // $appointment_time = date('H:i:s', strtotime($request->appointment_time));
            $appointment_date = str_replace('/', '-',$request->appointment_date);
            $ins = [];
            $ins['appointment_services'] = $request->services ?? null;
            $ins['doctor_name'] = $request->doctor_name ?? null;
            $ins['appointment_date'] = date('Y-m-d', strtotime($appointment_date));
            $ins['appointment_time'] = $request->appointment_time;
            $ins['enquiry_from'] = $request->from;
            $ins['name'] = $request->name;
            $ins['email'] = $request->email; 
            $ins['mobile_no'] = $request->mobile_no ?? null;
            $ins['message'] = $request->details ?? null;
            $ins['enquiry_from_ip'] = $request->ip();
            BookAppointment::create($ins);

            if($request->from == 'departments')
            {
                $subject='Website Online Department Page Appointment';
                //$services=$request->services;
                $services='';
                $doctor_name='';
            }   
            else if($request->from == 'service_appointment')
            {
                $subject='Website Online Header Appointment';
                $services=$request->services;
                $doctor_name='';
            }
            else
            { 
                $subject='Website Online Doctor Appointment';
                $services=$request->services;
                $doctor_name=$request->doctor_name;

            }
            $mailData = [
                'type'=> $request->from,
                'services' => $services,
                'doctor_name' => $doctor_name,
                'name' => $request->name,
                'email' =>  $request->email,
                'mobile_no' =>$request->mobile_no,
                'message' => $request->details ,
                'subject' => $subject,
                'appointment_date' => $request->appointment_date,
                'appointment_time' =>  $request->appointment_time
            ];
           // dd($mailData);
             
            Mail::to(env('CLIENT_MAIL'))->bcc(env('BCC_MAIL'))->send(new AppointmentMail($mailData));

            $error                      = 0;
            $message                    = 'Appointment Book request submitted successfully';
            $from_page                  =   $request->from; 

        } else {
            $error                      = 1;
            $message                    = $validator->errors()->all();
            $from_page                  =   $request->from; 
        }
        return response()->json(['error' => $error, 'message' => $message, 'from_page'  => $from_page ]);

    }

}
