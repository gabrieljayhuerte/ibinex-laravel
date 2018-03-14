@extends('layouts.app')

@section('title','Contact Us')


@push('stylesheets')
    <link href="{{ asset("css/contact-us.css") }}" rel="stylesheet" />
@endpush

@section('header-content')
    <section id="hero-content" class="col-xl-7 col-sm-12">
        <h1 class="title text-center">Contact Us</h1>
        <p class="description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
@endsection
@section('body-class','contact')
@section('content')
                    <div class="container">
                        <div class="ib-get-started">
                            <div class="row ib-get-started-a">
                                <div class="col-sm">
                                    <h2>
                                        Get Started
                                    </h2>
                                    <p>
                                        We invite you to first experience the Ibinex demo <a>here</a>, which will help you to conceptualise the possibilities of personalisation for your own exchange.
                                    </p>
                                    <p>
                                        The next step is to contact us to discuss on-boarding. It is a simple process which you can learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                                    </p>
                                </div>
                            </div>
                            <div class="row ib-get-started-b ib-text-center">
                                <div class="col-sm">
                                    <img class="ib-p" src="{{ asset("img/p1.png") }}" />
                                    <img class="ib-pp" src="{{ asset("img/p1-1.gif") }}" />
                                    <div class="label">
                                        Local Escrow deposit
                                    </div>
                                    <div class="label">
                                        (reserve only, no payment)
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img class="ib-p" src="{{ asset("img/p2.png") }}" />
                                    <img class="ib-pp" src="{{ asset("img/p2-2.gif") }}" />
                                    <div class="label">
                                        Letter of Intent
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img class="ib-p" src="{{ asset("img/p3.png") }}" />
                                    <img class="ib-pp" src="{{ asset("img/p3-3.gif") }}" />
                                    <div class="label">
                                        Proof of Escrow deposit
                                    </div>
                                </div>
                            </div>
                            <div class="ib-get-started-note">
                                <p>
                                    Please note that, due to high demand, the current on-boarding time frame is 4 months.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="ib-contact">
                        <div class="row ib-contact-support">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <h2>
                                    Support
                                </h2>
                                <p>
                                    Contact and feedback are integral to the Ibinex way, enabling
                                    us to cater to your needs and requirements effectively and efficiently.
                                </p>
                                <p>
                                    For support regarding any aspect of the Ibinex platform, your use of this website
                                    or your own exchange integrationm please contact us with your enquiry for
                                    personalised customer service.
                                </p>
                                <p>
                                    We will endeavour to respond to you as promptly as possible.
                                </p>
                            </div>
                            <div class="col-sm-7 ib-contact-bg">
                                <div class="ib-contact-form">
                                    <form>
                                        <div class="form-group">
                                            <label for="inputFullName">Full Name</label>
                                            <input type="text" class="form-control" id="inputFullName">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">Subject</label>
                                            <input type="text" class="form-control" id="inputSubject">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage">Message</label>
                                            <textarea class="form-control" id="inputMessage" rows="10"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">SEND</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection