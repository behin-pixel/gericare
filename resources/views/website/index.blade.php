@extends('website.layout.welcome')
@section('content') 

<div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="true" >
   <div class="carousel-indicators">
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>  

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{ asset('/public/website/assets/images/banners/main-banners/banner-1.webp') }}" alt="Geri Care Hospital" class="desky w-100 d-none d-lg-block" />
      <img src="{{ asset('/public/website/assets/images/banners/main-banners/mobile-banner-1.webp') }}" alt="Geri Care Hospital" class="desky w-100 d-block d-lg-none" />
      
      <img src="{{ asset('/public/website/assets/images/banners/main-banners/mobile-banner-1.webp') }}" alt="Geri Care Hospital" class="moby w-100 d-block d-lg-none" />
      <div class="carousel-caption animated animatedFadeInUp fadeInUp">
        <h1 class="text-blue">Transforming Lives</h1>
          <span class="text-blue">through personalised care</span> 
       <span class="text-light">We Are Geri Care</span>  
      </div>
    </div> 

 <div class="carousel-item">
  <img src="{{ asset('/public/website/assets/images/banners/main-banners/banner-2.webp') }}" alt="Geri Care Hospital" class="w-100 d-none d-lg-block" />
  <img src="{{ asset('/public/website/assets/images/banners/main-banners/mobile-banner-2.webp') }}" alt="Geri Care Hospital" class="w-100 d-block d-lg-none" />
  <div class="carousel-caption animated animatedFadeInUp fadeInUp">
    <h1 class="text-blue">Making Life Easier</h1>
    <span class="text-blue">for seniors & their families</span>
        <a href="{{ url('homecare') }}">Explore Our Home Care Services</a>
  </div>
</div> 

<div class="carousel-item">
  <img src="{{ asset('/public/website/assets/images/banners/main-banners/banner-3.jpg') }}" alt="Geri Care Hospital" class="w-100 d-none d-lg-block" />
  <img src="{{ asset('/public/website/assets/images/banners/main-banners/mobile-banner-3.jpg') }}" alt="Geri Care Hospital" class="w-100 d-block d-lg-none" />
  <div class="carousel-caption animated animatedFadeInUp fadeInUp">
    <h1 class="text-blue">India's 1<sup>st</sup> Multi-Speciality Hospital for Senior Citizens</h1>
    <span class="text-blue">T. Nagar | Adambakkam</span>
    <a href="{{ url('gericare-hospital') }}">Explore More</a>
  </div>
</div>   

<div class="carousel-item">
 <img src="{{ asset('/public/website/assets/images/banners/main-banners/banner-4.webp') }}" alt="Geri Care Hospital" class="w-100 d-none d-lg-block" />
 <img src="{{ asset('/public/website/assets/images/banners/main-banners/mobile-banner-4.webp') }}" alt="Geri Care Hospital" class="w-100 d-block d-lg-none" />
 <div class="carousel-caption animated animatedFadeInUp fadeInUp">
   <h1 class="text-blue">Experience Expert Treatment</h1>
   <span class="text-blue">at Geri Care</span>
       <a href="{{ url('about-clinics') }}">Explore More</a>
 </div>
</div>  

<div class="carousel-item">
 <img src="{{ asset('/public/website/assets/images/banners/main-banners/banner-5.webp') }}" alt="Geri Care Hospital" class="w-100 d-none d-lg-block" />
 <img src="{{ asset('/public/website/assets/images/banners/main-banners/mobile-banner-5.webp') }}" alt="Geri Care Hospital" class="w-100 d-block d-lg-none" />
 <div class="carousel-caption animated animatedFadeInUp fadeInUp">
   <h1 class="text-blue">A Caring Home,</h1>
   <span class="text-blue">away from home</span>
       <a href="{{ url('assisted-living') }}">Explore Our Assisted Living Services</a>
 </div>
</div> 


  </div> 
</div>

<section class="gericare-degree">
<div class="container">

<div class="row"> 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="common-heading text-center">
<h2>Care comes 360° at Geri Care</h2>
</div>
</div>

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-3.png') }}" alt="Geri Care Hospital">
</div>
<p class="d-flex align-items-center text-color"><img src="{{ asset('/public/website/assets/images/lo.png') }}" class="location-logo">Across Chennai</p>
<span>Get immediate and timely care from our experts in the comfort of your home. Book your appointment with our doctors for comprehensive consulting.</span>
<div class="red-mre">
<a href="{{ url('homecare') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt="Geri Care Hospital"></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Homecare.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

