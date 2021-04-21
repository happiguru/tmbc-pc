@extends('layouts.app')
@section('content')
<section class="page-title">
    <div class="image"><img id="pageImage_ID" src="{{ asset('wtos-images/935545_rat.jpg') }}" alt="Tareeq Muwailah Bidg. Cleaning &amp; Pest Control pest control dubai"></div>
    <div class="pag_titl_sec">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Rat Control</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>rat-control</li>
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
                    <h2>RAT CONTROL</h2>
                    <p>
                        Rats are some of the most troublesome and damaging rodents in the World. They eat and contaminate food, damage structures, and property, and transmit parasites and diseases to other animals and humans. Rats live and
                        thrive in a wide variety of climates and conditions and are often found in and around homes and other buildings, on farms, and in gardens and open fields.
                    </p>
                    <p>
                        <strong>House mouse,</strong>Mus musculus.House mice are small rodents with relatively large ears and small, black eyes. They weigh about 1/2 ounce and usually are light brownish to gray. An adult is about 5 to 7
                        inches long, including the 3- to 4-inch tail
                    </p>
                    <p><strong>Norway rats</strong>, Rattus norvegicus, sometimes called brown or sewer rats, are stocky burrowing rodents that are larger than roof rats.</p>
                    <p><strong>Roof rats</strong>, Rattus. rattus, sometimes called black rats, are slightly smaller than Norway rats. Unlike Norway rats, their tails are longer than their heads and bodies combined.</p>
                </div>
            </div>
            <div class="col-md-4">
                @include('partials.sidebarpestcontrol')
            </div>
        </div>
    </div>
</section>

@stop