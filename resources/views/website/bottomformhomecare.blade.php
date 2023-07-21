<section class="patron-say">
<div class="container-fluid">
<div class="row justify-content-center">

<div class="col-lg-6">
<div class="common-heading text-center">
<h2>Looking for a consultation with us??</h2>
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
      <p>“One of the best places for doctors of top notch quality for senior citizens. The care that the attenders show, the best of doctors in geriatric care, the facilities are all very satisfying.. home visits are also very comfortable.. our goto place for geriatric care!”</p>
      <div class="testimona-nme">
        <h4>- Aparna Subramanian</h4> 
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="testimonal-details">
      <p>“We used a variety of Geri Care services in my father's last weeks: doctor visits, nursing care, attendants, equipment rental, and attending to medical situations as they came up. For every one of these, we were very happy with the quality of care, the prompt communications and the extremely professional manner in which everything was handled. It made a very difficult time easier to deal with. I would recommend Geri Care very highly and without reservation.”</p>
      <div class="testimona-nme">
      <h4>- Pakku Thaath</h4>
        <!-- <span>Retd. Professor</span> -->
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="testimonal-details">
      <p>Extremely satisfied with both the quality of caregivers and the supervisory support. All caregivers were extremely professional, sincere, committed and diligent.</p>
      <div class="testimona-nme">
      <h4>- P Venkatesh</h4>
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