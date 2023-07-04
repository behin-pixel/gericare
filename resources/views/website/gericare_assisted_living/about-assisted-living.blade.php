@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner-assisted.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>India’s First 24/7
<span>Assisted Living & Skilled Nursing <br>
under the expert care of Geriatricans</span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li>></li>  
<li>Assisted Living</li>  
<li>></li>     
<li class="active">About Assisted Living</li>    
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
<h2>State-of-the-art residential arrangements <br>
to assist those in need. </h2>
</div>
<div class="seconday-paragraph text-center">
In a revolutionary attempt, we at Geri Care offer 24/7 Assisted Living designed to cater to the specific needs of older adults who require medical attention and support in their day to day lives. 
Our facility houses a comprehensive range of services and amenities that provide residents with utmost comfort, safety and a homely atmosphere under the supervision of professional experts. The constant availability of care helps alleviate concerns and provides peace of mind to both residents and their families.<br>
</div>
</div>



<div class="col-lg-12">

<div class="serveces-doctrs">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-1.png') }}" alt="" class="" />
<h4> Meet our Experts  </h4>
<p> Interact with our Assisted Living <br>team of experts. </p>
<a href="{{ url('/gericare-hospital/hospital-doctors') }}"> View All Doctors <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="" class="" />
<h4> Locate our Facility </h4>
<p> Find an Assisted Living Center <br>near your home </p>
<a href="#add-res-bar"> View On Maps <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-3.png') }}" alt="" class="" />
<h4> Book your visit </h4>
<p> Schedule an appointment to <br>check out our facility </p>
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
  <source media="(min-width: 800px)" srcset="{{ asset('/public/website/assets/images/ass.jpg') }}">
  <img src="{{ asset('/public/website/assets/images/ass-mob.png') }}"  class="img-responsive" alt="" > 
</picture>

</div>

<a id="servce-cre"></a>
</div>
</div>
</section>

<section class="server-ces text-center pb-0">
<div class="container">

<div class="row align-items-center">

<div class="common-heading">
<h2>Our Services</h2>
</div>

</div>
</div>

</section>

<div class="adrenaline">

<section class="event-layer bg-layer-1">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/Respite-Care-transformed.jpeg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Respite Care </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p>Recognizing the high burden that falls on caregivers, Geri Care Assisted Living provides a supportive environment where frail older individuals requiring continuous supervision can be taken care of. This allows caregivers to take a break, attend functions, or visit relatives out of town, knowing that their loved ones are in caring hands.</p>
</div> 
			  
</div>
</div>

</div>
</div>
</section>  

<section class="event-layer bg-layer-2 cont-right">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists text-end">
<img class="resp-onsive" src="{{ asset('/public/website/assets/images/Rehabilitative-_-Restorative-care-transformed.jpeg') }}" alt="" >
<div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<h2> Rehabilitative & Restorative Care </h2>
</div>

<div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<p>By providing in-house specialist physiotherapy services, Geri Care Assisted Living ensures that residents have ease of access to vital rehabilitative and restorative services, which eliminates the need for residents to travel to external therapy centers, reducing any potential inconvenience or discomfort associated with travel. </p>
</div>
			  
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

</div>
</div>
</section> 

<section class="event-layer bg-layer-3">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/Dementia-care-transformed.jpeg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Dementia Care </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p>At Geri Care, we acknowledge the unique challenges faced by individuals with Dementia/Alzheimer's and tailored plans to cater to their specific needs. Our person-centered approach takes into account personal history, preferences, and abilities, and ensures that residents feel valued, respected, and empowered in their daily lives.</p>
</div> 
			  
</div>
</div>

</div>
</div>
</section>  

<section class="event-layer bg-layer-4 cont-right">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists text-end">
<img class="resp-onsive" src="{{ asset('/public/website/assets/images/Transitional-Care-transformed.jpeg') }}" alt="" >
<div class="common-heads text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<h2> Transitional Care  </h2>
</div>

<div class="common-parra text-drk aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<p>At Geri Care, we aim to facilitate a safe and successful transition for individuals after hospitalization, minimizing the risk of readmissions, preventing complications, improving overall health outcomes, and enhancing quality of lives. </p>
</div>
			  
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

</div>
</div>
</section> 

<section class="event-layer bg-layer-5">
<div class="container">

