@extends("website.layout.welcome")

@section('content')

<section class="inner-layer-banner">
<div class="container">
<div class="row">

<div class="col-lg-12">
<h1>Thank You</h1>
<ul>
<li><a href=""> Home </a></li>
<li> > </li>
<li class="active"> Thank You </li> 
</ul>
</div>

</div>
</div>
</section>

<section class="thank-you-page text-center">
<div class="container">
<div class="row">

<div class="col-lg-12">

<div class="tank-you-cont">
<h4>Thank You</h4>
<div class="">
<img src="{{ asset('/public/website/assets/images/check.png') }}" alt="" class="" />
</div> 
<h5>Your form has been submitted successfully!</h5>
<p>We’ll get in touch with you shortly..</p>
<div class="common-button drk">
<a href="./">Go to Home</a>
</div>
</div>

</div>

</div>
</div>
</section>
 

@endsection