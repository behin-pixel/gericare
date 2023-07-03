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
<li class="active">  Dr. Magesh R </li>
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
<img src="{{ asset('/public/website/assets/images/magesh.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Magesh R<span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 15+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, MRCP, CCT (Int. Med. & Geriatrics), FRCP</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> English, Tamil</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> T.Nagar, Velachery, Adyar</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Magesh completed his MBBS from Madras Medical College, Chennai. Following which, he underwent training in Internal Medicine at the University Hospital of Hartlepool and obtained MRCP (UK). A career in higher specialist training in Geriatric and Internal Medicine awaited him at the Northern Deanery, University of Newcastle, UK.</p>

<p>During his training, he gained experience in various specialties of Geriatric medicine and Internal Medicine at esteemed hospitals including James Cook University Hospital in Middlesbrough, Royal Sunderland Hospitals in Sunderland, University Hospital of North Tees in Stockton, Royal Victoria Hospitals in Newcastle, and Darlington Memorial Hospitals in Darlington.</p>

<p>After successfully completing his training, Dr. Magesh was appointed as a Consultant at the University Hospital of Hartlepool, UK in 2005. He joined Apollo Hospitals, Chennai, as a Consultant in 2007 and took the initiative to establish Outpatient Geriatric Services at Westside Clinic, Anna Nagar, in the year 2010.</p>

<p>Dr. Magesh's journey has equipped him with valuable skills and expertise in the field of Geriatric medicine and Internal Medicine, and helped him garner training for his professional roles in the UK and in India.</p>

</div>


<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS (1995) from prestigious Madras Medical College</li>
<li>MRCP (UK) (2000) from Royal College of Physicians UK</li>
<li>UK board Certification in Internal Medicine</li>
<li>UK board Certification in Geriatric Medicine ( 2005)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Experience</h4>
<ul>
<li>Specialist Registrar Internal Medicine & Geriatrics, Newcastle UK (2001)</li>
<li>Consultant Physician&Geriatrician, University hospital North Tees & Hartlepool UK (2005)</li>
<li>Consultant Physician & Geriatrician, Apollo hospitals, Chennai (2007 - Present)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Affiliation</h4>
<ul>
<li>Indian Academy of Geriatrics ( Secretary 2019 - 2022)</li>
<li>British Geriatrics Society</li>
<li>Royal College of Physicians, UK</li>
</ul>
</div>


<div class="main-contdvshon">
<h4>Publications   </h4>
<ul>
<li>Fall in Elderly during COVID 19 Pandemic - JIAG 2020;16:133 – 35</li>
<li>Asymptomatic PE in patient with post COVID 19 - Indian Journal of Applied Research</li>
<li>Infection - Vol 10 Nov 2020
<li>Asymptomatic Osteoporosis in Indian Geriatric - JIAG 2017; 13:101-105 Population						 
<li>Co morbidity predicts hospitalization in COPD - Age&Ageing Nov 2003;32:37 (s)
<li>Pathway of care for COPD - Age & Ageing Nov 2003;32:38 (s)
<li>Audit on use of Anticoagulants in Elderly in AF - Age&Ageing Feb 2002;31:38 (s)
</ul>
</div>

<div class="main-contdvshon">
<h4>Recent Presentations </h4>
<ul>
<li>RCPE India Update - RCPE (UK), April 2023
<li>GERICON 2022 - Kolkota, December 2022
<li>JODHPUR ORATION - GERICON, Warangal, December 2021
<li>GERICON 2019 - CMC Vellore, December 2019
<li>FORUM (Panel discussion) - Chennai, February 2019
<li>GERICON 2018 - Kota, Rajasthan, December 2018
<li>GERICON 2017 - AIIMS, New Delhi, December 2017</li>
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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr K. Vasanth" readonly/>
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