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
<li class="active"> Dr Susovan Mitra </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-23.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr Susovan Mitra<span>Chief Critical Care Physician & Intensivist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 10+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, MD (Emergency Medicine)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English, Hindi, Bengali</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> T.Nagar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Susovan Mitra possesses vast expertise in effectively managing critical conditions such as Sepsis, MODS (Multiple Organ Dysfunction Syndrome), and emergency cases in both neurosurgical and medical fields, specifically in elderly patients. He actively conducts training programs aimed at educating junior doctors and nurses on providing optimal care for critically ill elderly individuals.</p>

<p>As part of his commitment to advancing geriatric emergency care, Dr. Mitra has initiated a Fellowship in Geriatric Emergency at Geri Care Hospital. Additionally, he served as the organizing chairman for GERICRITICON, the first-ever conference focused on the advancements and challenges in critical care specifically tailored for senior citizens. This conference took place in June 2022 and aimed to foster knowledge exchange and progress in critical care for the elderly.</p>

<p>Dr. Mitra's dedication to the field of geriatric emergency care is evident in his efforts to train medical professionals and his contributions to organizing significant events that bring attention to the unique needs of critically ill elderly patients.</p>

</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS  Nilratan Sircar Govt Medical college, Kolkata </li>
<li>MD (Emergency Medicine) VMKV Medical College, Salem</li>
<li>Fellowship in Critical Care Medicine, SMF Hospital, Chennai</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Member of Indian Society of Critical Care Medicine (ISCCM)</li>
<li>Chairman - ISCCM Chennai Chapter</li>
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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr Susovan Mitra" value="Dr Susovan Mitra" readonly/>
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