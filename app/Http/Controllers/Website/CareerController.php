<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerMail;

class CareerController extends Controller
{
    
    public function applyJob(Request $request) {

        $validator      = Validator::make($request->all(), [          
            'name' => 'required',
            'email' => 'required||email|unique:careers',
            'mobile' => 'required',
           // 'designation' => 'required',
            //'experience' => 'required',
           // 'cover_letter' => 'required',
            'upload_resume' => 'mimes:pdf,docx,doc'
        ]);

        if ($validator->passes()) {
            
            $ins = [];
            $ins['name'] = $request->name;
            $ins['email'] = $request->email;
            $ins['mobile'] = $request->mobile;
            
            $ins['designation'] = $request->designation;
            $ins['relevant_experience'] = $request->experience;
            $ins['message'] = $request->cover_letter;            
            if ($request->hasFile('upload_resume')) {

                $files = $request->file('upload_resume');
                $imageName = uniqid() . Str::replace(' ', "-", $files->getClientOriginalName());

                $directory = 'career';
                $filename  = $directory . '/' . $imageName;

                Storage::disk('public')->put($filename, File::get($files));
                $ins['file'] = 'public/' . $filename;
            }

            Career::create($ins);

            $subject=$request->name.' Carrer Mail ';
           
            $mailData = [
                'designation' => $request->designation,
                'name' => $request->name,
                'email' =>  $request->email,
                'mobile_no' =>$request->mobile,
                'cover_letter' => $request->cover_letter,
                'subject' => $subject,
                'experience'=>  $request->experience,
                'filename' =>$imageName
            ];
           // dd($mailData);
           $file=$request->file('upload_resume');
             
            Mail::to(env('CLIENT_MAIL'))->send(new CareerMail($mailData,$file));

           
            $error                      = 0;
            $message                    = 'Job submitted successfully';

        } else {
            $error                      = 1;
            $message                    = $validator->errors()->all();
        }
        return response()->json(['error' => $error, 'message' => $message ]);

    }
}
