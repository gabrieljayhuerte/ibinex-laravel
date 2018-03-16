@extends('layouts.app')

@section('title','Home')


@push('stylesheets')
    <link href="{{ asset("css/home.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12">
        <h1 class="title text-left">Introducing CryptoBridge™</h1>
        <p class="description text-justify">Our patent-pending proprietary software, CrpytoBridge, is the nexus that aggregates premier cryptocurrency exchangs and indexes for your customers, in real-time.</p>
        <p class="description text-justify">The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select cryptocurrency exchanges and most attractive live prices - only available via the Ibinex trading platform.</p>
        <button class="semi-circle green"><span style="line-height:0">Request a Demo</span></button>
    </section>
@endsection

@section('body-class','home')
@section('header-height','full-height')
@section('bg-img','home-bg.png')

@push('custom-scripts')
    <script>

        $(function() {
            //floating button will remain a circle at all times
            let faButton = $('.faButton');
            faButton.css('display', 'block').css('height', faButton.width());
            $(window).resize(function() {
            });

            //floating play button's position
            let playButton = $('.playButton');
            let playSize =  parseInt(playButton.height()) / 2;
            if($( document ).width() > 1200)
                playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', (0 - playSize));
            else
                playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', parseInt($('div.embed-image.halfed').width()) / 2 - playSize);

            //margin-right fix for fifth-fold
            let marginRight = parseInt($('#third-fold > .row').css('margin-right'));
            $('#fifth-fold > .row').css('margin-right', marginRight).css('margin-left', marginRight);


            $(window).resize(function() {
                //floating button will remain a circle at all times
                faButton.css('height', faButton.width());

                //margin-right fix for fifth-fold
                marginRight = parseInt($('#third-fold > .row').css('margin-right'));
                $('#fifth-fold > .row').css('margin-right', marginRight).css('margin-left', marginRight);

                //play button position
                console.log($( document ).width());
                if($( document ).width() > 1200)
                    playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', (0 - playSize));
                else
                    playButton.css('top', parseInt($('div.embed-image.halfed').height()) / 2 - playSize).css('right', parseInt($('div.embed-image.halfed').width()) / 2 - playSize).delay(1000);
            });
        });

    </script>
@endpush

