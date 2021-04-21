@extends('layouts.app')

@section('content')
<section class="hero hero-slider-wrapper hero-style-1">
    <div class="hero-slider slick-initialized slick-slider slick-dotted" role="toolbar">
        <button type="button" class="slick-prev slick-arrow" style="display: block;">Previous</button>

        <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track" role="listbox" style="opacity: 1; width: 4029px;">
                <div
                    class="slide slick-slide slick-current slick-active"
                    data-slick-index="0"
                    aria-hidden="false"
                    tabindex="-1"
                    role="option"
                    aria-describedby="slick-slide00"
                    style="width: 1343px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                >
                    <img src="{{ asset('wtos-images/870856_482467d4-8abe-4f55-ae4f-c22a07537e3a.jpg') }}" alt="goldenTouch banner image" class="slider-bg" />

                    <div class="banner_text">
                        <div class="slide-caption">
                            <div class="slide-title">
                                <h2>PEST CONTROL SERVICE</h2>
                                <h3>
                                    <span style="font-size: xx-large;">&nbsp;<strong>DUBAI &amp; SHARJAH</strong></span>
                                </h3>
                                <p>
                                    <span style="color: #ffffff;">
                                        <em><strong>(Children and Pregnancy Safe)</strong></em>
                                    </span>
                                </p>
                            </div>
                            <div class="btns"><a class="btn theme-btn" href="Contact" tabindex="0">Contact Us</a></div>
                        </div>
                    </div>
                </div>
                <div
                    class="slide slick-slide"
                    data-slick-index="1"
                    aria-hidden="true"
                    tabindex="-1"
                    role="option"
                    aria-describedby="slick-slide01"
                    style="width: 1343px; position: relative; left: -1343px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;"
                >
                    <img src="{{ asset('wtos-images/628627_service-page-5-img.jpg') }}" alt="goldenTouch banner image" class="slider-bg" />

                    <div class="banner_text">
                        <div class="slide-caption">
                            <div class="slide-subtitle">&nbsp;</div>
                            <div class="slide-title">
                                <h2>Best Cleaning and Pest Control Services</h2>
                                <p>We Offer Latest In Pest Control And Cleaning Technology</p>
                            </div>
                            <div class="btns"><a class="btn theme-btn" href="Contact" tabindex="-1">Contact Us</a></div>
                        </div>
                    </div>
                </div>
                <div
                    class="slide slick-slide"
                    data-slick-index="2"
                    aria-hidden="true"
                    tabindex="-1"
                    role="option"
                    aria-describedby="slick-slide02"
                    style="width: 1343px; position: relative; left: -2686px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;"
                >
                    <img src="{{ asset('wtos-images/297525_End-of-Lease-Cleaning-.jpg') }}" alt="goldenTouch banner image" class="slider-bg" />

                    <div class="banner_text">
                        <div class="slide-caption">
                            <div class="slide-subtitle">&nbsp;</div>
                            <div class="slide-title">
                                <h2>GENERAL &amp; DEEP CLEANING SERVICES</h2>
                                <p>For commercial &amp; residency</p>
                            </div>
                            <div class="btns"><a class="btn theme-btn" href="Contact" tabindex="-1">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="slick-next slick-arrow" style="display: block;">Next</button>
        <ul class="slick-dots" style="display: block;" role="tablist">
            <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li>
            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class=""><button type="button" data-role="none" role="button" tabindex="0">3</button></li>
        </ul>
    </div>
</section>

