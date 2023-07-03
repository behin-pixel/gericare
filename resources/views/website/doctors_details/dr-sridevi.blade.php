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
<li class="active"> Dr. K. Sreedevi  </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-21.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. K. Sreedevi <span>Senior Pulmonologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 16+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, DNB(Respiratory Medicine)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English, Hindi, Kannada</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> - </span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Sreedevi K is a highly knowledgeable professional with a specialization in the management of diverse respiratory diseases commonly seen in elderly patients. Her expertise encompasses conditions such as asthma, COPD (Chronic Obstructive Pulmonary Disease), bronchiectasis, pneumonias, tuberculosis, pleural diseases, sleep disorders, and interstitial lung diseases.
</p>
<p>Dr. Sreedevi K actively engages in academic pursuits and stays abreast of the latest developments in her field. She has actively participated in NAPCON, the annual conference organized by the Indian Chest Society, where experts convene to share insights and advancements in the realm of respiratory care.
</p>
<p>In addition, Dr. Sreedevi K possesses proficiency in interpreting Pulmonary Function Tests (PFT), a diagnostic tool used to assess lung function. Moreover, she has considerable experience in performing numerous Bronchoscopy procedures, a diagnostic and therapeutic technique involving the examination of the airways and lung tissue.</p>
<p>Overall, Dr. Sreedevi K's extensive knowledge, active involvement in academic activities, and proficiency in performing diagnostic procedures make her a highly competent professional in the field of respiratory disease management, particularly in elderly patients.
</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>MBBS - M.S. Ramaiah Medical College, Bangalore (2004)
</li>
<li>DNB (Respiratory Medicine) from Apollo Hospitals, Chennai (2010)
</li>

</ul>
</div>

<div class="main-contdvshon">
<h4>Professional Memberships</h4>
<ul>
<li>Member of Indian Chest Society
</li>
<li>Indian Medical Association
</li>
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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr.Sreedevi" readonly/>
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