@extends('website.layout.welcome')
@section('content') 

<div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="true" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{ asset('/public/website/assets/images/banners/Banner-1.jpg') }}" alt="" class="desky w-100 d-none d-lg-block" />
      <img src="{{ asset('/public/website/assets/images/banners/Mobile-Banner-1.jpg') }}" alt="" class="desky w-100 d-block d-lg-none" />
      
      <img src="{{ asset('/public/website/assets/images/banners/Mobile-Banner-1.jpg') }}" alt="" class="moby w-100 d-block d-lg-none" />
      <div class="carousel-caption animated animatedFadeInUp fadeInUp">
        <h1 class="text-blue">Entrust yourself with Geriatricians</h1>
        <span class="text-blue">in the most comforting environment.</span>
    <a href="{{ url('/gericare-hospital/hospital-doctors') }}">Explore More</a>
      </div>
    </div> 

<div class="carousel-item">
  <img src="{{ asset('/public/website/assets/images/banners/Banner-2.jpg') }}" alt="" class="w-100 d-none d-lg-block" />
  <img src="{{ asset('/public/website/assets/images/banners/Mobile-Banner-2.jpg') }}" alt="" class="w-100 d-block d-lg-none" />
  <div class="carousel-caption animated animatedFadeInUp fadeInUp">
    <h1 class="text-blue">Meet the experts of 360 care</h1>
    <span class="text-blue">that reflects passion & utmost respect!</span>
        <a href="{{ url('/gericare-hospital/about-hospital') }}">Explore More</a>
  </div>
</div> 

<div class="carousel-item">
  <img src="{{ asset('/public/website/assets/images/banners/Banner-3.jpg') }}" alt="" class="w-100 d-none d-lg-block" />
  <img src="{{ asset('/public/website/assets/images/banners/Mobile-Banner-3.jpg') }}" alt="" class="w-100 d-block d-lg-none" />
  <div class="carousel-caption animated animatedFadeInUp fadeInUp">
    <h1 class="text-blue">Care that lasts forever</h1>
    <span class="text-blue">and a sense of personal freedom.</span>
    <a href="{{ url('/gericare-assisted-living/about-assisted-living') }}">Explore More</a>
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

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-2.png') }}" alt="">
</div>
<span>Where internationally renowned Geriatricians take a multidisciplinary and passionate approach to the treatment and rehabilitation of seniors.</span>
<div class="red-mre">
<a href="{{ url('/gericare-hospital/about-hospital') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt=""></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Hospitals.jpg') }}" alt="" class="w-100">
</div>
</div>

</div>
</div>  

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-1.png') }}" alt="">
</div>
<span>Enjoy a first-of-its-kind, 24 x 7 Assisted Living & Skilled Nursing Home services, under the expert care of Geriatricians.</span>
<div class="red-mre">
<a href="{{ url('/gericare-assisted-living/about-assisted-living') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt=""></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Assisted-Living.jpg') }}" alt="" class="w-100">
</div>
</div>

</div>
</div>  

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-4.png') }}" alt="">
</div>
<span>Get expert geriatric care in a peripheral clinic, and avoid long waiting hours in hospitals for minor issues.</span>
<div class="red-mre">
<a href="{{ url('/gericare-clinics/about-clinics') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt=""></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Clinics.jpg') }}" alt="" class="w-100">
</div>
</div>

</div>
</div>  

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-3.png') }}" alt="">
</div>
<span>Get immediate and timely care from our experts in the comfort of your home. Book your appointment with our doctors for comprehensive consulting.</span>
<div class="red-mre">
<a href="{{ url('/gericare-homecare/about-homecare') }}">Read More <img src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt=""></div></a>
</div>
</div> 

<div class="col-lg-6 p-0">
<div class="full-deg-img">
<img src="{{ asset('/public/website/assets/images/Geri-Care-Homecare.jpg') }}" alt="" class="w-100">
</div>
</div>

</div>
</div>

</div>

</div>
</section>

<section class="expert-care">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> 
<div class="expert-cnt">
<div class="common-heading">
<h2>Transforming Lives through Personalized Care</h2>
</div>

<div class="common-para">
<p>Geri Care, a name that resonates with comprehensive medical, nursing and physiotherapy treatments, has been operating in the realm of specialised geriatric care services for more than three decades. </p>
</div>

