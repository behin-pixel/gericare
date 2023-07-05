@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/news&events.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Media ToolKit
<span> </span>
</h4>
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

<section class="media-toolkit">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10">

<div class="common-heading text-center">
<h2>By downloading and using any of these logos,<br> you agree to do so without making any modifications.</h2>
</div> 

<div class="serveces-doctrs">

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo.png') }}" alt="" class="w-100" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div> 

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-1.png') }}" alt="" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-assisted-living.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div> 

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-2.png') }}" alt="" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-hospital.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>  

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-3.png') }}" alt="" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-homecare.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>  

<div class="servce text-center">
<img src="{{ asset('/public/website/assets/images/logo-4.png') }}" alt="" class="logo-offet" />
<h4> Available formats  </h4>
<p> JPG | PNG | SVG </p>
<a href="{{ url('/public/website/uploads/gericare-clinic.zip') }}"> Download <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div> 

</div>  

</div>

</div>
</div>
</section>


@endsection