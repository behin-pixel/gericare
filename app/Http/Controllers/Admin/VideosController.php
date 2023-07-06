<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Storage;


class VideosController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Videos::orderBy('id', 'DESC');
            return DataTables::eloquent($data)
                ->addIndexColumn()              
                ->addColumn('action', function ($data) {
                    $edit = '';
                    $delete = '';
                   // if (permission_check('TESTIMONIAL_EDIT'))
                    $edit=button('edit',route('video.edit', $data->id));

                    //if (permission_check('TESTIMONIAL_DELETE'))
                    $delete = button('delete',route('video.delete', $data->id));
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
        return view('admin.video.index');
    }
    public function create()
    {
        return view('admin.video.create');
    }
    public function store(Request $request,$id = null)
    {
        $request->validate([
            'title'       => 'required',
            'name'          => 'required',
           
        ]);

        $data =  Videos::updateOrCreate(["id"=> $id]);

        if($data)
        {   
                $data  ->  title            =  $request->title;
                $data  ->  name             =  $request->name;
                $data  ->  description      =  $request->description;
                $data  ->  video_link       =  $request->video_link;              
                $data  ->  status           =  $request->status;
                $data  ->  save();
            }
        
        Flash::success( __('action.saved', ['type' => 'Video']));
        return redirect()->route('video.index');

    }
    public function edit($id)
    {
        $data = Videos::findOrFail($id);
        return view('admin.video.edit',compact('data'));
    }
    public function delete($id = null)
    {
        $careers  = Videos::find($id);
        $careers->delete();
        Flash::success(__('action.deleted', ['type' => 'Subscriber Email']));
        return redirect()->back();
    }
}