<div class="common-button drk">
<a href="{{ url('/gericare-hospital/about-hospital') }}">Know More</a>
</div>

</div>
</div>

<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"> 
<div class="expert-img">
<img src="{{ asset('/public/website/assets/images/expert.jpg') }}" alt="" class="w-100">
<div class="gertiarics">
<img src="{{ asset('/public/website/assets/images/hand.png') }}" alt="" class="">
<span>3+ Decades of Experience</span>
</div>
</div>
</div>

</div>
</div>
</section>

<!-- <section class="call-to-acttion">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12">
<div class="primary-bg">
<div class="call-box text-end">
<h4>24x7 Ambulance Service Available</h4>
<div class="common-button">
<a href="tel:+914440614061"><img src="{{ asset('/public/website/assets/images/call.png') }}" alt="" class=""> +91 44 4061 4061</a>
</div>

<div class="ablan-ce">
<img src="{{ asset('/public/website/assets/images/ambulance.gif') }}" alt="" class="">
</div>
</div>
</div>
</div>

</div>
</div>
</section> -->

<!-- <section class="why-love">
<div class="container">
<div class="row justify-content-center">

<div class="col-lg-10">
<div class="common-heading text-center">
<h2>Why People Love Us</h2>
</div>

<div class="vertical-tabdetails">

<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="1">
    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">24x7 Availability</button>
    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Decades of Experience</button>
    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">360° Personalized Care</button>
    <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">Expert Geriatricians</button>
    <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">Best-in-Class Staff</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
     
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/hospitalo.jpg') }}" alt="" class="w-100">
    <div class="skills-cnt">
    <span>Round-the-clock availability, ensuring that patients receive immediate care and attention.</span>  
    </div>
    </div>

    </div>

    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
        
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/hospitalo-1.jpg') }}" alt="" class="w-100">
    <div class="skills-cnt">
    <span>Long-standing experience in treating and managing the unique medical needs of older adults.</span>  
    </div>
    </div>

    </div>

    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
      
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/360-personalized-care.jpg') }}" alt="" class="w-100">
    <div class="skills-cnt">
    <span>Comprehensive and customised treatment plans that are unique and enriching for seniors.</span>  
    </div>
    </div>

    </div>

    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab"> 
      
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/expert-geriatricians.jpg') }}" alt="" class="w-100">
    <div class="skills-cnt">
    <span>Medical professionals with extensive knowledge and experience in treating elderly patients.</span>  
    </div>
    </div>
  
    </div>

    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab"> 
            
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/best-in-class-staff.jpg') }}" alt="" class="w-100">
    <div class="skills-cnt">
    <span>Dedicated and skilled staff that works collaboratively to ensure comfort and well-being.</span>  
    </div>
    </div>

    </div>

    <div class="dts-picx">
    <img src="{{ asset('/public/website/assets/images/dots.png') }}" alt="" class="w-100">  
    </div>

  </div>
</div>

</div>

</div>

