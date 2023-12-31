<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="robots" content="noodp">

    <title>{{ $title ?? 'Geriatric Care In Chennai | Elder Care In Chennai - Geri Care' }}</title>
    <meta name="description"
        content="{{ $decription ?? 'Looking for passionate Geriatric Care in Chennai? Geri Care offers quality Elder Care Services tailored for Senior Citizens. Book an appointment Today!' }}" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public/website/favicon.png') }}" />

    @if (!is_null(Route::getFacadeRoot()->current()))
        <link rel="canonical" href="{{ url(Route::getFacadeRoot()->current()->uri() ?? '/') }}" />
    @endif

    @if (!is_null(Route::getFacadeRoot()->current()))
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url(Route::getFacadeRoot()->current()->uri() ?? '/') }}">
        <meta property="og:type" content="website">
        <meta property="og:title"
            content="{{ $title ?? 'Geriatric Care In Chennai | Elder Care In Chennai - Geri Care' }}">
        <meta property="og:description"
            content="{{ $decription ?? 'Looking for passionate Geriatric Care in Chennai? Geri Care offers quality Elder Care Services tailored for Senior Citizens. Book an appointment Today!' }}">
        <meta property="og:image" content="https://www.gericare.in/public/website/assets/images/banners/banner-1.jpg">
    @endif

    @if (!is_null(Route::getFacadeRoot()->current()))
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="gericare.in">
        <meta property="twitter:url" content="{{ url(Route::getFacadeRoot()->current()->uri() ?? '/') }}">
        <meta name="twitter:title"
            content="{{ $title ?? 'Geriatric Care In Chennai | Elder Care In Chennai - Geri Care' }}">
        <meta name="twitter:description"
            content="{{ $decription ?? 'Looking for passionate Geriatric Care in Chennai? Geri Care offers quality Elder Care Services tailored for Senior Citizens. Book an appointment Today!' }}">
        <meta name="twitter:image" content="https://www.gericare.in/public/website/assets/images/banners/banner-1.jpg">
    @endif


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
        integrity="sha512-6qkvBbDyl5TDJtNJiC8foyEVuB6gxMBkrKy67XpqnIDxyvLLPJzmTjAj1dRJfNdmXWqD10VbJoeN4pOQqDwvRA=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
        integrity="sha512-6qkvBbDyl5TDJtNJiC8foyEVuB6gxMBkrKy67XpqnIDxyvLLPJzmTjAj1dRJfNdmXWqD10VbJoeN4pOQqDwvRA=="
        crossorigin="anonymous" />

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />



    <link rel="stylesheet" type="text/css" href="{{ asset('/public/website/assets/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/website/assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/website/assets/css/main-n.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/website/assets/css/footer.css') }}">

    <script type="text/javascript">
        function loading() {
            document.getElementById("load").style.display = 'block';
        }

        function unloading() {
            document.getElementById("load").style.display = 'none';
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150382938-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-150382938-1');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X3KEJWRV0M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-X3KEJWRV0M');
    </script>


    <script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "Product",
"name": "Geri Care",
"image": "https://www.gericare.in/public/website/assets/images/logo.png",
"description": "We at Gericare Understand Your Need for Home Care Taker Services for the Elders in Chennai. We Provide the Best Home Care Taker Services for Elderly at the Comfort of Your Home.",
"mpn": "001",
"sku": "+914440614061",
"brand": {
"@type": "Organization",
"name": "Geri Care"
},
"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "4.8",
"bestRating": "5",
"worstRating": "1",
"ratingCount": "139",
"reviewCount": "139"
},
"review": {
"@type": "Review",
"name": "Kalyani Comal",
"reviewBody": "Gericare is the best! The care they took of my father was so good, I have switched to them for my health care also. Mrs Uma who takes care of the patients is truly compassionate and efficient. She keeps track of all the appointments and makes sure no one is kept waiting. The doctors are experienced and kind and I cannot say enough in praise of the hospital.",
"reviewRating": {
"@type": "Rating",
"ratingValue": "5",
"bestRating": "5",
"worstRating": "1"
},
"datePublished": "2023-06-09",
"author": {"@type": "Person", "name": "Geri Care"}
}
}
</script>



    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T2T2Q7H5');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '917067238823260');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=917067238823260&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <script defer data-domain="gericare.in" src="https://plausible.io/js/script.js"></script>

</head>

