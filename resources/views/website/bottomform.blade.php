<section class="patron-say">
<div class="container-fluid">
<div class="row justify-content-center">

<div class="col-lg-10">
<div class="common-heading text-center">
<h2>Looking for a consultation with us?</h2>
</div>
<div class="rechus-frms">

  <form id="consult_form">
    @csrf
    <input type="hidden" name="from" value="homepage">
    <div class="frm-fields row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="form-data cnt clearfix">
                <input type="text" placeholder="Name*" id="name" name="name" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-data cnt clearfix">
                <input type="text" placeholder="Email" id="email" name="email" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-data cnt clearfix">
                <input type="text" placeholder="Phone*" class="price" id="mobile_no"
                    name="mobile_no" required maxlength="10">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="form-data cnt clearfix">
                <select class="form-control " id="service" name="services">
                    <option value="">Select Your Service</option>
                    <option value="Geri Care Hospital">Geri Care Hospital</option>
                    <option value="Geri Care Assisted Living">Geri Care Assisted Living</option>
                    <option value="Geri Care Clinics">Geri Care Clinics</option>	
                    <option value="Geri Care Home Care">Geri Care Home Care</option>	
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="form-data cnt clearfix">
                <textarea placeholder="Your Message" name="message" id="message"></textarea>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="form-data cnt clearfix">
                <input type="submit" name="submit" id="save-btn" value="Submit">
            </div>
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
        $('#consult_form').submit(function() {
            $('#preloader').show();
            event.preventDefault();
            var formData = $('#consult_form').serialize();
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
                       // if(res.from_page=='homepage')
						
                       //{						
							window.location.href = '{{ route("consultant.thanks")}}';
						//}	
                      //  toastr.success('Success', res.message);
                        $('#consult_form')[0].reset();
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
