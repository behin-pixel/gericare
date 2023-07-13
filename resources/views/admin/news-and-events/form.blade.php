<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Title</label>
    <div class="col-10">
      
        <input type="text" name="title" id="title" value="{{ $data->title ?? '' }}" class="form-control">
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Date</label>
    <div class="col-10">
        <input type="date" name="date" id="date" value="{{ $data->date ?? '' }}" class="form-control">
        
       
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Gallery image </label>
    <div class="col-10">
        <div>
            <input type="file" name="gallery_image" class="form-control" accept="image/*">
          
        </div>
        @if ($data->image ?? null)
            <img src="{{ asset('public/files/news_event/gallery_image/'.$data->gallery_image) }}" height="60" class="mt-2" alt="Geri Care Hospital">
        @endif
    </div> 
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Featured image</label>
    <div class="col-10">
        <div>
        
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        @if ($data->image ?? null)
            <img src="{{ asset('public/files/news_event/'.$data->image) }}" height="60" class="mt-2" alt="Geri Care Hospital" >
        @endif
    </div> 
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Reference Link</label>
    <div class="col-10">
     
        <input type="text" name="reference_link" id="reference_link" value="{{ $data->referral_link ?? '' }}" class="form-control">
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Video Link</label>
    <div class="col-10">
        <input type="text" name="video_link" id="video_link" value="{{ $data->video_link ?? '' }}" class="form-control">
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Description</label>
    <div class="col-10">
        <textarea name="description" class="form-control ckeditor"> {{ $data->description ?? ''  }}</textarea>
    
    </div>
</div>
<div class="row mb-3">
    <input type="hidden" name="status" value="0" checked="checked">
    <label class="col-2 text-end col-form-label">Status</label>
    <div class="col-10">
      
        <input type="checkbox" id="status" name="status" value="1"   @if((isset($data->status) && $data->status)) checked  @endif >
     
    </div>
</div>

