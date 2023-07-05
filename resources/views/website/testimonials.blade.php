@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/patient-stories.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Patient Stories
<span> </span>
</h4>
<ul>
<li><a href="./">Home</a></li>   
<li> > </li>  
<li>Testimonials</li>   
<li> > </li>   
<li class="active">Story Testimonials</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 


<section class="testimonials-sector">
<div class="container">
<div class="row">

<div class="col-lg-12">
<div class="top-tbulars text-center">
<ul>
<li class="act">Story Testimonials</li>
<li><a href="{{ url('videotestimonials') }}"> Video Testimonials</a></li>
</ul>
</div>
</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>    
<span>Kalyani Komal <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“Gericare is the best! The care they took of my father was so good, I have switched to them for my health care also. The caregivers are truly compassionate and efficient. They keep track of all the appointments and make sure no one is kept waiting. The doctors are experienced and kind and I cannot say enough in praise of the hospital.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>     
<span>AG Cecil Rozario <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“The Geri Care team has been looking after my dad with much care and proper treatment. Thank You Geri Care! The whole team is professional and prompt with their quality of service and follow ups. I was referred to this service through my neighbors who were very satisfied with the services given. This is a good option when the patient cannot be transferred easily to a hospital and back. Glad to have taken this service.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>     
<span>Vythialingam Iyer <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“Gericare call centre staff serve with a smile. Though one cannot see the smile on the telcon, one can visualize that they serve, fix appointments, answer all the queries patiently and politely. Exceptional service, Thanks”ss
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div> 
<span>Preethi Chandrasekar <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“My mother is in Gericare Assisted living post spinal surgery since december 2022. I am very surprised to know about this place as they have everything in the infrastructure for elderly people. Rooms are very spacious, calm and clean.They provided great support for my mom in terms of providing her medicine, food and help in the bed. Hats off to the Physiotherapist at Gericare who has done excellent therapy for my mom - who is now walking with walker support.” 
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>     
<span>Vinoth Kumar <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“I had to put my Mom into a rehab facility and scouted for a decent one with good care and amenities. Luckily I came across Gericare. A very caring and compassionate assisted living facility with great staffs and Doctors. They ensure the elders are treated with great respect and care. Provide all medical aid to help them recover soon. I discharged my mom after rehab and now her confidence level has improved a lot. Thanks to everyone in Gericare.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div> 
<span>Sriram Gopalan <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“Geri Care assisted living is an excellent facility for old age citizens. The care team along with admin, Ms. Yashoda were very cordial and provided excellent service. The facility is clean and bright. It has all the amenities for speedy recovery of patients.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>     
<span>Raj Kamal <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“Received best service from Geri Care Anna Nagar Clinic. And nurses caring for patients - very excellent. They are treated in a friendly manner. Doctors are well experienced and treated us well. I wish them all success in the future.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div> 
<span>Venkatachalam K <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“Reception is very courteous. The doctors are very patient in hearing and very efficient in diagnosis. Physio is also good.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>     
<span>Kuppurao Balaji <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“I regularly go to this place and I am happy with the support of the support staff as well as doctors.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div> 
<span>Aparna Subramanian <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“One of the best places for doctors of top notch quality for senior citizens. The care that the attenders show, the best of doctors in geriatric care, the facilities are all very satisfying.. home visits are also very comfortable.. our goto place for geriatric care!”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div>     
<span>Pakku Thaath <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
“We used a variety of Geri Care services in my father's last weeks: doctor visits, nursing care, attendants, equipment rental, and attending to medical situations as they came up. For every one of these, we were very happy with the quality of care, the prompt communications and the extremely professional manner in which everything was handled. It made a very difficult time easier to deal with. I would recommend Geri Care very highly and without reservation.”
</div> 

</div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
	
<div class="testimonials"> 
<div class="rev-rat">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/star.png') }}" alt="" class="">
<img src="{{ asset('/public/website/assets/images/half-star.png') }}" alt="" class="">
</div> 
<span>P Venkatesh <small>Chennai</small></span>
<div class="testimonial-content mCustomScrollbar"> 
Extremely satisfied with both the quality of caregivers and the supervisory support. All caregivers were extremely professional, sincere, committed and diligent.
</div> 

</div>

</div>

</div>
</div>
</section>

 

@endsection