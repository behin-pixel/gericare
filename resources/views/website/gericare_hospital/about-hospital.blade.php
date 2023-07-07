@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-1.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>State-of-the-art diagnostics meets
<span> compassionate care & treatment. </span> 
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li>></li>  
<li>Geri Care Hospitals</li>  
<li>></li>     
<li class="active">About Hospital</li>    
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
<h2>India’s 1<sup>st</sup> Multi-speciality Hospital<br> envisioned by 
Expert Geriatricians</h2>
</div>
<div class="seconday-paragraph text-center">
Pioneers in multi-speciality, exclusively dedicated to the healthcare requirements of the elderly, Geri Care understands the complexities and common health conditions associated with aging - Dementia, Cardiovascular diseases, Arthritis, and Mobility issues to name a few - and it is this specialized knowledge that helps us tailor plans and preventive measures.<br> <br> 

Equipped with state-of-the-art diagnostic facilities, specialized equipment, and cutting-edge technology to support accurate diagnosis and effective treatment, our hospitals offer a comprehensive range of services encompassing preventive care, chronic disease management, acute care, 
and post-operative care.<br> <br> 

The key focus areas of our specialization include medication management, fall prevention, pain management, and palliative care and it is here that our expertise is best reflected by way of best possible care. 
</div>
</div>

<div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="" class="" />
<h4> Meet our Experts </h4>
<p> Choose a Geriatric Expert for a Consultation </p>
<a href="{{ url('our-doctors') }}"> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="" class="" />
<h4> Locate your Hospital </h4>
<p> Choose a Hospital that is closest<br> to your home </p>
<a href="#add-res-bar"> View On Maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="" class="" />
<h4> Book an Appointment </h4>
<p> Schedule an appointment as per <br>your health requirement </p>
<a href="{{ url('book-appointment') }}"> Book Your Appointment <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

</div>

</div>

</div>
</div>
</section>


<section class="care-fromus p-0">
<div class="container">
<div class="row">

<div class="col-lg-12 age-bars">

<div class="row">

<div class="col-lg-6">

</div>

<div class="col-lg-6">
    
<div class="common-heading">
<h2>Why Choose Geri Care?</h2>
</div>

<div class="age-stemp">

<div class="age-layer">
<h4>Expert Geriatricians </h4>
<p>Our geriatric professionals have received training from reputable institutions & served as Consultants in prestigious hospitals in the UK</p>
</div>

<div class="age-layer">
<h4>Multi-disciplinary Approach</h4>
<p>We bring cutting-edge research and innovative approaches to the forefront of excellence in geriatric care.</p>
</div>

<div class="age-layer">
<h4>Unique Health Culture</h4>
<p>We are valued for our holistic approach and tailored treatment plans that form part of a holistic healing experience.</p>
</div>

<div class="age-layer">
<h4>Continuity of Care</h4>
<p>We adopt a continued and uninterrupted approach to treatments, that is unique to Geri Care.</p>
</div>

</div> 

</div>

</div>

</div>

<a  id="hospital-facilities"></a>
</div>
</div>
</section>


<!-- <section class="gericare-services">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Our Services</h2>
</div>

<div class="servce-strture">

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="" class="" />
<h4>24x7 Emergency & Trauma</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="" class="" />
<h4>On-Call Ambulance Services</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<h4>Pharmacy</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-2.jpg') }}" alt="" class="" />
<h4>On-Call Ambulance Services</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-1.jpg') }}" alt="" class="" />
<h4>24x7 Emergency & Trauma</h4>
</div>

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/gericare-service-3.jpg') }}" alt="" class="" />
<h4>Pharmacy</h4>
</div>

</div>

</div>
</div>
</div>
</section> -->



<section class="world-facilities">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-5">

<div class="common-heading text-start">
<h2>World Class facilities<br>
chosen for you</h2>
</div>