<body class="">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2T2Q7H5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- Header --}}
    @include('website.header')
    {{-- Header --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <main>
        @yield('content')
    </main>
    {{-- Footer --}}
    @include('website.footer')
    {{-- Footer --}}


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" inte
        rity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" cros origin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


    <!-- Multiselect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


    <script src="https://use.fontawesome.com/9ad0804c94.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"
        integrity="sha512-Yk47FuYNtuINE1w+t/KT4BQ7JaycTCcrvlSvdK/jry6Kcxqg5vN7/svVWCxZykVzzJHaxXk5T9jnFemZHSYgnw=="
        crossorigin="anonymous"></script>
    <!-- validation -->
    <script type="text/javascript" src="{{ asset('/public/website/assets/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/website/assets/js/additional-methods.js') }}"></script>
    <!-- jAlert -->
    <script type="text/javascript" src="{{ asset('/public/website/assets/js/sweetalert.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('/public/website/assets/js/main.js') }}"></script>
    <script src="{{ asset('/public/website/assets/js/mdtimepicker.min.js') }}"></script>
    <script src="{{ asset('/public/website/assets/js/jquery.mapit.js') }}"></script>
    <script src="{{ asset('/public/website/assets/js/initializers.js') }}"></script>


    <style>
        #loading-image {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;

        }
    </style>

    <!--Modal JS Script -->
    <script type="text/javascript">
        window.onload = () => {
            $('#popupvideo').modal('show');
        }
    </script>
    <script type="text/javascript">
        $('#popupvideo').on('hidden.bs.modal', function() {
            $("#popupvideo iframe").attr("src", $("#popupvideo iframe").attr("src"));
        });
    </script>


    <div id="preloader" style="display:none"
        style="background:rgba(255,255,255,1); width:100%; height:100%; position:fixed;top:0; left:0;z-index:99999999; padding-top:1%; ">
    </div>
    @yield('addon_script')
    <script>
        $(document).ready(function() {
            $('#timepicker').mdtimepicker(); //Initializes the time picker
        });

        $(".price").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^.0-9]/g)) return false;
        });

        $('#request_call_back').submit(function() {
            $('#preloader').show();
            event.preventDefault();
            var formData = $('#request_call_back').serialize();
            $('#save-btn').prop('disabled', 'true');

            $.ajax({
                url: "{{ route('consultant.form.req_submit') }}",
                type: 'POST',
                data: formData,
                beforeSend: function() {},
                success: function(res) {

                    $('#save-btn').prop('disabled', 'false');
                    $("#save-btn").attr("disabled", false);

                    if (res.error == 0) {
                        // toastr.success('Success', res.message);
                        window.location.href = '{{ route('callback.thanks') }}';
                        $('#request_call_back')[0].reset();
                    } else {
                        if (res.message) {

                            toastr.error("Error", res.message);

                        }
                    }
                }
            })
        })


        $('#AppointmentForm').submit(function() {
            $('#preloader').show();

            event.preventDefault();
            var formData = $('#AppointmentForm').serialize();
            $('#submit_btn').prop('disabled', 'true');

            $.ajax({
                url: "{{ route('appointment.form.submit') }}",
                type: 'POST',
                data: formData,
                beforeSend: function() {},
                success: function(res) {

                    $('#submit_btn').prop('disabled', 'false');
                    $("#submit_btn").attr("disabled", false);

                    if (res.error == 0) {
                        //toastr.success('Success', res.message);
                        // if (res.from_page == 'departments') {
                        //     window.location.href = '{{ route('departapp.thanks') }}';
                        // } else if (res.from_page == 'service_appointment') {
                        //     window.location.href = '{{ route('service.appointment.thanks') }}';
                        // } else {
                        //     window.location.href = '{{ route('doctorapp.thanks') }}';
                        // }
                        $('#preloader').hide();
                        $('#loading-image').hide();
                        $('#AppointmentForm')[0].reset();
                    } else {
                        if (res.message) {
                            toastr.error("Error", res.message);
                        }
                    }
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#timepicker').mdtimepicker(); //Initializes the time picker
        });
    </script>

    <script>
        $(function() {
            // bind change event to select
            $('#sel-dept').on('change', function() {
                var url = $(this).val(); // get selected value
                if (url) { // require a URL
                    window.location = url; // redirect
                }
                return false;
            });
        });
    </script>

    <script>
        (function($) {
            $(window).resize(function() {
                if ($(this).width() > 768) {
                    $(".testimonial-content").mCustomScrollbar({
                        theme: "dark"
                    }); //apply scrollbar with your options 
                } else {
                    $(".testimonial-content").mCustomScrollbar("destroy"); //destroy scrollbar 
                }
            }).trigger("resize");
        })(jQuery);
    </script>

    <script>
        $(function() {
            $('.datepicker').datepicker({
                language: "es",
                autoclose: true,
                format: "dd/mm/yyyy"
            });
        });


        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                if ($(this).attr('id') == 'old-patient') {
                    $('#registration').show("slow");
                } else {
                    $('#registration').hide("slow");
                }
            });
        });

        $('.collapse').on('shown.bs.collapse', function() {
            $(this).prev().addClass('active-acc');
        });

        $('.collapse').on('hidden.bs.collapse', function() {
            $(this).prev().removeClass('active-acc');
        });

        $('.collapse').on('shown.bs.collapse', function(e) {
            var $card = $(this).closest('.accordion-item');
            $('html,body').animate({
                scrollTop: $card.offset().top - 100
            }, 500);
        });

        $(".accordion").on("hide.bs.collapse show.bs.collapse", e => {
            $(e.target)
                .prev()
                .find("i:last-child")
                .toggleClass("fa-minus fa-plus");
        });
    </script>


    <script>
        $('.geriatic-care').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 1,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.press-detils').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 1,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.servce-strture').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 3,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.gericare-lstsdeprtment').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 4,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.facilities-slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 1,
            fade: true,
            dots: true,
            slidesToScroll: 1,
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            touchThreshold: 100,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.galleruie-slider-rapuram').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 2,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.galleruie-slider-royapuram').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 2,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.blogs-strture').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 4,
            dots: true,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('.google-revews').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            slidesToShow: 3,
            dots: true,
            slidesToScroll: 1,
            adaptiveHeight: true,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>

    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            //console.log(scroll);
            if (scroll >= 200) {
                //console.log('a');
                $("body").addClass("pad-top");
                $("header").addClass("fixed-top");
                $(".product-image3").addClass("active");
            } else {
                //console.log('a');
                $("body").removeClass("pad-top");
                $("header").removeClass("fixed-top");
                $(".product-image3").removeClass("active");
            }
        });

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            //console.log(scroll);
            if (scroll >= 300) {
                //console.log('a');
                $(".back-to-top").addClass("scrollfixed");
            } else {
                //console.log('a');
                $(".back-to-top").removeClass("scrollfixed");
            }
        });
    </script>

    <script>
        (function($) {
            $.fn.menumaker = function(options) {
                var cssmenu = $(this),
                    settings = $.extend({
                        format: "dropdown",
                        sticky: false
                    }, options);
                return this.each(function() {
                    $(this).find(".button").on('click', function() {
                        $(this).toggleClass('menu-opened');
                        var mainmenu = $(this).next('ul');
                        if (mainmenu.hasClass('open')) {
                            mainmenu.slideToggle().removeClass('open');
                        } else {
                            mainmenu.slideToggle().addClass('open');
                            if (settings.format === "dropdown") {
                                mainmenu.find('ul').show();
                            }
                        }
                    });
                    cssmenu.find('li ul').parent().addClass('has-sub');
                    multiTg = function() {
                        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu.find('.submenu-button').on('click', function() {
                            $(this).toggleClass('submenu-opened');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').slideToggle();
                            } else {
                                $(this).siblings('ul').addClass('open').slideToggle();
                            }
                        });
                    };
                    if (settings.format === 'multitoggle') multiTg();
                    else cssmenu.addClass('dropdown');
                    if (settings.sticky === true) cssmenu.css('position', 'fixed');
                    resizeFix = function() {
                        var mediasize = 1000;
                        if ($(window).width() > mediasize) {
                            cssmenu.find('ul').show();
                        }
                        if ($(window).width() <= mediasize) {
                            cssmenu.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    return $(window).on('resize', resizeFix);
                });
            };
        })(jQuery);

        (function($) {
            $(document).ready(function() {
                $("#cssmenu").menumaker({
                    format: "multitoggle"
                });
            });
        })(jQuery);
    </script>

    <script>
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function() {
            realFileBtn.click();
        });

        realFileBtn.addEventListener("change", function() {
            if (realFileBtn.value) {
                customTxt.innerHTML = realFileBtn.value.match(
                    /[\/\\]([\w\d\s\.\-\(\)]+)$/
                )[1];
            } else {
                customTxt.innerHTML = "No file chosen, yet.";
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#type").change(function() {
                var val = $(this).val();
                if (val == "Geri Care Hospital - T Nagar") {
                    $("#size").html(
                        "<option value=''>Select Department</option><option value='Geriatric Cardiology'>Geriatric Cardiology </option><option value='Orthogeriatrics'>Orthogeriatrics</option><option value='Geriatric Neurology'>Geriatric Neurology</option><option value='Geriatric Surgery'>Geriatric Surgery</option><option value='Geriatric Oncology'>Geriatric Oncology</option><option value='Geriatric Urology'>Geriatric Urology</option><option value='Gastroenterology'>Gastroenterology</option><option value='Pulmonology'>Pulmonology</option>	<option value='Geriatric ICU'>Geriatric ICU</option><option value='Dermatology'>Dermatology</option>	<option value='Vascular Surgery'>Vascular Surgery</option><option value='Uro Gynaecology'>Uro Gynaecology</option><option value='Nephrology and Dialysis 24/7'>Nephrology and Dialysis 24/7</option><option value='Geriatric Physiotherapy'>Geriatric Physiotherapy</option><option value='Lab Services'>Lab Services</option>"
                        );
                } else if (val == "Geri Care Hospital - Adambakkam") {
                    $("#size").html(
                        "<option value=''>Select Department</option><option value='Geriatric Cardiology'>Geriatric Cardiology </option><option value='Orthogeriatrics'>Orthogeriatrics</option><option value='Geriatric Neurology'>Geriatric Neurology</option><option value='Geriatric Surgery'>Geriatric Surgery</option><option value='Geriatric Oncology'>Geriatric Oncology</option><option value='Geriatric Urology'>Geriatric Urology</option><option value='Gastroenterology'>Gastroenterology</option><option value='Pulmonology'>Pulmonology</option>	<option value='Geriatric ICU'>Geriatric ICU</option><option value='Dermatology'>Dermatology</option>	<option value='Vascular Surgery'>Vascular Surgery</option><option value='Uro Gynaecology'>Uro Gynaecology</option><option value='Nephrology and Dialysis 24/7'>Nephrology and Dialysis 24/7</option><option value='Geriatric Physiotherapy'>Geriatric Physiotherapy</option><option value='Lab Services'>Lab Services</option>"
                        );
                } else if (val == "Geri Care Clinics  - Adyar") {
                    $("#size").html(
                        "<option value=''>Select Department</option><option value='Falls prevention (Osteoporosis) clinic'>Falls prevention (Osteoporosis) clinic </option><option value='Memory clinic'>Memory clinic</option><option value='Incontinence clinic (Urinary)'>Incontinence clinic (Urinary)</option><option value='Preventive Health Checks clinic'>Preventive Health Checks clinic</option><option value='Adult vaccination clinic'>Adult vaccination clinic</option><option value='Seniors Diabetic clinic'>Seniors Diabetic clinic</option><option value='Hypertension clinic'>Hypertension clinic</option><option value='Sleep disorder clinic'>Sleep disorder clinic</option>"
                        );
                } else if (val == "Geri Care Clinics  - Anna Nagar") {
                    $("#size").html(
                        "<option value=''>Select Department</option><option value='Falls prevention (Osteoporosis) clinic'>Falls prevention (Osteoporosis) clinic </option><option value='Memory clinic'>Memory clinic</option><option value='Incontinence clinic (Urinary)'>Incontinence clinic (Urinary)</option><option value='Preventive Health Checks clinic'>Preventive Health Checks clinic</option><option value='Adult vaccination clinic'>Adult vaccination clinic</option><option value='Seniors Diabetic clinic'>Seniors Diabetic clinic</option><option value='Hypertension clinic'>Hypertension clinic</option><option value='Sleep disorder clinic'>Sleep disorder clinic</option>"
                        );
                } else if (val == "item0") {
                    $("#size").html("<option value=''>Select Department</option>");
                }
            });
        });
    </script>

    @stack('scripts')


    <script>
        (function(w, d) {
            w.CollectId = "5ff9e36a8f2c9f53a7643a30";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);
    </script>


</body>

</html>
