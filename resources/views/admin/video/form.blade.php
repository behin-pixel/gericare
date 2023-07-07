<div class="row mb-3">
    <label class="col-2 text-end col-form-label"> Title *</label>
    <div class="col-10">
        
        <input class="form-control" name="title" value="{{ $data->title ?? '' }}" required>
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Name</label>
    <div class="col-10">
        <input type="text" name="name" id="name" value="{{ $data->name ?? '' }}" class="form-control">
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Description</label>
    <div class="col-10">
        <textarea class="form-control ckeditor" name="description" id="description" > {{ $data->description ?? '' }}</textarea>
    </div>
</div>



<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Video  Link</label>
    <div class="col-10">
        <input type="text" name="video_link" id="video_link" value="{{ $data->video_link ?? '' }}" class="form-control">
    </div>
</div>



<div class="row mb-3">
    <input type="hidden" name="status" value="0" checked="checked">
    <label class="col-2 text-end col-form-label">Status</label>
    <div class="col-10">
     
        <input type="checkbox" id="status" name="status" value="1"   @if((isset($data->status) && $data->status)) checked  @endif >
    
    </div>
</div>
@section('scripts')

    <script type="text/javascript">
       
    
       
     
    </script>  
@endsection
