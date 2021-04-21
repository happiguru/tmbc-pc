@extends('layouts.app')
@section('content')
<section class="page-title">
    <div class="image"><img id="pageImage_ID" src="http://www.tmbcpc.com/wtos-images/55101_contacts.png" alt="Tareeq Muwailah Bidg. Cleaning &amp; Pest Control pest control dubai"></div>
    <div class="pag_titl_sec">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="http://www.tmbcpc.com/">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-7">
                <div class="section-title-s3">
                    <!--span>Contact with us</span-->
                    <h2>Free Consultation</h2>
                </div>

                <div class="contact-form">
                    <form action="" method="post" enctype="multipart/form-data" class="contact-validation-active" id="contact-form" novalidate="novalidate">
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
                </div>

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
            <div class="col col-lg-6 col-md-5">
                <div class="contact-info-area">
                    <div class="section-title-s3">
                        <!--span>Contact with us</span-->
                        <h2>Office Address</h2>
                    </div>
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon">&nbsp;</div>
                                <p>Bu Tina-Al Sharq Street Shop No: G2 - Sharjah - United Arab Emirates</p>
                            </li>
                            <li>
                                <div class="icon">&nbsp;</div>
                                <p><a href="tel:0556980116">055 6980 116</a></p>
                            </li>
                            <li>
                                <div class="icon">&nbsp;</div>
                                <p><a href="tel:0507563932">050 7563 932</a></p>
                            </li>
                            <li>
                                <div class="icon">&nbsp;</div>
                                <p><a href="tel:065 213 915">065 213 915</a></p>
                            </li>
                            <li>
                                <div class="icon">&nbsp;</div>
                                <p>info@tmbcpc.com</p>
                            </li>
                        </ul>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
            <iframe
                style="border: 0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14420.698864829621!2d55.38842467319879!3d25.365460280209675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bf4dd345fcb%3A0xa5189e3d4a6454c1!2sTareeq%20Muwaileh%20Building%20Cleaning%20%26%20Pest%20Control!5e0!3m2!1sen!2sin!4v1590083777389!5m2!1sen!2sin"
                height="450"
                width="100%"
            ></iframe>
        </div>
    </div>
</section>

@stop