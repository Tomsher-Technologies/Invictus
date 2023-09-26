@extends('layouts.frontend.app')
@section('content')

    <section class="lqd-section form pb-20">
        <div class="lqd-particles-bg-wrap lqd-overlay pointer-events-none">
            <div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay h-450">
                <div class="ld-particles-inner lqd-overlay pointer-events-none" id="lqd-particle-form" data-particles="true" data-particles-options='{"particles":{"number":{"value":4},"color":{"value":["#FDC14C","#FDA44C","#4CFD89","#0FBBB4"]},"shape":{"type":["circle"]},"opacity":{"value":1},"size":{"value":4},"move":{"enable":true,"direction":"right","speed":1.75,"random":true,"out_mode":"out"}},"interactivity":[],"retina_detect":true}'></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-12 p-0" data-custom-animations="true" data-ca-options='{"addChildTimelines":false,"animationTarget":"h2, .animation-element","duration":1800,"startDelay":300,"delay":180,"ease":"power4.out","initValues":{"y":"80px","scaleX":0.75,"scaleY":0.75,"rotationX":-10,"opacity":0},"animations":{"y":"0px","scaleX":1,"scaleY":1,"rotationX":0,"opacity":1}}'>
                    <div class="relative flex flex-col transition-all pt-55 pb-45 px-50  bg-white rounded-10 module-form">
                        <div class="relative flex flex-wrap items-start justify-between">
                            <div class="w-60percent ld-fancy-heading relative p-10 sm:w-full">
                                <h2 class="ld-fh-element relative mb-0 text-30">Send a Message</h2>
                            </div>
                            <div class="w-40percent relative text-end p-10 sm:w-full sm:text-start animation-element">
                                <span class="text-12 text-black-70">or Call for Consultation</span>
                                <br>
                                <strong>
                                    <span class="text-15 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="currentColor">
                                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                        </svg>
                                        +851 8924 669233
                                    </span>
                                </strong>
                            </div>
                        </div>
                        <div class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-circle px-15">
                            <div role="form" class="lqd-cf" id="form-contact" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                </div>
                                <form action="#" method="post" class="lqd-cf-form init" novalidate="novalidate" data-status="init">
                                    <div class="row -mx-15">
                                        <div class="col-md-6 px-15 animation-element">
                                            <span class="lqd-form-control-wrap name">
                                                <input type="text" name="name" value="" size="40" class="lqd-cf-form-control text-17 leading-1/7em text-gray-700 border-black-20" aria-required="true" aria-invalid="false" placeholder="Your name">
                                            </span>
                                            <span class="lqd-form-control-wrap">
                                                <input type="email" name="email" value="" size="40" class="lqd-cf-form-control text-17 leading-1/7em text-gray-700 border-black-20" aria-required="true" aria-invalid="false" placeholder="Your email">
                                            </span>
                                            <span class="lqd-form-control-wrap subject">
                                                <input type="text" name="subject" value="Subject" size="40" class="lqd-cf-form-control text-17 leading-1/7em text-gray-700 border-black-20" aria-required="true" aria-invalid="false">
                                            </span>
                                        </div>
                                        <div class="col-md-6 px-15 animation-element">
                                            <span class="lqd-form-control-wrap message">
                                                <textarea name="message" cols="10" rows="6" class="lqd-cf-form-control text-17 leading-1/7em text-gray-700 border-black-20" aria-required="true" aria-invalid="false" placeholder="Your message"></textarea>
                                            </span>
                                        </div>
                                        <div class="col-md-6 mt-1/5rem px-15 animation-element">
                                            <p>By clicking Send a message button, you agree to use our “Form” terms And consent cookie usage in browser.</p>
                                        </div>
                                        <div class="col-md-6 mt-1/5rem text-md-right px-15 animation-element">
                                            <input type="submit" value="Send a message" class="lqd-cf-form-control has-spinner bg-primary border-0 text-14 font-bold tracking-0/5 uppercase text-white">
                                        </div>
                                    </div>
                                    <div class="lqd-cf-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection