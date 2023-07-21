@extends('website.layout.welcome')
@section('content') 

<div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="true" >
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{ asset('/public/website/assets/images/banners/banner-1.jpg') }}" alt="Geri Care Hospital" class="desky w-100 d-none d-lg-block" />
      <img src="{{ asset('/public/website/assets/images/banners/mobile-banner-1.jpg') }}" alt="Geri Care Hospital" class="desky w-100 d-block d-lg-none" />
      
      <img src="{{ asset('/public/website/assets/images/banners/mobile-banner-1.jpg') }}" alt="Geri Care Hospital" class="moby w-100 d-block d-lg-none" />
      <div class="carousel-caption animated animatedFadeInUp fadeInUp">
        <h1 class="text-blue">India's 1<sup>st</sup> Multi-Speciality Hospital for Senior Citizens launches its 2<sup></sup>nd</sup> hospital in Adambakkam. </h1>
        <!-- <span class="text-blue">for Senior Citizens Gericare Hospital Now in Adambakkam</span> -->
    <a href="{{ url('gericare-hospital') }}">Explore More</a>
      </div>
    </div> 

<!-- <div class="carousel-item">
  <img src="{{ asset('/public/website/assets/images/banners/Banner-2.jpg') }}" alt="Geri Care Hospital" class="w-100 d-none d-lg-block" />
  <img src="{{ asset('/public/website/assets/images/banners/Mobile-Banner-2.jpg') }}" alt="Geri Care Hospital" class="w-100 d-block d-lg-none" />
  <div class="carousel-caption animated animatedFadeInUp fadeInUp">
    <h1 class="text-blue">Meet the experts of 360 care</h1>
    <span class="text-blue">that reflects passion & utmost respect!</span>
        <a href="{{ url('gericare-hospital') }}">Explore More</a>
  </div>
</div> 

<div class="carousel-item">
  <img src="{{ asset('/public/website/assets/images/banners/Banner-3.jpg') }}" alt="Geri Care Hospital" class="w-100 d-none d-lg-block" />
  <img src="{{ asset('/public/website/assets/images/banners/Mobile-Banner-3.jpg') }}" alt="Geri Care Hospital" class="w-100 d-block d-lg-none" />
  <div class="carousel-caption animated animatedFadeInUp fadeInUp">
    <h1 class="text-blue">Care that lasts forever</h1>
    <span class="text-blue">and a sense of personal freedom.</span>
    <a href="{{ url('assisted-living') }}">Explore More</a>
  </div>
</div>  -->

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
<img src="{{ asset('/public/website/assets/images/logo-2.png') }}" alt="Geri Care Hospital">
</div>
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

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-1.png') }}" alt="Geri Care Hospital">
</div>
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

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-4.png') }}" alt="Geri Care Hospital">
</div>
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

<div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
<div class="row full-deg m-0">

<div class="col-lg-6 p-0">
<div class="full-deg-cnt">
<div class="logos-pot">
<img src="{{ asset('/public/website/assets/images/logo-3.png') }}" alt="Geri Care Hospital">
</div>
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

</div>

</div>
</section>

<section class="expert-care">
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
</section>

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
    <img src="{{ asset('/public/website/assets/images/hospitalo.jpg') }}" alt="Geri Care Hospital" class="w-100">
    <div class="skills-cnt">
    <span>Round-the-clock availability, ensuring that patients receive immediate care and attention.</span>  
    </div>
    </div>

    </div>

    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
        
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/hospitalo-1.jpg') }}" alt="Geri Care Hospital" class="w-100">
    <div class="skills-cnt">
    <span>Long-standing experience in treating and managing the unique medical needs of older adults.</span>  
    </div>
    </div>

    </div>

    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
      
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/360-personalized-care.jpg') }}" alt="Geri Care Hospital" class="w-100">
    <div class="skills-cnt">
    <span>Comprehensive and customised treatment plans that are unique and enriching for seniors.</span>  
    </div>
    </div>

    </div>

    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab"> 
      
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/expert-geriatricians.jpg') }}" alt="Geri Care Hospital" class="w-100">
    <div class="skills-cnt">
    <span>Medical professionals with extensive knowledge and experience in treating elderly patients.</span>  
    </div>
    </div>
  
    </div>

    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab"> 
            
    <div class="skills-img">
    <img src="{{ asset('/public/website/assets/images/best-in-class-staff.jpg') }}" alt="Geri Care Hospital" class="w-100">
    <div class="skills-cnt">
    <span>Dedicated and skilled staff that works collaboratively to ensure comfort and well-being.</span>  
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
</section> -->

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

<section class="kind-geriatric">
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
  <span> Gasteroentrology </span>  
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
<h2>Geri Care Diaries</h2>
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
<h4>Feel at Home with India’s 1st Homecare run by Specialist Geriatricians</h4>
<p>We know what it feels like to leave aging parents home alone during an important official visit. We....</p>
<a href="https://www.gericare.in/blog/general/feel-at-home-with-indias-first-homecare-run-by-specialist-geriatricians/" target="_blank">Read More <img src="{{ asset('/public/website/assets/images/red.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>
</div> 

</div>

</div>

</div>
</div>
</section>  


@include('website.bottomform')

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
  </div> 

@include('website.bottommap')

@endsection