</div>
</div>
</section> -->

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
A five star hospital in all aspects. Wonderful care by Doctors. Caring Nurse and meticulous housekeeping. The hospital is very clean and neat. Thank Dr N Lakshmiapthy Ramesh and Dr A. Ashwin Subramaniam for their treatment. My 83 years father with Covid positive, pnemonia and is now  ready  to get back home.  A reliable hospital who has excellent coordination within their department.
</div>
<div class="rev-img">
<h4>Geetha VEdaraman <span> Chennai </span></h4>
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
Geri care is the best hospital for elderly. They take utmost care of the elderly and don't admit patients unnecessarily. Uma Maheshwari OP's timely help led us to consult Dr.Ashwin who is very professional,motivating and kind.
</div>
<div class="rev-img">
<h4>Thara Somesh <span> Chennai </span></h4>
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
Geri care hospital doctors, nurses, physios,insurance team and the entire staff are curtious. I wanted to thank Dr. LPR, Dr Ashwin, Dr Guru Balaji, Nursing staff Jhansi in OP, Prakash (Physio), Nurse Bharathi amd team who have supported my father over the past few years.
</div>
<div class="rev-img">
<h4>Karthick Venkatraman <span> Chennai </span></h4>
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
Fantastic service from hospital staff including all doctors.Special mention to Dr UP Srinivas , Surgical Gastroenterologist . Extremely kind and compassionate towards patients. Responds to all queries patiently and spends time explaining the problem and the proposed treatment. Also would like to appreciate the friendly and supportive insurance staff(Monica). Overall thumbs up to the team.
</div>
<div class="rev-img">
<h4>Deepa Shivakumar <span> Chennai </span></h4>
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
This hospital is a blessing in disguise. Human emotions and care are given priority. Dr. Rejiv Rajendran, Dr.Kadhiresan and Dr. Rajkumar treatment my mother with utmost care and competency. All the staff and nurses are very kind and courteous. Reg Insurance, Monika does a neat job every time. She is very kind and right on time. Overall, Gericare is a blessing for elders.
</div>
<div class="rev-img">
<h4>Anuradha Madhan <span> Chennai </span></h4>
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
Ideal hospital for senior citizens. Not crowded and you get excellent personal attention. Dr. Ashwin Subramaniam and Dr. Guru Balaji were awesome. Support staff were very courteous. Specific mention to be made of Ms. Monica who handles insurance. She is efficient and gets things organised on time - prerequisite for senior citizens.
</div>
<div class="rev-img">
<h4>Sreenivasan Janakiraman <span> Chennai </span></h4>
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

<section class="kind-geriatric">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 text-center">
<div class="common-heading">
<h2>One-of-a-kind Geriatric Care</h2>
</div>
<div class="common-para">
<p>Introducing India's first-ever multi-specialty hospital designed exclusively for senior citizens, offering<br> a comprehensive range of specialized medical services tailored to meet the unique healthcare needs of seniors.</p>
</div> 

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
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Orthogeriatrics </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> Gasteroentrology </span>    
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
  <img src="{{ asset('/public/website/assets/images/icn-10.png') }}" alt="" class=""> 
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

<div class="common-button drk text-center">
<a href="{{ url('/gericare-hospital/hospital-department') }}">Explore Our Departments</a>
</div>

</div>

</div>
</div>
</section>


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
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="" class="w-100"> 
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
<img src="{{ asset('/public/website/assets/images/grp-2.jpg') }}" alt="" class="w-100"> 
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
<img src="{{ asset('/public/website/assets/images/grp-3.jpg') }}" alt="" class="w-100"> 
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
<h2>Geri Care Diaries</h2>
</div>

<div class="blogs-strture">

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-1.jpg') }}" alt="" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>India’s Leading Geriatricians now in your parent’s Living Room!</h4>
<p>According to Indian Ageing Report 2017, 12 crore adults – almost the population of Japan....</p>
<a href="https://www.gericare.in/blog/general/indias-leading-geriatricians-now-in-your-parents-living-room/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-2.jpg') }}" alt="" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>Are you forgetting Dementia?</h4>
<p>Dr.K.Vasanth MD (Geriatrics) about memory problems in elderly. I have memory loss!! ... </p>
<a href="https://www.gericare.in/blog/general/are-you-forgetting-dementia/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-3.jpg') }}" alt="" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>Some Myths of Aging</h4>
<p>Dr.K.Vasanth MD (Geriatrics) about some false assumptions of ageing. 1. All elderly people ...</p>
<a href="https://www.gericare.in/blog/general/some-mythos-of-ageing/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div> 

<div class="main-srvcestr">
<img src="{{ asset('/public/website/assets/images/blog-img-4.jpg') }}" alt="" class="" />
<div class="dmy">
Nov 04 2019
</div>
<div class="minrester">
<h4>Feel at Home with India’s First Homecare run by Specialist Geriatricians</h4>
<p>We know what it feels like to leave aging parents home alone during an important official visit. We....</p>
<a href="https://www.gericare.in/blog/general/feel-at-home-with-indias-first-homecare-run-by-specialist-geriatricians/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="" class="" /></a>
</div>
</div> 

</div>

</div>

</div>
</div>
</section>  


@include('website.bottomform')


<section class="mobile-only-view call-acton">
<div class="container">
<div class="row">

<div class="col-lg-12">

<span>
24x7 Ambulance Service Available
</span>

