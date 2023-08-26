@extends('layout')
@section('title', 'PAYMENT')
@section('content')
    <link href="assets/css/payment.css" rel="stylesheet">
    
<style>
    .image_icon{
            margin: 22px;
            max-width: 80% !important;
    }
</style>    
<script>

function getPrice(){
   
    let data = window.localStorage.getItem("price");
    if(data==90){location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=WY2CTT59FT59C&lc=GB&item_name=aspire&amount=90%2e00&currency_code=USD&button_subtype=services&no_note=1&no_shipping=2&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted';}
    if(data==140){location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=WY2CTT59FT59C&lc=GB&item_name=Launch&amount=140%2e00&currency_code=USD&button_subtype=services&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted';}
    if(data==300){location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=WY2CTT59FT59C&lc=GB&item_name=Premium&amount=300%2e00&currency_code=USD&button_subtype=services&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted';}
    if(data==490){location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=WY2CTT59FT59C&lc=GB&item_name=Explode&amount=490%2e00&currency_code=USD&button_subtype=services&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted';}
}

</script>


    <div class="payment">
        <section id="progress-form_panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0" style=" padding: 157px 0;">
             <ol class="steps">
                <li class="step is-active" data-step="1">
                  Step 1
                </li>
                <li class="step" data-step="2">
                  Step 2
                </li>
               
              </ol>
            <h1>1.Customer information</h1>
            <p class="paragraph">Enter your details so we can process the payment and create an account.</p>
            <form method="post" id="sheetdb-form" onsubmit="return validateForm()" onclick="validatePassword()" action="https://sheetdb.io/api/v1/94y8oq4ntcoma">
 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" py-3>
                            <label>First Name</label>
                            <input type="text" class="form-control input-form" name="data[First Name]"
                                placeholder="First name as per your ID*
                                        "
                                id="first">
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group py-2" >
                            <label>Last Name</label>
                            <input type="text" class="form-control input-form" name="data[Last Name]"
                                placeholder="last name" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group py-2" >
                            <label>Email</label>
                            <input type="email" class="form-control input-form" name="data[Email]"
                                placeholder="Enter email" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">

                        <div class="form-group py-2">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control input-form" name="data[Number]"
                                placeholder="Enter phone number" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>
                <!--  row   -->


                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"  class="form-control input-form" name="data[Password]"
                                placeholder="enter Password" id="password" required >
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password"  class="form-control input-form"
                                name="data[Confirm Password]" placeholder="confirm Password" id="Confirm Password" required>

                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>
                <!--  row   -->
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group py-2">
                            <label>Code Postal</label>
                            <input type="text" class="form-control input-form" name="data[Postal]"
                                placeholder="Enter Postal Code" required >
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group py-2">
                            <label>Address</label>
                            <input type="text" class="form-control input-form" name="data[Address]"
                                placeholder="Enter address" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group py-2">
                            <label>State</label>
                            <input type="text" class="form-control input-form" name="data[State]" placeholder="State"
                                >
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group py-2">
                            <label>Country</label>
                            <select id="address-country" name="data[Country]"
                                class="form-control input-form formbold-form-input" placeholder="Select Country" required>
                                 <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon" selected>Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            {{-- <select  id="address-country" name="data[country]" class="form-control input-form formbold-form-input"
                                        placeholder="Select Country" >
                                    </select> --}}
                       
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>
<br>
                <input type="checkbox" id="terms" name="checkout-checkbox" id="checkout-checkbox" required>
                <label for="terms" class="py-3">* I have read and agree to <a href="#open-modal">the winbance Terms &
                        Conditions</a></label>
                <br>
                <br>
                <button class="next action-button" type="submit" id="submit" name="submit">
                    <span class="front">Next</span>
                </button>
            </form>

            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <section class="container longEnough mCustomScrollbar" data-mcs-theme="dark">

                        <div class="container__heading">
                            <h2 style="color: #000">terms conditions</h2>
                        </div>
                        <div class="container__content">

                            <h4 class="conditions-title">1-Conditions the use</h4>
                            <p class="conditions_paragraph"> *1.1-Welcome to the website of Winbance User, (hereinafter
                                winbance or “The Site”), a finance
                                company, domiciled at at 71-75, Shelton Street, Covent Garden, London</p>
                            <p class="conditions_paragraph"> *1.2-he following Data Processing Policy is presented, so that
                                it is included in relation to the
                                operations to be carried out.</p>



                            <h4 class="conditions-title">2-SCOPE</h4>
                            <p class="conditions_paragraph">

                                Winbance's Personal Data Processing Policy (or those operating in place) covers all
                                administrative,
                                regulatory and
                                oversight aspects that must be complied with by
                                directors, collaborators, contractors and third parties who have a direct relationship with
                                the Company,
                                and will also
                                apply to all databases and/or files that It
                                contains personal data that is subject to processing, through all its service channels and
                                operations.

                            </p>

                            <h4 class="conditions-title">3-Definitions</h4>
                            <p class="conditions_paragraph">*3.1-Database- Organized set of personal data that is subject
                                to Treatment.</p>
                            <p class="conditions_paragraph"> *3.2Personal data-Any information linked or that may be
                                associated with one or more specific or
                                determinable natural
                                persons.</p>
                            <p class="conditions_paragraph">*3.3general data-Data that is not semi-private, private or
                                sensitive. General data is considered, among
                                other things,
                                data on the social status of people</p>

                            <p class="conditions_paragraph">*3.4data processor-Person that by itself or in association with
                                others, carries out the Processing of
                                personal data on
                                behalf of the Responsible for the Treatment.</p>
                            <p class="conditions_paragraph">*3.5Headline-A natural person whose personal data is subject to
                                two-way processing</p>



                            <h4 class="conditions-title">4-objective </h4>
                            <p class="conditions_paragraph"> This Personal Data Processing Policy aims to regulate the
                                collection, storage, use, handling and
                                deletion of personal
                                data handled by Winbance</p>


                            <h4 class="conditions-title">5-collection data Personal</h4>
                            <p class="conditions_paragraph">*5.1-You may choose an account on our Sites or Services, and we
                                may collect certain personal information
                                from you in
                                order to provide the Services to you and complete transactions</p>
                            <p class="conditions_paragraph"> *5.2-d Our websites or services provide links to third-party
                                apps, products, services or websites for
                                your convenience
                                and information. If you access these links, you will leave our Sites or Services.</p>
                            <p class="conditions_paragraph">*5.3-We do not sell your personal data to third parties for
                                their own marketing purposes.</p>
                            <p class="conditions_paragraph"> *5.4-We employ an outside company to process debit, credit and
                                other payments and to perform related
                                services.</p>

                            <p class="conditions_paragraph">*5.5-If you are outside the United States and choose to provide
                                information to us, the personal data will
                                be transferred
                                and processed in the United States..</p>
                            <p class="conditions_paragraph">*5.6-We reserve the right to disclose personal data as
                                permitted or required by law. We may also disclose
                                Personal Data
                                in the following circumstances: to comply with any law, regulation, subpoena or
                                court order, to investigate and help prevent security threats, fraud or other harmful
                                activity, to
                                investigate and help
                                prevent breach of any contractual connection.</p>

                            <h4 class="conditions-title"> 6-invoice policy</h4>

                            <p class="conditions_paragraph"> *6.1-We will charge or charge your payment method at the start
                                of your subscription. When we renew your
                                subscription,
                                we'll use the payment method currently associated with your account. If your credit
                                or debit account is closed or your payment method is invalid, your subscription may not
                                renew and your
                                membership will
                                be automatically canceled. We may try up to 3 times to collect the amount. If we are
                                unable to collect the amount on the renewal date, and you wish to retain your membership,
                                you will be
                                subject to the
                                offers of the current payment plan. You can view your payment method at any time by
                                logging into the Winbance dashboard and editing your payment information in the Settings
                                area.</p>
                            <p class="conditions_paragraph"> *6.2-Until you cancel the transaction, you will continue to be
                                billed according to the cycle stated at
                                the time of your
                                purchase.</p>



                            <h4 class="conditions-title">7-treatment </h4>
                            <p class="conditions_paragraph">Winbance will use the collected data exclusively for
                                commercial, contractual and operational purposes
                                relating to its
                                lines of business, internal mission and/or internal administrative processes,
                                consistent with its mission and current legislation and information security.</p>


                            <h4 class="conditions-title">8-Rights of customers, collaborators and third parties</h4>
                            <p class="conditions_paragraph">*8.1-Knowing, correcting and contesting your personal data</p>
                            <p class="conditions_paragraph">*8.2-These rights may be exercised, among other things, against
                                partial, inaccurate, incomplete,
                                fragmented or
                                misleading data or those whose processing is expressly prohibited or not authorized; Thus,
                                the user will be solely and exclusively responsible for the correctness and accuracy of his
                                personal
                                data.</p>
                            <p class="conditions_paragraph"> *8.3-To exercise these rights, the owner must register his
                                claim with identification of the owner,
                                description of the
                                facts giving rise to the claim, and the address and accompanying documents he wants
                                to enforce.</p>
                            <p class="conditions_paragraph"> *8.4-Once the full claim is received, it will be indexed with
                                the label "Under Review" and reason within
                                no more than 3 days. Said mark will be kept until the claim is determined.</p>
                            <p class="conditions_paragraph"> *8.5-The maximum period for attending the claim will be eleven
                                (11) working days, calculated from the
                                day following the
                                date of receipt. When it is not possible to attend the claim within the said period,
                                the concerned party will be informed of the reasons for the delay and the date on which
                                their claim will
                                be processed,
                                which shall in no case exceed seven (7) days after the expiry of the first
                                expired.</p>
                            <p class="conditions_paragraph">*8.6-Inform the Controller, upon request, of the use that has
                                been given to your personal data.</p>
                            <p class="conditions_paragraph"> *8.7-Revoke permission and/or request deletion of data when
                                constitutional and legal principles, rights
                                and guarantees
                                are not respected in the transaction.</p>
                            <p class="conditions_paragraph">*8.8-Cancellation and/or deletion when it is determined that in
                                the transaction the official or
                                responsible person has
                                incurred conduct contrary to law.</p>

                            <p class="conditions_paragraph">*8.9-Freedom of access to your personal data that has undergone
                                treatment.</p>

                            <h4 class="conditions-title">9-responsibility</h4>
                            <p class="conditions_paragraph"> Notwithstanding anything to the contrary in this Agreement, in
                                no event shall winbance be liable for any
                                indirect,
                                special, incidental, punitive or consequential damages, including but not limited to loss
                                of profits, lost time or goodwill, until If winbance has been advised of the possibility of
                                such
                                damages, whether in
                                contract, tort (including negligence), strict liability or otherwise.
                                10-Your right to consult or correct your personal information
                                winbance r will make every reasonable effort to keep your information accurate and up to
                                date. You can
                                help by keeping
                                us informed of any changes, such as if you change your phone number more often or if
                                you change it. If you find any errors in our information, let us know and we will make
                                corrections
                                immediately. This
                                will require you to provide proof of information before we can make the change. We will
                                also ensure that correct information is passed on to the relevant third parties who have
                                such
                                information about you. We
                                will write your opinion on file for information that is still in dispute.</p>


                            <h4 class="conditions-title">11-Trading risk statement</h4>
                            <p class="conditions_paragraph">You agree that any use of the Site or the Service shall not be
                                construed as: (i) an investment, legal or
                                tax advice,
                                (ii) an offer to buy or sell any securities, derivatives, futures, or services, or
                                (iii) an alternative solution. To your own skill and judgment.</p>


                        </div>
                        {{-- <div class="container__nav">
                                        <small>By clicking 'Accept' you are agreeing to our terms and
                                            conditions.</small>
                                        <a class="button" href="#">Accept</a>

                                    </div> --}}
                    </section>

                </div>
            </div>
        </section>




            <section class="checkout-details">
                <h1>Your order</h1>
                <br>
                <div class="checkout-details-inner">
                    <div class="checkout-total" style="border-top: transparent;">
                        <p>account size </p>
                        <p>{{request()->get('acoount_size')}}</p>
                    </div>
                    <div class="checkout-total">
                        <p>Platform</p>
                        <p>NinjaTrader</p>
                    </div>
                    <div class="checkout-total">
                        <p>Account Currency</p>
                        <p style="color: #F0B90B">USD</p>
                    </div>

                </div>
                <div class="bg_colored">
                    <p>Your price:</p>
                    <p>{{request()->get('price')}}</p>
                </div>
            </section>

    </div>














    <!-- <div class="nextStep">Next</div> -->
    {{-- </fieldset>
            <fieldset > --}}
    <!-- Step 2 -->
    <section id="progress-form_panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden style=" padding: 157px 0;">
         <ol class="steps">
            <li class="step" data-step="1">
              Step 1
            </li>
            <li class="step  is-active" data-step="2">
              Step 2
            </li>
           
          </ol>
        <h1>2.Select Payment</h1>
        <p class="paragraph">Select a payment method. </p>
        <div class="content">
            <!-- card -->

            <div class="card" style="" onclick="handlePaymentStripe()">
                <div class="icon"><a> <img class="image_icon" src="assets/img/DLocal.png" alt=""></a></div>
                <div class="payment-method-badge-svg-bottom" style="padding-top: 5px;">
                    <img src="assets/img/visa.svg" alt="" style="width: 4em;">
                    <img src="assets/img/mastercard.svg" alt="" style="width: 3em;">
                </div>
            </div>


            <div class="card" onclick="handlePaymentc()">

                <div class="icon" style="" ><a> <img class="image_icon" src="assets/img/Coinbase_logo.png" alt=""></a></div>
                <div class="payment-method-badge-svg-bottom" style="">
                    <img src="assets/img/icon1.svg" alt="" style="width: 2.1em;">
                    <img src="assets/img/icon2.svg" alt="" style="width: 1.9em;">
                    <img src="assets/img/icon3.svg" alt="" style="width: 1.9em;">
                </div>
                <!-- <p class="title">Favourites</p>
                                <p class="text">Check all your favourites in one place.</p> -->
            </div>

            <div class="card" >

                <div class="icon" style=" margin-top: -7px; width: 13em;"  ><a href="#" onclick="handlePayment(getAccountSizeFromURL());" target="_blank" data-sdk-integration-source="button-factory"> 
                <img src="assets/img/paypal.png" alt="" ></a>
                </div>
                <div class="payment-method-badge-svg-bottom" style="    border-top: none;">
                    <br>
                    <br>
                </div>

            </div>


            <div class="card">

                <div class="icon">
                  <a>
                    <img class="image_icon" src="assets/img/logo4.png" alt="" style="width: 115px; height: 109px;">
                  </a>
                  </div>
                  <div class="payment-method-badge-svg-bottom" style="">
                      <div style="text-align: center;font-size: 18px; font-weight: bold;">BANK TRANSFER</div>
                  </div>
            
            </div>
            

            <div class="card" onclick="redirectToPayment(getAccountSizeFromURL())">

                <div class="icon"><a> <img class="image_icon" src="assets/img/logo5.png" alt=""></a></div>
                <div class="payment-method-badge-svg-bottom" style="">
                    <img src="assets/img/icon4.svg" alt="" style="width: 1.9em;">
                    <img src="assets/img/icon1.svg" alt="" style="width: 2.1em;">
                    <img src="assets/img/icon5.svg" alt="" style="width: 1.9em;;">
                </div>

            </div>

            <!-- end card -->

        </div>

    </section>
    <script src="assets/js/payment.js"></script>
    <script>
      var form = document.getElementById('sheetdb-form');
      form.addEventListener("submit", e => {
        e.preventDefault();
        fetch(form.action, {
            method : "POST",
            body: new FormData(document.getElementById("sheetdb-form")),
        }).then(
            response => response.json()
        ).then((html) => {
          // you can put any JS code here
          alert('success')
        });
      });
    </script>
    <script>
function handlePaymentc() {
  const urlParams = new URLSearchParams(window.location.search);
  const accountSize = urlParams.get("AccountSize");

  let paymentLink;
  switch (accountSize) {
    case "Aspire":
      paymentLink = "https://commerce.coinbase.com/checkout/eb260f9b-eea4-440c-9cc8-7c4735ef2a89";
      break;
    case "Launch":
      paymentLink = "https://commerce.coinbase.com/checkout/e1d30fb3-4bd6-40b9-88b2-52e146ead227";
      break;
    case "Premium":
      paymentLink = "https://commerce.coinbase.com/checkout/cdf1e830-e65e-489f-8dc2-95f99f63d25f";
      break;
    case "Explode":
      paymentLink = "https://commerce.coinbase.com/checkout/22997395-7a33-4055-b048-8ddfdf7aeffd";
      break;
    default:
      return;
  }
  window.location.href = paymentLink;
}

function getAccountSizeFromURL() {
  var url = new URL(window.location.href);
  var accountSize = url.searchParams.get("AccountSize");
  return accountSize;
}


function handlePayment(accountSize) {
  switch (accountSize) {
    case 'Aspire':
      window.location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RQKWNAEFA2TNC';
      break;
    case 'Launch':
      window.location.href = 'https://py.pl/1dulOM';
      break;
    case 'Premium':
      window.location.href = 'https://py.pl/aEqL3';
      break;
    case 'Explode':
      window.location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JMD8G6FWFNVSJ';
      break;
    default:
      break;
  }
}

function handlePaymentStripe() {
  const urlParams = new URLSearchParams(window.location.search);
  const accountSize = urlParams.get("AccountSize");

  let paymentLink;
  switch (accountSize) {
    case "Aspire":
      paymentLink = "https://checkout.dlocalgo.com/validate/subscription/ue2WISzURgXuaTB4fX9JoH7Mtb9lsfrx";
      break;
    case "Launch":
      paymentLink = "https://checkout.dlocalgo.com/validate/subscription/qM2oB7ruHPo3cLJ108PuMG8oW2g8g0Xy";
      break;
    case "Premium":
      paymentLink = "https://checkout.dlocalgo.com/validate/subscription/BUhAhZMMyx6Udmjm7LyxGjoYSV7YAtVK";
      break;
    case "Explode":
      paymentLink = "https://checkout.dlocalgo.com/validate/subscription/rDuvnYUmWqLHhq7PySJ6yadGMk1eeaqS";
      break;
    default:
      return;
  }
  window.location.href = paymentLink;
}

function redirectToPayment(accountSize) {
  switch (accountSize) {
    case 'Aspire':
      window.location.href = 'https://nowpayments.io/payment/?iid=5124543600';
      break;
    case 'Launch':
      window.location.href = 'https://nowpayments.io/payment/?iid=6345808358';
      break;
    case 'Premium':
      window.location.href = 'https://nowpayments.io/payment/?iid=6131399230';
      break;
    case 'Explode':
      window.location.href = 'https://nowpayments.io/payment/?iid=6367715922';
      break;
    default:
      break;
  }
}



    </script>

@endsection
