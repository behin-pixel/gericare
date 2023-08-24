<section class="bottom-bar-bg">
<div class="container">
<div class="d-flex align-items-center justify-content-between">
<div class="bottom-bar-img-1 @if(request()->routeIs(['gericare-homecare.about-homecare'])) activess @endif" >
  <a href="{{ url('homecare') }}"><img src="{{ asset('/public/website/assets/images/home-care-img.png') }}" alt="Geri Care Hospital" class="img-fluid"></a>
</div>
<div class="bottom-bar-img-2 @if(request()->routeIs(['gericare-hospital.about-hospital'])) activess @endif">
    <a href="{{ url('gericare-hospital') }}"><img src="{{ asset('/public/website/assets/images/bottom-bar-tnagar.png') }}" alt="Geri Care Hospital" class="img-fluid"></a>
</div>
<div class="bottom-bar-img-3 @if(request()->routeIs(['gericare-clinics.about-clinics'])) activess @endif">
    <a href="{{ url('about-clinics') }}"><img src="{{ asset('/public/website/assets/images/bottom-bar-anna.png') }}" alt="Geri Care Hospital" class="img-fluid"></a>
</div>
<div class="bottom-bar-img-4 @if(request()->routeIs(['gericare-assisted-living.about-assisted-living'])) activee @endif">
      <a href="{{ url('assisted-living') }}"> <img src="{{ asset('/public/website/assets/images/bottom-bar-ra.png') }}" alt="Geri Care Hospital" class="img-fluid"></a>
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
