<section class="patron-say">
<div class="container-fluid">
<div class="row justify-content-center">

<div class="col-lg-6">
<div class="common-heading text-center">
<h2>Looking for a Consultation with us?</h2>
</div>
<div class="rechus-frms">

<form onsubmit="return valid_chk3()" name="form3" method="post" action="#" id="form3">

    
<div class="frm-fields row clearfix">
    
    <div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-data cnt clearfix"><input type="text" placeholder="Name*" id="aname" name="aname"></div>
    </div>
	
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="form-data cnt clearfix"><input type="text" placeholder="Email" id="aemail" name="aemail"></div>
    </div> 
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="form-data cnt clearfix"><input type="text" placeholder="Phone *" id="aphone" name="aphone" onkeypress="return CheckNumericKeyInfo(event.keyCode, event.which)" ;="" maxlength="10"></div>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-data cnt clearfix">
	  <select class="form-control jsrequired" id="services" name="services">
                    <option value="">Select your Service</option>
                    <option value="Geri Care Hospital">Geri Care Hospital</option>
										<option value="Geri Care Assisted Living">Geri Care Assisted Living</option>
										<option value="Geri Care Clinics">Geri Care Clinics</option>	
                    <option value="Geri Care Home Care">Geri Care Home Care</option>										 
										</select>
	  </div>
    </div>  
	
    <div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-data cnt clearfix"><textarea placeholder="Your Message" name="amessage" id="amessage"></textarea></div>
    </div>
 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
    <div class="form-data cnt clearfix"><input type="submit" name="submit" value="Submit"> </div>
    </div>
   
  </div>	

</form>

</div>
</div>

<div class="col-lg-6 dbl-reds">

<div class="common-heading text-center">
<h2>What Our Patrons Say</h2>
</div>

<div id="testimonailas" class="carousel slide text-center" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="0" class="active"><img
      src="{{ asset('/public/website/assets/images/fem.png') }}" alt="Geri Care Hospital" class="d-block"></button>
  <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="1"><img
      src="{{ asset('/public/website/assets/images/mal.png') }}" alt="Geri Care Hospital" class="d-block"></button>
  <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="2"><img
      src="{{ asset('/public/website/assets/images/fem.png') }}" alt="Geri Care Hospital" class="d-block"></button> 
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="testimonal-details">
      <p>“My mother is in Gericare Assisted living post spinal surgery since december 2022. I am very surprised to know about this place as they have everything in the infrastructure for elderly people. Rooms are very spacious, calm and clean .They provided great support for my mom in terms of providing her medicine, food and help in the bed. Hats off to the Physiotherapist at Gericare who has done excellent therapy for my mom - who is now walking with walker support.”</p>
      <div class="testimona-nme">
        <h4>- Preethi Chandrasekar</h4> 
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="testimonal-details">
      <p>“I had to put my Mom into a rehab facility and scouted for a decent one with good care and amenities. Luckily I came across Gericare. A very caring and compassionate assisted living facility with great staffs and Doctors. They ensure the elders are treated with great respect and care. Provide all medical aid to help them recover soon. I discharged my mom after rehab and now her confidence level has improved a lot. Thanks to everyone in Gericare.”</p>
      <div class="testimona-nme">
      <h4>- Vinoth Kumar</h4>
        <!-- <span>Retd. Professor</span> -->
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="testimonal-details">
      <p>“Geri Care assisted living is an excellent facility for old age citizens. The care team along with admin, Ms. Yashoda were very cordial and provided excellent service. The facility is clean and bright. It has all the amenities for speedy recovery of patients.”</p>
      <div class="testimona-nme">
      <h4>- Sriram Gopalan</h4>
        <!-- <span>Retd. Professor</span> -->
      </div>
    </div>
  </div>  
</div>

</div>

</div>

</div>
</div>
</section>