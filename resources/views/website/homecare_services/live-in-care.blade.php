@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Live-in Care</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> Home Care </li>
<li> > </li>
<li><a href="">Service we Offer</a></li>
<li> > </li>
<li class="active">Live-in Care</li>
</ul>
</div>

</div>
</div>
</section>

<section class="geriatric-lctricks">
<div class="container">
<div class="row">

@include('website.servicessidebar')

<div class="col-lg-9">
<img src="{{ asset('/public/website/assets/images/Live-in-Care.jpg') }}" alt="" class="w-100 mb-4">
<div class="common-para">
<p>For patients who require round-the-clock care, nursing attendants can provide live-in care services. These nursing attendants, usually certified nursing assistants (CNAs) or home health aides (HHAs), stay with the patient in their home and assist with daily activities, personal care, medication reminders, mobility support, and other necessary tasks. Alternatively, if 24-hour care is not required, nursing attendants can be scheduled for 12-hour shifts, ensuring continuous care and support for the patient.</p>
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
<img src="{{ asset('/public/website/assets/images/wp-cta.png') }}" alt="" class="" />
<span>24*7 SERVICE AVAILABLE</span>  
+91 44 4061 4061
</a>
</li>
<li>
<a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
<img src="{{ asset('/public/website/assets/images/call-cta.png') }}" alt="" class="" /> 
Request Call Back
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