<div class="row mb-3">
    <label class="col-2 text-end col-form-label"> Title *</label>
    <div class="col-10">
        
        <input class="form-control" name="title" value="{{ $data->title ?? '' }}" required>
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Date</label>
    <div class="col-10">
        <input type="date" name="date" id="date" value="{{ $data->date ?? '' }}" class="form-control">
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Source</label>
    <div class="col-10">
        <input type="text" name="source" id="source" value="{{ $data->source ?? '' }}" class="form-control">
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Featured  Image</label>
    <div class="col-10">
        <input type="file" class="form-control" name="featured_image"  id="attachment" accept="image/*">
    </div>
</div>
<div class="row mb-3">
    {{-- <label class="col-2 text-end col-form-label">Description</label> --}}
    <div class="col-2"></div>
    <div class="col-5">
        @if(isset($data))
            @if($data->featured_image)
            <img src="{{asset_url($data->featured_image)}}" alt="Geri Care Hospital" id="image_tag" width="100" height="100">
            @endif
        @endif
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Gallery image</label>
    <div class="col-10">
        <input type="file" class="form-control" name="gallery_image"  id="attachment" accept="image/*">
    </div>
</div>
<div class="row mb-3">
    {{-- <label class="col-2 text-end col-form-label">Description</label> --}}
    <div class="col-2"></div>
    <div class="col-5">
        @if(isset($data))
            @if($data->featured_image)
            <img src="{{asset_url($data->photo)}}" alt="Geri Care Hospital" id="image_tag" width="100" height="100">
            @endif
        @endif
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Reference  Link</label>
    <div class="col-10">
        <input type="text" name="reference_link" id="reference_link" value="{{ $data->reference_link ?? '' }}" class="form-control">
    </div>
</div>


<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Upload pdf</label>
    <div class="col-10">
        <input type="file" class="form-control" name="pdf_file"  id="attachment" accept="pdf/*">
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
