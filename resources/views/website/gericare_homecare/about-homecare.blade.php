@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner-homecare.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>India’s 1<sup>st</sup> Home Care
<span>run by Qualified & Reliable 
Geriatricians </span>
</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>   
<li>></li>  
<li>Home Care</li>  
<li>></li>     
<li class="active">About Home Care</li>    
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="home-gericare">
<div class="container">
<div class="row">

<div class="col-lg-12">
<div class="common-heading text-center">
<h2>Comprehensive Geriatric Home Care Services <br> for your Loved Ones at Home</h2>
</div>
<div class="seconday-paragraph text-center">
At <a href="https://www.gericare.in/">Geri Care</a>, we visit the patient's home, and conduct comprehensive evaluation to assess their overall health and well-being. <br>This includes assessing the patient's medical history, conducting physical examinations, evaluating their living conditions, functional status, and social support.<br> 

<br>Our care plans involve collaboration with a multi-disciplinary team consisting of doctors, nurses, physiotherapists, <br>and caregivers to execute the plan and improve the quality of life for the elderly patient.<br>
 
<br>Additionally, the team can provide counseling to the family if they are uncertain about hospitalizing their loved ones.<br>

Geri Care has been delivering affordable and reliable care in the comfort of the patients’ homes, since 2018. We visit homes, conduct comprehensive evaluations to assess the overall health and well-being by studying the medical history, conducting physical examinations, evaluating their living conditions, functional status, and tailoring social support.<br><br>
Our care plans involve collaboration with a multi-disciplinary team consisting of doctors, nurses, physiotherapists, and caregivers to execute the plan and improve the quality of life for the elderly patient. Additionally, our team also offers counseling to the family if they are uncertain about hospitalising their loved ones. 
</div>
</div>



<div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="Geri Care Hospital" class="" />
<h4> Meet Our Experts </h4>
<p> Select a doctor and schedule <br>an appointment</p>
<a href="{{ url('our-doctors') }}"> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
<h4> Access Our Locations </h4>
<p> No:21, 1st Avenue, Indira Nagar, Adyar, Chennai - 600 020  </p>
<a href="https://www.google.com/maps/place/Geri+Care+%7C+Home+Care+%26+Consultation/@12.999337,80.251917,17z/data=!4m6!3m5!1s0x3a5267853522f365:0x1dc3e7d7a2a95d9!8m2!3d12.999337!4d80.2541057!16s%2Fg%2F11gx_ff6bb?entry=tts&shorturl=1" target="_blank"> View On Map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="Geri Care Hospital" class="" />
<h4> Book a Visit </h4>
<p> Book your appointment with us for a smooth and hassle-free experience </p>
<a href="{{ url('book-an-appointment') }}"> Book Your Appointment <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

</div>

<!-- <div class="ambulance-runing text-end">
<h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

<div class="ambuloo">
<img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}" alt="Geri Care Hospital" class="" />
</div>

</div> -->

</div>
</div>
</div>
</section>  

<section class="prcess-img text-center pt-0">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12">

<picture>
  <source media="(min-width:800px)" srcset="{{ asset('/public/website/assets/images/hme-cre.jpg') }}">
  <img src="{{ asset('/public/website/assets/images/hme-cre-mob.jpg') }}"  class="img-responsive" alt="Geri Care Hospital" > 
</picture>

</div>


<a id="homecare-services"></a>
</div>
</div>
</section>


<section class="gericare-services">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2> Home Care that Suits You </h2>
</div>