<div class="common-button">
<a href=""><img src="{{ asset('/public/website/assets/images/call.png') }}" alt="" class=""> +91 44 4061 4061</a>
</div>

</div>

</div>
</div>
</section>

<section class="mobile-only-view people-lovers">
<div class="container">
<div class="row">

<div class="col-lg-12"> 

<div class="common-heading text-center">
<h2>Why People Love Us</h2>
</div>

<div class="text-center mb-20">
<img src="{{ asset('/public/website/assets/images/people-love.png') }}" alt="" class="w-100">
</div>

</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-1.png') }}" alt="" class=""> Decades of Experience </h4>
<p>Decades of experience bring the latest medical practices and technologies together for the best possible care.</p>
</div>
</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-2.png') }}" alt="" class=""> 24x7 Availability </h4>
<p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for elderly patients.</p>
</div>
</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-3.png') }}" alt="" class=""> Expert Geriatricians</h4>
<p>Our team of expert geriatricians provides high-quality care to our patients.</p>
</div>
</div>

<div class="col-lg-12">
<div class="pept-cnt">
<h4><img src="{{ asset('/public/website/assets/images/dec-4.png') }}" alt="" class=""> Best-in-Class Staff</h4>
<p>We employ the best-in-class staff dedicated to providing exceptional care to our patients.</p>
</div>
</div>

</div>
</div>
</section>

<section class="mobile-only-view kind-geritaic-center">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="common-heading text-center">
<h2>One of a Kind Geriatric Care</h2>
</div>

<div class="common-para text-center">
<p>Introducing India's first-ever multi-specialty hospital designed exclusively for senior citizens, offering a comprehensive range of specialized medical services tailored to meet the unique healthcare needs of seniors.</p>
</div>

</div>

<div class="col-lg-12 text-center">
 
<div class="secdry-pra">
<h3>Our Departments</h3>
</div>

<div class="geriatic-care">

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobile-Geriatric-Cardiology.jpg') }}" alt="" class="w-100">
<div class="ger-cntnt text-start">
<h4>Geriatric Cardiology</h4>
<p>This is a field of medicine that specializes on the treatment of heart diseases in older patients.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class=""></a>
</div>
</div>

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobile--Geriatric-Oncology.jpg') }}" alt="" class="w-100">
<div class="ger-cntnt text-start">
<h4>Geriatric Oncology</h4>
<p>This field of medicine focuses on the diagnosis and treatment of cancer in older patients.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class=""></a>
</div>
</div>

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobile-Radiation-Oncology.jpg') }}" alt="" class="w-100">
<div class="ger-cntnt text-start">
<h4>Radiation Oncology</h4>
<p>This field of medicine focuses on the treatment of cancer using high-energy radiation.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class=""></a>
</div>
</div>

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/mobile--Gastroenterology.jpg') }}" alt="" class="w-100">
<div class="ger-cntnt text-start">
<h4>Gastroenterology</h4>
<p>This medical specialty focuses on the diagnosis and treatment of diseases and disorders affecting the digestive system.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class=""></a>
</div>
</div>

<div class="ger-care">
<img src="{{ asset('/public/website/assets/images/Mobie--Orthogeriatrics.jpg') }}" alt="" class="w-100">
<div class="ger-cntnt text-start">
<h4>Orthogeriatrics</h4>
<p>This field of medicine focuses on the care of elderly patients who have suffered orthopedic injuries.</p>
<a href="">Read More <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class=""></a>
</div>
</div>

</div>

<div class="common-button drk">
<a href="">Explore Gericare Hospitals</a>
</div>

</div>

</div>
</div>
</section>

<section class="mobile-only-view press-rpomm">
<div class="container">
<div class="row">
 
<div class="col-lg-12 text-center">
 
<div class="common-heading text-center">
<h2>From Our Press Room</h2>
</div>

<div class="press-detils">

<div class="press-cnt">
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="" class="w-100">
<div class="press-cntnt text-start">
<span>09 May 2023 </span>
<h4>First-of-its-kind Assisted Living center lauched in RA Puram </h4>
</div>
</div>

<div class="press-cnt">
<img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt="" class="w-100">
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
</section>


@include('website.mobilebottomform')

@include('website.bottommap')


@endsection