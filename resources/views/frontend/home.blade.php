@extends('layouts.frontend.app')
@section('content')

        <section class="lqd-section banner min-h-100vh w-full flex flex-column items-center bg-orange-100 justify-center"
                    id="banner">
            <div class="absolute w-full h-full">
                <div
                    class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-vh-100">
                    <div class="ld-particles-inner lqd-overlay flex pointer-events-none"
                        id="lqd-particle-banner" data-particles="true"
                        data-particles-options="{&quot;particles&quot;: {&quot;number&quot;: {&quot;value&quot; : 14, &quot;density&quot; : 1} , &quot;color&quot;: {&quot;value&quot; : [&quot;#F27E3F&quot;, &quot;#0FBBB4&quot;, &quot;#48BB0F&quot;, &quot;#3FF292&quot;, &quot;#899BFF&quot;]} , &quot;shape&quot;: {&quot;type&quot; : [&quot;circle&quot;]} , &quot;opacity&quot;: {&quot;value&quot; : 1} , &quot;size&quot;: {&quot;value&quot; : 6, &quot;random&quot;: true, &quot;anim&quot;: {&quot;enable&quot;: true, &quot;size_min&quot; : 1, &quot;speed&quot; : 1}} , &quot;move&quot;: {&quot;enable&quot;: true, &quot;direction&quot;: &quot;right&quot;, &quot;out_mode&quot;: &quot;out&quot;}} , &quot;interactivity&quot; : [], &quot;retina_detect&quot;: true}">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row items-center">
                    <div class="col col-12 col-xl-5" data-custom-animations="true"
                        data-ca-options="{&quot;animationTarget&quot;: &quot;h2, h6, p, .btn&quot;, &quot;duration&quot; : 1800, &quot;delay&quot; : 170, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;65px&quot;, &quot;rotationY&quot; : 65, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;rotationY&quot; : 0, &quot;opacity&quot; : 1}}">

                        <div class="ld-fancy-heading relative">
                            <h2 class="ld-fh-element inline-block relative text-rotator-activated mb-0/25em text-72 leading-1/05em tracking-0"
                                data-text-rotator="true">Invictus Energize Your <span
                                    class="txt-rotate-keywords"><span
                                        class="txt-rotate-keyword lqd-keyword-slide-out is-next">Trade</span>
                                    <span class="txt-rotate-keyword lqd-keyword-slide-out">Storage </span> <span
                                        class="txt-rotate-keyword lqd-keyword-slide-in active">Energy
                                    </span></span>

                            </h2>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element relative mb-2em text-20 leading-32">Your Trusted Partner for
                                Energy Solutions</p>
                        </div>
                        <div class="flex flex-row flex-wrap items-center justify-start">
                            <div class="fancy-button mr-15 module-btn sm:w-full"><a href="#contact-modal"
                                    class="btn btn-solid btn-xlg btn-icon-right btn-hover-reveal font-bold uppercase tracking-1/5 leading-1/4em whitespace-nowrap bg-primary rounded-100 text-white"
                                    data-lity="#contact-modal"><span class="btn-txt"
                                        data-text="Get a Quote">Discover Invictus</span> <span
                                        class="btn-icon text-16"><i aria-hidden="true"
                                            class="lni lni-arrow-right"></i></span></a>
                            </div>

                        </div>
                    </div>
                    <div class="col col-12 col-xl-7 sm:order-first" data-custom-animations="true"
                        data-ca-options="{&quot;animationTarget&quot;: &quot;svg, img&quot;, &quot;startDelay&quot; : 350, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;opacity&quot; : 1}}">
                        <div class="image-container relative -mr-50 lg:m-0">
                            <div class="ld-masked-image" data-dynamic-shape="true">
                                <svg class="scene lqd-overlay flex" viewbox="140 140 140 140">
                                    <defs>
                                        <clippath id="banner-masked-svg" clippathunits="objectBoundingBox"
                                            transform="scale(0.00158)">
                                            <path vector-effect="non-scaling-stroke" fill="black"
                                                d="M212.625, 0.091 C319.112, -2.992 719.225, 71.583 615.507, 328.179 C511.789, 584.775 250.263, 624.292 112.94, 568.057 C-24.383, 511.822 -12.023, 229.89 23.583, 138.127 C59.189, 46.364 106.138, 3.174 212.625, 0.091 Z"
                                                pathdata:id="M362.5, 4 C487, 4 631, -44 631, 201.5 C631, 447 538, 623.5 310.5, 581.5 C83, 539.5 -29.917, 266.627 7, 156.5 C43.917, 46.373 238, 4 362.5, 4 Z;M370, 18 C494.5, 18 627, -56.5 627, 189 C627, 434.5 405.5, 573.5 155.5, 581 C-94.5, 588.5 23.083, 175.127 60, 65 C96.917, -45.127 245.5, 18 370, 18 Z">
                                            </path>
                                        </clippath>
                                    </defs>
                                </svg>
                                <figure class="clip-svg" data-responsive-bg="true"><img width="1292"
                                        height="1196" src="{{ asset('assets/images/banner.gif') }}" class="w-full invisible"
                                        alt="Banner Image"></figure>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="lqd-section what-we-do my-50" id="what-we-do">
            <div class="container">
                <div class="row items-center">
                    <div class="col col-12 col-xl-6 p-0">
                        <div class="w-full flex flex-wrap content-center items-center relative p-10">
                            <div class="w-auto relative">
                                <div class="lqd-imggrp-single block relative" data-shadow-style="4">
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center w-50percent">
                                        <figure class="w-full relative">
                                            <img class="rounded-6" width="492" height="596"
                                                src="{{ asset('assets/images/what-we-do-1.jpg') }}" alt="What We Do">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="w-auto relative">
                                <div class="-mt-40percent -mr-40percent mb-0 ml-35percent">
                                    <div class="lqd-imggrp-single block relative" data-shadow-style="4">
                                        <div
                                            class="lqd-imggrp-img-container inline-flex relative items-center justify-center w-55percent">
                                            <figure class="w-full relative">
                                                <img class="rounded-6" width="666" height="808"
                                                    src="{{ asset('assets/images/what-we-do-2.jpg') }}" alt="What We Do">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                        data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element&quot;, &quot;duration&quot; : 1800 , &quot;delay&quot; : 180 , &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;35px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
                        <div class="w-full flex flex-col items-start pr-5percent pl-30percent module-content">
                            <div class="ld-fancy-heading relative animation-element">
                                <h6
                                    class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left">
                                    Who we are</h6>
                            </div>
                            <div class="ld-fancy-heading relative animation-element">
                                <h2
                                    class="ld-fh-element mb-0/5em inline-block relative lqd-highlight-classic lqd-highlight-grow-left">
                                    Your Gateway to Energy Success</h2>
                            </div>
                            <div class="ld-fancy-heading pb-0/5em relative animation-element">
                                <p
                                    class="ld-fh-element mb-1/25em inline-block relative lqd-highlight-classic lqd-highlight-grow-left">
                                    Invictus Trade Services Ltd is a dynamic and globally recognized firm
                                    headquartered in Hong Kong. With a strategic presence in this international
                                    hub, we have cultivated a profound understanding of the intricacies of
                                    energy trade, storage management, and shipping operations. Our team
                                    comprises industry experts with years of experience in their respective
                                    fields, making us a go-to partner for businesses seeking excellence in these
                                    domains.

                                </p>
                            </div>


                            <a href="{{ route('about') }}"
                                class="btn btn-solid btn-md font-bold btn-icon-right btn-hover-reveal text-16 text-white bg-primary  rounded-4 hover:bg-secondary hover:text-white animation-element"
                                >
                                <span class="btn-txt" data-text="Get a quote">READ MORE</span>
                                <span class="btn-icon text-1/15em">
                                    <i aria-hidden="true" class="lni lni-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="lqd-section bananas-banner pb-100 md:hidden md:mt-0" data-section-luminosity="light"
            style=" margin-top: -15px; ">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12">
                        <div class="lqd-bnr-bnns text-center relative">
                            <div class="lqd-bnr-bnns-inner flex-wrap lqd-overlay flex">
                                <div class="lqd-bnr-bnns-h-wrap lqd-bnr-bnns-h-wrap-first w-full"
                                    data-parallax="true"
                                    data-parallax-from="{&quot;opacity&quot; : 0 , &quot;y&quot; : 100}"
                                    data-parallax-to="{&quot;opacity&quot; : 1, &quot;y&quot; : 0}"
                                    data-parallax-options="{&quot;addWillChange&quot;: true, &quot;start&quot;: &quot;top top&quot;, &quot;end&quot;: &quot;+=60%&quot;}">
                                    <h2 class="lqd-bnr-bnns-h">Why Choose</h2>
                                </div>
                                <div class="fullwidth absolute h-full">
                                    <div
                                        class="lqd-bnr-bnns-media fullwidth h-vh-100 lqd-css-sticky module-sticky">
                                        <div class="lqd-bnr-media-inner" data-parallax="true"
                                            data-parallax-from="{&quot;scale&quot; : 1, &quot;y&quot; : 0}"
                                            data-parallax-to="{&quot;scale&quot; : 0.75, &quot;y&quot; : 100}"
                                            data-parallax-options="{&quot;addWillChange&quot;: true, &quot;start&quot;: &quot;top top&quot;, &quot;end&quot;: &quot;+=50%&quot;}">
                                            <figure>
                                                <img width="2080" height="1123" src="{{ asset('assets/images/why.jpg') }}"
                                                    alt="bananas banner">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="lqd-bnr-bnns-h-wrap lqd-bnr-bnns-h-wrap-last flex items-center justify-center h-vh-100 lqd-css-sticky text-center w-full "
                                    data-parallax="true"
                                    data-parallax-from="{&quot;opacity&quot; : 1, &quot;y&quot; : 0}"
                                    data-parallax-to="{&quot;opacity&quot; : 0 , &quot;y&quot; : 150}"
                                    data-parallax-options="{&quot;addWillChange&quot;: true, &quot;start&quot;: &quot;top top&quot;, &quot;end&quot;: &quot;+=50%&quot;}" style="flex-direction: column">
                                    <h2 class="m-0 lqd-bnr-bnns-h-inner" >
                                        INVICTUS
                                        <!-- <img src="assets/images/s2.png" alt=""> -->
                                    
                                    </h2>

                                    <p class="text-white text-20">One-stop destination for energy trade, <br> storage management & operations, and shipping solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="lqd-section solutions bg-white transition-all lqd-section-scroll-activated"
            id="solutions" data-lqd-section-scroll="true"
            data-section-scroll-options="{&quot;itemsSelector&quot;:  &quot;.lqd-section-scroll-inner&quot;}">
            <section class="lqd-section about-us  pb-50" data-section-luminosity="light">
                <div class="container">
                    <div class="row items-center">
                        <div class="col col-12 col-md-12" data-custom-animations="true"
                            data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:&quot;1600&quot;,&quot;delay&quot;:&quot;12&quot;,&quot;ease&quot;:&quot;power4.out&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;rotationX&quot;:75,&quot;rotationY&quot;:10,&quot;rotationZ&quot;:10,&quot;transformOriginX&quot;:50,&quot;transformOriginY&quot;:0,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;rotationX&quot;:0,&quot;rotationY&quot;:0,&quot;rotationZ&quot;:0,&quot;transformOriginX&quot;:50,&quot;transformOriginY&quot;:50,&quot;transformOriginZ&quot;:&quot;0px&quot;,&quot;opacity&quot;:1}}">
                            <h6 class="ld-fh-element lqd-split-lines mb-1/5em text-10 uppercase font-semibold tracking-0/1em text-black"
                                data-split-text="true"
                                data-split-options="{&quot;type&quot;:&quot;lines&quot;}">
                                Services </h6>
                            <h2 class="ld-fh-element lqd-split-chars mb-0 text-38 font-medium leading-1/1em"
                                data-split-text="true"
                                data-split-options="{&quot;type&quot;:&quot;chars, words&quot;}">


                                Invictus Trade Services Ltd offers a range of expert solutions







                            </h2>
                        </div>

                    </div>
                </div>
            </section>


            <div class="container p-0">
                <div class="lqd-section-scroll-inner module-img-1">
                    <div class="container">
                        <div class="row min-h-100vh items-center">
                            <div class="col col-12 col-xl-6">
                                <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                        <figure class="w-full relative" data-stacking-factor="1"
                                            data-reveal="true"
                                            data-reveal-options="{&quot;direction&quot;: &quot;tb&quot;}">
                                            <img width="1048" height="1006" src="{{ asset('assets/images/oil.png') }}"
                                                alt="social media">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                                data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element&quot;, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;35px&quot;, &quot;rotationY&quot; : -35, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;rotationY&quot; : 0, &quot;opacity&quot; : 1}}">
                                <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">

                                    <div class="ld-fancy-heading relative animation-element">
                                        <h2 class="text-48 tracking-1 ld-fh-element mb-0/5em inline-block relative"
                                            data-inview="true" data-transition-delay="true"
                                            data-delay-options=" {&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}">

                                            Oil Storage Solutions
                                        </h2>
                                    </div>
                                    <div class="ld-fancy-heading relative animation-element">
                                        <p
                                            class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">
                                            Adjust your design through a wide range of theme options in the
                                            WordPress Customizer and see the changes instantly.</p>
                                    </div>
                                    <div class="spacer w-full animation-element">
                                        <div class="w-full h-50"></div>
                                    </div>
                                    <div class="w-full animation-element">
                                        <a href="{{ route('service') }}"
                                            class="btn btn-solid btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-140 h-45 rounded-6 bg-primary text-white hover:text-white hover:bg-primary"
                                            data-localscroll="true">
                                            <span class="btn-txt" data-text="READ MORE" data-split-text="true"
                                                data-split-options="{&quot;type&quot;:  &quot;chars, words&quot;}">READ
                                                MORE</span>
                                            <span class="btn-icon text-1em">
                                                <i class="lni lni-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lqd-section-scroll-inner module-img-2">
                    <div class="container">
                        <div class="row min-h-100vh items-center">
                            <div class="col col-12 col-xl-6">
                                <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                        <figure class="w-full relative" data-stacking-factor="1"
                                            data-reveal="true"
                                            data-reveal-options="{&quot;direction&quot;: &quot;tb&quot;}">
                                            <img width="1048" height="1006" src="{{ asset('assets/images/trade.png') }}"
                                                alt="mobile Development">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                                data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element&quot;, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;35px&quot;, &quot;rotationY&quot; : -35, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;rotationY&quot; : 0, &quot;opacity&quot; : 1}}">
                                <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">

                                    <div class="ld-fancy-heading relative animation-element">
                                        <h2 class="text-48 tracking-1 ld-fh-element mb-0/5em inline-block relative"
                                            data-inview="true" data-transition-delay="true"
                                            data-delay-options=" {&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}">
                                            Trade Advisory & Procurement Solutions
                                        </h2>
                                    </div>
                                    <div class="ld-fancy-heading relative animation-element">
                                        <p
                                            class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">
                                            Adjust your design through a wide range of theme options in the
                                            WordPress Customizer and see the changes instantly.</p>
                                    </div>
                                    <div class="spacer w-full animation-element">
                                        <div class="w-full h-50"></div>
                                    </div>
                                    <div class="w-full animation-element">
                                        <a href="{{ route('service') }}"
                                            class="btn btn-solid btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-140 h-45 rounded-6 bg-primary text-white hover:text-white hover:bg-primary"
                                            data-localscroll="true">
                                            <span class="btn-txt" data-text="READ MORE" data-split-text="true"
                                                data-split-options="{&quot;type&quot;:  &quot;chars, words&quot;}">READ
                                                MORE</span>
                                            <span class="btn-icon text-1em">
                                                <i class="lni lni-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lqd-section-scroll-inner module-img-3">
                    <div class="container">
                        <div class="row min-h-100vh items-center">
                            <div class="col col-12 col-xl-6">
                                <div class="lqd-imggrp-single block relative perspective" data-hover3d="true">
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                        <figure class="w-full relative" data-stacking-factor="1"
                                            data-reveal="true"
                                            data-reveal-options="{&quot;direction&quot;: &quot;tb&quot;}">
                                            <img width="1048" height="1006" src="{{ asset('assets/images/Shipping.png')}} "
                                                alt="ecommerce solutions">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                                data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element&quot;, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;35px&quot;, &quot;rotationY&quot; : -35, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;rotationY&quot; : 0, &quot;opacity&quot; : 1}}">
                                <div class="flex flex-wrap py-10 pr-160 pl-80 module-col">

                                    <div class="ld-fancy-heading relative animation-element">
                                        <h2 class="text-48 tracking-1 ld-fh-element mb-0/5em inline-block relative"
                                            data-inview="true" data-transition-delay="true"
                                            data-delay-options=" {&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}">
                                            Shipping & Logistics Solutions
                                        </h2>
                                    </div>
                                    <div class="ld-fancy-heading relative animation-element">
                                        <p
                                            class="text-16 tracking-0 ld-fh-element mb-0/5em inline-block relative">
                                            Adjust your design through a wide range of theme options in the
                                            WordPress Customizer and see the changes instantly.</p>
                                    </div>
                                    <div class="spacer w-full animation-element">
                                        <div class="w-full h-50"></div>
                                    </div>
                                    <div class="w-full animation-element">
                                        <a href="{{ route('service') }}"
                                            class="btn btn-solid btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-custom-size btn-icon-right text-13 w-140 h-45 rounded-6 bg-primary text-white hover:text-white hover:bg-primary"
                                            data-localscroll="true">
                                            <span class="btn-txt" data-text="READ MORE" data-split-text="true"
                                                data-split-options="{&quot;type&quot;:  &quot;chars, words&quot;}">READ
                                                MORE</span>
                                            <span class="btn-icon text-1em">
                                                <i class="lni lni-chevron-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         
        @include('frontend.parts.explore_service')


@endsection