</div>
</div>

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-2.png') }}" alt="Geri Care Hospital">
</div>
<p class="d-flex align-items-center text-color"><img src="{{ asset('/public/website/assets/images/lo.png') }}" class="location-logo"><a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank">T Nagar,</a> <a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank">Adambakkam</a></p>
<span>Where internationally renowned Geriatricians take a multidisciplinary and passionate approach to the treatment and rehabilitation of seniors.</span>
<div class="red-mre">
<a href="{{ url('gericare-hospital') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt="Geri Care Hospital"></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Hospitals.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

</div>
</div>  

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-4.png') }}" alt="Geri Care Hospital">
</div>
<p class="d-flex align-items-center text-color"><img src="{{ asset('/public/website/assets/images/lo.png') }}" class="location-logo"><a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank">Adyar,</a> <a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank">Anna nagar</a></p>
<span>Walk into the best geriatric clinic in the city and say hello to exceptional treatment,  undivided attention <br> and long-lasting care.</span>
<div class="red-mre">
<a href="{{ url('about-clinics') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt="Geri Care Hospital"></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Clinics.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

</div>
</div> 

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-1.png') }}" alt="Geri Care Hospital">
</div>
<p class="d-flex align-items-center text-color"><img src="{{ asset('/public/website/assets/images/lo.png') }}" class="location-logo"><a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank">Thoraipakam,</a> <a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank">RA Puram</a></p>
<span>Experience the first-of-its-kind, 24x7 Assisted Living & Skilled Nursing services combined with decades <br>of geriatric expertise.</span>
<div class="red-mre">
<a href="{{ url('assisted-living') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt="Geri Care Hospital"></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Assisted-Living.jpg') }}" alt="Geri Care Hospital" class="w-100">
</div>
</div>

</div>
</div>   

</div>

</div>
</section>

<!-- <section class="expert-care">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> 
<div class="expert-cnt">
<div class="common-heading">
<h2>Transforming Lives through Personalised Care</h2>
</div>

<div class="common-para">
<p>Geri Care, a name that resonates with extensive medical, nursing and physiotherapy treatments has been operating in the realm of specialised geriatric care services for more than three decades now. </p>
</div>

<div class="common-button drk">
<a href="{{ url('gericare-hospital') }}">Know More</a>
</div>

</div>
</div>

<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"> 
<div class="expert-img">
<img src="{{ asset('/public/website/assets/images/expert.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="gertiarics">
<img src="{{ asset('/public/website/assets/images/hand.png') }}" alt="Geri Care Hospital" class="">
<span>3+ Decades of Experience</span>
</div>
</div>
</div>

</div>
</div>
</section> -->

<!-- <section class="call-to-acttion">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12">
<div class="primary-bg">
<div class="call-box text-end">
<h4>24x7 Ambulance Service Available</h4>
<div class="common-button">
<a href="tel:+914440614061"><img src="{{ asset('/public/website/assets/images/call.png') }}" alt="Geri Care Hospital" class=""> +91 44 4061 4061</a>
</div>

<div class="ablan-ce">
<img src="{{ asset('/public/website/assets/images/ambulance.gif') }}" alt="Geri Care Hospital" class="">
</div>
</div>
</div>
</div>

</div>
</div>
</section> -->

<section class="care-fromus p-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 age-bars">

                    <div class="row">

                        <div class="col-lg-6">
                           <img src="{{ asset('/public/website/assets/images/age-nurse.png') }}" alt="Geri Care Hospital" class="w-100 mobile-view">  
                        </div>

                        <div class="col-lg-6">

                            <div class="common-heading">
                                <h2>Why Choose Geri Care?</h2>
                            </div>

                            <div class="age-stemp">

                                <div class="age-layer">
                                    <h4>Expert Geriatricians</h4>
                                    <p>Our experts have undergone exemplary training at renowned institutions including Madras Medical College (MMC) in Chennai and the All India Institute of Medical Sciences (AIIMS) in New Delhi. Additionally, they have gained valuable experience as consultants in esteemed hospitals overseas, particularly in the United Kingdom (UK).</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Continuity of Care</h4>
                                    <p>From clinical interventions to comprehensive hospital treatments, and post
                                        hospitalization home care services along with assisted living options, we ensure
                                        continuous medical support and comfort 24/7.</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Multi-disciplinary Approach</h4>
                                    <p>We bring cutting-edge research and innovative approaches that reflect geriatric excellence and help transform not just the lives of the elderly, but also their loved ones and family members.</p>
                                </div>

                                <div class="age-layer">
                                    <h4>Unique Healthcare Culture</h4>
                                    <p>We take pride over a culture that prioritizes tailored treatment plans & comprehensive care to ensure remarkable treatments along with a positive experience that helps the elderly recover and heal at ease.</p>
                                </div>



                            </div>

                        </div>

                    </div>

                </div>

                <a id="hospital-facilities"></a>
            </div>
        </div>
