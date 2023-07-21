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
<h1>Expert Geriatric Care
<span>for Every Senior Citizen<br>
in the Country</span>
</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li> 
<li> > </li>     
<li >About Us</li> 
<li> > </li>     
<li class="active">About Geri Care</li>    
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="about-the-hosptl">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-6">
<div class="">
<div class="common-heading">
<h2>Transforming Lives through<br> Personalised Care </h2>
</div>
<div class="common-para">
<p>Geri Care, a name that resonates with extensive medical, nursing and physiotherapy treatments has been operating in the realm of specialised geriatric care services for more than three decades. </p>
<p>From personalised home care to clinical interventions, and hospital services to assisted living during and after recovery, Geri Care is a continuum of 360 care that reflects utmost respect for the trade and compassion for human beings.</p>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="abts-lyrs-imgs">

<img src="{{ asset('/public/website/assets/images/abt-img.jpg') }}" alt="Geri Care Hospital" class="" />

<a data-fancybox class="video-play-button" href="https://www.youtube.com/watch?v=gHMbu9wWx-A">  
<span></span>
</a>

<img src="{{ asset('/public/website/assets/images/dots.png') }}" alt="Geri Care Hospital" class="btm-flw" />
</div>
</div>

</div>
</div>
</section>

<section class="vision-lysr">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12">
<div class="vision-ftntion">
<img src="{{ asset('/public/website/assets/images/vision.png') }}" alt="Geri Care Hospital" class="vis-this" />
<h4>Our Vision</h4>
<p>To make Geriatric Care accessible to larger masses of senior citizens<br> and their families, and to enhance the quality of their life, <br>promote independence, well being and dignity.</p>
</div>
</div>

</div>
</div>
</section>

<section class="mision-lysr p-0">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12">
<div class="mision-ftntion">
<img src="{{ asset('/public/website/assets/images/mission.png') }}" alt="Geri Care Hospital" class="mis-this" />
<h4>Our Mission</h4>
<p>To improve the health status of older persons at every stage of their<br> lives, and to raise their standards of health and recovery so that they<br> can enjoy healthy living in their homes and in their communities. </p>
</div>
</div>

</div>
</div>
</section>

<section class="comunity-center">
<div class="container">
<div class="row">

<div class="col-lg-12">
<div class="common-heading text-center">
<h2>The Continuum of 360° Care for the Grown up Community</h2>
</div>
</div>

<div class="col-lg-5">
<img src="{{ asset('/public/website/assets/images/full-build.jpg') }}" alt="Senior Citizen Hospital in Chennai" class="w-100" />
</div>

<div class="col-lg-7"> 

<div class="cario-seters">
<span><img src="{{ asset('/public/website/assets/images/cardio-1.png') }}" alt="Geri Care Hospital" class="" /></span>
<h4>Expert Geriatricians</h4>
<p>Our Geriatric professionals have undergone exemplary training at renowned institutions including Madras Medical College (MMC) in Chennai and the All India Institute of Medical Sciences (AIIMS) in New Delhi. Additionally, they have gained valuable experience as consultants in esteemed hospitals overseas, particularly in the United Kingdom (UK).</p>
</div> 

<div class="cario-seters">
<span><img src="{{ asset('/public/website/assets/images/cardio-2.png') }}" alt="Geri Care Hospital" class="" /></span>
<h4>Multi-disciplinary Approach</h4>
<p>We bring cutting-edge research and innovative approaches that reflect geriatric excellence and help transform the lives of the elderly, their loved ones and family members.</p>
</div>

<div class="cario-seters">
<span><img src="{{ asset('/public/website/assets/images/cardio-3.png') }}" alt="Geri Care Hospital" class="" /></span>
<h4>Unique Health Culture</h4>
<p>We pride over a culture that prioritizes tailored treatment plans & comprehensive care to ensure remarkable treatments along with a positive healthcare experience that helps the elderly recover and heal at ease.</p>
</div>

<div class="cario-seters">
<span><img src="{{ asset('/public/website/assets/images/cardio-4.png') }}" alt="Geri Care Hospital" class="" /></span>
<h4>Continuity of Care</h4>
<p>From clinical interventions to comprehensive hospital treatments, and post hospitalization home care services along with assisted living options, we ensure continuous medical support and comfort 24/7.</p>
</div> 

</div>

</div>
</div>
</section>

<section class="peace-of-mind">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="pseofmnd">
To experience a degree of care<br> 
that lasts a lifetime...<br>
<span>Call us today!</span>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="pseofmnd-lst text-end">
<ul>
<li>
<a href="https://api.whatsapp.com/send?phone=914440614061&text=Hello GERICARE, I have something to ask..." target="_blank">
<img src="{{ asset('/public/website/assets/images/wp-cta.png') }}" alt="Geri Care Hospital" class="" />
<span>24*7 SERVICE AVAILABLE</span>  
+91 44 4061 4061
</a>
</li>
<li>
<a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
<img src="{{ asset('/public/website/assets/images/call-cta.png') }}" alt="Geri Care Hospital" class="" /> 
Request Call Back
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</section>


@endsection