<section class="about-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="about-info">
                    <h3>Tareeq Muwaileh Pest Control and Building Cleaning Services</h3>
                    <p>
                        Tareeq Muwaileh Building Cleaning and Pest control has been serving residential and commercial customers. we provide a comprehensive line of termite and full-service pest control programs-“pests of any kind” to
                        promptly, safely and efficiently solve any pest problems or threats. By focusing on inspection and adapting newly approved “Earth Friendly”, <br />
                        <br />
                        our goal is to create a safer, cleaner and greener environment for our clients, their families.<br />
                        <br />
                        We provide pest control in dubai , pest control in Sharjah.&nbsp;
                    </p>
                    <h5>RELIABILITY &amp; TRUST</h5>
                    <p>Our many years of experience allows us to offer a variety of alternative solutions specific to your environment. Find out why over 90% of our business comes from referrals.</p>
                    <h5>WE ARE GREEN</h5>
                    <p>In addition to our industry’s conventional approach TMBC&amp;PC offers a variety of green / low impact pest solution alternatives. Again, our goal is to create a safer, cleaner and greener environment.</p>
                    <h5>PESTS OF ANY KIND</h5>
                    <p>
                        <span>Tareeq Muwaileh Building Cleaning and Pest control</span>&nbsp;offers full service pest control solutions. All of our service technicians are licensed, professionally trained specialists. Capable of solving
                        everything under one roof.
                    </p>
                    <h5>WORK GUARANTEED</h5>
                    <p>Our commitment is to establish a clean pest-free environment for your home and place of business. We offer guarantee for the general services we provide.</p>
                    <h5>AFFORDABLE</h5>
                    <p>We are Prompt, Efficient and Clean. TMBC&amp;PC offers high quality service at a fair and reasonable price. Our goal is to consistently deliver superior service without compromising our business ethics.</p>
                    <a class="theme-btn" href="about-us">More about us</a>
                </div>
            </div>
            <div class="col col-lg-5 col-lg-offset-1 col-md-6">
                <div class="video-holder"><img alt="" src="http://www.tmbcpc.com/wtos-images/487770_quality-cleaning-services.jpg" /></div>
                <h3>Approved By</h3>
                <div class="imgp">
                    <div class="video-holder_img">
                        <img alt="" src="http://www.tmbcpc.com/wtos-images/735669_1.png" width="100%" />
                        <p>ISO 9001</p>
                    </div>
                    <div class="video-holder_img">
                        <img alt="" src="http://www.tmbcpc.com/wtos-images/580832_2.jpg" width="100%" />
                        <p>SHARJAH MUNICIPALITY</p>
                    </div>
                    <div class="video-holder_img">
                        <img alt="" src="http://www.tmbcpc.com/wtos-images/517899_3.jpg" width="100%" />
                        <p>DUBAI MUNICIPALITY</p>
                    </div>
                    <div class="video-holder_img">
                        <img alt="" src="http://www.tmbcpc.com/wtos-images/68269_National_Pest_Management_Association_logo.svg-1024x249.jpg" width="100%" />
                        <p>National pest management association</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>

<section class="features-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="feature-grids">
                    <div class="grid">
                        <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/766393_main-qimg-68150686d0e9a3443c2d6121a18c976a.png" height="200" width="350" /></div>
                        <h3>Pest control Services</h3>
                        <p>&nbsp;</p>
                    </div>
                    <div class="grid">
                        <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/214880_eco-friendly-tr.png" height="200" width="350" /></div>
                        <h3>Eco Friendly Pest Control</h3>
                        <p>&nbsp;</p>
                    </div>
                    <div class="grid">
                        <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/899384_commercial-cleaning.jpg" height="200" width="350" /></div>
                        <h3>Building Cleaning Services</h3>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-bottom:120px">
    <center>
        <div class="container">
    
            <div class="row">
    
                <div class="col col-sm-12 col-md-6">
                    <h3>Best Services for Cockroaches Killer</h3>
                    <br>
                    <p>
                    Are You looking for a Best Services for Cockroaches Killer Pest Control Company in Dubai &amp; Sharjah. Are you afraid? How to exterminator cockroaches. Don’t worry we are Municipality Approved Pest Control Company. We are trained, We know how to control of cockroach for your home with risk free Method. 
                    </p>
                    
                </div>
                
                <div class="col col-sm-12 col-md-6">
                    <h3>New Technique for Bed Bug Treatment</h3>
                    <br>
                    <p>
                    Are you searching a good Bed Bugs exterminator Pest Control Company in Dubai &amp; Sharjah. Who Can remove your Bed Bugs problems?  Bed bugs are insects that feed on human blood, usually at night. Their bites can result in a number of health impacts including skin rashes, allergic. If you want to bed bugs control should have call a professional pesticide experts. 
                    </p>
                    
                </div>
            </div>
        </div>
    </center>
