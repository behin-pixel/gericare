@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>ECG at Home</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('homecare') }}">Home Care </a></li>
<li> > </li>
<li>  Service we Offer</li>
<li> > </li>
<li class="active">ECG at Home</li>
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
<img src="{{ asset('/public/website/assets/images/ECG-at-Home.jpg') }}" alt="Geri Care Hospital" class="w-100 mb-4">
<div class="common-para">
<p>Electrocardiogram (ECG) is a common diagnostic test for assessing heart function. Healthcare professionals can perform ECGs at home using portable equipment, allowing for convenient monitoring and evaluation of the patient's cardiac health.</p>
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


@include('website.bottomform')

@include('website.mobilebottomform')
 

@endsection