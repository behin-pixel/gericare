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
in improving the elderly lives.</span>
</h1>
<ul>
<li><a href="./">Home</a></li>   
<li> > </li>  
<li>Thanks Contact Us</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="dark-gray-bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col">
					<div class="contact-bg">
						<div class="row align-items-center">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
								<div class="orange-bg shadow pad-30">
									<h2 class="h3 text-white mar-bot-20">Contact Info</h2>
									<p class="contact-icons"><img src="{{ asset('/public/website/assets/images/contact-icon1.png') }}" alt="Geri Care Hospital" class="" /><strong>Geri Care Hospital</strong> 
                                    No.8, Dr. Nair Road,<br> Behind Vani Mahal,<br> T. Nagar, Chennai - 600 017.</p>
									<p class="contact-icons"><img src="{{ asset('/public/website/assets/images/contact-icon2.png') }}" alt="Geri Care Hospital" class="" />+91 44 4061 4061</p> 
									<p class="contact-icons"><img src="{{ asset('/public/website/assets/images/contact-icon4.png') }}" alt="Geri Care Hospital" class="" /><a href="mailto:enquiry@gericare.in" target="_blank" class="text-white">enquiry@gericare.in</a></p>
									<ul class="contact-socials">
										<li>
											<a class="facebook" href="" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
										</li>
										<li>
											<a class="twitter" href="" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
										</li>
										<li>
											<a class="instagram" href="" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
										</li>			
										<li>
											<a class="youtube" href="" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
										</li> 
									</ul> 
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-7" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
								<div class="pad-30">
								<h2 class="h3 mar-bot-20">Send us a Message</h2>
								<form  onSubmit="return valid_chk1()" class="contact-form" name="contactForm" method="post" action="#" id="contactForm">
                				<input type="hidden" name="form_name" value="contact" >
                                <div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Name <span class="text-danger">*</span></label>
											<input type="text" name="name" id="aname" value="" class="form-control"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Phone <span class="text-danger">*</span></label>
											<input type="tel" name="phone" id="aphone" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Email <span class="text-danger">*</span></label>
											<input type="email" name="email" id="aemail" value="" class="form-control"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Subject <span class="text-danger">*</span></label>
											<input type="text" name="subject" id="asubject" value="" class="form-control"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<label class="text-dark">Message</label>
											<textarea class="form-control" name="message"></textarea>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-start clearfix"><input type="submit" name="submit" value="Submit"> </div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

                
                <div class="col-lg-12 margin-top-50">

<div class="serveces-doctrs text-center">

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
<h4> Geri Care Hospital </h4>
<span class="text-center"> T Nagar </span>
<p> No.8, Dr.Nair road, Behind Vani mahal,<br> T Nagar, Chennai - 600 017</p>
<a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a> 

<span class="text-center"> Adambakkam </span>
<p>100 Feet Velachery inner ring road,<br> Ward F, Block 17, Adambakkam, <br> Chennai - 600 088</p>
<a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div> 

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
<h4> Geri Care Clinics </h4>
<span class="text-center"> Adyar </span>
<p> 21, 1st avenue, Indira Nagar,<br> Adyar, Chennai - 600020</p>
<a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a> 

<span class="text-center"> Anna nagar </span>
<p>Plot no.3698, Q Block-100, 3rd Avenue,  <br> Anna Nagar, Chennai - 600 040</p>
<a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>

<div class="servce">
<img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt="Geri Care Hospital" class="" />
<h4> Geri Care Assisted Living </h4>
<span class="text-center"> Thoraipakam </span>
<p> Balamurugan Garden 1st main road,<br> Thoraipakkam, Chennai - 600 097</p>
<a href="https://goo.gl/maps/eZNZbkaZcb3gtZqE7" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a> 

<span class="text-center"> RA Puram </span>
<p>New no.10, Old no.23, 7th Main Road,<br> RA Puram, Chennai - 600 028 </p>
<a href="https://goo.gl/maps/j6n7agMHAkr19NEf8" target="_blank"> Locate Us <img src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt="Geri Care Hospital" class="" /></a>
</div>  

</div> 

</div>

			</div>
		</div>
	</section>

	<section class="p-0">
	<iframe class="orange-bg px-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31100.559364997906!2d80.254106!3d12.999337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267853522f365%3A0x1dc3e7d7a2a95d9!2sGeri%20Care%20%7C%20Home%20Care%20%26%20Consultation!5e0!3m2!1sen!2sin!4v1685613981219!5m2!1sen!2sin"  style="border:0; height: 500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
	</section>

@endsection