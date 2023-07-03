@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner-clinic.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Ensuring Comprehensive
<span>Care & Better Quality of Life <br>
in the later years.</span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li>></li>  
<li class="active">Clinics</li>    
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
<div class="seconday-paragraph text-center">
At Geri Care clinics, our approach to treatment is guided by senior Geriatricians who take a multidisciplinary approach. Our staff is specifically trained in medical, psychosocial, and preventive care that is tailored to the unique needs of older adults. <br><br>
By taking a holistic approach, we aim to improve the quality of life and overall wellness of not just our patients but also their families and caregivers. <br>

In addition to general medical care, we conduct comprehensive assessments and treatments for conditions that primarily affect older adults - such as memory loss, falls, urinary problems, vision and hearing loss, advance care planning, caregiver support, and medication safety. 
</div>
</div>



<div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="" class="" />
<h4> Meet our Experts </h4>
<p> Find a doctor for a comprehensive assessment of your health </p>
<a href="{{ url('/gericare-hospital/hospital-doctors') }}"> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="" class="" />
<h4> Locate our Clinic </h4>
<p> Experience the expert care of senior geriatricians near you  </p>
<a href="#add-res-bar"> View on maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="" class="" />
<h4> Book an Appointment </h4>
<p> Schedule a meeting with our family of caregivers. </p>
<a href="{{ url('book-appointment') }}"> Book Your Appointment <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

</div> 

</div>
<a id="clinic"></a>
</div>
</div>
</section> 


<section class="abt-the-clinic text-center pt-0">
<div class="container">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="common-heading text-center">
<h2>Our Clinics</h2>
</div>

<div class="clinics-lsts">

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Falls-prevention-(Osteoporosis)-clinic.jpg') }}" alt="" class="w-100" />
<h4>Falls prevention (Osteoporosis) clinic</h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Our Falls Clinic offers specialized care for individuals at risk of falls, providing comprehensive assessments, personalized interventions, and preventive strategies to enhance mobility and reduce fall-related injuries</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Memory-clinic.jpg') }}" alt="" class="w-100" />
<h4>Memory clinic</h4>
<div class="clnc-dtt">
<h5>Memory clinic</h5>
<p>At our Memory Clinic, Psychiatrists working closely with Geriatricians, specialize in memory assessment and management, providing compassionate care and innovative therapies to improve cognitive function, enhance quality of life, and support individuals and their families through the challenges of memory impairment and dementia.</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Incontinence-clinic-(Urinary).jpg') }}" alt="" class="w-100" />
<h4>Incontinence clinic (Urinary)</h4>
<div class="clnc-dtt">
<h5>Incontinence clinic (Urinary)</h5>
<p>Our Incontinence Clinic with Geriatrician and Urologist offers specialized care for individuals experiencing urinary or fecal incontinence, providing thorough assessments, tailored treatment plans, and supportive interventions to improve bladder and bowel control</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Preventive-Geriatric-health-check.jpg') }}" alt="" class="w-100" />
<h4>Preventive Geriatric health check</h4>
<div class="clnc-dtt">
<h5>Preventive Geriatric health check</h5>
<p>Designed to address the unique health needs of elderly individuals, our Geriatric Preventive Health Checks offer a thorough evaluation of physical, cognitive, and emotional health, empowering older adults to proactively manage their well-being and enjoy a higher quality of life.</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Adult-vaccination-clinic.jpg') }}" alt="" class="w-100" />
<h4>Adult vaccination clinic</h4>
<div class="clnc-dtt">
<h5>Adult vaccination clinic</h5>
<p>Adult Vaccination Clinic provides comprehensive immunization services for adults, offering a wide range of vaccines to protect against infectious diseases such as pneumonia, flu, tetanus, shingles etc. </p>
</div>
</div>

<!-- <div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Dementia-care.jpg') }}" alt="" class="w-100" />
<h4>Dementia care </h4>
<div class="clnc-dtt">
<h5>Falls prevention (Osteoporosis) clinic</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget egestas mattis eu quis amet. Justo volutpat malesuad</p>
</div>
</div> -->

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Seniors-Diabetic-clinic.jpg') }}" alt="" class="w-100" />
<h4>Seniors Diabetic clinic</h4>
<div class="clnc-dtt">
<h5>Seniors Diabetic clinic</h5>
<p>At our Seniors Diabetic Clinic, we understand the unique challenges of diabetes in older adults and provide expert care, helping seniors effectively manage their diabetes, prevent complications, and improve their quality of life.</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Hypertension-clinic.jpg') }}" alt="" class="w-100" />
<h4>Hypertension clinic</h4>
<div class="clnc-dtt">
<h5>Hypertension clinic</h5>
<p>Hypertension Clinic offers specialized care for individuals with high blood pressure, providing comprehensive assessments, personalized treatment plans, and lifestyle modifications to effectively manage hypertension and reduce cardiovascular risks</p>
</div>
</div>

<div class="cliinc-detlis">
<img src="{{ asset('/public/website/assets/images/Sleep-disorder-Clinic.jpg') }}" alt="" class="w-100" />
<h4>Sleep disorder Clinic</h4>
<div class="clnc-dtt">
<h5>Sleep disorder Clinic</h5>
<p>At our Sleep Disorder Clinic, we provide comprehensive care and innovative therapies to address sleep disorders, aiming to improve sleep patterns, enhance daytime functioning, and promote optimal sleep hygiene</p>
</div>
</div>

</div>

</div>

<a id="add-res-bar"></a>
<a id="locations"></a>
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
<img src="{{ asset('/public/website/assets/images/location-gericare-3.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Clinics - Adyar </h4>
 <p>21, 1st avenue, Indira Nagar, <br> Adyar, Chennai 600020</p>
<!-- <p> No.8, Dr. Nair Road, Behind Vani<br> Mahal, T.Nagar, Chennai - 600 017 </p> -->
<a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank"> View on map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/location-gericare-4.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Clinics - Anna Nagar </h4>
<p>Plot no.3698, Q Block-100, 3rd Avenue, <br> Anna Nagar, Chennai, Tamil Nadu 600040
</p>
<!-- <p> 100 Feet Velachery, 100 Feet Rd, Ward F,<br> Block 17, Adambakkam, Chennai - 600 088 </p> -->
<a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank"> View on map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
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
We do whatever it takes to improve the quality of your life. 
To experience our care, call us today!
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
<a href="">
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


@include('website.bottomformclinic')

@include('website.mobilebottomform')

@endsection