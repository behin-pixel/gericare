<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaRelease;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Storage;


class MediaReleaseController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = MediaRelease::orderBy('id', 'DESC');
            return DataTables::eloquent($data)
                ->addIndexColumn()              
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $delete = '';
                   // if (permission_check('TESTIMONIAL_EDIT'))
                    $edit=button('edit',route('media-release.edit', $data->id));

                    //if (permission_check('TESTIMONIAL_DELETE'))
                    $delete = button('delete',route('media-release.delete', $data->id));
                    return $edit.$delete;

                })
                ->addColumn('status', function ($data) {
                    $flag    =  $data->status == '0' ? 'danger' : 'success';
                    $type    =  $data->status == '0' ? 'ban' : 'check-circle';
                    $status  =  '<span class="fa-20 t-center fa fa-' . $type . ' text-' . $flag . '"></span>';
                    return $status;
                })
               
            ->rawColumns(['action','status'])
            ->make(true);
        }
        return view('admin.media-release.index');
    }
    public function create()
    {
        return view('admin.media-release.create');
    }
    public function store(Request $request,$id = null)
    {
        $request->validate([
            'title'       => 'required',
            'date'          => 'required',
           
        ]);

        $data =  MediaRelease::updateOrCreate(["id"=> $id],$request->except(['_token','featured_image']),
                $request->except(['_token','gallery_image']), $request->except(['_token','pdf_file']));

        if($data)
        {
            
            if($request->has('featured_image')) {
                if(Storage::exists($data->featured_image)){
                    Storage::delete($data->featured_image);
                } 
                $featured_image             =  $request->file('featured_image')->store('public/media-relase');
                $data  ->  featured_image   =  $featured_image;
            }
            if($request->has('gallery_image')) {
                if(Storage::exists($data->gallery_image)){
                    Storage::delete($data->gallery_image);
                }
                $gallery_image              =  $request->file('gallery_image')->store('public/media-relase'); 
                $data  ->  gallery_image    =  $gallery_image;
            }
            if($request->has('pdf_file')) {
                if(Storage::exists($data->pdf_file)){
                    Storage::delete($data->pdf_file);
                } 
                $pdf_file                   =  $request->file('pdf_file')->store('public/media-relase');
                $data  ->  pdf              =  $pdf_file;
            }      
                $data  ->  title            =  $request->title;
                $data  ->  date             =  $request->date;
                $data  ->  source           =  $request->source;
                $data  ->  reference_link   =  $request->reference_link;              
                $data  ->  status           =  $request->status;
                $data  ->  save();
            }
        
        Flash::success( __('action.saved', ['type' => 'Media Relase']));
        return redirect()->route('media-release.index');

    }
    public function edit($id)
    {
        $data = MediaRelease::findOrFail($id);
        return view('admin.media-release.edit',compact('data'));
    }
    public function delete($id = null)
    {
        $careers  = MediaRelease::find($id);
        $careers->delete();
        Flash::success(__('action.deleted', ['type' => 'Subscriber Email']));
        return redirect()->back();
    }
}
