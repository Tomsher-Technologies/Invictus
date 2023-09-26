<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="all">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('assets/img/favicon.svg') }}">
   
    <link rel="stylesheet" href="{{ asset('assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo/digital-hub/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo/digital-hub/digital-hub.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo/start-hub-3/start-hub-3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo/creative-services.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo/asymmetric-agency/asymmetric-agency.css') }}">
    <link rel="stylesheet" href="https://use.typekit.net/gvb1ffq.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    @stack('header')
</head>

<body data-localscroll-offset="80" data-mobile-nav-breakpoint="1199" data-localscroll-offset="60"
    data-mobile-nav-style="minimal" data-mobile-nav-scheme="dark" data-mobile-nav-trigger-alignment="right"
    data-mobile-header-scheme="gray" data-mobile-logo-alignment="default" data-overlay-onmobile="false">
    <div id="wrap">
        <div class="lqd-sticky-placeholder hidden"></div>
            @include('frontend.parts.header')
        
        <main class="content bg-cover bg-white" id="lqd-site-content">
            <div id="lqd-contents-wrap">
                @yield('content')
            </div>
        </main>

        <div class="lqd-back-to-top fixed text-10" data-back-to-top="true">

            <a href="#wrap"
                class="inline-flex items-center justify-center rounded-full circle relative overflow-hidden leading-1/4em"
                data-localscroll="true">
                
                <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="21"
                    height="32" viewBox="0 0 21 32" style="width: 1em;">
                    <path fill="white"
                        d="M10.5 13.625l-7.938 7.938c-.562.562-1.562.562-2.124 0C.124 21.25 0 20.875 0 20.5s.125-.75.438-1.063L9.5 10.376c.563-.563 1.5-.5 2.063.063l9 9c.562.562.562 1.562 0 2.125s-1.563.562-2.125 0z">
                    </path>
                </svg>
            </a>
        </div>

        @include('frontend.parts.footer')
    </div>

    <div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
        <div class="lqd-modal-inner">
            <div class="lqd-modal-head"></div>
            <section class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-norepeat"
                style="background-image: url(./assets/images/common/modal-bg.jpeg);">
                <div class="container min-h-100vh flex items-center flex-wrap">
                    <div class="w-55percent relative flex flex-col sm:w-full">
                        <div class="flex flex-col items-start justify-center py-10 pr-100 pl-10 module-content">
                            <div class="ld-fancy-heading">
                                <h2 class="ld-fh-element text-120 mb-0/5em leading-0/8em font-medium text-black">Send a
                                    <span>message.</span>
                                </h2>
                            </div>
                            <div class="ld-fancy-heading">
                                <p class="text-18 ld-fh-element">We're here to answer any question you may have.</p>
                            </div>
                            <div class="w-full flex flex-wrap module-info">
                                <div class="w-50percent flex flex-col sm:w-full module-info-inner">
                                    <div class="mb-10 ld-fancy-heading relative">
                                        <h6
                                            class="ld-fh-element inline-block relative mb-1/25em text-14 font-bold tracking-0 text-black">
                                            info@invictus.com</h6>
                                    </div>

                                </div>

                            </div>





                        </div>
                    </div>
                    <div class="w-45percent relative flex flex-col sm:w-full">
                        <div
                            class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10">
                            <div role="form">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                </div>
                                <form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
                                    novalidate="novalidate" data-status="init">
                                    <div class="row">
                                        <div class="col col-md-6 col-12 p-0">
                                            <p class="m-0 text-black-30 text-12">Your name</p>
                                            <p><span class="lqd-form-control-wrap text"><input
                                                        class="text-13 text-black" type="text" name="name" value
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="Full name"></span></p>
                                        </div>
                                        <div class="col col-md-6 col-12 p-0">
                                            <p class="m-0 text-black-30 text-12">Email address</p>
                                            <p><span class="lqd-form-control-wrap email"><input
                                                        class="text-13 text-black" type="email" name="email" value
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="Email Address"></span></p>
                                        </div>
                                        <div class="col col-md-6 col-12 p-0">
                                            <p class="m-0 text-black-30 text-12">(Optional)</p>
                                            <p><span class="lqd-form-control-wrap tel"><input class="text-13 text-black"
                                                        type="tel" name="tel" value size="40" aria-invalid="false"
                                                        placeholder="Phone number"></span></p>
                                        </div>
                                        <div class="col col-md-6 col-12 p-0">
                                            <p class="m-0 text-black-30 text-12">Subject</p>
                                            <p><span class="lqd-form-control-wrap text"><input
                                                        class="text-13 text-black" type="text" name="project-name" value
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="New Project"></span></p>
                                        </div>
                                        <div class="col col-12 p-0">
                                            <p class="m-0 text-black-30 text-12">Your message</p>
                                            <p><span class="lqd-form-control-wrap textarea"><textarea
                                                        class="text-13 text-black" name="message" cols="10" rows="4"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Tell us about your project"></textarea></span></p>
                                        </div>
                                        <div class="col col-12 p-0"><span class="lqd-form-control-wrap acceptance"><span
                                                    class="lqd-cf-form-control lqd-cf-acceptance"><span
                                                        class="lqd-cf-list-item">
                                                        <label>
                                                            <input class="text-black" type="checkbox" name="acceptance"
                                                                value="1" aria-invalid="false">
                                                            <span class="lqd-cf-list-item-label">I am bound by the terms
                                                                of the Service I accept Privacy
                                                                Policy</span></label></span></span></span></div>
                                        <div class="col col-12 p-0">
                                            <input type="submit" value="Send message"
                                                class="lqd-cf-form-control text-16 font-medium leading-1/5em bg-primary text-white border-none">
                                        </div>
                                    </div>
                                </form>
                                <div class="lqd-cf-response-output"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="lqd-modal-foot"></div>
        </div>
    </div>

    <div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
    <div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"
        data-modal-type="default">
        <div class="lity-backdrop"></div>
        <div class="lity-wrap" data-lity-close role="document">
            <div class="lity-loader" aria-hidden="true">Loading...</div>
            <div class="lity-container">
                <div class="lity-content"></div>
            </div>
            <button class="lity-close" type="button" aria-label="Close (Press escape to close)"
                data-lity-close>&times;</button>
        </div>
    </div>

    <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/utils/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fastdom/fastdom.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flickity/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/draggabilly.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontfaceobserver.js') }}"></script>
    <script src="{{ asset('assets/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fresco/js/fresco.js') }}"></script>
    <script src="{{ asset('assets/vendors/lity/lity.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/lottie/lottie.min.js') }}"></script>
    <script src="{{ asset('assets/js/liquid-gdpr.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/liquid-ajax-contact-form.min.js') }}"></script>
    

    <script>
      
    </script>

    
    <div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
    <div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1" data-modal-type="default">
        <div class="lity-backdrop"></div>
        <div class="lity-wrap" data-lity-close role="document">
            <div class="lity-loader" aria-hidden="true">Loading...</div>
            <div class="lity-container">
                <div class="lity-content"></div>
            </div>
            <button class="lity-close" type="button" aria-label="Close (Press escape to close)" data-lity-close>&times;</button>
        </div>
    </div>
</body>

</html>
