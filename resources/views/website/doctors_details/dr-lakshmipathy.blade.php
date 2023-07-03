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
<li class="active"> Dr. Lakshmipathy Ramesh </li>
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
<img src="{{ asset('/public/website/assets/images/doctor-img-2.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr. Lakshmipathy Ramesh<span>Senior Consultant Geriatrician</span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 20+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> MBBS, M.D (Geriatrics), PGD (Diabetes)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English, Telugu</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span> T. Nagar - All days<br>
Velachery - All days <br>
Adyar - Tuesday Mornings
</span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr Lakshmipathy Ramesh (Dr LPR) is an established Geriatrician in Chennai. He has over two decades of experience in taking care of the elderly people. He always prefers a multidisciplinary holistic approach towards them based on the Comprehensive Geriatric Assessment (CGA). He is a passionate Geriatrician who likes to educate his patients and their caregivers. It enables his patients to make well informed healthcare decisions.  He feels a preventive approach is also very important. </p>

<p>He is an able administrator who first realized the potential of Geriatrics when helped to establish the Geriatrics department in Amrita hospital, Kochi. He is one of the earliest in the country to see the potential of Geriatrics. He always recognised Geriatrics as an independent specialty to cater the needs of the elderly people. Then he moved to Chennai where he was affiliated with a multispecialty hospital. He established a Geriatric unit as well as the first orthogeriatric unit of India. He also established a elderly care clinic in the evening simultaneously. </p>

<p>He then realized the needs of the elderly co founded a homecare team under “Gericare home services” with aspiring fellow Geriatricians. Later, he established the “first senior citizen hospital of India” with fellow doctors caring for the elderly.   It is now expanded into an institution providing 360 degree care for the elderly having assisted living, doctors home visits, transitional care with a skilled nursing facility, and outpatient clinics. He aspires to take Geriatrics to skyhigh while taking care of the patients as well as the director of the group.</p>
</div>

<div class="main-contdvshon">
<h4>Education </h4>
<ul>
<li>MBBS - Coimbatore Medical College</li>
<li>MD Geriatrics - Madras Medical College</li>
<li>PGD in Diabetes</li>
</ul>
</div>

<div class="main-contdvshon">
<h4>Experience </h4>
<ul>
<li>2005 - Began his career at Amritha Institute of Medical Sciences, Cochin and established the Geriatrics Department. He was also in-charge of the community outreach programme.</li>
<li>2008 - Was heading the Geriatric Department of a multi-specialty hospital in Chennai for a decade.</li>
<li>2018 - Founder & Director of Geri Care </li>
</ul>
</div>


<div class="main-contdvshon">
<h4>Memberships & Certifications</h4>
<ul>
<li>Indian Academy of Geriatrics; Life Member</li>
<li>American Geriatrics Society; Member </li>
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
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr. Lakshmipathy Ramesh" valu="Dr. Lakshmipathy Ramesh" readonly/>
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