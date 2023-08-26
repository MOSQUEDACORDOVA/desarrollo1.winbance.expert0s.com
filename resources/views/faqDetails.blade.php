@extends('layout')
@section('title', 'FAQ DETAILS')
@section('content')

    <style>
        input#search {
            color: inherit;
            padding: 12px 10px;
            width: 60vw;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            border: none;
            outline: none;
        }

        .drop ul {
            background: #fff;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            height: 0;
            overflow: hidden;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.2);
            transition: .4s height;
        }

        .drop ul li {
            font-size: 13px;
            padding: 10px 10px;
            list-style: none;
            border-top: 1px solid #ddd;
        }

        .match {
            font-weight: 600;
            color: green;
        }

        @media only screen and (min-width: 600px) {
            input#search {
                width: 40vw;
            }
        }


        ul#side-menu {
            position: relative;
            line-height: 45px;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 0 0 10px rgb(0 0 0 / 27%);
        }

        #side-menu {
            background-color: #fff;
        }

        #side-menu .nav-item {
            margin-bottom: 0;
            margin-top: 0;
        }

        .btn_quest-details {
            color: #B3B3B3;
            font-size: 8em;
        }

        .btn_quest-details .active {
            color: #F0B90B;
            font-size: 8em;
        }


        #side-menu .nav-item p {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0;
            margin-top: 0;
            padding: .5rem 1rem;

        }

        #side-menu .nav-item .nav-link {
            border: 0;
            border-radius: 0;
            color: #373737;
            font-size: 1rem;
            /* font-weight: 500; */
        }


        #side-menu .nav-item .nav-link.active {
            color: #F0B90B;
            background: transparent
        }


        #side-menu-tabContent {
            background: #ffff;
            box-shadow: 0 0 10px rgb(0 0 0 / 27%);
        }

        #tab1-programs.show {
            display: block;
        }

        #tab1-programs {
            background-color: #4f565c;
            display: none;
        }

        #tab1-programs .nav-link {
            color: rgba(255, 255, 255, 0.5) !important;
            font-size: 1.1rem !important;
            font-weight: 400 !important;
        }

        #tab1-programs .nav-link.active {
            background-color: transparent !important;
            color: rgba(255, 255, 255, 1) !important;
        }

        .side-menu__title {

            color: #373737;
        }

        #side-menu-tabContent {
            position: relative;
            line-height: 45px;
            border-radius: 5px 5px 5px 5px;
        }

        .banner__title {
            font-style: normal;
            font-weight: 600;
            font-size: 21px;
            color: #1A1A1A;
            text-align: left;
            float: none;
            line-height: 4em;
            border-bottom: 1px solid #EAEAEA !important;
        }

        .banner__content {
            line-height: 3em;
            color: #373737;

        }

        .faq-details {
            align-items: flex-start;
        }
    </style>
    <section class="container" style="margin-top: 16em;">
        <div class="faq_page_title">
            <h3 style="color: #000">Frequently Asked Questions
            </h3>
            <br>
        </div>
        <div class="container">
            <form class="faq_form">
                <div class="input-group ">
                    <input type="text" id="myFilter" placeholder="Search..." onkeyup="myFunction()">
                    <label for="search"><i class="bi bi-search"></i></label>
                </div>
                <div class="suggestion-list hidden">
                </div>
            </form>

            <div class="section banner-content">
                <div class="container p-5">
                    <div class="row faq-details">
                        <div class="col-lg-4">
                            <ul class="nav flex-column nav-pills questions_list " id="side-menu" role="tablist"
                                aria-orientation="vertical">
                                <li class="nav-item" role="presentation">
                                    <p class="side-menu__title">Starting Out With
                                        winbance </p>
                                </li>
                                <li class="nav-item faq_quest " role="presentation"> <a class="nav-link" id="tab1-tab"
                                        data-bs-toggle="pill" href="#tab1" role="tab" aria-controls="tab1"
                                        aria-selected="false"><span class="btn_quest-details">.</span>
                                        How do I start with Winbance
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab2-tab"
                                        data-bs-toggle="pill" href="#tab2" role="tab" aria-controls="tab2"
                                        aria-selected="false"> <span class="btn_quest-details">.</span>What is a funded
                                        account
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab3-tab"
                                        data-bs-toggle="pill" href="#tab3" role="tab" aria-controls="tab3"
                                        aria-selected="false"><span class="btn_quest-details">.</span>what is winbance</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="side-menu__title"> Evaluation Process</p>
                                </li>
                                <li class="nav-item faq_quest" role="presentation"> <a class="nav-link " id="tab4-tab"
                                        data-bs-toggle="pill" href="#tab4" role="tab" aria-controls="tab4"
                                        aria-selected="false"><span class="btn_quest-details">.</span> How long does the
                                        evaluation
                                        process take
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab5-tab"
                                        data-bs-toggle="pill" href="#tab5" role="tab" aria-controls="tab5"
                                        aria-selected="false"> <span class="btn_quest-details">.</span>What is the
                                        difference between
                                        the evaluation process and funding stage
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab6-tab"
                                        data-bs-toggle="pill" href="#tab6" role="tab" aria-controls="tab6"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Can I take leave
                                        during the
                                        evaluation stage </a> </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab7-tab"
                                        data-bs-toggle="pill" href="#tab7" role="tab" aria-controls="tab7"
                                        aria-selected="false"><span class="btn_quest-details">.</span>If I break the rules,
                                        will I get a
                                        second chance
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab8-tab"
                                        data-bs-toggle="pill" href="#tab8" role="tab" aria-controls="tab8"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Can I trade during
                                        the weekend in
                                        the evaluation stage</a> </li>
                                <li class="nav-item" role="presentation">
                                    <p class="side-menu__title"> Funding</p>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab9-tab"
                                        data-bs-toggle="pill" href="#tab9" role="tab" aria-controls="tab9"
                                        aria-selected="false"><span class="btn_quest-details">.</span>How much capital do
                                        we get in
                                        funding account
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab10-tab"
                                        data-bs-toggle="pill" href="#tab10" role="tab" aria-controls="tab1O"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Can I trade on major
                                        news</a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab11-tab"
                                        data-bs-toggle="pill" href="#tab11" role="tab" aria-controls="tab11"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Can an expert
                                        advisor be used
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="side-menu__title"> Trading rules
                                    </p>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab12-tab"
                                        data-bs-toggle="pill" href="#tab12" role="tab" aria-controls="tab12"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Am I allowed to
                                        change my
                                        trading behavior
                                    </a> </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab13-tab"
                                        data-bs-toggle="pill" href="#tab13" role="tab" aria-controls="tab13"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Is it possible to
                                        open more than
                                        the allowed number of trades</a> </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab14-tab"
                                        data-bs-toggle="pill" href="#tab14" role="tab" aria-controls="tab14"
                                        aria-selected="false"><span class="btn_quest-details">.</span>Are all trading
                                        styles allowed
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab15-tab"
                                        data-bs-toggle="pill" href="#tab15" role="tab" aria-controls="tab15"
                                        aria-selected="false"><span class="btn_quest-details">.</span>What is the maximum
                                        loss I am
                                        allowed to lose</a> </li>
                                <li class="nav-item" role="presentation">
                                    <p class="side-menu__title"> trading platform</p>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab16-tab"
                                        data-bs-toggle="pill" href="#tab16" role="tab" aria-controls="tab16"
                                        aria-selected="false"><span class="btn_quest-details">.</span>What trading
                                        platforms can I use
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab17-tab"
                                        data-bs-toggle="pill" href="#tab17" role="tab" aria-controls="tab17"
                                        aria-selected="false"><span class="btn_quest-details">.</span>What if you lose
                                        trading
                                        contract due to problems with the trading platform</a> </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab18-tab"
                                        data-bs-toggle="pill" href="#tab18" role="tab" aria-controls="tab18"
                                        aria-selected="false"><span class="btn_quest-details">.</span>How do I link
                                        rithmic with
                                        NinjaTrader
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <p class="side-menu__title">Orders and invoices</p>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab19-tab"
                                        data-bs-toggle="pill" href="#tab19" role="tab" aria-controls="tab19"
                                        aria-selected="false"><span class="btn_quest-details">.</span>How do I request a
                                        test account
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab20-tab"
                                        data-bs-toggle="pill" href="#tab2O" role="tab" aria-controls="tab2O"
                                        aria-selected="false"><span class="btn_quest-details">.</span>What payment methods
                                        are
                                        available</a> </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab21-tab"
                                        data-bs-toggle="pill" href="#tab21" role="tab" aria-controls="tab21"
                                        aria-selected="false"><span class="btn_quest-details">.</span>How many accounts
                                        can I open
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation"> <a class="nav-link" id="tab22-tab"
                                        data-bs-toggle="pill" href="#tab22" role="tab" aria-controls="tab22"
                                        aria-selected="false"><span class="btn_quest-details">.</span>How do I withdraw
                                        profits
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content p-5" id="side-menu-tabContent" data-aos="fade-up"
                                data-aos-duration="1200">
                                <div class="tab-pane fade show " id="tab1" role="tabpanel"
                                    aria-labelledby="tab1-tab" aria-labelledby="1">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="banner__title">How do I start with Winbance</h3>
                                            <p class="banner__content">It is very simple process required steps to become
                                                part
                                                of winbance
                                            <ul>
                                                <li>*Go to the accounts request panel on the home page</li>
                                                <li>*Select the account size you wish to participate in</li>
                                                <li>*Heading the rules for the winbance funding program</li>
                                                <li>*Click the buy button, enter your bill details and complete the payment
                                                    process</li>
                                            </ul>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">What is a funded account</h2>
                                            <p class="banner__content">A funded account is any account in which a trader is
                                                entitled to a bonus payable as a percentage of the profit generated in his
                                                account based on the profit split associated with the account,
                                                in accordance with our Terms of Use and our Client Agreement.

                                            </p>
                                            <p class="banner__content">To avoid any confusion, please keep in mind that the
                                                funded account is a fully simulated account with real market rates from
                                                liquidity providers. Trading data is sent to a partner trading
                                                company where trades are copied at their own discretion using bulk orders
                                                using
                                                proprietary risk management techniques and reviewed by the accounts
                                                departmen
                                                winbance

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">what is winbance</h2>
                                            <p class="banner__content">It is a financing company, we are looking for
                                                professional traders to verify them. We have created a demo account program
                                                consisting of one test. The purpose of the test is to challenge the trader
                                                to achieve goals while respecting the loss limit and managing risks, and
                                                when he
                                                succeeds in the test, he will trade and qualify for trading with the
                                                company’s
                                                capital and keep up to 90% of profits

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">How long does the evaluation process take</h2>
                                            <p class="banner__content">The minimum required trading day is 7 days(There is
                                                no
                                                need to stop these days)You can manage your account within 7 days after it
                                                is
                                                verified by the accounts management and you will be contacted
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">What is the difference between the evaluation process
                                                and
                                                funding stage</h2>
                                            <p class="banner__content">The difference between the evaluation and funding
                                                process is easy
                                                A.Evaluation:Through it we do a test to identify whether you are a
                                                professional
                                                trader and through it you learn to manage risks and achieve goals
                                                B.Funding:At this stage, you are allowed to trade with the company's capital
                                                and
                                                get up to 90% of the profits

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Can I take leave during the evaluation stage</h2>
                                            <p class="banner__content">Yes, you have to trade for seven consecutive days
                                                from
                                                the approved time, because the evaluation stage lasts for a maximum of 60
                                                days.
                                                You can take a leave after seven days of trading
                                            </p>
                                            <p class="banner__content">Yes, there is no time limit to trade durations, and
                                                we
                                                allow the trader to hold trades over weekends.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">If I break the rules, will I get a second chance</h2>
                                            <p class="banner__content">If there is a violation of the goals of trading in
                                                the
                                                winbance financing program, the account will be automatically disabled and
                                                you
                                                cannot continue, but you can open a new demo account
                                                after three days, who will deactivate the account and a 10% discount will be
                                                given to the new account

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Can I trade during the weekend in the evaluation
                                                stage
                                            </h2>
                                            <p class="banner__content">Yes, you have to trade for seven consecutive days
                                                from
                                                the approved time, because the evaluation stage lasts for a maximum of 60
                                                days.
                                                You can take a leave after seven days of trading
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">How much capital do we get in funding account</h2>
                                            <p class="banner__content">The capital or funded account that you will get
                                                after
                                                your success in the evaluation process is the same capital that you had in
                                                the
                                                evaluation process that you chose in the beginning
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Can I trade on major news</h2>
                                            <p class="banner__content">Yes, we allow our traders to trade during news
                                                events.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Can an expert advisor be used</h2>
                                            <p class="banner__content">Warning It is a violation if this rule is broken.
                                                Any
                                                accounts that use these types of expert advisors without a license will be
                                                terminated
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Am I allowed to change my trading behavior</h2>
                                            <p class="banner__content">Our main goal is to get profitable answer and earn
                                                profits for both ourselves and our traders. If we notice that there is a
                                                gallery
                                                of information, it has come to provide assistance so traded
                                                on the right track. This applies only to the interaction separated in cross
                                                section with excessive risk and they appear.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Is it possible to open more than the allowed number
                                                of
                                                trades</h2>
                                            <p class="banner__content">The permissible limit of loss varies from one
                                                account to
                                                another, but you can identify it through your account dashboard or the
                                                account
                                                applicant box. However, we provide you with a
                                                risk management tool in your account
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab14" role="tabpanel" aria-labelledby="tab14-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">Are all trading styles allowed</h2>
                                            <p class="banner__content">You cannot open more than the number of trades
                                                allowed,
                                                but in case you open a deal more than necessary, you can justify this by
                                                contacting customer support
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">What is the maximum loss I am allowed to lose</h2>
                                            <p class="banner__content">We allow all different profitable trading styles,
                                                and
                                                the trader is free to manage his account using any strategy
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab16" role="tabpanel" aria-labelledby="tab16-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">What trading platforms can I use </h2>
                                            <p class="banner__content">The platforms that you can use in the evaluation
                                                process
                                                and the financing stage are NinjaTrader and rithmic
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab17" role="tabpanel" aria-labelledby="tab17-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">What if you lose trading contract due to problems
                                                with
                                                the trading platform</h2>
                                            <p class="banner__content">With our provider, Rithmic, limit orders are stored
                                                on
                                                the server, which means that even in the event of a local failure on your
                                                segment, the orders will be stored. Most stop commands are also stored on
                                                the
                                                server.
                                                With Finamark, everything is stored on the server and nothing is stored
                                                locally
                                                on your side, so orders are always processed.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab18" role="tabpanel" aria-labelledby="tab18-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">How do I link rithmic with NinjaTrader</h2>
                                            <p class="banner__content">winbance does not provide a free license to the
                                                listed platform unless otherwise stated.
                                            </p>
                                            <p class="banner__content">
                                                Winbance Customer Support cannot provide platform-related assistance or help
                                                with
                                                platform-related technical questions/issues
                                            </p>
                                            <p class="banner__content">
                                                Make sure to have your NinjaTrader® upgraded to the last possible version
                                                here
                                               <a href="http://ninjatrader.com/PlatformDirect">(https://ninjatrader.com/PlatformDirect )</a>
                                            </p>
                                            <p class="banner__content">
                                                Update your license key in the platform. To do so, launch NinjaTrader® and
                                                from the Control
                                                Center, click Help > License key and replace the existing key with your new
                                                key. You can find
                                                our NinjaTrader® key in the dashboard, under the NinjaTrader® tab.

                                            </p>
                                            <p class="banner__content">
                                                Now, start NinjaTrader® 8 and from the Control Center window, select the
                                                menu
                                                "Connections” > “configure”:
                                            </p>
                                            <img src="assets/images/faq/faq1.svg" alt="">
                                            <img src="assets/images/faq/faq2.svg" alt="">
                                            <p class="banner__content">Select "Rithmic for NinjaTrader® Brokerage" from the list of “Available” connections >
                                                press the “add” text from the “Configured” section below:
                                               </p>
                                               <img src="assets/images/faq/faq3.svg" alt="">
                                               <p class="banner__content">
                                                “System” select Rithmic Paper Trading.
As recommended by Rithmic, if you are in the USA then select Chicago, if you are in Europe then select
Europe, you must select the closest gateway to your location.

                                               </p>
                                               <img src="assets/images/faq/faq4.svg" alt="">
                                               <p class="banner__content">
                                                To connect to your account, go to the NinjaTrader® Control Center window, select the menu "
Connections" and then select your account as per the screenshot below:

                                            </p>
                                            <img src="assets/images/faq/faq5.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab19" role="tabpanel" aria-labelledby="tab19-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">How do I request a test account</h2>
                                            <p class="banner__content">To get a test account you have to
                                                *Go to the accounts request panel on the home page
                                                *Select the account size you wish to participate in
                                                *Heading the rules for the winbance funding program
                                                *Click the buy button, enter your bill details and complete the payment
                                                process

                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab20" role="tabpanel" aria-labelledby="tab2O-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">What payment methods are available</h2>
                                            <p class="banner__content">You can pay for the winbance Challenge debit/credit
                                                card, cryptocurrencies, Google Pay or Skrill.paypal (and table logo)


                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab21" role="tabpanel" aria-labelledby="tab21-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">How many accounts can I open</h2>
                                            <p class="banner__content">The maximum limit for creating a test account in the
                                                winbance finance program is 5 accounts with the payment to you to the
                                                account.
                                                You cannot pay me 5 accounts at once

                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab22" role="tabpanel" aria-labelledby="tab22-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="banner__title">How do I withdraw profits</h2>
                                            <p class="banner__content">Withdrawal requests are processed by the funded
                                                companies once a week every Monday. Withdrawal request must be emailed to
                                                the
                                                financing company before 1pm on the previous Friday
                                                to ensure that the withdrawal amount is sent next Monday.
                                                The minimum withdrawal amount is $150 and no withdrawal fee applies to
                                                amounts
                                                over $700. Please note that banks, payment providers, and cryptocurrency
                                                exchanges may charge a fee for each transaction.
                                            <ul>
                                                <li>*Withdrawal methods</li>
                                                <li>-bank transfer</li>
                                                <li>-skrile</li>
                                                <li>-paypal</li>
                                                <li>-Cryptocurrency withdrawal</li>
                                            </ul>

                                            </p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.section-->
    </section>
    <script>
        const hash = window.location.hash;
        if (hash) {
            document.querySelector(hash).classList.add('active', 'show');
        }
        // const hash = window.location.hash;
        //         if (hash) {
        //             hideTabContent({
        //                 currentTarget: document.querySelector(hash + '-tab')
        //             });
        //         }
        const buttons = document.querySelectorAll('[role="tab"]');
        const tabPanel = Array.from(document.querySelectorAll('[role="tabpanel"]'));



        function hideTabContent(e) {
            tabPanel.forEach((panels) => {
                panels.hidden = true;
            });
            buttons.forEach((tab) => {
                tab.setAttribute("aria-selected", false);
            });
            e.currentTarget.setAttribute("aria-selected", true);

            const {
                id
            } = e.currentTarget;
            const tabPanels = tabPanel.find(
                (tabContent) => tabContent.getAttribute("aria-labelledby") === id
            );
            tabPanels.hidden = false;
        }
        buttons.forEach((button) => button.addEventListener("click", hideTabContent));


        // $(function() {
        //     AOS.init();
        //     var scrollSpy;
        //     var hash = window.location.hash;
        //     hash && $('#side-menu>li>a[href="' + hash + '"]').tab("show");

        //     $("#side-menu>li>a").click(function(e) {
        //         e.preventDefault();
        //         $(this).tab("show");
        //         window.location.hash = this.hash;

        //         if (this.hash == "#tab1") {
        //             if ($("#tab1-tab").hasClass("active")) {
        //                 $("#tab1-programs").addClass("show");
        //                 scrollSpy = new bootstrap.ScrollSpy(document.body, {
        //                     target: "#tab1-programs"
        //                 });
        //             }
        //         } else {
        //             $("#tab1-programs").removeClass("show");
        //             scrollSpy.dispose();
        //         }
        //     });
        //     if ($("#tab1-tab").hasClass("active")) {
        //         $("#tab1-programs").addClass("show");
        //         scrollSpy = new bootstrap.ScrollSpy(document.body, {
        //             target: '#tab1-programs'
        //         });
        //     }

        // });
    </script>
@endsection
