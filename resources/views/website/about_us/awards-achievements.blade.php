@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/Banner.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Awards & Achievements
</h4>
<ul>
<li><a href="./">Home</a></li> 
<li> > </li>  
<li>About Us</li>  
<li> > </li>     
<li class="active">Awards & Achievements</li>    
</ul>
</div>
</div>
</div>
</div>

</section> 

@endsection