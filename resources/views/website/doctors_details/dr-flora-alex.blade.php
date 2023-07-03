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
<li class="active"> Dr Flora Alex </li>
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
<h3>Dr Flora Alex<span>Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 8+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span>M.B.B.S., M.D (Geriatrics)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> OP - Anna Nagar<br>
Home visits on appointment basis
</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. Flora possesses extensive knowledge and expertise in effectively managing diseases commonly found in elderly individuals. She specializes in conducting Comprehensive Geriatric Assessments and tailoring personalized treatment plans accordingly. Dr. Flora has a wealth of experience in organizing various specialized clinics to address prevalent geriatric issues and challenges. These clinics include the Comprehensive Geriatric Assessment Clinic, Falls Clinic, Incontinence Clinic, Pain Clinic, Memory Clinic, and Rehabilitation Clinic.</p>

<p>Dr. Flora's preferred approach involves working within an integrated healthcare system, collaborating with a diverse multidisciplinary team. This team typically consists of physiotherapists, social workers, nurses, and nurse aides who have received specialized training in geriatric care. By engaging this comprehensive team, Dr. Flora aims to provide holistic and well-rounded care to her patients.</p>

<p>Additionally, Dr. Flora actively participates in raising awareness about elder abuse and caregiver stress. She offers guidance and support in managing both these critical aspects of elderly care. Dr. Flora's experience extends beyond clinical settings as she has successfully managed complex patients in homecare settings as well as assisted living and skilled nursing facilities (SNFs).
</p>
</div>

<div class="main-contdvshon">
<h4>Education</h4>
<ul>
<li>M.D (Geriatrics) -  Madras Medical College, Chennai</li>
<li>M.B.B.S. - Pondicherry Institute of Medical Sciences, Pondicherry</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Memberships & Certifications</h4>
<ul>
<li>Life member of Indian Academy of Geriatrics (IAG)</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Works & Publications</h4>
<ul>
<li>Procalcitonin As A Marker Of Sepsis In Hospitalised Elderly - Published this study in Scholars Journal of Applied Medical Sciences dated 28.02.2019 (DOI: 10.21276/sjams.2019.7.2.79)</li>
<li>E-Journal: Association Between Short Physical Performance Battery and Recurrent Falls In Elderly
</li>
<li>Poster Presentation on “A Study of Relationship Between Procalcitonin And Severity Of Sepsis In Elderly” in GERICON 2017- AIIMS, New Delhi which was published in Journal Of Indian Academy Of Geriatrics, December 2017 Vol.13,No.4</li>

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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr Flora Alex" value="Dr Flora Alex" readonly/>
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