</section>
<section class="panel-of-experts">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>Meet Our Doctors</h2>
                    </div>

                    <div class="panell-drts">

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-n-lakshmipathy-ramesh.webp') }}"
                                alt="Dr N. Lakshmipathy Ramesh - Senior Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. N. Lakshmipathy Ramesh</h4>
                                <span>Senior Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-lakshmipathy-ramesh') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-lakshmipathy-ramesh') }}"> Doctor's Profile</a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/gericare-doctor-1.jpg') }}"
                                alt="Geri Care Hospital" class="">
                            <div class="de-detl">
                                <h4>Dr. V. Srinivas</h4>
                                <span>Senior Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <!-- <a href="{{ url('book-appointment') }}"> Book Appointment </a> -->
                                <a href="{{ url('dr-srinivas') }}">Request an Appointment</a>
                                <a href="{{ url('dr-srinivas') }}"> Doctor's Profile</a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-mageshr.webp') }}"
                                alt="Dr. Magesh R - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4> Dr. Magesh R</h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-magesh ') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-magesh') }}"> Doctor's Profile</a>
                                <!-- <a href="{{ url('dr-magesh ') }}"> <i class="fa fa-eye" aria-hidden="true"></i> </a> -->
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-ashwin-subramaniam.webp') }}"
                                alt="Dr. Ashwin Subramaniam, Senior Consultant- Internal Medicine & Diabetologist"
                                class="">
                            <div class="de-detl">
                                <h4>Dr. Ashwin</h4>
                                <span> Physician & Diabetologist </span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-ashwin-subramaniam') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-ashwin-subramaniam') }}"> Doctor's Profile</a>
                            </div>
                        </div>

                        <div class="dr-panel">
                            <img src="{{ asset('/public/website/assets/images/dr-k-vasanth.webp') }}"
                                alt="Dr. K. Vasanth - Consultant Geriatrician" class="">
                            <div class="de-detl">
                                <h4>Dr. Vasanth</h4>
                                <span>Consultant Geriatrician</span>
                            </div>
                            <div class="de-detl-btn">
                                <a href="{{ url('dr-vasanth') }}"> Request an Appointment </a>
                                <a href="{{ url('dr-vasanth') }}"> Doctor's Profile</a>
                            </div>
                        </div>

                    </div>

                    <div class="cmn-brdrd-btn text-center">
                        <a href="{{ url('our-doctors') }}"> View All Doctors </a>
                    </div>

                </div>

                <a id="add-res-bar"></a>
                <a id="locations"></a>
            </div>
        </div>
</section>
<section class="light-color">
   <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
            <div class="common-heading text-center">
              <h2>A Glimpse into Geri Care</h2>
            </div>
            <a data-fancybox="gallery1" href="https://www.youtube.com/watch?v=gHMbu9wWx-A" data-caption="Geri Care - True 360 degree care for Senior Citizens">
              <img src="{{ asset('/public/website/assets/images/glimpse.jpg') }}" alt="Geri Care Hospital" class="img-fluid">
            </a>
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
  @foreach ($testimonial as $testimonials )

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

<!-- <section class="kind-geriatric">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 text-center">
<div class="common-heading">
<h2>One-of-a-kind Geriatric Care</h2>
</div>
<div class="common-para">
<p>Introducing India's 1<sup>st</sup> ever multi-specialty hospital designed exclusively for senior citizens, offering<br> a comprehensive range of specialised medical services tailored to meet their unique healthcare needs.</p>
</div> 

</div>

<div class="col-lg-12">
<div class="gentric-systems">

<ul>

