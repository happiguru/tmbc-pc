@extends('layouts.app')
@section('content')
<section class="page-title">
    <div class="image"><img id="pageImage_ID" src="{{ asset('wtos-images/516922_sofashampoo.jpg') }}" alt="Tareeq Muwailah Bidg. Cleaning & Pest Control pest control dubai"/></div>
    <div class="pag_titl_sec">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Sofa Shampooing</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>sofa-shampooing</li>
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
                    <h2>SOFA SHAMPOOING</h2>
                    <p>
                        <img class="alignleft" alt="" src="{{ asset('wtos-images/633405_sofa.jpg') }}" />Sofa is the most important sitting place where all of us feel cozy and relaxed. Have you ever thought that piece of furniture
                        contains too much pollution, dust mites, dust particles, bacteria and many other elements that pollute your sofa? Cleaning experts recommend cleaning sofa once in six months to make it pollution free and extend its
                        life too.Different parts of sofa need different cleaning techniques depending on their fabric and level of soiling.
                    </p>
                    <p>At We Clean Dubai, we arrange and look at all the piece before cleaning. Our skilled cleaning expertise helps us deciding the best method to use and ensure that your upholstery is not damaged in any way.</p>
                </div>
            </div>
            <div class="col-md-4">
                @include('partials.sidebarcleaning')
            </div>
        </div>
    </div>
</section>

@stop