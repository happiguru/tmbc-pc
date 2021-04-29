
<div class="upper-footer">
    <div class="container">
        <div class="row">
            <div class="col col-lg-2 col-md-3 col-sm-6">
                <div class="widget link-widget">
                    <div class="widget-title">
                        <h3>Navigation</h3>
                    </div>
                    <ul>
                        <li><a title="Home" href="/">Home</a></li>

                        <li><a title="About Us" href="/about-us">About Us</a></li>

                        <li><a title="Cleaning Service" href="javascript:void(0)">Cleaning Service</a></li>

                        <li><a title="Pest Control Services ↓" href="javascript:void(0)">Pest Control Services ↓</a></li>

                        <li><a title="Gallery" href="/gallery">Gallery</a></li>

                        <li><a title="Clients" href="clients">Clients</a></li>

                        <li><a title="Contact" href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-sm-6">
                <div class="widget latest-post-widget">
                    <div class="widget-title">
                        <h3>Latest News</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="post-pic">
                                <img src="{{ asset('wtos-images/170468_bed-bugs-GT.jpg') }}" alt="" />
                            </div>
                            <h4><a href="#">How to Get Rid of Bedbugs-How to Kill them</a></h4>
                            <span class="date">09 Jan 2020</span>
                        </li>
                        <li>
                            <div class="post-pic">
                                <img src="{{ asset('wtos-images/287578_cleaning-999x600.png') }}" alt="" />
                            </div>

                            <h4><a href="#">Importance of Professional Pest Control</a></h4>

                            <span class="date">03 Oct 2019</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-4 col-md-3 col-sm-6">
                <div class="widget about-widget">
                    <div class="widget-title">
                        <h3>Opening Hours</h3>
                    </div>
                    <div class="time">
                        <p><span class="date">Monday</span> <span class="time">7am-8pm</span></p>
                        <p><span class="date">Tuesday</span> <span class="time">7am-8pm</span></p>
                        <p><span class="date">Wednesday</span> <span class="time">7am-8pm</span></p>
                        <p><span class="date">Thursday</span> <span class="time">7am-8pm</span></p>
                        <p><span class="date">Friday</span> <span class="time">7am-12am &amp; 2pm-8pm</span></p>
                        <p><span class="date">Saturday</span> <span class="time">7am-8pm</span></p>
                        <p><span class="date">Sunday</span> <span class="time">7am-8pm</span></p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-sm-6">
                <div class="widget newsletter-widget">
                    <div class="widget-title">
                        <h3>Reach Us</h3>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <span>Get a Quote</span>
                            <h4><a href="tel:0556980116">055 6980 116</a></h4>
                            <h4><a href="tel:0507563932">050 7563 932</a></h4>
                            <h4><a href="tel:0507563932">065 213 915</a></h4>
                        </li>
                        <li>
                            <span>Send us Email</span>
                            <h4><a href="mailto:info@info@tmbcpc.com">info@tmbcpc.com</a></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lower-footer">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <p class="copyright">
                    Copyright © 2019 Tareeq Muwailah Bidg. Cleaning &amp; Pest Control . All Rights Reserved | Powered By
                    <a href="https://www.lekunzestanley.me" target="_blank">Happi</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- All JavaScript files
================================================== -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Plugins for this template -->
<script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>
<!-- Custom script for this template -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/slide.js') }}" ></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(function(){
        $('#navbar li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
        $('.#navbar li a').click(function(){
            $(this).parent().addClass('active').siblings().removeClass('active')    
        })
    })
</script>