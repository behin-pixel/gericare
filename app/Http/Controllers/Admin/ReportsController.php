<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaRelease;
use App\Models\Enquiries;
use App\Models\BookAppointment;
use App\Models\Career;  
use Yajra\DataTables\Facades\DataTables;
use App\Exports\ConsultReportExport;
use App\Exports\ContactReportExport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Exports\CallBackReportExport;
use App\Exports\DoctorAppReportExport;
use App\Exports\ServiceAppReportExport; 
use App\Exports\DepartmentAppReportExport;
use App\Exports\BookAppointmentExport;
use App\Exports\CareerExport;


class ReportsController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Enquiries::where('type','consult')->orderBy('id', 'DESC');
        // dd($data);
            return DataTables::eloquent($data)
            ->addIndexColumn()
                
            ->make(true);
        }
        return view('admin.reports.consult.index');
    }
    public function exportConsultReport()
    {
        return Excel::download(new ConsultReportExport, 'ConsultReport.xlsx');
    }

    public function contactReport(Request $request)
    {
        if($request->ajax()) {
            $data = Enquiries::where('type','contact')->orderBy('id', 'DESC');
        // dd($data);
            return DataTables::eloquent($data)
            ->addIndexColumn()
                
            ->make(true);
        }
        return view('admin.reports.contact.index');
    }
    public function exportContactReport()
    {
        return Excel::download(new ContactReportExport, 'ContactReport.xlsx');
    }
    public function callBackReport(Request $request)
    {
        if($request->ajax()) {
            $data = Enquiries::where('type','request_call_back')->orderBy('id', 'DESC');
        // dd($data);
            return DataTables::eloquent($data)
            ->addIndexColumn()
                
            ->make(true);
        }
        return view('admin.reports.call_back.index');
    }
    public function exportCallBackReport()
    {
        return Excel::download(new CallBackReportExport, 'CallBackReport.xlsx');
    }

    public function docotorAppointmentReport(Request $request)
    {
        if($request->ajax()) {
            $data = BookAppointment::where('enquiry_from','doctor_appointment')->orderBy('id', 'DESC');
        // dd($data);
            return DataTables::eloquent($data)
            ->addIndexColumn()
                
            ->make(true);
        }
        return view('admin.reports.appointment.doctor.index');
    }

    public function exportdocotorAppointmentReport()
    {
        return Excel::download(new DoctorAppReportExport, 'DocotorReport.xlsx');
    }
    public function departmentAppointmentReport(Request $request)
    {
        if($request->ajax()) {
            $data = BookAppointment::where('enquiry_from','departments')->orderBy('id', 'DESC');
        // dd($data);
            return DataTables::eloquent($data)
            ->addIndexColumn()
                
            ->make(true);
        }
        return view('admin.reports.appointment.department.index');
    }
    public function exportdepartmentAppointmentReport()
    {
        return Excel::download(new DepartmentAppReportExport, 'DepartmentReport.xlsx');
    }
    public function serviceAppointmentReport(Request $request)
    {
        if($request->ajax()) {
            $data = BookAppointment::where('enquiry_from','service_appointment')->orderBy('id', 'DESC');
        // dd($data);
            return DataTables::eloquent($data)
            ->addIndexColumn()
                
            ->make(true);
        }
        return view('admin.reports.appointment.service.index');
    }
    public function exportServiceAppointmentReport()
    {
        return Excel::download(new ServiceAppReportExport, 'ServiceReport.xlsx');
    }

    public function careerReport(Request $request)
    {
        if($request->ajax()) {
            $data = Career::orderBy('id', 'DESC');
        // dd($data);

        
            return DataTables::eloquent($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $href = asset_url($row['file']);
                    $download_btn = '<a href="'.$href.'" download > 
                     <i class="fa fa-download"></i></a>';             
                     return $download_btn ;
                 })
                 ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.reports.career.index');
    }
    public function exportCareerReport()
    {
        return Excel::download(new CareerExport, 'CareerReport.xlsx');
    } 
    
}
