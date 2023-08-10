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
               <li class="active">IAG Chennai Chapter’s 6th Geriatric Conference 2023</li>
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
                     <img src="{{ asset('/public/website/assets/images/news-events/iag-chennai/1.jpg') }}" alt="" class="img-fluid" /> 
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-8">
                     <div class="doc-tor-cnt">
                        <h3>IAG Chennai Chapter’s 6th Geriatric Conference 2023</span></h3>
                        <p>Doctors from Geri Care Hospital were an integral part of the 6th Annual Academic Meeting of the Indian Academic of Geriatrics (IAG), held on 26th March 2023, at Hotel Ramada, Egmore.</p>
                        <p>Our Doctors participated as Speakers and Panelists in the prestigious conference conducted by Regional Geriatric Centre, Madras Medical College.</p>
                        <p>The program included key gerIatric topics such as Transitional Care, Geriatric Oncology, Palliative Care, and Dementia care.</p>
                        <p><strong><a data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/iag-chennai/1.jpg') }}" data-caption="IAG Chennai Chapter’s 6th Geriatric Conference 2023">View Gallery</a></strong></p>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/iag-chennai/2.jpg') }}" data-caption="IAG Chennai Chapter’s 6th Geriatric Conference 2023"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/iag-chennai/3.jpg') }}" data-caption="IAG Chennai Chapter’s 6th Geriatric Conference 2023"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/iag-chennai/4.jpg') }}" data-caption="IAG Chennai Chapter’s 6th Geriatric Conference 2023"></a>
                        <a class="d-none" data-fancybox="gallery" href="{{ asset('/public/website/assets/images/news-events/iag-chennai/5.jpg') }}" data-caption="IAG Chennai Chapter’s 6th Geriatric Conference 2023"></a>
                     </div>
                     
                  </div>
               </div>
         </div>
   </div>
</section>
@endsection