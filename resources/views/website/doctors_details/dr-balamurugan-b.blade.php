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
<li class="active"> Dr. B. Balamurugan </li>
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
<img src="{{ asset('/public/website/assets/images/no-img.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. B. Balamurugan<span>Senior Consultant Nephrologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 24+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>M.B.B.S., M.D (General Medicine), DM (Nephrology)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> Velachery - All days</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. B Balamurugan, an esteemed Nephrologist based in Chennai, boasts an extensive clinical experience spanning more than 30 years. In 1999, he established a dedicated Nephrology outpatient service in Velachery. Dr. Balamurugan provides comprehensive care for patients with end-stage renal disease, focusing on holistic treatment approaches.</p>

<p>His expertise lies in the management of renal transplants, dialysis, and various kidney ailments that necessitate both short-term and long-term care. Dr. Balamurugan has played a pivotal role in collaborating with Geri Care to establish a state-of-the-art facility equipped with advanced diagnostic tools. This allows for accurate evaluation of kidney function and the diagnosis of underlying issues. As part of his contributions, he has also set up a cutting-edge, elder-friendly 24x7 dialysis unit with 10 beds at Geri Care Hospital in Velachery.</p>

<p>At the forefront of nephrology advancements, Dr. Balamurugan constantly updates his knowledge and skills to provide his patients with state-of-the-art treatments. He ensures the best possible outcomes for his patients by incorporating the latest developments in the field.</p>

<p>Moreover, Dr. Balamurugan is proficient in managing diabetes and its complications, including Diabetic nephropathy and chronic kidney disease. Having practiced in various multi-specialty hospitals in the region for over three decades, he has become the go-to nephrologist for residents of South Chennai.</p>
</div>

<div class="main-contdvshon">
<h4>Education </h4>
<ul>
<li>M.B.B.S. - Kilpauk Medical College</li>
<li>M.D (General Medicine) -  Kilpauk Medical College</li>
<li>DM (Nephrology)- Madras Medical College</li>
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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr. B. Balamurugan" value="Dr. B. Balamurugan" readonly/>
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