@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Contact-Us.jpg') }}" alt="Geri Care Hospital" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h1>Contact us today for a better tomorrow.
<span>We have the proven ability <br>
to improve the lives of the elderly.</span>
</h1>
<ul>
<li><a href="{{ url('/') }}"> Home </a></li>   
<li> > </li>  
<li>Locations</li>  
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="dark-gray-bg">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				

                
                <div class="col-lg-12 margin-btm-50">

					<div class="dark-gray-bg text-center">
					<h2 class="h3 mar-bot-20">Our Locations</h2>
					</div>
	<div class="serveces-doctrs dark-gray-bg text-center">
	
	<div class="servce">
	<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
	<h4> Geri Care Hospital </h4>
	<span class="text-center"> T Nagar </span>
	<p> No.8, Dr.Nair road, Behind Vani Mahal,<br> T Nagar, Chennai - 600 017</p>
	<a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a> 
	
	<span class="text-center"> Adambakkam </span>
	<p>100 Feet Velachery Inner Ring Road,<br> Ward F, Block 17, Adambakkam, <br> Chennai - 600 088</p>
	<a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
	</div> 
	
	<div class="servce">
	<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
	<h4> Geri Care Clinics </h4>
	<span class="text-center"> Adyar </span>
	<p> 21, 1st Avenue, Indira Nagar,<br> Adyar, Chennai - 600 020</p>
	<a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a> 
	
	<span class="text-center"> Anna Nagar </span>
	<p>Plot no.3698, Q Block-100, 3rd Avenue,  <br> Anna Nagar, Chennai - 600 040</p>
	<a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
	</div>
	
	<div class="servce">
	<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
	<h4> Geri Care Assisted Living </h4>
	<span class="text-center"> Thoraipakam </span>
	<p> Balamurugan Garden 1st Main Road,<br> Thoraipakkam, Chennai - 600 097</p>
	<a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a> 
	
	<span class="text-center"> RA Puram </span>
	<p>New no.10, Old no.23, 7th Main Road,<br> RA Puram, Chennai - 600 028 </p>
	<a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
	</div>  
	
	</div> 
	
	</div>

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
								<div class="pad-30 nd-some text-center">
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

	<section class="p-0">
		@include('website.bottommap')
	</section>

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
