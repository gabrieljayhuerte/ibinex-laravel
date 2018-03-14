@extends('layouts.app')

@section('title','Why-Ibinex')


@push('stylesheets')
    <link href="{{ asset("css/why.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12 mx-auto">
        <h1 class="title text-center">Why Ibinex</h1>
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection

@section('body-class','contact')
@section('bg-img','top.png')
@section('content')
    <div class="container spacer">
        <div class="row max-width-none">
            <h2 class="col-sm-12 text-center my-3">Why you should exchange your way with Ibinex</h2>
            <p class="col-sm-12 text-center mt-1 mb-3">Our strategy is underpinned by the 4 core strengths of ibinex:</p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-s-12 mx-3">
                        <div class="py-3">
                            <span class="core">01</span>
                        </div>
                        <p class="core-text py-3">
                            <b>Commitment to technological innovation, through out patent-pending proprietery software, Cryptobridge &trade;</b>
                        </p>
                        <div class="my-4">
                            <span class="core">02</span>
                        </div>
                        <p class="core-text py-3">
                            <b>Trailblazing of complete and customizable white label platform solutions</b>
                        </p>
                    </div><!--col-->


                    <img class="col-lg-5 col-md-12 d-none d-lg-block" src="{{asset('img/pc.png')}}" alt="pc image">



                    <div class="col-lg-3 col-md-5 col-s-12 mx-3">
                        <div class="py-3">
                            <span class="core">03</span>
                        </div>
                        <p class="core-text py-3">
                            <b>Offering unprecedented custodian service with our industry's first finance transaction license</b>
                        </p>
                        <div class="my-4">
                            <span class="core">04</span>
                        </div>
                        <p class="core-text py-3">
                            <b>Providing full-spectrum payment processing infrastructure to revolutionise liquidity for your exchange.</b>
                        </p>
                    </div><!--col-->
                </div> <!--row-->
            </div><!--container-->
        </div><!--row-->
    </div><!--container-->
    <div class="container-fluid remover">
        <div class="row position-relative max-width-none">
            <div class="col-xs-12 blocktext-background shadow">
                <div class="block mx-3 px-3 shadow">
                    <h2 class="blocktext">We fuse innovation with accessibility as blockchain technology evolves.</h2>
                    <p class="blocktext">
                        We seek to revolutionise the way that exchange owners create their platforms
                        and raise the standard of marketplace excellence by incorporating our cutting-edge
                        technology, delivered with practicality and a host of unique benefits, only enjoyed
                        by merging with Ibinex ecosystem.
                    </p>

                    <h2 class="blocktext">We are an ecosystem with vision</h2>
                    <p class="blocktext">
                        As the gateway to your own customizable cryptocurrency ecosystem, our vision is to equip
                        you with the tools to create and operate your cryptocurrency exchange, your way.
                    </p>
                </div>
            </div>

            <img class="d-none d-lg-block blocktext-background2" src="{{asset('img/s2.png')}}" alt="typing hand">

        </div><!--row-->
    </div><!--container-->
@endsection