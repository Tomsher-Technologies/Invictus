<header id="site-header" class="main-header main-header-overlay" data-sticky-header="true"
            data-sticky-values-measured="false" data-sticky-options="{&quot;disableOnMobile&quot;: true}">
            <section class="lqd-section desktop-header md:hidden">
                <div class="container-fluid p-0">
                    <div class="flex flex-wrap w-full justify-between">
                        <div class="navbar-brand-plain w-15percent py-30 flex"><a href="{{ route('home') }}"
                                class="navbar-brand flex relative p-0 leading-1/4em"><span
                                    class="navbar-brand-inner post-rel"><img class="logo-default w-200"
                                        src="{{ asset('assets/images/logo_main.svg') }}" alt="Digital Hub"></span></a>
                        </div>
                        <div class="module-primary-nav w-70percent flex justify-end lg:w-85percent">
                            <div class="navbar-collapse inline-flex lqd-submenu-cover p-0" id="main-header-collapse"
                                aria-expanded="false" role="navigation">
                                <ul id="primary-nav"
                                    class="main-nav flex justify-center reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-default lqd-submenu-toggle-hover"
                                    data-submenu-options="{&quot;toggleType&quot;: &quot;fade&quot;, &quot;handler&quot;: &quot;mouse-in-out&quot;}"
                                    data-localscroll="true"
                                    data-localscroll-options="{&quot;itemsSelector&quot; : &quot;>li > a&quot;, &quot;trackWindowScroll&quot;: true, &quot;includeParentAsOffset&quot;: true}">
                                    <li class="is-active"><a class="leading-1/4em text-black" href="{{ route('home') }}">Home</a>
                                    </li>



                                    <li><a class="leading-1/4em text-black" href="{{ route('about') }}">About Us</a></li>
                                    <li><a class="leading-1/4em text-black" href="{{ route('service') }}">Oil Storage</a></li>

                                    <li><a class="leading-1/4em text-black" href="{{ route('service') }}">Trade Advisory &
                                            Procurement</a></li>
                                    <li><a class="leading-1/4em text-black" href="{{ route('service') }}">Shipping & Logistics</a>
                                    </li>
                                    <li><a class="leading-1/4em text-black" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-15percent flex items-center justify-end lg:hidden">
                           
                            <div class="module-btn px-0/5em"><a href="#contact-modal"
                                    class="btn btn-solid btn-md uppercase text-13 font-bold tracking-1/5 leading-1/4em bg-primary rounded-100 shadow-md text-white hover:text-white"
                                    data-lity="#contact-modal"><span class="btn-txt" data-text="Start a project">Enquiry
                                        Now</span></a></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="lqd-mobile-sec relative">
                <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
                    <div class="lqd-mobile-modules-container empty"></div><button type="button"
                        class="bg-transparent border-none navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end p-0"
                        data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav"
                        aria-expanded="false"
                        data-toggle-options="{ &quot;changeClassnames&quot;:  {&quot;html&quot;:  &quot;mobile-nav-activated&quot;} }"><span
                            class="sr-only">Menu</span> <span class="bars inline-block relative z-1"><span
                                class="bars-inner flex flex-col w-full h-full"><span class="bar inline-block"></span>
                                <span class="bar inline-block"></span> <span
                                    class="bar inline-block"></span></span></span></button> <a
                        class="navbar-brand flex relative leading-1/4em" href="{{ route('home') }}"><span
                            class="navbar-brand-inner"><img width="100" class="logo-default"
                                src="{{ asset('assets/images/logo-Dark.svg') }}" alt="Hub"></span></a>
                </div>
                <div class="lqd-mobile-sec-nav w-full absolute z-10">
                    <div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav"
                        aria-expanded="false" role="navigation">
                        <ul id="mobile-primary-nav"
                            class="reset-ul lqd-mobile-main-nav main-nav lqd-submenu-toggle-hover">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                                <a href="{{ route('home') }}" class="leading-1/4em">Home</a>
                            </li>

                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                                <a href="{{ route('about') }}" class="leading-1/4em">About Us</a>
                            </li>


                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                                <a href="{{ route('service') }}" class="leading-1/4em">Services</a>
                            </li>


                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                                <a href="{{ route('contact') }}" class="leading-1/4em">Contact Us</a>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </header>