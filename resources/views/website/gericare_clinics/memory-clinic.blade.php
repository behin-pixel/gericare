@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Memory Clinic</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('about-clinics') }}">Clinic</a></li>
<li> > </li>
<li>  Service we Offer</li>
<li> > </li>
<li class="active">Memory Clinic</li>
</ul>
</div>

</div>
</div> 
</section>

<section class="geriatric-lctricks">
<div class="container">
<div class="row">

@include('website.clinicservicessidebar')

<div class="col-lg-9">
<img src="{{ asset('/public/website/assets/images/clinic/memory_clinic.webp') }}" alt="Physiotherapist For Home Visits" class="w-100 mb-4">
<div class="common-para">
<p class="w-100">At our Memory Clinic, Psychiatrists working closely with Geriatricians, specialise in memory assessment and management, providing compassionate care and innovative therapies to improve cognitive function, enhance quality of life, and support individuals and their families through the challenges of memory impairment and dementia.</p>
</div>
<div class="call-and-attend">
<ul>
<!-- <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Request an Appointment</a></li>     -->
<li><a href="{{ url('request-an-appointment') }}">Request an Appointment</a></li>
<li><a href="tel:+914440614061">Call Us at <span>+91 44 4061 4061</span></a></li>    
</ul>
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
We Do Whatever It Takes To<br> 
Bring You Peace of Mind
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
<!-- <li>
<a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
<img src="{{ asset('/public/website/assets/images/call-cta.png') }}" alt="Geri Care Hospital" class="" /> 
Request an Appointment
</a>
</li> -->
<li>
<a href="{{ url('request-an-appointment') }}">
<img src="{{ asset('/public/website/assets/images/call-cta.png') }}" alt="Geri Care Hospital" class="" /> 
Request an Appointment
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</section>


@include('website.bottomform')

@include('website.mobilebottomform')
 

@endsection