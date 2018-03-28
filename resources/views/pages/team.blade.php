@extends('layouts.master')

@section('title')
    Amit Banka and Team Members | Business Doctors
@endsection

@section('meta')
    <meta name="Description" content="Amit Banka, along with Business Doctors team are passionate for businesses and its growth. Our efforts have made business development solutions easily available for those in need with instant results"/>
    <meta name="Keywords" content="Amit banka"/>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <ol class="breadcrumb customize-breadcrumps">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li class="active">Team</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-game text-bold">TEAM</h1>
                <h4 class="text-center overview-txt">
                        "We leverage our relationships across several sectors including Finance, Brand Marketing, HR, Production & distribution,
                        Legal, Funds/Brokers & Corporates to assist you in the most proficient way possible."
                </h4>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4  col-sm-6 col-xs-6 img-hover">
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/amit.jpg" alt="">
                                <div class="overlay">
                                    <h2>Amit Banka</h2>
                                    <p>
                                        <a href="#"  data-toggle="modal" data-target="#myModal1">Know More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 img-hover">
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/anish.jpg" alt="">
                                <div class="overlay">
                                    <h2>Anish Jhaveri</h2>
                                    <p>
                                        <a href="#" data-toggle="modal" data-target="#myModal2">Know More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 img-hover">
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/ajay.jpg" alt="">
                                <div class="overlay">
                                    <h2>Ajay Mehra</h2>
                                    <p>
                                        <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 img-hover">
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/vineet.jpg" alt="">
                                <div class="overlay">
                                    <h2>Vineet Sharma</h2>
                                    <p>
                                        <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 img-hover">
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/47.jpg" alt="">
                                <div class="overlay">
                                    <h2>InderRaj Gulati</h2>
                                    <p>
                                        <a href="#" data-toggle="modal" data-target="#myModal5">Know More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 img-hover">
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/48.jpg" alt="">
                                <div class="overlay">
                                    <h2>Dharmil Ganatra</h2>
                                    <p>
                                        <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="container-fluid">
                    <div class="sec-gray-text">
                        <h4 class="text-center">Team Experience & Expouser</h4>
                    </div>
                    <div class="exposure">
                        <p><span>10+</span> Sectors</p>

                        <p><span>75+</span> Companies</p>

                        <p><span>50+ </span>M&amp;As (Domestic + International)</p>

                        <p><span>50+</span> Investments across sectors</p>

                        <p><span>20K+ </span>Crore Funds Raised</p>
                    </div>
                </div>
            </div>
        </div>
    </div>













    {{--modal section start here--}}
    <<!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title heading text-center text-bold margin-b-0" id="myModalLabel">Amit Banka</h4>
                    <p class="text-center">Founder</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/amit.jpg') }}" alt="" class="pull-left img-responsive pad-left-15 pad-right-15">
                            <p class="">Amit, an MBA, has about two decades of domestic & international experience in business operations,
                                M&A, Fund Raising, Fund Management, IPOs, Private Equity, Venture/Early Stage/Startup Investments,
                                identifying key trends and working with leading entrepreneurs in India. Prior to founding Business Doctors,
                                he was the Managing Director of Unilazer Ventures. In his previous role as an investor, Amit has made
                                investments in sectors such as E-Commerce, FMCG, M&E, Agriculture, Micro
                                Housing, F&B, etc. Some of his other career stints include leading positions with UTV Group/Disney India & Zee/Essel Group.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset("images/linkedin.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title heading text-center text-bold margin-b-0" id="myModalLabel">Anish Jhaveri</h4>
                    <p class="text-center">Advisor</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/anish.jpg') }}" alt="" class="pull-left img-responsive pad-left-15 pad-right-15">
                            <p class="">
                                Anish is a veteran with more than two decades experience in the financial services industry at key positions with Kotak Securities, CLSA, HSBC, ICICI, Antique and followed by founding Oliphans Capital – which invests in start-ups. An MBA, Anish brings along a vast experience of primary and
                                secondary market deal making and ability to understand businesses and supporting entrepreneurs has been his key strengths.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset("images/linkedin.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title heading text-center text-bold margin-b-0" id="myModalLabel">Ajay Mehra </h4>
                    <p class="text-center">Advisor</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/ajay.jpg') }}" alt="" class="pull-left img-responsive pad-left-15 pad-right-15">
                            <p class="">
                                Ajay is a Chartered Accountant with more than two decades of consulting experience with Arthur Andersen,
                                E&Y and now as a Partner with BMR. He brings significant experience in Corporate Finance,
                                Tax and Advisory with multiple relationships across various sectors. Ajay has worked across
                                industries and is an Advisor to the team
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset("images/linkedin.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title heading text-center text-bold margin-b-0" id="myModalLabel">Vineet Sharma</h4>
                    <p class="text-center">Founder</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/vineet.jpg') }}" alt="" class="pull-left img-responsive pad-left-15 pad-right-15">
                            <p class="">
                                Vineet brings critical business and financial experience across sectors in India,
                                USA and MENA region. He has worked across business processes, valuations,
                                compliance, fund raise and transaction support across the companies such as Aranca,
                                Deloitte and K&M (Mazars). As a Chartered Accountant, he has been involved with Audits,
                                Taxation, Business advisory and Litigation in his past stints.
                                As part of his professional qualification, he is a Chartered Accountant and has cleared all levels of CFA (USA).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset("images/linkedin.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title heading text-center text-bold margin-b-0" id="myModalLabel">InderRaj Gulati</h4>
                    <p class="text-center">Senior Associate </p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/47.jpg') }}" alt="" class="pull-left img-responsive pad-left-15 pad-right-15">
                            <p class="">
                                Inderraj has over 10 years of experience in strategy and planning,
                                consulting and market research across sectors such as Energy, Clean Tech and Retail.
                                His past engagements include working with domestic and international businesses, Government of India,
                                Aid Agency and Think Tank. Some of his work has been published by Business Standard and Forbes India.
                                Prior to joining Business Doctors, he worked with some of the leading organisations such as
                                Capgemini Consulting and Confederation of Indian Industry. He is an MBA from the University of South Carolina, USA.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset("images/linkedin.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header cust-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title heading text-center text-bold margin-b-0" id="myModalLabel">Dharmil Ganatra</h4>
                    <p class="text-center">Associate</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/48.jpg') }}" alt="" class="pull-left img-responsive pad-left-15 pad-right-15">
                            <p class="">
                                Dharmil brings along an extensive understanding in finance and valuations. Prior to Business Doctors,
                                Dharmil has worked as a consultant with Aranca, wherein he was involved in carrying out assignments
                                for companies across industries such as IT, Food and Beverages, Cosmetics, and Biotechnology across US,
                                Europe and GCC. Additionally, he has been involved in accounting, auditing and taxation assignments during his
                                stint with RHDB & Co. LLP. Dharmil is a qualified Chartered Accountant and is pursuing CFA.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset("images/linkedin.png") }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    {{--end modal section--}}
@endsection