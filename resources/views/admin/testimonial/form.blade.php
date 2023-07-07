<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Testimonial Title *</label>
    <div class="col-10">
        
        <input class="form-control" name="title" value="{{ $data->title ?? '' }}" required>
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Testimonial given by *</label>
    <div class="col-10">
        <input type="text" name="given_by" id="given_by" value="{{ $data->title ?? '' }}" class="form-control" required>

    </div>
</div>
<div class="row mb-3 text_area">
    <label class="col-2 text-end col-form-label">Description *</label>
    <div class="col-10">
        <textarea class="form-control ckeditor" name="description" id="description" > {{ $data->description ?? '' }}</textarea>
        
    </div>
</div>


<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Location </label>
    <div class="col-10">
        <input type="text" name="designation" id="designation" value="{{ $data->designation ?? '' }}" class="form-control">

    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Date</label>
    <div class="col-10">
        <input type="date" name="date" id="date" value="{{ $data->date ?? '' }}" class="form-control">
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Photo</label>
    <div class="col-10">
        <input type="file" class="form-control" name="file"  id="attachment" accept="image/*">
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Type</label>
    <div class="col-10">
       <select name="type" id="type" class="form-control" >
            <option value="">Select Type</option>
            <option @if(@isset($data->type))@if($data->type=='General') selected @endif @endif value="General">General</option>
            <option @if(@isset($data->type))@if($data->type=='Hospital') selected @endif @endif value="Hospital">Hospital</option>
            <option @if(@isset($data->type))@if($data->type=='Clinic') selected @endif @endif value="Clinic">Clinic</option>
            <option @if(@isset($data->type))@if($data->type=='Assisted Living') selected @endif  @endif value="Assisted Living">Assisted Living</option>
            <option @if(@isset($data->type))@if($data->type=='Homecare') selected @endif @endif value="Homecare">Homecare</option>  
       </select>
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Video Link</label>
    <div class="col-10">
        <input type="text" name="video_link" id="video_link" value="{{ $data->video_link ?? '' }}" class="form-control">
    </div>
</div>
<div class="row mb-3">
    {{-- <label class="col-2 text-end col-form-label">Description</label> --}}
    <div class="col-2"></div>
    <div class="col-5">
        @if(isset($data))
            @if($data->photo)
            <img src="{{asset_url($data->photo)}}" alt="No image" id="image_tag" width="100" height="100">
            @endif
        @endif
    </div>
</div>


<div class="row mb-3">
    <input type="hidden" name="status" value="0" checked="checked">
    <label class="col-2 text-end col-form-label">Status</label>
    <div class="col-10">
        @if(isset($data))
            @if($data->status)
                <input type="checkbox" id="status" name="status" value="1" checked="checked">
            @else
                <input type="checkbox" id="status" name="status" value="0" >
            @endif
      @else
        <input type="checkbox" id="status" name="status" value="1"   @if((isset($data->status) && $data->status)) checked  @endif >
      @endif
    </div>
</div>
@section('scripts')

    <script type="text/javascript">
       
    
       
     
    </script>  
@endsection