</section>

<section class="services-section-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title">
                    <h2>Our Services</h2>
                    <p>We Offer Latest In Pest Control And Water Tank Cleaning Technology</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-xs-12">
            <div class="service-grids services-slider clearfix owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1641.25px, 0px, 0px); transition: all 0.3s ease 0s; width: 4983.75px; padding-left: 30px; padding-right: 30px;">
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/619379_depcleaning-.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>04.</span>-->Deep Hygienic Cleaning Services</a>
                                    </h3>

                                    <p></p>
                                    <p>We aim at making people’s lives easier and better. Amidst the current times and scenarios, ...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/deep-cleaning-services">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/160611_corporatecleaning.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>05.</span>-->Corporate cleaning services</a>
                                    </h3>

                                    <p></p>
                                    <p>The cleanliness of your workplace or office is one of the first things that your clients will not...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/carpet-cleaning">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/765736_residential.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>06.</span>-->Residential Cleaning Services</a>
                                    </h3>

                                    <p>If you ‘re looking for the best cleaning company in Dubai to help with freshening up your flat or ...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/959368_pigeon.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>07.</span>-->PIGEON CONTROL</a>
                                    </h3>

                                    <p>Pigeons generally nest in small, flat areas away from the ground such as building ledges, air condit...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/516963_rat-3534317_1920.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>01.</span>-->Rodent Control</a>
                                    </h3>

                                    <p></p>
                                    <p>Weil’s Disease (Leptospirosis) Weil’s disease is a form of a bacterial infection also...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/rat-control">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/905078_gc.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>02.</span>-->Cockroach Control</a>
                                    </h3>

                                    <p></p>
                                    <p>Cockroaches are one of the most reviled of household pests and are difficult to control due to th...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/cockroach-control">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/434359_Bed_bug.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>03.</span>-->Bed Bug Removal and Control Service</a>
                                    </h3>

                                    <p></p>
                                    <p>Bed Bugs inject spittle into your skin which may cause dangerous reactions, pathological state li...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/bed-bug-control">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/619379_depcleaning-.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>04.</span>-->Deep Hygienic Cleaning Services</a>
                                    </h3>

                                    <p></p>
                                    <p>We aim at making people’s lives easier and better. Amidst the current times and scenarios, ...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/deep-cleaning-services">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/160611_corporatecleaning.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>05.</span>-->Corporate cleaning services</a>
                                    </h3>

                                    <p></p>
                                    <p>The cleanliness of your workplace or office is one of the first things that your clients will not...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/carpet-cleaning">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/765736_residential.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>06.</span>-->Residential Cleaning Services</a>
                                    </h3>

                                    <p>If you ‘re looking for the best cleaning company in Dubai to help with freshening up your flat or ...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/959368_pigeon.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>07.</span>-->PIGEON CONTROL</a>
                                    </h3>

                                    <p>Pigeons generally nest in small, flat areas away from the ground such as building ledges, air condit...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/516963_rat-3534317_1920.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>01.</span>-->Rodent Control</a>
                                    </h3>

                                    <p></p>
                                    <p>Weil’s Disease (Leptospirosis) Weil’s disease is a form of a bacterial infection also...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/rat-control">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/905078_gc.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>02.</span>-->Cockroach Control</a>
                                    </h3>

                                    <p></p>
                                    <p>Cockroaches are one of the most reviled of household pests and are difficult to control due to th...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/cockroach-control">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/434359_Bed_bug.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>03.</span>-->Bed Bug Removal and Control Service</a>
                                    </h3>

                                    <p></p>
                                    <p>Bed Bugs inject spittle into your skin which may cause dangerous reactions, pathological state li...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/bed-bug-control">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 298.25px; margin-right: 30px;">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="http://www.tmbcpc.com/wtos-images/619379_depcleaning-.jpg" alt="" />
                                </div>

                                <div class="details text-center">
                                    <h3>
                                        <a href="Services"><!--<span>04.</span>-->Deep Hygienic Cleaning Services</a>
                                    </h3>

                                    <p></p>
                                    <p>We aim at making people’s lives easier and better. Amidst the current times and scenarios, ...</p>
                                    <a class="theme-btn" style="margin: 20px auto 0;" href="/deep-cleaning-services">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-controls">
                    <div class="owl-nav">
                        <div class="owl-prev" style="display: none;">prev</div>
                        <div class="owl-next" style="display: none;">next</div>
                    </div>
                    <div class="owl-dots" style="">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col col-lg-7 col-sm-7">
                <div class="cta-text">
                    <h3>have pest infection and need Help?</h3>
                    <p>Contact Us Today and our team will help you to get rid of pest infection in your home or Business and make sure to prevent any future infection</p>
                    <ul>
                        <li><i class="ti-headphone">&nbsp;</i> <a style="color: white;" href="tel:0507563932">050 7563 932</a></li>
                        <li><i class="ti-email">&nbsp;</i>info@tmbcpc.com</li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-5 col-sm-5">
                <div class="contact-form">
                    <form action="http://www.tmbcpc.com/Contact" method="post" enctype="multipart/form-data" class="contact-validation-active" id="contact-form" novalidate="novalidate">
                        <div>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name *" />
                        </div>
                        <div>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *" />
                        </div>
                        <div>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject *" />
                        </div>
                        <div>
                            <textarea class="form-control" name="details" id="details" placeholder="Message..."></textarea>
                        </div>
                        <div class="submit-btn-wrapper">
                            <button type="" class="theme-btn" onclick="formSubmitById();">Send request</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>

                            <div id="error">Error occurred while sending email. Please try again later.</div>
                        </div>

                        <input type="hidden" value="queryValues" name="querySubmit" />
                    </form>
                    <script>
                        function formSubmitById() {
                            var nameVal = os.getVal("name");
                            var emailVal = os.getVal("email");
                            var subjectVal = os.getVal("subject");
                            if (nameVal != "" && emailVal != "" && subjectVal != "") {
                                document.getElementById("contact-form").submit();
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>

<section class="case-studies-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6">
                <div class="section-title-s2">
                    <span>Steps</span>
                    <h2>How We Work</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="case-grids clearfix">
                    <div class="grid">
                        <div class="img-holder">
                            <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/stap_1.svg" /></div>
                        </div>
                        <div class="details">
                            <h3><a href="#">Make A Call</a></h3>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/stap_2.svg" /></div>
                        </div>
                        <div class="details">
                            <h3><a href="#">Fix Your Time</a></h3>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/stap_3.svg" /></div>
                        </div>
                        <div class="details">
                            <h3><a href="#">Book </a></h3>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <div class="icon"><img alt="" src="http://www.tmbcpc.com/wtos-images/stap_4.svg" /></div>
                        </div>
                        <div class="details">
                            <h3><a href="#">Be Happy</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <div class="testimonials-grids testimonials-slider owl-carousel owl-theme owl-loaded owl-text-select-on">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1560px, 0px, 0px); transition: all 0s ease 0s; width: 7800px;">
                            <div class="owl-item cloned" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/995147_images.jpg" alt="" />
                                        </div>

                                        <h5>Supriya Chourasia</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Get in touch with us for the best Service and Treatment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/535619_images.jpg" alt="" />
                                        </div>

                                        <h5>md ahasan</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Get in touch with us for the best Service and Treatment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/424934_images.jpg" alt="" />
                                        </div>

                                        <h5>Asif Ahmed</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Well behaved, good environment, quality treatment, and excellent service...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/572820_images.jpg" alt="" />
                                        </div>

                                        <h5>Md Afsar Ali</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Well behaved, good environment, quality treatment, and excellent service...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/944987_images.jpg" alt="" />
                                        </div>

                                        <h5>Richa Nangalia</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Well behaved, good environment, quality treatment, and excellent service...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/158424_images.jpg" alt="" />
                                        </div>

                                        <h5>Anirban Choudhury</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Get in touch with us for the best Service and Treatment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/995147_images.jpg" alt="" />
                                        </div>

                                        <h5>Supriya Chourasia</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Get in touch with us for the best Service and Treatment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/535619_images.jpg" alt="" />
                                        </div>

                                        <h5>md ahasan</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Get in touch with us for the best Service and Treatment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/424934_images.jpg" alt="" />
                                        </div>

                                        <h5>Asif Ahmed</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Well behaved, good environment, quality treatment, and excellent service...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 750px; margin-right: 30px;">
                                <div class="grid">
                                    <div class="client-info">
                                        <div class="client-pic">
                                            <img src="http://www.tmbcpc.com/wtos-images/572820_images.jpg" alt="" />
                                        </div>

                                        <h5>Md Afsar Ali</h5>

                                        <span></span>
                                    </div>
                                    <div class="quote">
                                        <p>Well behaved, good environment, quality treatment, and excellent service...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style="display: none;">prev</div>
                            <div class="owl-next" style="display: none;">next</div>
                        </div>
                        <div class="owl-dots" style="">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title">
                    <span>Tips &amp; News</span>
                    <h2>Our Latest News</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="news-grids clearfix">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="http://www.tmbcpc.com/wtos-images/170468_bed-bugs-GT.jpg" />
                        </div>

                        <div class="details">
                            <ul class="entry-meta">
                                <li><i class="ti-time"></i> 09 Jan 2020</li>

                                <li><i class="ti-user"></i> By Admin</li>
                            </ul>

                            <h5><a href="http://www.tmbcpc.com/Blog/How to Get Rid of Bedbugs-How to Kill them">How to Get Rid of Bedbugs-How to Kill them</a></h5>

                            <p></p>
                            <p><span style="color: #000000;">Bedbugs have long plagued humans in their living environment. Historically, bedbugs were note throughout the ages. Af...</span></p>
                        </div>
                    </div>

                    <div class="grid">
                        <div class="entry-media">
                            <img src="http://www.tmbcpc.com/wtos-images/287578_cleaning-999x600.png" />
                        </div>

                        <div class="details">
                            <ul class="entry-meta">
                                <li><i class="ti-time"></i> 03 Oct 2019</li>

                                <li><i class="ti-user"></i> By Admin</li>
                            </ul>

                            <h5><a href="http://www.tmbcpc.com/Blog/Importance of Professional Pest Control">Importance of Professional Pest Control</a></h5>

                            <p></p>
                            <p><span>We all know that pests are everywhere and we do not enjoy their presence since they cause unwanted health issues. To remove unwanted pests, w...</span></p>
                        </div>
                    </div>

                    <div class="grid">
                        <div class="entry-media">
                            <img src="http://www.tmbcpc.com/wtos-images/671898_colash-999x600.png" />
                        </div>

                        <div class="details">
                            <ul class="entry-meta">
                                <li><i class="ti-time"></i> 10 Oct 2019</li>

                                <li><i class="ti-user"></i> By Admin</li>
                            </ul>

                            <h5><a href="http://www.tmbcpc.com/Blog/Most Common Summer Pests">Most Common Summer Pests</a></h5>

                            <p></p>
                            <p><span>Summers are a time for the sun, some fun and unfortunately, some pestering insects at your home. These insects may be tiny but they can disru...</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop