@extends('layouts.app')
@section('content')
<section class="page-title">
    <div class="image"><img id="pageImage_ID" src="{{ asset('wtos-images/716805_office.jpg') }}" alt="Tareeq Muwailah Bidg. Cleaning & Pest Control pest control dubai"/></div>
    <div class="pag_titl_sec">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Office Cleaning Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>office-cleaning-services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-services section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="wpb_wrapper">
                    <h2>REPUTED OFFICE CLEANING COMPANY</h2>
                    <p>
                        The cleanliness of your office in one of the first things that your clients will notice when they arrive in your company. Make the right impression by hiring the right people, like Helpsters Cleaning Services. We are
                        one of the reputed names offering office cleaning services.
                    </p>
                    <h2>PROFESSIONAL OFFICE CLEANING SERVICES</h2>
                    <p>
                        Our office cleaning services range from SMEs to Large Corporations. Our professional&nbsp;office cleaning services in Dubai&nbsp;can provide you with the highest levels of service from early morning to ensure
                        everything is ready for the start of a busy day. Our maids are dedicated, skilled &amp; experienced and ensure that they finish the cleaning in time.
                    </p>
                    <p>We at Helpsters, provides you the following office cleaning services at affordable prices:</p>
                    <ul>
                        <li>Office room cleaning</li>
                        <li>Carpet cleaning</li>
                        <li>Washroom cleaning</li>
                        <li>Sofa cleaning</li>
                        <li>Window cleaning</li>
                        <li>Workplace cleaning</li>
                    </ul>
                    <p>If you need assistance in cleaning your office, don&rsquo;t hesitate to call us and we are happy to accommodate you.&nbsp; Our professional office cleaning services can help you with that.</p>
                    <div><a title="book" href="#" rel="noopener">BOOK NOW</a>&nbsp;&nbsp;<a title="inquiry" href="#">ENQUIRY</a></div>
                </div>
            </div>
            <div class="col-md-4">
                @include('partials.sidebarcleaning')
            </div>
        </div>
    </div>
</section>
@stop