<li>
<a href="{{ url('hospital-departments') }}">
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/icn-18.png') }}" alt="Geri Care Hospital" class=""> 
</div>
<span> Geriatric Medicine </span>
</a>      
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-cardiology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Geriatric Cardiology  </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-ortho-geriatrics') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Ortho Geriatrics </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-10.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Geriatric Psychiatry </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-neurolgy') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span>Geriatric Neurology </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-surgery') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span>Geriatric Surgery </span> 
</a>    
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-oncology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Geriatric Oncology </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-urology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-9.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Geriatric Urology </span> 
</a>    
</li>



<li>
<a href="{{ url('hospital-departments/#department-gasteroentrology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Gastroenterology</span>  
</a>   
</li>


<li>
<a href="{{ url('hospital-departments/#department-pulmonology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Pulmonology </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-icu') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-16.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span>Geriatric ICU </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-dermatology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-11.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Dermatology </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-vascular-surgery') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-12.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Vascular Surgery </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-uro-gynaecology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-13.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Uro Gynaecology </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-nephrology') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-15.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Nephrology and Dialysis 24x7 </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-17.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> ENT </span>   
</a>  
</li>

<li>
<a href="{{ url('hospital-departments') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-20.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Ophthalmology </span>   
</a>  
</li>

<li>
<a href="{{ url('hospital-departments') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-21.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Dentistry </span>  
</a>   
</li>

<li>
<a href="{{ url('hospital-departments/#department-geriatric-physiotherapy') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-14.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span>Geriatric Physiotherapy </span> 
</a>    
</li>

<li>
<a href="{{ url('hospital-departments/#department-lab-services') }}">
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-22.png') }}" alt="Geri Care Hospital" class=""> 
  </div>
  <span> Lab Services </span> 
</a>   
</li>





</ul>  

</div>

<div class="common-button drk text-center">
<a href="{{ url('hospital-departments') }}">Explore Our Departments</a>
</div>

</div>

</div>
</div>
</section> -->


<!-- <section class="press-room text-center">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading">
<h2>From Our Press Room</h2>
</div>

<div class="grps-stemp">

<div class="grp-str">
<div class="grp-img">
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="Geri Care Hospital" class="w-100"> 
<div class="post-dte">
<h4>19<span>Nov</span></h4>
</div>
</div>
<div class="grp-cnt text-start">
<span><a href="#">Inauguration Of Gericare Hospital Tnagar – Exclusively for senior citizens </a></span>
</div>
</div>

<div class="grp-str">
<div class="grp-img">
<img src="{{ asset('/public/website/assets/images/grp-2.jpg') }}" alt="Geri Care Hospital" class="w-100"> 
<div class="post-dte">
<h4>19<span>Nov</span></h4>
</div>
</div>
<div class="grp-cnt text-start">
<span><a href="https://www.thehindu.com/news/cities/chennai/specialiased-hospital-for-geriatric-care-launched-in-chennai/article33133381.ece" target="_blank">Specialised hospital for geriatric care launched in Chennai</a></span>
</div>
</div>

<div class="grp-str">
<div class="grp-img">
<img src="{{ asset('/public/website/assets/images/grp-3.jpg') }}" alt="Geri Care Hospital" class="w-100"> 
<div class="post-dte">
<h4>20<span>Nov</span></h4>
</div>
</div>
<div class="grp-cnt text-start">
<span><a href="https://www.nyoooz.com/news/chennai/1523714/improving-quality-of-life-of-elders-news-today/" target="_blank">Improving quality of life of elders News Today</a></span>
</div>
</div>

</div>

</div> 

</div>
</div>
</section> -->

<section class="gericare-services blog-datas">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>Blogs From Our Experts</h2>
</div>

<div class="blogs-strture">

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-1.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>India’s Leading Geriatricians now in your Parent’s Living Room!</h4>
<p>According to Indian Ageing Report 2017, 12 crore adults – almost the population of Japan....</p>
<a href="https://www.gericare.in/blog/general/indias-leading-geriatricians-now-in-your-parents-living-room/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-2.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>Are you forgetting Dementia?</h4>
<p>Dr.K.Vasanth MD (Geriatrics) about memory problems in elderly. I have memory loss!! ... </p>
<a href="https://www.gericare.in/blog/general/are-you-forgetting-dementia/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-3.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>Some Myths about Aging</h4>
<p>Dr.K.Vasanth MD (Geriatrics) about some false assumptions of ageing. 1. All elderly people ...</p>
<a href="https://www.gericare.in/blog/gericare/some-myths-of-aging/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-4.jpg') }}" alt="Geri Care Hospital" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>Feel at Home with India’s 1<sup>st</sup> Homecare run by Specialist Geriatricians</h4>
<p>We know what it feels like to leave aging parents home alone during an important official visit. We....</p>
<a href="https://www.gericare.in/blog/general/feel-at-home-with-indias-first-homecare-run-by-specialist-geriatricians/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div> 

