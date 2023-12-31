@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Leadership Team
</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>     
<li ><a href="{{ url('about-gericare') }}">About Us </a></li>
<li> > </li>     
<li class="active">Leadership Team</li>    
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="pb-3 pt-3 common-bg-color m-none no-line">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-link-design">
                    <ul class="justify-content-center">
                        <li class="side-line"><a href="{{ url('about-gericare') }}">About Geri Care</a></li>
                        <li><a href="{{ url('leadership') }}" class="@if(request()->routeIs(['about-us.leadership-team'])) actives @endif">Leadership Team</a></li>
                    </ul>  
                </div>    
            </div>    
        </div>    
    </div>    
</section>

<section class="leader-shipment">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-7 col-sm-12">
<div class="row">
<div class="col-lg-6">
<div class="team-boxes">
<div class="tem-drimg">
<img src="{{ asset('/public/website/assets/images/dr-1.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div>
<div class="tem-drcnt">
<h4>Dr. V. Srinivas</h4>
<h5>MD, MRCP (UK), DIP. Geriatric Medicine (UK)</h5>
<span>Founder & Director </span>
<div class="common-button drk mt-3">
<a class="p-2" href="{{ url('about-gericare/team-dr-srinivas') }}">Read More</a>
</div>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="team-boxes">
<div class="tem-drimg">
<img src="{{ asset('/public/website/assets/images/founder-lakshmipathy-ramesh.webp') }}" alt="Geri Care Hospital" class="w-100" />
</div>
<div class="tem-drcnt">
<h4>Dr. N. Lakshmipathy Ramesh</h4>
<h5>MD (Geriatrics) </h5>
<span>Founder & Managing Director  </span>
<div class="common-button drk mt-3">
<a class="p-2" href="{{ url('about-gericare/team-dr-lakshmipathy') }}">Read More</a> 
</div>
</div>
</div>
</div>

</div>
</div>

</div>
</div>
</section>

@endsection