<div class="servce-strture"> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Geriatric-Physiotherapy-at-Home.jpg') }}" alt="Physiotherapist For Home Visits" class="" />
<div class="minrester">
<h4>Geriatric Physiotherapy at Home</h4>
<p>Geriatric physiotherapy involves specialised physical therapy techniques ...</p>
<a href="{{ url('physio-care') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Psychiatrist-Home-Visit.jpg') }}" alt="Geriatric Physiotherapy at Home" class="" />
<div class="minrester">
<h4>Psychiatrist Home Visits</h4>
<p>During these visits, our psychiatrist will assess symptoms, prescribe appropriate medications ...</p>
<a href="{{ url('psychiatrist-for-home-visit') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Orthopedician-Home-Visit.jpg') }}" alt="Orthopedic specialists visit patients" class="" />
<div class="minrester">
<h4>Orthopedician Home Visits</h4>
<p>Our Orthopedic specialists visit patients at their homes to assess and manage ...</p>
<a href="{{ url('orthopedician-home-visit') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Dentist-Home-Visit.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="minrester">
<h4>Dentist Home Visits</h4>
<p> Our Geriatric Dentistry expert offers dental care at the patient's home, by performing ...</p>
<a href="{{ url('dentist-at-home') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/IV-Fluids-Monitoring.jpg') }}" alt="iv fluids monitoring services at home" class="" />
<div class="minrester">
<h4>IV Fluids Monitoring</h4>
<p>In certain situations, such as dehydration or specific medical conditions, the administration ...</p>
<a href="{{ url('iv-fluids-monitoring') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Urinary-Catheterization.jpg') }}" alt="Urinary catheterisation at Home" class="" />
<div class="minrester">
<h4>Urinary Catheterization</h4>
<p>When appropriate, our professionals can perform urinary catheterization at home. ...</p>
<a href="{{ url('urinary-catheterization-at-home') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Outpatient-Antibiotic-Administration.jpg') }}" alt="Outpatient parenteral antimicrobial therapy at Home" class="" />
<div class="minrester">
<h4>Outpatient Antibiotic Administration </h4>
<p>In cases where patients require intravenous antibiotic therapy but do not need ...</p>
<a href="{{ url('outpatient-parenteral-antimicrobial-administration') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Wound-Care-and-Dressing.jpg') }}" alt="Wound Care And Dressing " class="" />
<div class="minrester">
<h4>Wound Care & Dressing</h4>
<p>Skilled healthcare professionals can provide wound care and dressing services ...</p>
<a href="{{ url('wound-care-dressing') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/ECG-at-Home.jpg') }}" alt="ECG at Home" class="" />
<div class="minrester">
<h4>ECG at Home</h4>
<p>Electrocardiogram (ECG) is a common diagnostic test for assessing heart function. ...</p>
<a href="{{ url('ecg-test-at-home') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Skilled-Nursing-Care.jpg') }}" alt="Skilled Nursing Care at Home" class="" />
<div class="minrester">
<h4>Skilled Nursing Care</h4>
<p>Our skilled nurses can perform various medical tasks, including wound care, ...</p>
<a href="{{ url('nursing-care') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Home-Sample-Collection.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="minrester">
<h4>Home Sample Collection</h4>
<p>To avoid the inconvenience of visiting a laboratory or clinic, healthcare  ...</p>
<a href="{{ url('nursing-care') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Live-in-Care.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="minrester">
<h4>Live-in Care</h4>
<p>For patients who require round-the-clock care, nursing attendants can ...</p>
<a href="{{ url('live-in-elderly-care') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Care-for-Bedridden-Patients.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="minrester">
<h4>Care for Bedridden Patients</h4>
<p> Our skilled nurses and nursing attendants can provide care for bedridden ...</p>
<a href="{{ url('care-for-bedridden-elderly-at-home') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
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
To experience a method of care<br> 
that gives you a sense of freedom...<br>
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

<section class="why-love">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Patient Success Stories</h2>
</div>

<div class="google-revews">   


  @foreach ($testimonial as $testimonials)

  <div class="revew-box text-center">

    <div class="rev-rat d-flex align-items-center justify-content-center">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/star.png') }}" alt="Geri Care Hospital" class="">
    <img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="Geri Care Hospital" class="">
    </div>
    <div class="rev-cnt">
      {!! $testimonials['description'] !!}
   
    </div>
    <div class="rev-img">
    <h4> {{$testimonials['title']}}<span> {{$testimonials['designation']}} </span></h4>
    </div>
    <div class="rev-goog d-flex align-items-center justify-content-center">



      <!-- <img src="{{ asset($testimonials["photo"]) }}" alt="Geri Care Hospital" class="">


    <img src="{{ asset(Storage::url("app/{$testimonials["photo"]}")) }}"  /> -->
    <img src="{{ asset('/public/website/assets/images/gog.png') }}"  />
 
    </div>
    
    </div>
    
  @endforeach 

</div>

</div>

</div>

</div> 
</section>


@include('website.bottomform')

@include('website.mobilebottomform')

@endsection