<div class="common-para text-start">
<p class="mb-0">At Geri Care, we have invested in state-of-the-art<br> facilities and world class amenities to<br> ensure quality, accurate and reliable<br> services to the elders, who require a positive<br> mindset and emotional support.</p>
</div>

</div>

<div class="col-lg-7">

<div class="facilities-slider text-end">

<!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/facility-1.jpg') }}" alt="" class="">
<span>State of the art ICU</span>
</div>  -->

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/2d-echo-usg-doppler.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>2D Echo/USG/Doppler</span>
<p>Instant radiology imaging services help our patients and doctors to treat patient effectively.</p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/day-care.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Day care</span>
<p>Day care procedures are carefully planned, efficiently executed, and typically involve minimal risk and recovery time, allowing patients to return home on the same day.</p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/ambulance-service.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Ambulance services</span>
<p> Ambulance Service offers swift & reliable emergency medical transportation, ensuring prompt response and expert care during critical and non-emergency situations.</p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/icu.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>State-of-the-art ICU </span>
<p>Geriatric ICU setup combines advanced technology and specialized intensive care to address the unique needs of senior citizens with a focus on their comfort, safety & recovery.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/op-ip.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>OP-IP services</span>
<p> OP-IP services offer expert medical attention and support, with the flexibility to transition smoothly from outpatient consultations to inpatient care, that is uninterrupted.</p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/ctscan.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Advanced CT Scan</span>
<p>Our CT scan services offer fast and precise imaging, enabling effective medical interventions and improved patient care.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/health-checkup.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Health check up</span>
<p>Geriatric Preventive Health Checks offer a thorough evaluation of physical, cognitive, and emotional health, empowering older adults to proactively manage their well-being.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/lab-services.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Lab services</span>
<p>Our state-of-the-art lab services for accurate and timely diagnostic testing, ensuring precise results to guide your healthcare decisions at the comfort of your home. </p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/elder-rooms.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Elder friendly rooms</span>
<p>Experience a welcoming and inclusive environment in our Elder-Friendly Rooms, specifically tailored to support the well-being of elderly patients, in a safe setting.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/pharmacy.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Pharmacy</span>
<p>Our experienced pharmacists provide accurate medication dispensing, medication therapy management, and helpful guidance, alongwith discounted home delivery services.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/laminar-air-flow-ot.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Laminar Air Flow OT</span>
<p>Ensuring a high level of cleanliness and air quality, our Laminar Airflow OT utilizes filtered airflow systems to create a controlled and sterile surgical environment.</p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/home-checkup.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Home health checkup</span>
<p>Experience the convenience of Home Health Checkup, where our skilled healthcare professionals provide comprehensive medical assessments in the comfort of your own home.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/geriatric-physiotherapy.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Geriatric Physiotherapy</span>
<p>By tailoring treatment plans to individual needs, geriatric physiotherapy helps older adults regain or maintain their physical abilities, enhancing their overall well-being.</p>
</div>
</div>  

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/dietitian-curated.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Dietitian curated elder friendly diet</span>
<p>With a focus on nourishment and taste, our Elder-Friendly Diet offers carefully planned meals that are easy to chew, digest, and packed with essential nutrients.</p>
</div>
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/dental-services.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Dental services at hospital and at home</span>
<p>Our Geriatric Dental Service provides specialized oral care for older adults, addressing age-related dental concerns with gentle expertise and a compassionate approach.</p>
</div>
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/treadmill-test.jpg') }}" alt="" class="">
<div class="facity-content-underimg">
<span>Treadmill Test (TMT)</span>
<p>Our TMT services provide valuable insights into cardiac health, assessing the heart's performance, diagnosing heart conditions and determining appropriate treatment plans.</p>
</div>
</div>

</div>

</div>

<a  id="hospital-departments"></a>
</div>
</div>
</section>

<section class="gericare-deprtmnts">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Our Departments</h2>
</div>

<div class="col-lg-12">
<div class="gentric-systems">

