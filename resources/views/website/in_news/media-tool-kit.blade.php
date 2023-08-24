@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/ned-kit.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Media ToolKit
<span> </span>
</h1>
<ul>
<li><a href="../">Home</a></li>   
<li> > </li>  
<li>News Room</li>
<li> > </li>    
<li>Media ToolKit</li>  
</ul>
</div>
</div>
</div>
</div>

</section> 
<section class="pb-0 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-link-design m-none">
                    <ul class="justify-content-around">
                        <li class="pe-3"><a href="{{ url('news-and-events') }}" class="@if(request()->routeIs(['in-news.news-events'])) actives @endif">News & Events</a></li>
                        <li><a href="{{ url('media-gallery') }}" class="@if(request()->routeIs(['in-news.media-gallery'])) actives @endif">Media</a></li>
                        <li class="pe-3"><a href="{{ url('/in-news/media-tool-kit') }}" class="@if(request()->routeIs(['in-news.media-tool-kit'])) actives @endif">Media Tool Kit</a></li>
                        <li><a href="{{ url('video-gallery') }}" class="@if(request()->routeIs(['in-news.video-gallery'])) actives @endif">Videos</a></li>
                        <li><a href="{{ url('gallery') }}" class="@if(request()->routeIs(['in-news.gallery'])) actives @endif">Gallery</a></li>
                        <li><a href="https://www.gericare.in/blog" class="@if(request()->routeIs(['in-news.blog'])) actives @endif">Blogs</a></li>
                    </ul>  
                    <hr> 
                </div> 
                <div class="dropdown mobile-dropdown-menu text-center">
                     <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        News Room
                     </a>
                     <ul class="dropdown-menu dropdown-menu-w" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ url('news-and-events') }}">News & Events</a></li>
                        <li><a class="dropdown-item" href="{{ url('media-gallery') }}">Media</a></li>
                        <li><a class="dropdown-item" href="{{ url('/in-news/media-tool-kit') }}">Media Tool Kit</a></li>
                        <li><a class="dropdown-item" href="{{ url('video-gallery') }}">Videos</a></li>
                        <li><a class="dropdown-item" href="{{ url('gallery') }}">Gallery</a></li>
                        <li><a class="dropdown-item" href="https://www.gericare.in/blog">Blogs</a></li>
                     </ul>
                </div>   
            </div>    
        </div>    
    </div>    
</section> 

<section class="media-toolkit pt-4">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10">

<div class="common-heading text-center">
<h2>By downloading and using any of these logos,<br> you agree to do so without making any modifications.</h2>
</div> 

<div class="serveces-doctrs">

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/gericare-logo.png') }}" alt="Geri Care Hospital" class="w-100" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div> 

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-1.png') }}" alt="Geri Care Hospital" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-assisted-living.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div> 

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-2.png') }}" alt="Geri Care Hospital" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-hospital.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>  

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-3.png') }}" alt="Geri Care Hospital" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-homecare.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>  

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-4.png') }}" alt="Geri Care Hospital" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-clinic.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div> 

</div>  

</div>

</div>
</div>
</section>


@endsection