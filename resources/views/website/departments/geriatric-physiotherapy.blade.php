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
<li class="active">Geriatric Physiotherapy</li>
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
    @include('website.departments.department-sidebar') 
</div> 

  <div class="tab-content" id="v-pills-tabContent">
    
    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

    <h4>Geriatric Physiotherapy</h4>
    <div class="department-content">
           <p>Our Geriatric physiotherapists utilize a holistic approach, combining exercises, manual therapy, and other therapeutic techniques to address age-related conditions. Treatment plans are tailored to individual needs to help adults regain and maintain their physical abilities.</p>
    </div>
   
    <div class="call-and-attend"><br><br>
      <ul>
      <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Request a Callback</a></li>    
      <li><a href="tel:+914440614061">Call Us at <span>+91 44 4061 4061</span></a></li>    
      </ul>
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