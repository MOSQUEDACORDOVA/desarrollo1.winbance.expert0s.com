@extends('layout')
@section('title', 'CONTACT')
@section('content')

    <style>
        .contact_faq_container {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 3rem;
            padding: 3rem;
        }

        p.contact_sous-titre {
            font-size: 13px;
        }

        .iti {
            width: 100%;
        }

        .contact_faq-title {
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            float: none;
            text-align: center;
        }


        details {
            margin: 0 auto;
            /* background: #282828; */
            margin-bottom: .5rem;
            box-shadow: 0 .1rem 1rem -.5rem rgba(0, 0, 0, .4);
            border-radius: 5px;
            overflow: hidden;
        }

        summary {
            font-size: 17px;
            font-weight: 700;
            /* height: 16px; */
            margin: 0 0 6px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 100%;
            padding: 1rem;
            display: block;
            border-bottom: 0.1px solid #707070;
            padding-left: 2.2rem;
            position: relative;
            cursor: pointer;
            color: #ffff;
        }

        summary:before {
            content: '';
            border-width: .4rem;
            border-style: solid;
            border-color: transparent transparent transparent #fff;
            position: absolute;
            top: 1.3rem;
            left: 1rem;
            transform: rotate(0);
            transform-origin: .2rem 50%;
            transition: .25s transform ease;
        }

  
        details[open]>summary:before {
            transform: rotate(90deg);
        }

        details summary::-webkit-details-marker {
            display: none;
        }

        details>ul {
            padding-bottom: 1rem;
            margin-bottom: 0;
        }

        .details-expanded {
            padding: 0 2rem;
        }


        pre {
            white-space: pre-wrap;
            word-break: break-all;
        }
    </style>

    <section class="about_banner">
        <div class="container">
            <div class="row gy-4 align-items-center features-item-banner" data-aos="fade-up">
                <div class="col-md-5 baner-header">
                    <div class="section-header">
                        <h1>Our Contact</h1>

                    </div>
                    <p style="color: #AAAAAA;font-size: 14px;">Do you want to support?It is good that I communicate with you
                    </p>

                </div>
                <div class="col-md-5">
                    <img src="assets/images/banner/5747.png" class="img-fluid about-img" alt="">
                </div>
            </div>

    </section>
    <section class="contact" style=" background-color: #0F0F0F;  padding-top: 7em;">
        <div class="container">
            <div class="wrapper">
                <div class="contact_section">
                    <div class="contact_info">
                        <div class="contact_title">
                            <h3>
                                Hey, let's talk.

                            </h3>
                            <p>Customer support is available in 9 languages : Spanish-English-Arabic-Portuguese
                                German-Italian-Turkish-Russian-French-</p>
                            <p>We can also provide you with support through live chat, or you can make a phone
                                call or write an email</p>

                        </div>
                        <div class="contact_us">
                            <h3>
                                CONTACT US
                            </h3>
                            <div class="informations_contact">
                                <div class="contact_us_info">
                                    <div
                                        class="service-item position-relative"style="    display: flex;
                                    align-items: flex-end;">
                                        <img src="assets/images/icons/localisation-icon.svg" alt=""
                                            style="    width: 5em; ">
                                        <p style="color: #fff "> at 71-75, Shelton Street,
                                            <br>Covent
                                            Garden, London, WC2H 9JQ

                                        </p>
                                    </div>
                                    <br>
                                    <div
                                        class="service-item position-relative"style="    display: flex;
                                    align-items: flex-end;">
                                        <img src="assets/images/icons/phone.svg" alt="" style="width: 4em; ">
                                        <p style="color: #fff"> Phone: <a href="tel:+34 632 12 09 41 ">+34 632 12 09 41 </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact_informations">
                                    <div
                                        class="service-item position-relative"style="    display: flex;
                                    align-items: flex-end;">
                                        <img src="assets/images/icons/email.svg" alt="" style="width: 4em; ">
                                        <p style="color: #fff">Email: <a href="mailto:">support@winbance.com </a></p>
                                    </div>
                                    <br>
                                    <div
                                        class="service-item position-relative"style="    display: flex;
                                   align-items: center;">
                                        <img src="assets/images/icons/whatsaap.svg" alt="" style=" width: 3em; ">
                                        <p><a href="mailto:">Whatsaap</a></p>
                                    </div>

                                </div>

                            </div>


                        </div>



                    </div>
                    <div class="contact_form">
                               <form  name="contact" data-aos="fade-up" data-aos-delay="200" action="/contact" method="post">
                            @csrf
                            <div class="formbold-mb-5">
                                <input type="text" name="name" id="name" placeholder="Full Name"
                                    class="formbold-form-input" required="required" />
                            </div>

                            <div class="formbold-mb-5">
                                <select  id="address-country" name="country" class="formbold-form-input"
                                    placeholder="Select Country">
                                </select>
                            </div>

                            <div class="formbold-mb-5">
                                <input id="phone" type="text" name="phone" class="formbold-form-input"
                                    placeholder="phone number" required="required">
                            </div>
                            <div class="formbold-mb-5">
                                <input id="email" type="email" name="email" placeholder="Your Gmail"
                                    class="formbold-form-input" required="required">
                            </div>
                            <div class="formbold-mb-5">
                                <textarea rows="6" name="message" id="message" placeholder="Message" class="formbold-form-input" required="required"></textarea>
                            </div>
                            <div class="form-group form-group-checkbox">
                                <input id="privacy" name="privacy" type="checkbox" required="required" />
                                <label for="privacy" id="privacy_label">I have read the privacy policy and accept
                                    them.</label>
                            </div>
                            <div>
                                <button class="formbold-btn">Send</button>
                            </div>
                            @if(session('flash'))
                            <p style="color:green">{{ session('flash')}}</p>

                            @endif
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="banner_contact" style=" background-color: #0F0F0F; padding: 13em;;">
        <div class="container">
            <div class="productivity_area" style="background-color: #272727;padding: 0em;">

                <div class="row align-items-center">
                    <div class="col-xl-3 col-md-12 col-lg-6">
                        <div class="app_download wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s;">

                            <img src="assets/images/banner/contact_us_img.svg" alt="">

                        </div>
                    </div>
                    <div class="col-xl-8 col-md-12 col-lg-6">
                        <h3 class="wow fadeInDown animated" data-wow-duration="1s" data-wow-delay=".1s"
                            style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: .1s; -moz-animation-delay: .1s; animation-delay: .1s;"
                            style="##B9B9B9">
                            Or connect with us on/.
                        </h3>
                        <P class="contact_sous-titre" style="color:#B9B9B9 ; text-align: center;">Join the traders on the
                            WINBANCE page, get started today!</P>
                        <ul class="contact-social-list"
                            style="border-top: none;margin: 0.5rem;
                            font-size: 1.8rem !important;">
                            <li class="contact_icon"><a
                                    href="https://web.facebook.com/people/Winbance/100086258052616/"target="_blank"
                                    style="text-align: center; color: #000;
                                display: block;"><i
                                        class="bi bi-facebook"></i></a></li>
                            <li class="contact_icon"><a href="https://twitter.com/winbance?s=21&t=6NWwVq8wVuSe40Trq3P-EA"
                                    target="_blank"style="text-align: center;  color: #000;
                                display: block;"><i
                                        class="bi bi-twitter"></i></a></li>
                            <li class="contact_icon"><a href="https://www.instagram.com/winbance/"
                                    target="_blank"style="text-align: center;
                                color: #000;
                                display: block;"><i
                                        class="bi bi-instagram"></i></a></li>
                            <li class="contact_icon"><a href="https://www.youtube.com/c/MEEDBNF"
                                    target="_blank"style="text-align: center;
                                color: #000;
                                display: block;"><i
                                        class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section style=" background-color: #0F0F0F; padding:4em;">
        <div class="container">
            <h3 class="contact_faq-title">Frequently ask question</h3>
            {{-- <p style="text-align: center;line-height: 76px;color: #707070">Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Ipsum doloribus eum obcaecati </p> --}}

            <div class="contact_faq_container">

                <div class="first_faq-section">
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">what is winbance</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">It
                                is a financing company, we are looking for
                                professional traders to verify them. We have created a demo account program
                                consisting of one test. The purpose of the test is to challenge the trader
                                to achieve goals while respecting the loss limit and managing risks, and
                                when he
                                succeeds in the test, he will trade and qualify for trading with the
                                company’s
                                capital and keep up to 90% of profits</p>

                        </div>
                    </details>

                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">How do I withdraw profits</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">
                                Withdrawal requests are processed by the funded
                                companies once a week every Monday. Withdrawal request must be emailed to
                                the
                                financing company before 1pm on the previous Friday
                                to ensure that the withdrawal amount is sent next Monday.
                                The minimum withdrawal amount is $150 and no withdrawal fee applies to
                                amounts
                                over $700. Please note that banks, payment providers, and cryptocurrency
                                exchanges may charge a fee for each transaction.
                            <ul style="color: #fff; font-size: 13px; ">
                                <li>*Withdrawal methods</li>
                                <li>-bank transfer</li>
                                <li>-skrile</li>
                                <li>-paypal</li>
                                <li>-Cryptocurrency withdrawal</li>
                            </ul>

                        </div>
                    </details>
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">What is a funded account</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">A
                                funded account is any account in which a trader is
                                entitled to a bonus payable as a percentage of the profit generated in his
                                account based on the profit split associated with the account,
                                in accordance with our Terms of Use and our Client Agreement.

                            </p>
                            <p style="color: #fff; font-size: 13px; ">To
                                avoid any confusion, please keep in mind that the
                                funded account is a fully simulated account with real market rates from
                                liquidity providers. Trading data is sent to a partner trading
                                company where trades are copied at their own discretion using bulk orders
                                using
                                proprietary risk management techniques and reviewed by the accounts
                                departmen
                                winbance

                            </p>
                        </div>
                    </details>
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">How do I start with Winbance</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">It
                                is very simple process required steps to become
                                part
                                of winbance
                            <ul style="color: #fff; font-size: 13px; ">
                                <li>*Go to the accounts request panel on the home page</li>
                                <li>*Select the account size you wish to participate in</li>
                                <li>*Heading the rules for the winbance funding program</li>
                                <li>*Click the buy button, enter your bill details and complete the payment
                                    process</li>
                            </ul>
                        </div>
                    </details>
                </div>
                <div class="second_faq-section">
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">Can I trade on major news</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">Yes, we allow our traders to trade during news
                                events.</p>
                            {{-- <ol>
                                <li>Do this and then</li>
                                <li>The next step</li>
                                <li>Almost there</li>
                                <li>Yes, this is it</li>
                                <li>There is no step 5</li>
                            </ol> --}}
                        </div>
                    </details>

                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">Can an expert advisor be used</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">
                                Warning It is a violation if this rule is broken.
                                Any
                                accounts that use these types of expert advisors without a license will be
                                terminated</p>
                        </div>
                    </details>
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">Are all trading styles allowed</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">
                                You cannot open more than the number of trades
                                allowed,
                                but in case you open a deal more than necessary, you can justify this by
                                contacting customer support</p>
                        </div>
                    </details>
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">How many accounts can I open</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">
                                The maximum limit for creating a test account in the
                                winbance finance program is 5 accounts with the payment to you to the
                                account.
                                You cannot pay me 5 accounts at once</p>
                        </div>
                    </details>
                </div>
                <div class="last_faq-section">
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">How do I request a test account</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">
                                To get a test account you have to
                                                *Go to the accounts request panel on the home page
                                                *Select the account size you wish to participate in
                                                *Heading the rules for the winbance funding program
                                                *Click the buy button, enter your bill details and complete the payment
                                                process</p>
                        </div>
                    </details>

                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">If I break the rules, will I get a second chance</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">If there is a violation of the goals of trading in
                                the
                                winbance financing program, the account will be automatically disabled and
                                you
                                cannot continue, but you can open a new demo account
                                after three days, who will deactivate the account and a 10% discount will be
                                given to the new account</p>
                        </div>
                    </details>
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">How much capital do we get in funding account</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">
                                The capital or funded account that you will get
                                after
                                your success in the evaluation process is the same capital that you had in
                                the
                                evaluation process that you chose in the beginning</p>
                        </div>
                    </details>
                    <details itemscope itemprop="mainEntity" itemtype="">
                        <summary itemprop="name">What is the maximum loss I am allowed to lose</summary>
                        <div class="details-expanded" itemscope itemprop="acceptedAnswer" itemtype="">
                            <p style="color: #fff; font-size: 13px; ">We
                                allow all different profitable trading styles,
                                and
                                the trader is free to manage his account using any strategy </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>
    {{--
    </div> --}}


    <script src=""></script>
    <script src=""></script>


@endsection
