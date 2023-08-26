@extends('layout')
@section('title', 'FAQ')
@section('content')
    <style>
        .search-input {
            border-top-right-radius: 35px !important;
            border-bottom-right-radius: 35px !important;
            background: #fff;
            width: 100%;
            border-radius: 26px;
            position: relative;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 65px !important;
            border-bottom-left-radius: 50px !important;
        }

        .search-input input {
            height: 55px;
            /* width: 100%; */
            outline: none;
            border: none;
            border-radius: 5px;
            padding: 0 60px 0 20px;
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .search-input.active input {
            border-radius: 5px 5px 0 0;
        }

        .search-input .autocom-box {
            padding: 0;
            opacity: 0;
            pointer-events: none;
            /* max-height: 280px; */
            overflow-y: auto;
        }

        .search-input.active .autocom-box {
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }

        .autocom-box li {
            list-style: none;
            padding: 8px 12px;
            display: none;
            width: 100%;
            cursor: default;
            border-radius: 3px;
        }

        .search-input.active .autocom-box li {
            display: block;
        }

        .autocom-box li:hover {
            background: #efefef;
        }

        .search-input .icon {
            position: absolute;
            right: 0px;
            top: 0px;
            height: 55px;
            width: 55px;
            text-align: center;
            line-height: 55px;
            font-size: 20px;
            cursor: pointer;
        }

        .input-group {

            position: relative;
            display: block;
            width: 100%;
        }
    </style>

    <section class="faq_page" >
        <div class="container">
            <div class="faq_page_title">
                <h3 style="color: #000">Frequently Asked Questions
                </h3>
                <br>
            </div>
            <div class="container">
                <form class="faq_form">
                    <div class="input-group search-input">
                        <a href="" target="_blank" hidden></a>
                        <input type="text" id="myFilter" placeholder="Search..." onkeyup="myFunction()">
                        <div class="autocom-box">

                            <!-- here list are inserted from javascript -->
                        </div>
                        <div class="icon"><i class="bi bi-search"></i></div>
                        {{-- <label for="search"><i class="bi bi-search"></i></label> --}}
                    </div>
                    <div class="suggestion-list hidden">

                    </div>
                </form>

                <div class="row" id="myProducts">
                    <section class="faq_cards-wrapper">
                        <div class="faq_card-grid-space">
                            <div class="face face1">
                                <div class="face_content">
                                    <h3> Starting Out With winbance </h3>
                                </div>
                            </div>
                            <div class="faq_card">
                                <ul class="questions_list">
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab1" class="faq_quest"
                                            data-toggle="collapse" data-target=".navbar-collapse"> <span
                                                class="btn_quest">.</span> How do I start with Winbance? <span
                                                class="sr-only"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab2" class="faq_quest"><span
                                                class="btn_quest">.</span> Is What is a funded account
                                            ?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab3" class="faq_quest"> <span
                                                class="btn_quest">.</span> what is winbance?</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="faq_card-grid-space">
                            <div class="face face1">
                                <div class="face_content">
                                    <h3>Evaluation Process</h3>
                                </div>
                            </div>
                            <div class="faq_card">
                                <ul class="questions_list">
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab4" class="faq_quest"> <span
                                                class="btn_quest">.</span>How long does the evaluation process take?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab5" class="faq_quest"><span
                                                class="btn_quest">.</span>What is the difference between the evaluation process and funding stage?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab6" class="faq_quest"> <span
                                                class="btn_quest">.</span> Can I take leave during the evaluation stage ?</a>
                                    </li>
                                      <li>
                                        <a href="{{ route('home.faqDetails') }}#tab7" class="faq_quest"> <span
                                                class="btn_quest">.</span> If I break the rules, will I get a second chance?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab8" class="faq_quest"> <span
                                                class="btn_quest">.</span> Can I trade during the weekend in the evaluation
                                            stage?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq_card-grid-space">
                            <div class="face face1">
                                <div class="face_content">
                                    <h3>Funding</h3>
                                </div>
                            </div>
                            <div class="faq_card">
                                <ul class="questions_list">
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab9" class="faq_quest"> <span
                                                class="btn_quest">.</span> How much capital do we get in funding account ?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab10" class="faq_quest"><span
                                                class="btn_quest">.</span> Can I trade on major news ?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab11" class="faq_quest"> <span
                                                class="btn_quest">.</span>Can an expert advisor be used ?</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="faq_card-grid-space">
                            <div class="face face1">
                                <div class="face_content">
                                    <h3>Trading rules</h3>
                                </div>
                            </div>
                            <div class="faq_card">
                                <ul class="questions_list">
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab12" class="faq_quest"> <span
                                                class="btn_quest">.</span> Am I allowed to change my trading behavior ?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab13" class="faq_quest"><span
                                                class="btn_quest">.</span> Is it possible to open more than the allowed
                                            number of trades?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab14" class="faq_quest"> <span
                                                class="btn_quest">.</span>Are all trading styles allowed?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab15" class="faq_quest"> <span
                                                class="btn_quest">.</span> What is the maximum loss I am allowed to
                                            lose?</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="faq_card-grid-space">
                            <div class="face face1">
                                <div class="face_content">
                                    <h3> trading platform</h3>
                                </div>
                            </div>
                            <div class="faq_card">
                                <ul class="questions_list">
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab16" class="faq_quest"> <span
                                                class="btn_quest">.</span>What trading
                                            platforms can I use ?

                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab17" class="faq_quest"><span
                                                class="btn_quest">.</span>What if you lose
                                            trading contract due to problems with the trading platform?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab18" class="faq_quest"><span
                                                class="btn_quest">.</span> How do I link
                                            rithmic with NinjaTrader?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq_card-grid-space">
                            <div class="face face1">
                                <div class="face_content">
                                    <h3>Orders and invoices</h3>
                                </div>
                            </div>
                            <div class="faq_card">
                                <ul class="questions_list">
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab19" class="faq_quest"> <span
                                                class="btn_quest">.</span> How do I
                                            request a test account?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab20" class="faq_quest"><span
                                                class="btn_quest">.</span> What payment
                                            methods are available?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab21" class="faq_quest"> <span
                                                class="btn_quest">.</span>How many
                                            accounts can I open?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home.faqDetails') }}#tab22" class="faq_quest"> <span
                                                class="btn_quest">.</span> How do I
                                            withdraw profits? </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </section>

                </div>
            </div>
        </div>

    </section>

    <script>
let suggestions = [
                "How do I start with Winbance",
                "What is a funded account",
                "what is winbance",
                "How long does the evaluation process take",
                "What is the difference between the evaluation process and funding stage",
                "Can I take leave during the evaluation stage ",
                "If I break the rules, will I get a second chance",
                "Can I trade during the weekend in the evaluation stage",
                "How much capital do we get in funding account",
                "Can I trade on major news",
                "Can an expert advisor be used",
                "Am I allowed to change my trading behavior",
                "Is it possible to open more than the allowed number of trades",
                "Are all trading styles allowed",
                "What is the maximum loss I am allowed to lose",
                "What trading platforms can I use ",
                "What if you lose trading contract  due to problems with the trading platform",
                "How do I link rithmic with NinjaTrader",
                "How do I request a test account",
                "What payment methods are available",
                "How many accounts can I open",
                "How do I withdraw profits",

            ];
            // getting all required elements
            const searchWrapper = document.querySelector(".search-input");
            const inputBox = searchWrapper.querySelector("input");
            const suggBox = searchWrapper.querySelector(".autocom-box");
            const icon = searchWrapper.querySelector(".icon");
            let linkTag = searchWrapper.querySelector("a");
            let webLink;

            // if user press any key and release
            inputBox.onkeyup = (e) => {
                let userData = e.target.value; //user enetered data
                let emptyArray = [];
                if (userData) {
                    icon.onclick = () => {
                        webLink = `https://www.google.com/search?q=${userData}`;
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                    }

                    emptyArray = suggestions.filter((data) => {
                        //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                        return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
                    });
                    emptyArray = emptyArray.map((data,index) => {
                        // passing return data inside li tag
                        return data = `<li><a href="{{ route('home.faqDetails') }}#tab${index+1}">${data}</a></li>`;
                    });
                    searchWrapper.classList.add("active"); //show autocomplete box
                    showSuggestions(emptyArray);
                    let allList = suggBox.querySelectorAll("li a");
                    for (let i = 0; i < allList.length; i++) {
                        //adding onclick attribute in all li tag
                        allList[i].setAttribute("onclick", "select(this)");
                    }
                } else {
                    searchWrapper.classList.remove("active"); //hide autocomplete box
                }
            }

            function select(element) {
                let selectData = element.textContent;
                inputBox.value = selectData;
                icon.onclick = () => {
                    webLink = `https://www.google.com/search?q=${selectData}`;
                    linkTag.setAttribute("href", webLink);
                    linkTag.click();
                }
                searchWrapper.classList.remove("active");
            }

            function showSuggestions(list) {
                let listData;
                if (!list.length) {
                    userValue = inputBox.value;
                    listData = `<li><a>${userValue} </a> </li>`;
                } else {
                    listData = list.join('');
                }
                suggBox.innerHTML = listData;
            }

        function myFunction() {
            var input, filter, cards, cardContainer, title, i;
            input = document.getElementById("myFilter");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("myProducts");
            cards = cardContainer.getElementsByClassName("faq_card-grid-space");
            for (i = 0; i < cards.length; i++) {
                title = cards[i].querySelector(".face_content");
                if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>

@endsection
