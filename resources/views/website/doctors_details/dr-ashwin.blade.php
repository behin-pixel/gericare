@extends("website.layout.welcome")

@section('content')


<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Our Doctors</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li> Geri Care Hospitals </li>
<li> > </li>
<li><a href=""> Doctors </a></li>
<li> > </li>
<li class="active"> Dr Ashwin Subramaniam </li>
</ul>
</div>

</div>
</div>
</section>

<section class="doctor-details-contest">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="row">
<div class="col-lg-7">

<div class="row dctr-detilsbox">

<div class="col-lg-4">
<div class="doc-tor-img">
<img src="{{ asset('/public/website/assets/images/doctor-img-3.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr Ashwin Subramaniam<span>Senior Consultant- Internal Medicine & Diabetologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Experience <span> 16+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS RMMC, DNB(Internal Medicine), MRCP(UK)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Languages <span> English, Tamil</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Location <span> T Nagar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Ashwin is a highly respected general physician and diabetologist based in Chennai, India. With extensive experience in his field, he has garnered a reputation for his ability to handle complex medical problems, both acute and chronic, particularly in elderly patients.</p>


<p>He has special interest in lifestyle diseases like Diabetes Mellitus, Hypertension, Dyslipidemia and  infectious diseases like Hepatitis & HIV. </p>

<p>He has presided in various seminars and CME, educating the junior doctors in approach towards Elderly patients. He regularly conducts Public outreach programs to raise awareness in elderly patients about maintaining a healthy lifestyle. He has shown leadership in setting up and running the acute medical unit for the elderly. He has excellent bedside manners and sound knowledge of ethical standards in delivering medical care.</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS RMMC, Annamalai University, Chidambaram (2005)</li>
<li>DNB (Internal Medicine)  - National Board of Examinations, New Delhi (2010)</li>
<li>MRCP (UK)- Royal College of Physicians, United Kingdom (2011)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Awards and Affiliation</h4>
<ul>
<li>Dr.Harnath Memorial Award for the BEST POST GRADUATE in Internal Medicine by Apollo Hospitals, Chennai (2008)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Memberships</h4>
<ul>
<li>Association of Physicians of India - Life member</li>
<li>Indian Medical Association (IMA)</li>
</ul>
</div>
 

</div>

<div class="col-lg-5">
    
<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post" onSubmit="return valid_chk4()" action="#" id="AppointmentForm">
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row"> 
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr Ashwin Subramaniam" value="Dr Ashwin Subramaniam" readonly/>
								</div>
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Name *" />
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="email" name="email" id="aemail" class="form-control" placeholder="Email *" />
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="tel" id="aphone" name="phone" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Phone *">
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="datepicker date"> 
										<input type="text" placeholder="Select Date" name="appointment_date" class="form-control" id="fecha1 " placeholder="Date *">
										<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6"> 
									<input type="text" class="form-control" name="appointment_time"  id="timepicker"/ placeholder="Select Time *">
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<textarea class="form-control" name="details" placeholder="Message"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-center clearfix"><input type="submit" name="submit" value="Submit"> </div>
										</div>
							</div>
						</form>
</div>

</div>

</div>
</div>

</div>
</div>
</section>
 

@endsection