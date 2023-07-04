@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner-homecare.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>India’s First Home Care
<span>run by Qualified & Reliable<br>
Geriatricians </span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
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
<h2>Comprehensive Geriatric Care <br>at Home for your Loved Ones</h2>
</div>
<div class="seconday-paragraph text-center">
At Geri Care, we conduct comprehensive evaluation at the patient's home to assess their overall health and well-being. <br>This evaluation includes assessing the patient's medical history, conducting physical examinations, evaluating their living conditions, functional status, and social support.<br> 

<br>Our care plans involve collaboration with a multidisciplinary team consisting of doctors, nurses, physiotherapists, <br>and caregivers to execute the plan and improve the quality of life for the elderly patient.<br>
 
<br>Additionally, the team can provide counseling to the family if they are uncertain about hospitalizing their loved ones.<br>

Our experienced caregivers have been delivering affordable and reliable care in the comfort of patients’ homes since 2018.
</div>
</div>



<div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="" class="" />
<h4> Meet Our Experts </h4>
<p> Select a doctor and schedule <br>an appointment. </p>
<a href="{{ url('/gericare-hospital/hospital-doctors') }}"> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="" class="" />
<h4> Access our Location </h4>
<p> No.8, Dr. Nair Road, Behind Vani Mahal, T.Nagar, Chennai - 600 017 </p>
<a href="{{ url('contact-us') }}"> View On Maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="" class="" />
<h4> Book a Visit </h4>
<p> Book your appointment with us for a smooth and hassle free experience </p>
<a href="{{ url('book-appointment') }}"> Book Your Appointment <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

</div>

<!-- <div class="ambulance-runing text-end">
<h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

<div class="ambuloo">
<img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}" alt="" class="" />
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
  <source media="(min-width:800px)" srcset="{{ asset('/public/website/assets/images/hme-cre.png') }}">
  <img src="{{ asset('/public/website/assets/images/hme-cre-mob.png') }}"  class="img-responsive" alt="" > 
</picture>

</div>


<a id="servce-weofr"></a>
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
<img src="{{ asset('/public/website/assets/images/Geriatric-Physiotherapy-at-Home.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Geriatric Physiotherapy at Home</h4>
<p>Geriatric physiotherapy involves specialized physical therapy techniques ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/geriatric-physiotherapy-at-home') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Psychiatrist-Home-Visit.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Psychiatrist Home Visits</h4>
<p>During these visits, our psychiatrist will assess symptoms, prescribe appropriate medications ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/psychiatrist-home-visit') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Orthopedician-Home-Visit.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Orthopedician Home Visits</h4>
<p>Our Orthopedic specialists visit patients at their homes to assess and manage ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/orthopedician-home-visit') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Dentist-Home-Visit.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Dentist Home Visits</h4>
<p> Our Geriatric Dentistry expert offers dental care at the patient's home, by performing ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/dentist-home-visit') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/IV-Fluids-Monitoring.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>IV Fluids Monitoring</h4>
<p>In certain situations, such as dehydration or specific medical conditions, the administration ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/iv-fluids-monitoring') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Urinary-Catheterization.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Urinary Catheterization</h4>
<p>When appropriate, our professionals can perform urinary catheterization at home. ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/urinary-catheterization') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Outpatient-Antibiotic-Administration.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Outpatient Antibiotic Administration </h4>
<p>In cases where patients require intravenous antibiotic therapy but do not need ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/outpatient-antibiotic-administration') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Wound-Care-and-Dressing.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Wound Care & Dressing</h4>
<p>Skilled healthcare professionals can provide wound care and dressing services ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/wound-care-dressing') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/ECG-at-Home.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>ECG at Home</h4>
<p>Electrocardiogram (ECG) is a common diagnostic test for assessing heart function. ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/ecg-at-home') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Skilled-Nursing-Care.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Skilled Nursing Care</h4>
<p>Our skilled nurses can perform various medical tasks, including wound care, ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/skilled-nursing-care') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Home-Sample-Collection.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Home Sample Collection</h4>
<p>To avoid the inconvenience of visiting a laboratory or clinic, healthcare  ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/home-sample-collection') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Live-in-Care.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Live-in Care</h4>
<p>For patients who require round-the-clock care, nursing attendants can ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/live-in-care') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/Care-for-Bedridden-Patients.jpg') }}" alt="" class="" />
<div class="minrester">
<h4>Care for Bedridden Patients</h4>
<p> Our skilled nurses and nursing attendants can provide care for bedridden ...</p>
<a href="{{ url('/gericare-homecare/service-we-offer/care-for-bedridden-patients') }}">Know More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
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
We do whatever it takes <br> 
to bring you peace of mind.<br>
To enjoy your freedom, call us today.
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="pseofmnd-lst text-end">
<ul>
<li>
<a href="">
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

<section class="why-love">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Why People Love Us</h2>
</div>

<div class="google-revews">   

<div class="revew-box text-center">

<div class="rev-rat d-flex align-items-center justify-content-center">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>
<div class="rev-cnt">
“One of the best places for doctors of top notch quality for senior citizens. The care that the attenders show, the best of doctors in geriatric care, the facilities are all very satisfying.. home visits are also very comfortable.. our goto place for geriatric care!”
</div>
<div class="rev-img">
<h4>Aparna Subramanian <span> Chennai </span></h4>
</div>
<div class="rev-goog d-flex align-items-center justify-content-center">
<img src="{{ asset('/public/website/assets/images/gog.png') }}" alt="" class="">
</div>

</div>    

<div class="revew-box text-center">

<div class="rev-rat d-flex align-items-center justify-content-center">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>
<div class="rev-cnt">
“We used a variety of Geri Care services in my father's last weeks: doctor visits, nursing care, attendants, equipment rental, and attending to medical situations as they came up. For every one of these, we were very happy with the quality of care, the prompt communications and the extremely professional manner in which everything was handled. It made a very difficult time easier to deal with. I would recommend Geri Care very highly and without reservation.”
</div>
<div class="rev-img">
<h4>Pakku Thaath <span> Chennai </span></h4>
</div>
<div class="rev-goog d-flex align-items-center justify-content-center">
<img src="{{ asset('/public/website/assets/images/gog.png') }}" alt="" class="">
</div>

</div>     

<div class="revew-box text-center">

<div class="rev-rat d-flex align-items-center justify-content-center">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>
<div class="rev-cnt">
Extremely satisfied with both the quality of caregivers and the supervisory support. All caregivers were extremely professional, sincere, committed and diligent.
</div>
<div class="rev-img">
<h4>P Venkatesh <span> Chennai </span></h4>
</div>
<div class="rev-goog d-flex align-items-center justify-content-center">
<img src="{{ asset('/public/website/assets/images/gog.png') }}" alt="" class="">
</div>

</div> 

</div>

</div>

</div>

</div> 
</section>


@include('website.bottomform')

@include('website.mobilebottomform')

@endsection