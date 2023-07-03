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
<li class="active">Dr. G. Thiruvengita Prasad   </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-14.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. G. Thiruvengita Prasad <span>Senior Orthopedic Surgeon</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 22+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS
</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, english, Telugu</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> - </span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Thiruvengita Prasad G is a renowned Spine Surgeon, Sports Medicine Surgeon and Orthopedist and has an experience of 22 years in these fields. He completed MBBS from Stanley Medical College & Hospital, Chennai in 1997 and DNB - Orthopedics/Orthopedic Surgery from DNB board, New Delhi in 2001.
He is a member of Tamilnadu Medical Council and Medical Council of India (MCI). Some of the services provided by the doctor are: Fracture Treatment, Joint Pain Treatment, Osteoporosis Treatment, Knee Osteotomy and Correction of deformities etc.
</p>
<p>He has been the backbone of Orthogeriatrics department at the Geri Care Hospital. His expertise include managing hip fractures by doing procedures like Total Hip replacement or Hemiarthroplasty. He is also good at managing Osteoarthritis of knee and shoulder joints.</p>
<p>He works closely with Geriatric Physiotherapists to ensure optimal recovery and rehabilitation for elderly patients</p>
</div>





</div>

<div class="col-lg-5">
    
<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post" onSubmit="return valid_chk4()" action="#" id="AppointmentForm">
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row"> 
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr.Thiruvengita Prasad" readonly/>
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