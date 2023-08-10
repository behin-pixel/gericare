@extends("website.layout.welcome")
@section('content')
<section class="inner-layer-banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h1>News & Events</h1>
            <ul>
               <li><a href="{{ url('/') }}"> Home </a></li>
               <li> > </li>
               <li><a href="{{ url('/news-and-events') }}"> News &amp; Events </a></li>
               <li> > </li>
               <li class="active">RA Puram Assisted Living Launch</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="doctor-details-contest">
   <div class="container">
               <div class="row dctr-detilsbox">
                  <div class="col-lg-5 col-md-4">
                     <div class="doc-tor-img">
                     <img src="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/1.jpg') }}" alt="" class="img-fluid" /> 
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-8">
                     <div class="doc-tor-cnt">
                        <h3>RA Puram Assisted Living Launch</span></h3>                        
                     </div>
                        <p><strong><a data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/1.jpg') }}" data-caption="RA Puram Assisted Living Launch">View Gallery</a></strong></p>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/2.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/3.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/4.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/5.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/6.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/7.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/8.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/9.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/10.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/ra-puram-launch/11.jpg') }}" data-caption="RA Puram Assisted Living Launch"></a>
                  </div>
               </div>
         </div>
   </div>
</section>
@endsection