</div>

</div>

</div>
</div>
</section>  
<section class="p-0 hme-map-half">
   <div class="container-fluid">
     <div class="row">
      <div class="col-lg-6">
        @include('website.bottommap')
      </div>
       <div class="col-lg-6 text-start map-section minserten">
          <div class="common-heading">
              <h2 class="mb-4">Geri Care Locations</h2>
          </div>
          
          <div class="row">
            <div class="col-lg-12">
              <a class="hospital-btn hs" href="{{ url('gericare-hospital') }}"> Hospital </a>
            </div>
               <div class="col-md-6 col-lg-5 col-xl-4 t-nagar line">
                  <h3>T.Nagar</h3>
                  <p class="mb-2"> 
                      No.8, Dr.Nair road, Behind Vani mahal,
                      T. Nagar, Chennai - 600 017
                    </p>
                    <a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="Geri Care Hospital"></a>
                </div> 
              
              <div class="col-md-6 col-lg-7 col-xl-8 t-nagar left-space">
                  <h3>Adambakkam</h3>
                  <p class="mb-2"> 
                      100 Feet Adambakkam inner ring road,
                      Ward F,<br> Block 17, Adambakkam,
                      Chennai, Tamil Nadu 600088
                   </p>
                    <a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="Geri Care Hospital"></a> 
               </div>
          </div> 
          <div class="row">
            
            <div class="col-lg-12 mt-4">
              <a class="hospital-btn cli" href="{{ url('about-clinics') }}"> Clinics </a>
            </div>

               <div class="col-md-6 col-lg-5 col-xl-4 t-nagar line">
                  <h3>Adyar</h3>
                  <p class="mb-2"> 
                       No:21, 1st avenue, Indira Nagar,
                       Adyar, Chennai - 600 020
                    </p>
                    <a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="Geri Care Hospital"></a>
                    
                </div> 
              
              <div class="col-md-6 col-lg-7 col-xl-8 t-nagar left-space">
                  <h3>Anna Nagar</h3>
                  <p class="mb-2"> 
                      Plot no.3698, Q Block-100, 3rd<br> Avenue,
                      Anna Nagar, Chennai - 600 040
                   </p>
                    <a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="Geri Care Hospital"></a> 
               </div>
          </div> 
          <div class="row">
            <div class="col-lg-12 mt-4">
              <a class="hospital-btn ast" href="{{ url('assisted-living') }}"> Assisted Living </a>
            </div> 
               <div class="col-md-6 col-lg-5 col-xl-4 t-nagar lines">
                  <h3>RA Puram</h3>
                  <p class="mb-2"> 
                      New #10, Old #23, 7th Main Road,
                      RA Puram, Chennai - 600 028
                    </p>
                    <a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="Geri Care Hospital"></a>
                    <!-- <div class="mt-4">
                      <a class="hospital-btn" href="http://192.168.0.56/gericare/our-doctors"> Assisted Living </a>
                    </div>  -->
                </div> 
              
              <div class="col-md-6 col-lg-7 col-xl-8 t-nagar left-space">
                  <h3>Thoraipakkam</h3>
                  <p class="mb-2"> 
                      AKS Residency, Balamurugan Garden,
                      1st <br> Main Road Thoraipakkam,
                      Chennai - 600 097
                   </p>
                    <a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="http://192.168.0.56/gericare/public/website/assets/images/red.png" alt="Geri Care Hospital"></a> 
               </div>
          </div>  
       </div> 
     </div> 
   </div> 
</section>  


@include('website.bottombar')

<!-- <section class="mobile-only-view people-lovers">
<div class="container">
<div class="row">

<div class="col-lg-12"> 

<div class="common-heading text-center">
<h2>Why People Love Us</h2>
</div>

<div class="text-center mb-20">
<img src="{{ asset('/public/website/assets/images/people-love.png') }}" alt="Geri Care Hospital" class="w-100">
</div>

