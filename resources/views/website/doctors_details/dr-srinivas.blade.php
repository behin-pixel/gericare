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
<li class="active"> Dr V. Srinivas </li>
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
<img src="{{ asset('/public/website/assets/images/det-dcotor-1.jpg') }}" alt="" class="w-100">
</div>
</div>

<div class="col-lg-8">
<div class="doc-tor-cnt">
<h3>Dr V. Srinivas <span> Senior Consultant Geriatrician </span></h3>
<h4><img src="{{ asset('/public/website/assets/images/expe.png') }}" alt="" class=""> Experience <span> 32+ Years</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/cap.png') }}" alt="" class=""> Education <span> MD, MRCP (UK), DIP.Geriatric Medicine (UK)</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/lang.png') }}" alt="" class=""> Languages <span> Tamil, English, Telugu, Hindi</span></h4>
<h4><img src="{{ asset('/public/website/assets/images/location.png') }}" alt="" class=""> Locations <span>  </span></h4>
</div>
</div>

</div>

<div class="main-contdvshon">
<h4>Doctor's Profile</h4>
<p>Dr. V. Srinivas is a leading Geriatrician with over three decades of clinical practice in India and the UK. He is the Founder Director of Geri Care organization. He obtained MRCP degree (1992) and diploma in Geriatric medicine (1991) from the Royal College of physicians, UK. He already had MD in General Medicine (1988) and MBBS (1984) from Kilpauk Medical College Chennai.
</p>
<p>Since 1994, he has been a Consultant/Visiting Consultant for several hospitals. In April 2012, he founded the Chennai Geriatrics Centre. He is the President of the Chennai chapter of the “Indian Academy of Geriatrics”, member of the “Indian Geriatrics Society”, the American Geriatrics Society, the British Geriatrics Society, the Indian Medical Association and the Association of Physicians of India. He is also an executive member of the National Association of Senior Citizens Association of India (NASCAI).</p>

<p>Until 2014, Dr. Srinivas was Visiting Consultant Geriatrician at Queen Alexandra Hospital, Portsmouth, UK. He took an active part in teaching programmes for junior doctors and departmental education meetings. He has also worked at the Royal Liverpool University Hospital, the University hospital in Cardiff, the Queen’s Medical Centre at Nottingham University Hospital, Leicester University Hospital, and Whittington Hospital in London, among others. His special interests include polypharmacy and osteoporosis.
</p>

<p>He is one of the few Geriatricians who deprescribes medicines for elderly and also avoids polypharmacy at all costs. His interest in Falls, lead Geri Care to start Falls Prevention Clinic, wherein patients are assessed for risk of fall by Multi Disciplinary team comprising of Geriatrician, Physiotherapist, Nurse using standardised assessment scales.
</p>

<p>He actively takes part in all academic activities at Geri care and also takes  special care about training nurses for homecare. His vision along with Dr Lakshmipathy Ramesh to develop a full fledged Geriatric care across all care settings lead to Geri Care being what’s today. 
</p>

</div>

 <!-- <div class="main-contdvshon">
<h4> </h4>
<ul>
<li> </li>
 
</ul>
</div> -->

</div>

<div class="col-lg-5">
    
<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post" onSubmit="return valid_chk4()" action="#" id="AppointmentForm">
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row"> 
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Dr.Srinivas" value="Dr.Srinivas" readonly/>
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