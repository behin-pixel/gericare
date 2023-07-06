<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-between">
				<div class="logo-social">
					<a href=""><img src="{{ asset('/public/website/assets/images/footer.png') }}" alt="Gericare Logo" /></a>
						<ul>
							<li>
							<a href="https://www.facebook.com/GeriCareChennai" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
							</li>
							<li>
							<a href="https://www.linkedin.com/company/gericarehospital/" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
							</li>
							<li>
							<a href="https://instagram.com/geri_care_chennai?igshid=MzRlODBiNWFlZA==" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
							</li>
							<li>
							<a href="https://www.youtube.com/@geri_care_chennai" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
							</li>
						</ul>
				</div>
				<div class="quick-links">
					<h4>Quick links</h4>
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ url('gericare-hospital') }}">About Us</a></li> 
							<li><a href="{{ url('assisted-living/#servce-cre') }}">Services</a></li> 
							<li><a href="{{ url('/in-news/gallery') }}">Gallery</a></li>    
						</ul>
				</div>
				<div class="quick-links spce-nded"> 
						<ul> 
							<li><a href="{{ url('testimonials') }}">Patient Stories</a></li>
							<li><a href="{{ url('faq') }}">FAQ's</a></li>
							<li><a href="{{ url('careers') }}">Career</a></li> 
							<li><a href="{{ url('contact-us') }}">Reach Us</a></li>  
						</ul>
				</div>
				<div class="quick-links">
					<h4>Services</h4>
						<ul>
							<li><a href="{{ url('gericare-hospital') }}">Geri Care Hospital</a></li> 
							<li><a href="{{ url('assisted-living') }}">Geri Care Assisted Living</a></li>
							<li><a href="{{ url('about-clinics') }}">Geri Care Clinics</a></li> 
							<li><a href="{{ url('homecare') }}">Geri Care Home Care</a></li> 
						</ul>
				</div>
                        <div class="contact-links">
                            <h4>Reach us at</h4>
                            <ul>
                                <li>
                                    <a href=""><img src="{{ asset('/public/website/assets/images/loc.png') }}"> 21, 1st Avenue, Indira Nagar,<br>
									Adyar, Chennai - 600 020 </a>
                                </li>
                                <li>
                                    <a href="tel:+914440614061"><img src="{{ asset('/public/website/assets/images/calls.png') }}"> +91 44 4061 4061 </a>
                                </li>
                                <li>
                                    <a href="mailto:enquiry@gericare.in"><img src="{{ asset('/public/website/assets/images/mail.png') }}"> enquiry@gericare.in</a>
                                </li>
                            </ul>
                        </div>
			</div>
		</div>
	</div>
</footer>

<div class="flaoting-rays">
<div class="menu-inrt">
<ul> 
<li>
<a href="{{ url('our-doctors') }}"><img src="{{ asset('/public/website/assets/images/do.png') }}"></a>
<span><a href="{{ url('our-doctors') }}">Find a Doctor</a></span>
</li>
<li>
<a href="{{ url('contact-us') }}"><img src="{{ asset('/public/website/assets/images/lo.png') }}"></a>
<span><a href="{{ url('contact-us') }}">Locate us</a></span>
</li> 
</ul>
</div>
</div>

<section class="bottom-bar text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="coder-line"></div>
				<p> Copyright @ Geri Care | All Rights Reserved. Designed By <b> <a href="">Pixel Studios</a> </b> </p>
			</div>
		</div>
	</div>
</section>

<div class="whatsapp-chat">	 <a href="https://api.whatsapp.com/send?phone=914440614061&amp;text=Hello GERICARE, I have something to ask..." target="_blank" class="font-semiBold"> <span><i class="fa fa-whatsapp"></i>   </span> </a></div>

<a href="#" class="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a> 

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalCenterTitle">Request Call Back</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span>×</span>
                        </button>
      </div>
      <div class="modal-body">
		<form name="request_call_back"  id="request_call_back">
			@csrf
			<input type="hidden" name="epagename" id="epagename" value="Home"> 
			<input type="hidden" name="from" value="request_call_back">
			<div class="position-relative">
				<input type="text" class="form-control jsrequired" name="ecustomername" id="ecustomername" placeholder="Name*">
			</div>
			<div class="position-relative">
				<input type="tel" class="form-control jsrequired" name="emobileno" onkeypress="return isNumber(event)" id="emobileno" placeholder="Phone Number*">
			</div> 
			<div class="text-right">
				<button type="submit" id="save-btn" class="submit-btn">Submit</button>
			</div>
		</form>
    </div>
    </div>
  </div>
</div>  	

@section('addon_script')
    <script>
         
        $(".price").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^.0-9]/g)) return false;
        });
        // $('#request_call_back').submit(function() {
        //     event.preventDefault();
        //     var formData = $('#request_call_back').serialize();
        //     $('#save-btn').prop('disabled', 'true');

        //     $.ajax({
        //         url: "{{ route('consultant.form.req_submit') }}",
        //         type: 'POST',
        //         data: formData,
        //         beforeSend: function() {
        //         },
        //         success: function(res) {

        //             $('#save-btn').prop('disabled', 'false');
        //             $("#save-btn").attr("disabled", false);

        //             if (res.error == 0) {
        //                 toastr.success('Success', res.message);
        //                 $('#request_call_back')[0].reset();
        //             } else {
        //                 if (res.message) {

        //                     toastr.error("Error", res.message);

        //                 }
        //             }
        //         }
        //     })
        // })
    </script>
@endsection