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
      src="{{ asset('/public/website/assets/images/fem.png') }}" alt="" class="d-block"></button>
  <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="1"><img
      src="{{ asset('/public/website/assets/images/mal.png') }}" alt="" class="d-block"></button>
  <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="2"><img
      src="{{ asset('/public/website/assets/images/fem.png') }}" alt="" class="d-block"></button> 
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <div class="testimonal-details">
      <p>“Received best service from Geri Care Anna Nagar Clinic. And nurses caring for patients - very excellent. They are treated in a friendly manner. Doctors are well experienced and treated us well. I wish them all success in the future.”</p>
      <div class="testimona-nme">
        <h4>- Raj Kamal</h4> 
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="testimonal-details">
      <p>“Reception is very courteous. The doctors are very patient in hearing and very efficient in diagnosis. Physio is also good.”</p>
      <div class="testimona-nme">
      <h4>- Venkatachalam K </h4>
        <!-- <span>Retd. Professor</span> -->
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="testimonal-details">
      <p>“I regularly go to this place and I am happy with the support of the support staff as well as doctors.”</p>
      <div class="testimona-nme">
      <h4>- Kuppurao Balaji</h4>
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