<ul>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Oncology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Cardiology  </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-9.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Urology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-10.png') }}" alt="" class=""> 
  </div>
  <span> Geriatric Psychiatry </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> Gasteroentrology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Orthogeriatrics </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="" class=""> 
  </div>
  <span> Neurology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
  </div>
  <span> Surgery </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Pulmonology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-16.png') }}" alt="" class=""> 
  </div>
  <span> ICU </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-11.png') }}" alt="" class=""> 
  </div>
  <span> Dermatology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-12.png') }}" alt="" class=""> 
  </div>
  <span> Vascular Surgery </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-13.png') }}" alt="" class=""> 
  </div>
  <span> Uro Gynaecology </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
  </div>
  <span> Lab Services </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-14.png') }}" alt="" class=""> 
  </div>
  <span> Physiotherapy </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-15.png') }}" alt="" class=""> 
  </div>
  <span> Nephrology and Dialysis 24x7 </span>    
</li>

</ul> 

</div> 

</div>

</div>

</div>
</div>
</section>

<section class="panel-of-experts">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Our Panel of Expert Doctors</h2>
</div>

<div class="panell-drts">

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-2.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr N. Lakshmipathy Ramesh</h4>
<span>Senior Consultant Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href="{{ url('dr-lakshmipathy-ramesh') }}"> Book Appointment </a>
<a href="{{ url('dr-lakshmipathy-ramesh') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-1.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. V. Srinivas</h4>
<span>Senior Consultant Geriatrician</span>
</div> 
<div class="de-detl-btn">
<!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
<a href="{{ url('dr-srinivas') }}">Book Appointment</a>
<a href="{{ url('dr-srinivas') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-3.jpg') }}" alt="" class="">
<div class="de-detl">
<h4> Dr. Magesh R</h4>
<span>Consultant Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href="{{ url('dr-magesh ') }}"> Book Appointment </a>
<a href="{{ url('dr-magesh ') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/doctor-img-3.jpg') }}" alt="Dr. Ashwin Subramaniam, Senior Consultant- Internal Medicine & Diabetologist" class="">
<div class="de-detl">
<h4>Dr. Ashwin</h4>
<span> Physician & Diabetologist </span>
</div> 
<div class="de-detl-btn">
<a href="#"> Book Appointment </a>
<a href=""> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div>

<div class="dr-panel">
<img src="{{ asset('/public/website/assets/images/gericare-doctor-5.jpg') }}" alt="" class="">
<div class="de-detl">
<h4>Dr. Vasanth</h4>
<span>Consultant Geriatrician</span>
</div> 
<div class="de-detl-btn">
<a href="{{ url('dr-vasanth') }}"> Book Appointment </a>
<a href="{{ url('dr-vasanth') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
</div>
</div> 

</div>

<div class="cmn-brdrd-btn text-center">
<a href="{{ url('our-doctors') }}"> View All Doctors </a>
</div>

</div>

<a id="add-res-bar"></a>
<a  id="locations"></a>
</div>
</div>
</section>


<section class="location-fixer">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-3">
<div class="common-heading text-start">
<h2>Our <br> Location</h2>
</div>
</div>

<div class="col-lg-9"> 

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/location-gericare-1.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Hospital - T. Nagar </h4>
 <p>No.8, Dr. Nair Road, Behind Vani mahal,<br>
T. Nagar, Chennai 600017</p>
<a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank"> View on map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/hospital-loc-1.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Hospital - Adambakkam </h4>
<p>100 Feet Velachery Inner Ring Road, Ward F, Block 17, Adambakkam,
Chennai, Tamil Nadu 600088</p>
<a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank"> View on map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>
</div> 

</div>

</div>



<div class="ambulance-runing text-end mt-5">
<h4>24x7 Emergency Ambulance Available <br> Call Us at: <span>+91 44 4061 4061</span></h4>

<div class="ambuloo">
<img src="{{ asset('/public/website/assets/images/ambulance-servie.gif') }}" alt="" class="" />
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
Bring You Peace of Mind<br>
<span>To experience it, call us today.</span>
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