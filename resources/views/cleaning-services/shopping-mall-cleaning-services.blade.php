@extends('layouts.app')
@section('content')
<section class="page-title">
    <div class="image"><img id="pageImage_ID" src="{{ asset('wtos-images/824882_shoppin-mall.jpg') }}" alt="Tareeq Muwailah Bidg. Cleaning & Pest Control pest control dubai"/></div>
    <div class="pag_titl_sec">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Shopping Mall Cleaning Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>shopping-mall-cleaning-services</li>
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
                    <h2>Shopping Mall Cleaning Services</h2>
                    <p>When the centre is open to the public, attention needs to be paid to providing a clean and safe environment.</p>
                    <p>
                        <span>TMBC&amp;PC&nbsp;</span>Cleaning has the experience and knowledge to effectively clean enclosed and exterior shopping mall centers.<br />
                        We provide day shift, swing shift, or grave shift janitors to clean during peak and off time hours. We ensure that the food court and general shopping mall areas are kept clean.
                    </p>
                    <p>We provide shopping mall cleaning services for businesses of all size.</p>
                    <p>We are experienced and reliable, so call on us whether you need shopping mall cleaning services during shopping hours, or after shopping hours.</p>
                    <p>Our shopping centre cleaning services are reliable and affordable. Talk to us today to discover how we can create a cleaning plan specially designed for your store or shopping centre.</p>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="col-md-4">
                @include('partials.sidebarcleaning')
            </div>
        </div>
    </div>
</section>

@stop