<div class="row align-items-center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="spotlght-lists">

<img class="resp-onsive" src="{{ asset('/public/website/assets/images/Palliative-Care-transformed.jpeg') }}" alt="" >

<div class="common-heads aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<h2> Palliative Care </h2>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
<p>At Geri Care, we recognise the importance of geriatric palliative care in enhancing the quality of life for elderly individuals confronting serious illnesses. This specialized care approach focuses on addressing their physical, emotional, and social needs while taking into account the complexities associated with aging.</p>
</div>

<div class="common-parra aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
<p> </p>
</div> 
			  
</div>
</div>
<a id="ass-faci"></a>
</div>
</div>
</section>   

</div>

<section class="our-faacilities text-center">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    

<div class="common-heading">
<h2>Our Facilities</h2>
</div>
<div class="gentric-systems">

<ul>

<li>
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt="" class=""> 
</div>
<span> Daily Doctor visit </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt="" class=""> 
  </div>
  <span> Medication management </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt="" class=""> 
  </div>
  <span> 24 x 7 skilled nursing availability </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt="" class=""> 
  </div>
  <span> Nutritiously Curated Food </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt="" class=""> 
  </div>
  <span> Weekly Geriatrician visit & medical review </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt="" class=""> 
  </div>
  <span> Indoor & outdoor recreational activities </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Group yoga & physiotherapy </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Periodic Whatsapp communication </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Outside specialist consultations  </span>    
</li>

<li>
<div class="geric-img">
<img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt="" class=""> 
</div>
<span> Initial Comprehensive Geriatric Assessment (CGA) </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Fully furnished elder-friendly accomodations </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> 24 x 7 emergency coordination </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Geriatrician reviewed, individualized, care plans </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Nutritious vegetarian diet meals & mid-day snacks </span>    
</li>

<li>
<div class="geric-img">
  <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt="" class=""> 
  </div>
  <span> Three levels of Nursing Care  </span>    
</li>

</ul> 

</div>

</div>

</div>
</div>
</section>

<section class="gallery-tabulars text-center">
<div class="container">
<div class="row align-items-center">

<div class="col-lg-12 col-md-12 col-sm-12">

<div class="common-heading">
<h2>Gallery</h2>
</div>

<div class="galerry-lsts">

<!-- <ul class="nav nav-pills mb-3 text-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">RA Puram</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Thoraipakkam</button>
  </li> 
</ul> -->
<!-- <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> -->

<div class="galleruie-slider-rapuram text-end">

<!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-3.jpg') }}" alt="" class="">
</div>  -->



<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-1.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-4.jpg') }}" alt="" class="">
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-5.jpg') }}" alt="" class="">
</div> 

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-6.jpg') }}" alt="" class="">
</div> 

<!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-7.jpg') }}" alt="" class="">
</div>  -->

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-8.jpg') }}" alt="" class="">
</div>

<div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-2.jpg') }}" alt="" class="">
</div> 


 <!-- <div class="facity-img">
<img src="{{ asset('/public/website/assets/images/gallery-4.jpg') }}" alt="" class="">
</div>    -->




 
  
  <!-- </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> -->



  <!-- <div class="galleruie-slider-royapuram text-end">





</div> -->
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
<img src="{{ asset('/public/website/assets/images/Loaction-RA Puram.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Assisted Living - RA Puram </h4>
 <p>New #10, Old #23, 7th Main Road, <br> RA Puram, Chennai - 600028</p>
<!-- <p> No.8, Dr. Nair Road, Behind Vani<br> Mahal, T.Nagar, Chennai - 600 017 </p> -->
<a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank"> View On Map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
</div>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/Loaction-Thoraipakkam.jpg') }}" alt="" class="w-100" />
<div class="servrse-contest">
<h4> Geri Care Assisted Living - Thoraipakkam </h4>
<p>AKS Residency, Balamurugan Garden 1st Main Road, <br> Thoraipakkam, Chennai-600097</p>
<!-- <p> 100 Feet Velachery, 100 Feet Rd, Ward F,<br> Block 17, Adambakkam, Chennai - 600 088 </p> -->
<a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank"> View On Map <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="" class="" /></a>
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
We do whatever it takes <br>to make you feel at home.<br>
To experience our Assisted Living facility, call us today!
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


@include('website.bottomformassisted')

@include('website.mobilebottomform')

@endsection