@section('content')
    <!--1  -->
    <section id="second-fold" class="container-fluid bg-color-grey">
        <section class="row no-gutters pt-5 position-relative fixed-height">
            <!--Will remove fixed-height -->
            <aside class="col-xl-8 order-xl-2 d-none  d-xl-block position-absolute stick-right">
                <img class="" src="{{asset("img/qHjq1P1.png")}}" height="520" alt="bootstrap">
            </aside>
            <div class="col-xl-6 order-xl-1 pt-5">
                <h2 class="title text-left">Ibinex - The Gateway to your Own Customised Cryptocurrency Ecosystem</h2>
                <p class="text-justify">With an in-depth understanding of evolving blockchain technology and cryptocurrency development, Iniex invite you to engage with a fully-customisable, private, institutional white label platform. Trailblazing turnkey solutions to merge with
                    your own web-based platform, Ibinex, will show you definitely how to build a cryptocurrency exchange, your way.</p>
            </div>
        </section>
    </section>


    <!-- 2 -->
    <section id="third-fold" class="container-fluid bg-color-white mb-5">
        <section class="row pt-5 position-relative">
            <div class="col-xl-6 order-xl-12">
                <h2 class="title text-left">
                    <span>Exchange your Way with Ibinex.</span><br>
                    <span>Your Turn-Key Solution Includes:</span>
                </h2>

                <section class="pt-3">
                    <h2 class="sub-title blue bold">Tailored Front End content website</h2>
                    <p class="description text-justify">Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand, the Ibinex solution showcases enhanced practicality and performance driven features.</p>
                </section>

                <section class="pt-3">
                    <h2 class="sub-title blue bold">Tailored Front End content website</h2>
                    <p class="description text-justify">The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account & money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.</p>
                </section>

            </div>

            <aside class="col-xl-6 order-xl-1 position-relative">
                <img class="raise-image" src="{{asset("img/3nSwpAa.png")}}" height="520" alt="bootstrap">
            </aside>

        </section>
    </section>

    <!--3 -->
    <section id="fourth-fold" class="container-fluid bg-color-grey mb-5 position-relative">
        <section class="row embed-parent">
            <div class="col-xl-6 order-xl-1">
                <section class="pt-3">
                    <h2 class="sub-title blue bold">Aggregated Liquidity Exchange</h2>
                    <p class="description text-justify">Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.</p>
                </section>

                <section class="pt-3">
                    <h2 class="sub-title blue bold">Complete processing solution</h2>
                    <p class="description text-justify">With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilies for your exchange to thrive in maximum liquidity.</p>
                </section>
            </div>


            <aside class="col-xl-6 order-xl-12 embed-parent-wrap top right">
                <div class="embed-image" style="background-image: url('{{ asset("img/home-card.png") }}');">&nbsp;</div>
                <div class="embed-blue-wrap shadow">
                    <div class="faButton top-half red-button shadow"></div>
                    <section class="quote-wrapper">
                        <p class="quote text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <span class="author">HuffPost</span>
                    </section>
                </div>
            </aside>


        </section>
    </section>

    <!--4 -->
    <section id="fifth-fold" class="container-fluid position-relative">
        <section class="row embed-parent max-width-none">
            <section class="row mx-0">
                <div class="col-xl-6 order-xl-2">
                    <section class="pt-3">
                        <h2 class="sub-title blue bold">Compliant Banking Custodian Service</h2>
                        <p class="description text-justify">Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.</p>
                    </section>

                    <section class="pt-3">
                        <h2 class="sub-title blue bold">Hosted in a secure private cloud environment</h2>
                        <p class="description text-justify">With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilies for your exchange to thrive in maximum liquidity.</p>
                    </section>
                </div>

                <div class="col-xl-6 order-xl-1 d-none d-lg-block d-xl-block" style=""></div>
            </section>

            <aside class="col-xl-6 order-xl-1 embed-parent-wrap left">
                <div class="embed-image halfed shadow" style="background-image: url('{{asset('img/hN17jUY.png')}}');">
                    <div class="playButton faButton raise-half blue-button shadow">fa-quote</div>
                </div>
            </aside>

        </section>
    </section>

    <!--5 -->
    <section id="sixth-fold" class="container-fluid bg-color-grey py-5">
        <header class="title-section text-center">
            <h2 class="sub-title grey bold">Learn more about Ibinex</h2>
            <h1 class="title black smaller bold">Technical Papers & Legal Circular</h1>
        </header>
        <section class="row carousel slide d-md-none text-center" data-interval="false" data-ride="carousel" id="advisory-board-members-carousel">

            <section id="downloadables" class="d-flex justify-content-around flex-wrap carousel-inner">
                <!-- FIRST ROW START -->

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="" src="{{ asset('img/q5EDmus.png')}}" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p>PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="" src="https://i.imgur.com/q5EDmus.png" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p>PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="" src="https://i.imgur.com/q5EDmus.png" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p>PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>
                <!-- FIRST ROW END -->
                <!-- SECOND ROW START -->

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="" src="https://i.imgur.com/q5EDmus.png" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p>PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="" src="https://i.imgur.com/q5EDmus.png" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p>PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>

                <div class="brochures text-center">
                    <!-- 1 -->
                    <img class="" src="https://i.imgur.com/q5EDmus.png" alt="Brochure"/>
                    <h2 class="grey bold" style="color: rgb(36, 53, 85)">Business Model</h2>
                    <p>PDF - 1.3 MB</p>
                    <button class="semi-circle green-brochure">Download</button>
                </div>
                <!-- SECOND ROW END -->

            </section>

        </section>
    </section>
    <section id="seventh-fold" class="text-center my-5">
        <header>
            <h1 class="title black smaller bold">Ibinex Media Coverage</h1>
        </header>
        <section id="logo" class="mt-5">
           <img alt="" class="flexed-image" src="{{ asset("img/logo/logo-1.png") }}">
           <img alt="" class="flexed-image" src="{{ asset("img/logo/logo-2.png") }}">
           <img alt="" class="flexed-image" src="{{ asset("img/logo/logo-3.png") }}">
           <img alt="" class="flexed-image" src="{{ asset("img/logo/logo-4.png") }}">
           <img alt="" class="flexed-image" src="{{ asset("img/logo/logo-5.png") }}">
           <img alt="" class="flexed-image" src="{{ asset("img/logo/logo-6.png") }}">
        </section>
    </section>
@endsection