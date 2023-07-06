@extends('layouts.admin')
@section('admin_title')
    Edit Video
@endsection
@section('admin_content')
    <div class="card custom table-card">
        <div class="card-header">
            <div class="card-title">
               Video  Edit
            </div>
            <a class="btn btn-primary" href="{{ route('video.index') }}"><i class="fa fa-arrow-left me-2"></i> Go back </a>
        </div>
        <div class="card-body">
            {!! Form::model($data, ['route' => ['video.store',$data->id],"class" => "py-4", 'method'=> 'POST','files' => true]) !!}
                @csrf
                @include('admin.video.form')
                <div class="row ">
                    <div class="col-10 offset-2">
                        <a href="{{ route('video.index') }}" class="btn btn-light">back</a>
                        <button type="submit" class="btn btn-primary fw-bold">Save</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
