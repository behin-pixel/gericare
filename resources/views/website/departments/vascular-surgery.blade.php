@extends("website.layout.welcome")

@section('content')

<section class="inner-layer-banner">
<div class="container">
<div class="row">
   
<div class="col-lg-12">
<h1>Departments</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>
<li> > </li>
<li> <a href="{{ url('gericare-hospital') }}">Hospitals </a></li>
<li> > </li>
<li><a href="{{ url('gericare-hospital#departments') }}">Department</a></li>
<li> > </li>
<li class="active">Vascular Surgery</li>
</ul>
</div>

</div>
</div>
</section> 

<section class="doctors-page">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10"> 

<div class="vertical-tabdetails">

<div class="vertical-tabdetails">
    @include('website.departments.department-sidebar') 
</div>

  <div class="tab-content" id="v-pills-tabContent">    
      <div class="" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
        <h4>Vascular Surgery</h4>
          <div class="department-content">
            <p>The vascular surgery department offers advanced surgical interventions and Personalised treatment plans to address age-related vascular conditions such as peripheral vascular diseases.</p>
          </div>
          <hr>  
        <h4>Our Doctors</h4>
        <div class="dctrs-detls">
        <div class="dctrm-img">
        <img src="{{ asset('/public/website/assets/images/doctor-img-25.jpg') }}" alt="Geri Care Hospital" class="">
        </div>
        <div class="dctrm-deitals">
        <h3>Dr. Sairam</h3>
        <h4>Vascular Surgeon </h4>
        <h5> <img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="Geri Care Hospital" class=""> MBBS., MRCSED., DNG (Gen. Sur)</h5>
        <h5> <img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="Geri Care Hospital" class=""> Tamil, English   </h5>
        <a href="{{ url('dr-sairam') }}">Request an Appointment </a>
        <a href="{{ url('dr-sairam') }}">View Profile</a>
        </div>
        </div>
      </div>    
    <div class="dts-picx">
    <img src="{{ asset('/public/website/assets/images/dots.png') }}" alt="Geri Care Hospital" class="w-100">  
    </div>

  </div>
</div>

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
We are here to improve the <br> 
quality of your life.<br>
<span>To experience our care, call us today!</span>
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
Request a Call Back
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</section>

@endsection