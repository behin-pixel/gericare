 

<section class="mobile-only-view mob-frm">
<div class="container">
<div class="row">

<div class="cont-mob-frm">
<img src="{{ asset('/public/website/assets/images/surps.jpg') }}" alt="" class="w-100">

<div class="cntr-frm">

<form  name="form3" method="post" action="" id="request_call_back222">
  <input type="hidden" name="from" value="request_call_bac222k">

<div class="common-heading text-center">
<h2>Looking for a <br /> 
Consultation With Us</h2>
</div>
    
  <div class="frm-fields row clearfix">
    
    <div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-data cnt clearfix"><input type="text" placeholder="Name*" id="aname" name="aname"></div>
    </div>
	
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="form-data cnt clearfix"><input type="text" placeholder="Email" id="aemail" name="aemail"></div>
    </div> 
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="form-data cnt clearfix"><input type="text" placeholder="Phone*" id="aphone" name="aphone" onkeypress="return CheckNumericKeyInfo(event.keyCode, event.which)" ;="" maxlength="10"></div>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-data cnt clearfix">
	  <select class="form-control " id="seek" name="seek">
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

</div>
</div>
</section>
@section('addon_script')
    <script>
         
        $(".price").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^.0-9]/g)) return false;
        });
        $('#request_call_back').submit(function() {
            event.preventDefault();
            var formData = $('#request_call_back').serialize();
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
                        toastr.success('Success', res.message);
                        $('#request_call_back')[0].reset();
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