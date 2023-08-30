@extends("website.layout.welcome")

@section('content')

<section class="p-0 hme-map-half dark-gray-bg">
   <div class="container-fluid">
     <div class="row flex-column-reverse flex-lg-row">
      <div class="col-lg-6">
        @include('website.bottommap')
      </div>
       <div class="col-lg-6 text-start pt-5 map-section minserten">
          <div class="common-heading">
              <h2 class="mb-4">Geri Care Locations</h2>
          </div>
          
          <div class="row">
            <div class="col-lg-12">
              <a class="hospital-btn hs" href="{{ url('gericare-hospital') }}"> Hospital </a>
            </div>
               <div class="col-md-6 col-lg-5 col-xl-4 t-nagar line">
                  <h3>T.Nagar</h3>
                  <p class="mb-2"> 
                      No.8, Dr.Nair road, Behind Vani mahal,
                      T. Nagar, Chennai - 600 017
                    </p>
                    <a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="https://www.gericare.in/public/website/assets/images/red.png" alt="Geri Care Hospital"></a>
                </div> 
              
              <div class="col-md-6 col-lg-7 col-xl-8 t-nagar left-space">
                  <h3>Adambakkam</h3>
                  <p class="mb-2"> 
                      100 Feet Adambakkam inner ring road,
                      Ward F,<br> Block 17, Adambakkam,
                      Chennai, Tamil Nadu 600088
                   </p>
                    <a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="https://www.gericare.in/public/website/assets/images/red.png" alt="Geri Care Hospital"></a> 
               </div>
          </div> 
          <div class="row">
            
            <div class="col-lg-12 mt-4">
              <a class="hospital-btn cli" href="{{ url('about-clinics') }}"> Clinics </a>
            </div>

               <div class="col-md-6 col-lg-5 col-xl-4 t-nagar line">
                  <h3>Adyar</h3>
                  <p class="mb-2"> 
                       No:21, 1st avenue, Indira Nagar,
                       Adyar, Chennai - 600 020
                    </p>
                    <a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="https://www.gericare.in/public/website/assets/images/red.png" alt="Geri Care Hospital"></a>
                    
                </div> 
              
              <div class="col-md-6 col-lg-7 col-xl-8 t-nagar left-space">
                  <h3>Anna Nagar</h3>
                  <p class="mb-2"> 
                      Plot no.3698, Q Block-100, 3rd<br> Avenue,
                      Anna Nagar, Chennai - 600 040
                   </p>
                    <a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="https://www.gericare.in/public/website/assets/images/red.png" alt="Geri Care Hospital"></a> 
               </div>
          </div> 
          <div class="row">
            <div class="col-lg-12 mt-4">
              <a class="hospital-btn ast" href="{{ url('assisted-living') }}"> Assisted Living </a>
            </div> 
               <div class="col-md-6 col-lg-5 col-xl-4 t-nagar lines">
                  <h3>RA Puram</h3>
                  <p class="mb-2"> 
                      New #10, Old #23, 7th Main Road,
                      RA Puram, Chennai - 600 028
                    </p>
                    <a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="https://www.gericare.in/public/website/assets/images/red.png" alt="Geri Care Hospital"></a>
                    <!-- <div class="mt-4">
                      <a class="hospital-btn" href="http://192.168.0.56/gericare/our-doctors"> Assisted Living </a>
                    </div>  -->
                </div> 
              
              <div class="col-md-6 col-lg-7 col-xl-8 t-nagar left-space">
                  <h3>Thoraipakkam</h3>
                  <p class="mb-2"> 
                      AKS Residency, Balamurugan Garden,
                      1st <br> Main Road Thoraipakkam,
                      Chennai - 600 097
                   </p>
                    <a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank" tabindex="0" class="mb-2">View on Maps <img src="https://www.gericare.in/public/website/assets/images/red.png" alt="Geri Care Hospital"></a> 
               </div>
          </div>  
       </div> 
     </div> 
   </div> 
</section>  

<section class="">
		<div class="container">
			<div class="row align-items-center justify-content-center">
	<div class="col-lg-12 text-center call-btns">
		<div class="row align-items-center">
			<ul>
			 <li><a href="tel:+914440614061"> <img src="{{ asset('/public/website/assets/images/caller.png') }}" alt="Geri Care Hospital" class="" /> +91 44 4061 4061</a></li>
			 <li><a href="mailto:enquiry@gericare.in"> <img src="{{ asset('/public/website/assets/images/mailer.png') }}" alt="Geri Care Hospital" class="" /> enquiry@gericare.in</a></li>
			</ul>
			
			<ul class="contact-socials">
				<li>
					<a class="facebook" href="https://www.facebook.com/GeriCareChennai" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
				</li>
				<li>
					<a class="linkedin" href="https://www.linkedin.com/company/gericarehospital/" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
				</li>
				<li>
					<a class="instagram" href="https://instagram.com/geri_care_chennai?igshid=MzRlODBiNWFlZA==" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
				</li>			
				<li>
					<a class="youtube" href="https://www.youtube.com/@geri_care_chennai" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
				</li> 
			</ul> 
		</div>
	</div>

				<div class="col-lg-8">
					<div class="contact-bg new-vrson">
						<div class="row align-items-center"> 
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
								<div class="pad-30 nd-some text-center common-heading">
								<h2 class="h3 mar-bot-20">Enquire Now</h2>
								<form  class="contact-form" name="contactForm" method="post" action="#" id="contact_form">
                					@csrf
									<input type="hidden" name="form_name" value="contact" >
									<input type="hidden" name="from" value="contact" >
									
                                <div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Name <span class="text-danger">*</span></label>
											<input type="text" name="name" id="aname" value="" class="form-control"/ required>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Phone <span class="text-danger">*</span></label>
											<input type="tel" name="mobile_no" id="aphone" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" required/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Email </label>
											<input type="email" name="email" id="aemail" value="" class="form-control"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Select Type <span class="text-danger">*</span></label>
											<select class="form-control jsrequired" id="services" name="services" required>
												<option value="">Select Type</option>
												<option value="Feedback">Feedback</option>
												<option value="General">General</option> 
											</select>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<label class="text-dark">Message</label>
											<textarea class="form-control" name="message"></textarea>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-center clearfix">
											<input type="submit" id="save-btn" name="submit" value="Submit"> </div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<a id="gericarelocations"></a>
				</div>

			</div>
		</div>
	</section>

	<!-- <section class="p-0">
		@include('website.bottommap')
	</section> -->

@endsection
@section('addon_script')
    <script>
         
        $(".price").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^.0-9]/g)) return false;
        });
        $('#contact_form').submit(function() {
			$('#preloader').show();
            event.preventDefault();
            var formData = $('#contact_form').serialize();
            $('#save-btn').prop('disabled', 'true');

            $.ajax({
                url: "{{ route('consultant.form.submit') }}",
                type: 'POST',
                data: formData,
                beforeSend: function() {
                },
                success: function(res) {

                    $('#save-btn').prop('disabled', 'false');
                    $("#save-btn").attr("disabled", false);

                    if (res.error == 0) {
						if(res.from_page=='contact')
						{						
							window.location.href = '{{ route("contact.thanks")}}';
						}						
                       // toastr.success('Success', res.message);
                        $('#contact_form')[0].reset();
                    } else {
                        if (res.message) {

                            toastr.error("Error", res.message);

                        }
                    }
                }
            })
        })
    </script>
@endsection
