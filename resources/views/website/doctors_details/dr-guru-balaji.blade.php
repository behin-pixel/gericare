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
<li class="active"> Dr. S. Guru Balaji </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-12.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. S. Guru Balaji <span>Senior Urologist</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>MBBS, DNB Urology</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> English, Tamil</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span>  </span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr.Guru Balaji is trained both in India and United Kingdom in urology capable of performing open, endourological and laparoscopic procedures.
Dr.Guru has many publicationsto his credit which includes a research paper on the role of alkaline phosphatase in thyrotoxicosis. He has also contibuted to many international presentations such as- day case laparoscopic adrenalectomy, audit of laparoscopic nephrectomies, role of varicocoel surgery, calculus anuria and many others for US, UK, Netherlands, Singapore and Australia. He has also written national and regional papers on varicocelectomy, iatrogenic urological injuries, renal tumor and transplantation, tuberous sclerosis and many others.</p>

<p>Dr Guru Balaji is a member of Royal College of Surgeons in Edinburgh, National Academy of Medical Sciences in India (MNAMS), The Tamil Nadu and Pondicherry society of Urology and South Zone Urological Society of India. An avid learner, Dr.Guru had done several courses, had been actively involved in CME programs, paper presentations & has published numerous papers & articles at international, national, regional levels . Dr.Guru had been reaching out to public at large raising awareness on urology related diseases & management.He is also interested in teaching & training undergraduates postgraduates& paramedical students.</p>

<p>He has completed his MBBS from Madras Medical College, Chennai and his DNB from Kilpauk Medical College and did his DNB urology from Madurai. He worked as Assistant professor of Urology at SRM medical College before he went to the UK for more specialized training.
He has experience in providing required care for the hospitalised patients having been associated with some of the prestigious hospitals over two decades.
His expertise in managing prostate problems in elderly is well known among our patients.</p>


</div>

<div class="main-contdvshon">
<h4>Memberships</h4>
<ul>
<li>Member of Royal College of Surgeons - Edinburgh (MRCS)</li>
<li>Member of National Academy of Medical Sciences -India (MNAMS)</li>
<li>Member of The Tamil nadu and Pondicherry society of urologist</li>
<li>Member of the South Zone Urological society of India</li>
<li>Urological society of India</li>
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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr. S. Guru Balaji" value="Dr. S. Guru Balaji" readonly/>
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