</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-1.png') }}" alt="Geri Care Hospital" class=""> Decades of Experience </h4>
<p>Decades of experience bring the latest medical practices and technologies together for the best possible care.</p>
</div>
</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-2.png') }}" alt="Geri Care Hospital" class=""> 24x7 Availability </h4>
<p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for elderly patients.</p>
</div>
</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-3.png') }}" alt="Geri Care Hospital" class=""> Expert Geriatricians</h4>
<p>Our team of expert geriatricians provides high-quality care to our patients.</p>
</div>
</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-4.png') }}" alt="Geri Care Hospital" class=""> Best-in-Class Staff</h4>
<p>We employ the best-in-class staff dedicated to providing exceptional care to our patients.</p>
</div>
</div>

</div>
</div>
</section> -->

<!-- <section class="mobile-only-view kind-geritaic-center">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>One of a Kind Geriatric Care</h2>
</div>

<div class="common-para text-center">
<p>Introducing India's first-ever multi-specialty hospital designed exclusively for senior citizens, offering a comprehensive range of specialised medical services tailored to meet the unique healthcare needs of seniors.</p>
</div>

</div>

<div class="col-lg-12 text-center">
 
<div class="secdry-pra">
<h3>Our Departments</h3>
</div>

<div class="geriatic-care">

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobile-Geriatric-Cardiology.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="ger-cntnt text-start">
<h4>Geriatric Oncology </h4>
<p>This is a field of medicine that specialises on the treatment of heart diseases in older patients.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class=""></a>
</div>
</div>

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobile--Geriatric-Oncology.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="ger-cntnt text-start">
<h4>Geriatric Oncology</h4>
<p>This field of medicine focuses on the diagnosis and treatment of cancer in older patients.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class=""></a>
</div>
</div> 

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/mobile--Gastroenterology.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="ger-cntnt text-start">
<h4>Gastroenterology</h4>
<p>This medical specialty focuses on the diagnosis and treatment of diseases and disorders affecting the digestive system.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class=""></a>
</div>
</div>

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobie--Orthogeriatrics.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="ger-cntnt text-start">
<h4>Orthogeriatrics</h4>
<p>This field of medicine focuses on the care of elderly patients who have suffered orthopedic injuries.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class=""></a>
</div>
</div>

</div>

<div class="common-button drk">
<a href="{{ url('hospital-departments') }}">Explore Our Departments</a>
</div>

</div>

</div>
</div>
</section> -->

<!-- <section class="mobile-only-view press-rpomm">
<div class="container">
<div class="row">
 
<div class="col-lg-12 text-center">
 
<div class="common-heading text-center">
<h2>From Our Press Room</h2>
</div>

<div class="press-detils">

<div class="press-cnt">
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="press-cntnt text-start">
<span>09 May 2023 </span>
<h4>First-of-its-kind Assisted Living center lauched in RA Puram </h4>
</div>
</div>

<div class="press-cnt">
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="Geri Care Hospital" class="w-100">
<div class="press-cntnt text-start">
<span>09 May 2023 </span>
<h4>First-of-its-kind Assisted Living center lauched in RA Puram </h4>
</div>
</div>

</div>

<div class="common-button drk">
<a href="">Vie All Posts</a>
</div>

</div>

</div>
</div>
</section> -->


@include('website.mobilebottomform')

<section class="mobile-only-view call-acton">
<div class="container">
<div class="row">

<div class="col-lg-12">

<span>
24x7 Ambulance Service Available
</span>

<div class="common-button">
<a href="tel:+914440614061" target="_blank"><img src="{{ asset('/public/website/assets/images/call.png') }}" alt="Geri Care Hospital" class=""> +91 44 4061 4061</a>
</div>

</div>

</div>
</div>
</section>
<!-- 
<div class="modal fade" id="popupvideo" tabindex="-1" aria-labelledby="exampleModalCenterTitle" >
	<div class="modal-dialog modal-lg modal-dialog-centered">
	  <div class="modal-content text-center"> 
		<div class="modal-header text-center"> 
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span>×</span>
							</button>
		  </div>
		<div class="modal-body" id="yt-player">
			<iframe width="100%" height="450" src="https://www.youtube.com/embed/tmBwgmxZEBM?rel=0&enablejsapi=1" title="Geri Care Hospital Adambakkam Launch" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	  </div>
	  </div>
	</div>
</div>  -->
 

@endsection

