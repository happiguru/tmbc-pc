@extends('layouts.app')
@section('content')
<section class="page-title">
    <div class="image"><img id="pageImage_ID" src="{{ asset('wtos-images/582845_nursery.jpg') }}" alt="Tareeq Muwailah Bidg. Cleaning & Pest Control pest control dubai"/></div>
    <div class="pag_titl_sec">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Nursery Cleaning Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>nursery-cleaning-services</li>
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
                    <h2>Nursery Cleaning Services</h2>
                    <p><span>Tareeq Muwaileh Building Cleaning &amp; pest control&nbsp;</span>is trusted to clean day nurseries throughout the Dubai and has been leading cleaning company in Dubai.</p>
                    <p>
                        We understand that service reliability is just as important as outstanding standards of cleaning. By delivering both, we can help you to protect the children in your daily care and create the very best impressions
                        when parents visit.
                    </p>
                    <p>
                        Well trained maids reassure quality control processes and a fully flexible, confidential service all mean you can concentrate on providing superior childcare knowing that your cleaning is in the safe hands of
                        experts.
                    </p>
                    <p>We use innovative, eco-friendly products and well-trained operatives to deliver general cleaning services, coupled with room changes</p>
                    <p>We will work with you to agree to a cost-effective, tailored commercial cleaning plan that meets the exact requirements of your day nursery.</p>
                    <p>Our service also includes relief cover for holidays and unplanned absence. If you currently rely on your own nursery staff to clean, choosing Helspters Cleaning Service means this issue will be managed for you.</p>
                    <p>&nbsp;</p>
                    <div>&nbsp;</div>
                </div>
            </div>
            <div class="col-md-4">
                @include('partials.sidebarcleaning')
            </div>
        </div>
    </div>
</section>

@stop