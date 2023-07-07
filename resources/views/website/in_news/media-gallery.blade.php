@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/news.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Media
<span> </span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li> > </li>  
<li> News Room </li>   
<li> > </li>  
<li class="active"> Media </li>      
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<ul class="press-release min-height">		
						@foreach ($media_release as $media_releases )
						@php 
						$media_releases_date=date('d-m-Y', strtotime($media_releases['date']));
						
						@endphp
						<li>
							<a data-fancybox="gallery{{$media_releases['id']}}" href="{{ asset(Storage::url("app/{$media_releases["gallery_image"]}")) }}" data-caption="Geri Care Hospital">
								<img src="{{asset(Storage::url("app/{$media_releases["gallery_image"]}")) }}" alt="" class="img-fluid" />
								<span><small class="news-date">Published : {{$media_releases_date}}</small> <br>{{$media_releases['title']}}</span>
							</a>
							@if($media_releases['featured_image']!='')

							<a class="d-none" data-fancybox="gallery{{$media_releases['id']}}" href="{{ asset(Storage::url("app/{$media_releases["featured_image"]}")) }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
							@endif
						</li>
						@endforeach				
					 
					</ul>
				</div>
			</div>
		</div>
	</section>

@endsection