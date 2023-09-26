@extends('layouts.frontend.app')
@section('content')

    <section class="lqd-section about-us pt-150 pb-50" data-section-luminosity="light">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 col-md-12" data-custom-animations="true"
                    data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:&quot;1600&quot;,&quot;delay&quot;:&quot;12&quot;,&quot;ease&quot;:&quot;power4.out&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;rotationX&quot;:75,&quot;rotationY&quot;:10,&quot;rotationZ&quot;:10,&quot;transformOriginX&quot;:50,&quot;transformOriginY&quot;:0,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;rotationX&quot;:0,&quot;rotationY&quot;:0,&quot;rotationZ&quot;:0,&quot;transformOriginX&quot;:50,&quot;transformOriginY&quot;:50,&quot;transformOriginZ&quot;:&quot;0px&quot;,&quot;opacity&quot;:1}}">
                    <h6 class="ld-fh-element lqd-split-lines mb-1/5em text-10 uppercase font-semibold tracking-0/1em text-black"
                        data-split-text="true" data-split-options="{&quot;type&quot;:&quot;lines&quot;}">
                        About Invictus </h6>
                    <h2 class="ld-fh-element lqd-split-chars mb-0 text-38 font-medium leading-1/1em"
                        data-split-text="true"
                        data-split-options="{&quot;type&quot;:&quot;chars, words&quot;}">
                        Your energy partner of choice, combining industry expertise and a global network to maximize your success while prioritizing asset security.




                    </h2>
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


                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.parts.explore_service')
@endsection