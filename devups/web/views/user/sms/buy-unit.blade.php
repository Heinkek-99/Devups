@extends('home.sms')

@section('container')

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">Acheter</h2>
        </div>

        <div class="p-30 p-t-none p-b-none">
                        <div class="row">
                <div class="col-lg-5">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Rechargez votre compte en ligne</h3>
                        </div>
                        <div class="panel-body">
                            <form class="" id="rechargeForm" role="form" method="post" action="https://app.techsoft-web-agency.com/users/post-buy-unit">
                                
                                <div class="form-group">
                                    <label> Sélectionnez le pays vers lequel vous souhaitez envoyer des messages </label>
                                    <select name="country_id" class="selectpicker form-control" data-live-search="true">
                                        <option value="0"> Tout les </option>
                                        <option value="93"> Afghanistan </option>
                                        <option value="355"> Albania </option>
                                        <option value="213"> Algeria </option>
                                        <option value="376"> Andorra </option>
                                        <option value="244"> Angola </option>
                                        <option value="672"> Antarctica </option>
                                        <option value="54"> Argentina </option>
                                        <option value="374"> Armenia </option>
                                        <option value="297"> Aruba </option>
                                        <option value="61"> Australia </option>
                                        <option value="43"> Austria </option>
                                        <option value="994"> Azerbaijan </option>
                                        <option value="973"> Bahrain </option>
                                        <option value="880"> Bangladesh </option>
                                        <option value="375"> Belarus </option>
                                        <option value="32"> Belgium </option>
                                        <option value="501"> Belize </option>
                                        <option value="229"> Benin </option>
                                        <option value="975"> Bhutan </option>
                                        <option value="591"> Bolivia </option>
                                        <option value="387"> Bosnia and Herzegovina </option>
                                        <option value="267"> Botswana </option>
                                        <option value="55"> Brazil </option>
                                        <option value="673"> Brunei </option>
                                        <option value="359"> Bulgaria </option>
                                        <option value="226"> Burkina Faso </option>
                                        <option value="95"> Burma (Myanmar) </option>
                                        <option value="257"> Burundi </option>
                                        <option value="855"> Cambodia </option>
                                        <option value="237"> Cameroon </option>
                                        <option value="1"> Canada </option>
                                        <option value="238"> Cape Verde </option>
                                        <option value="236"> Central African Republic </option>
                                        <option value="235"> Chad </option>
                                        <option value="56"> Chile </option>
                                        <option value="86"> China </option>
                                        <option value="61"> Christmas Island </option>
                                        <option value="61"> Cocos (Keeling) Islands </option>
                                        <option value="57"> Colombia </option>
                                        <option value="269"> Comoros </option>
                                        <option value="243"> Congo </option>
                                        <option value="682"> Cook Islands </option>
                                        <option value="506"> Costa Rica </option>
                                        <option value="385"> Croatia </option>
                                        <option value="53"> Cuba </option>
                                        <option value="357"> Cyprus </option>
                                        <option value="420"> Czech Republic </option>
                                        <option value="45"> Denmark </option>
                                        <option value="253"> Djibouti </option>
                                        <option value="593"> Ecuador </option>
                                        <option value="20"> Egypt </option>
                                        <option value="503"> El Salvador </option>
                                        <option value="240"> Equatorial Guinea </option>
                                        <option value="291"> Eritrea </option>
                                        <option value="372"> Estonia </option>
                                        <option value="251"> Ethiopia </option>
                                        <option value="500"> Falkland Islands </option>
                                        <option value="298"> Faroe Islands </option>
                                        <option value="679"> Fiji </option>
                                        <option value="358"> Finland </option>
                                        <option value="33"> France </option>
                                        <option value="689"> French Polynesia </option>
                                        <option value="241"> Gabon </option>
                                        <option value="220"> Gambia </option>
                                        <option value="970"> Gaza Strip </option>
                                        <option value="995"> Georgia </option>
                                        <option value="49"> Germany </option>
                                        <option value="233"> Ghana </option>
                                        <option value="350"> Gibraltar </option>
                                        <option value="30"> Greece </option>
                                        <option value="299"> Greenland </option>
                                        <option value="502"> Guatemala </option>
                                        <option value="224"> Guinea </option>
                                        <option value="245"> Guinea-Bissau </option>
                                        <option value="592"> Guyana </option>
                                        <option value="509"> Haiti </option>
                                        <option value="39"> Holy See (Vatican City) </option>
                                        <option value="504"> Honduras </option>
                                        <option value="852"> Hong Kong </option>
                                        <option value="36"> Hungary </option>
                                        <option value="354"> Iceland </option>
                                        <option value="91"> India </option>
                                        <option value="62"> Indonesia </option>
                                        <option value="98"> Iran </option>
                                        <option value="964"> Iraq </option>
                                        <option value="353"> Ireland </option>
                                        <option value="44"> Isle of Man </option>
                                        <option value="972"> Israel </option>
                                        <option value="39"> Italy </option>
                                        <option value="225"> Ivory Coast </option>
                                        <option value="81"> Japan </option>
                                        <option value="962"> Jordan </option>
                                        <option value="7"> Kazakhstan </option>
                                        <option value="254"> Kenya </option>
                                        <option value="686"> Kiribati </option>
                                        <option value="381"> Kosovo </option>
                                        <option value="965"> Kuwait </option>
                                        <option value="996"> Kyrgyzstan </option>
                                        <option value="856"> Laos </option>
                                        <option value="371"> Latvia </option>
                                        <option value="961"> Lebanon </option>
                                        <option value="266"> Lesotho </option>
                                        <option value="231"> Liberia </option>
                                        <option value="218"> Libya </option>
                                        <option value="423"> Liechtenstein </option>
                                        <option value="370"> Lithuania </option>
                                        <option value="352"> Luxembourg </option>
                                        <option value="853"> Macau </option>
                                        <option value="389"> Macedonia </option>
                                        <option value="261"> Madagascar </option>
                                        <option value="265"> Malawi </option>
                                        <option value="60"> Malaysia </option>
                                        <option value="960"> Maldives </option>
                                        <option value="223"> Mali </option>
                                        <option value="356"> Malta </option>
                                        <option value="692"> Marshall Islands </option>
                                        <option value="222"> Mauritania </option>
                                        <option value="230"> Mauritius </option>
                                        <option value="262"> Mayotte </option>
                                        <option value="52"> Mexico </option>
                                        <option value="691"> Micronesia </option>
                                        <option value="373"> Moldova </option>
                                        <option value="377"> Monaco </option>
                                        <option value="976"> Mongolia </option>
                                        <option value="382"> Montenegro </option>
                                        <option value="212"> Morocco </option>
                                        <option value="258"> Mozambique </option>
                                        <option value="264"> Namibia </option>
                                        <option value="674"> Nauru </option>
                                        <option value="977"> Nepal </option>
                                        <option value="31"> Netherlands </option>
                                        <option value="599"> Netherlands Antilles </option>
                                        <option value="687"> New Caledonia </option>
                                        <option value="64"> New Zealand </option>
                                        <option value="505"> Nicaragua </option>
                                        <option value="227"> Niger </option>
                                        <option value="234"> Nigeria </option>
                                        <option value="683"> Niue </option>
                                        <option value="672"> Norfolk Island </option>
                                        <option value="850"> North Korea </option>
                                        <option value="47"> Norway </option>
                                        <option value="968"> Oman </option>
                                        <option value="92"> Pakistan </option>
                                        <option value="680"> Palau </option>
                                        <option value="507"> Panama </option>
                                        <option value="675"> Papua New Guinea </option>
                                        <option value="595"> Paraguay </option>
                                        <option value="51"> Peru </option>
                                        <option value="63"> Philippines </option>
                                        <option value="870"> Pitcairn Islands </option>
                                        <option value="48"> Poland </option>
                                        <option value="351"> Portugal </option>
                                        <option value="1"> Puerto Rico </option>
                                        <option value="974"> Qatar </option>
                                        <option value="242"> Republic of the Congo </option>
                                        <option value="40"> Romania </option>
                                        <option value="7"> Russia </option>
                                        <option value="250"> Rwanda </option>
                                        <option value="590"> Saint Barthelemy </option>
                                        <option value="290"> Saint Helena </option>
                                        <option value="508"> Saint Pierre and Miquelon </option>
                                        <option value="685"> Samoa </option>
                                        <option value="378"> San Marino </option>
                                        <option value="239"> Sao Tome and Principe </option>
                                        <option value="966"> Saudi Arabia </option>
                                        <option value="221"> Senegal </option>
                                        <option value="381"> Serbia </option>
                                        <option value="248"> Seychelles </option>
                                        <option value="232"> Sierra Leone </option>
                                        <option value="65"> Singapore </option>
                                        <option value="421"> Slovakia </option>
                                        <option value="386"> Slovenia </option>
                                        <option value="677"> Solomon Islands </option>
                                        <option value="252"> Somalia </option>
                                        <option value="27"> South Africa </option>
                                        <option value="82"> South Korea </option>
                                        <option value="34"> Spain </option>
                                        <option value="94"> Sri Lanka </option>
                                        <option value="249"> Sudan </option>
                                        <option value="597"> Suriname </option>
                                        <option value="268"> Swaziland </option>
                                        <option value="46"> Sweden </option>
                                        <option value="41"> Switzerland </option>
                                        <option value="963"> Syria </option>
                                        <option value="886"> Taiwan </option>
                                        <option value="992"> Tajikistan </option>
                                        <option value="255"> Tanzania </option>
                                        <option value="66"> Thailand </option>
                                        <option value="670"> Timor-Leste </option>
                                        <option value="228"> Togo </option>
                                        <option value="690"> Tokelau </option>
                                        <option value="676"> Tonga </option>
                                        <option value="216"> Tunisia </option>
                                        <option value="90"> Turkey </option>
                                        <option value="993"> Turkmenistan </option>
                                        <option value="688"> Tuvalu </option>
                                        <option value="256"> Uganda </option>
                                        <option value="380"> Ukraine </option>
                                        <option value="971"> United Arab Emirates </option>
                                        <option value="44"> United Kingdom </option>
                                        <option value="1"> United States </option>
                                        <option value="598"> Uruguay </option>
                                        <option value="998"> Uzbekistan </option>
                                        <option value="678"> Vanuatu </option>
                                        <option value="58"> Venezuela </option>
                                        <option value="84"> Vietnam </option>
                                        <option value="681"> Wallis and Futuna </option>
                                        <option value="970"> West Bank </option>
                                        <option value="967"> Yemen </option>
                                        <option value="260"> Zambia </option>
                                        <option value="263"> Zimbabwe </option>
                                    </select>
                                    <span class="help-text">Si vous souhaitez envoyer des messages vers plusieurs destinations, veuillez sélectionner &quot;Tous&quot;.</span>
                                </div>

                                <div class="unique d-none">
                                    <div class="form-group">
                                        <label>Nombre d&#039;unités</label>
                                        <input type="text" class="form-control" name="number_unit" id="number_unit">
                                    </div>

                                    <div class="form-group">
                                        <label>Prix unitaire</label>
                                        <input type="text" class="form-control" readonly name="unit_price" id="unit_price">
                                    </div>

                                    <div class="form-group">
                                        <label>Montant à payer (<span class="currency">EUR</span>)</label>
                                        <input type="text" class="form-control" readonly name="pay_amount" id="pay_amount">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Frais de transaction</label>
                                        <input type="text" class="form-control" readonly name="trans_fee" id="trans_fee">
                                    </div>

                                    <div class="form-group">
                                        <label>Total (<span class="currency">EUR</span>)</label>
                                        <input type="text" class="form-control total1" readonly  name="total">
                                    </div>
                                </div>

                                <div class="all form-group">
                                    <label>Montant à payer (<span class="">€</span>)</label>
                                    <input type="text" class="form-control total2" name="total"  id="total">
                                </div>

                                <div class="form-group">
                                    <label>Sélectionnez le mode de paiement</label>
                                    <select class="selectpicker form-control" name="gateway">
                                                                                                                                    <option value="manualpayment">Paiement Manuel</option>
                                                                                                                                                                                <option value="mycoolpay" data-type="momo">MTN MoMo / Orange Money (Cameroun) </option>
                                                                                                                                                                                <option value="CinetPay" data-type="card">Visa / Mastercard </option>
                                                                                                                        </select>
                                </div>

                                

                                <div class="form-group d-none" id="phoneNumber">
                                    <label>Numéro de téléphone </label>
                                    <input type="tel" class="form-control" name="phone" id="tel">
                                    <span id="valid-msg" class="hide text-success success">✓ Valid</span>
                                    <span id="error-msg" class="hide text-danger danger"></span>
                                </div>

                                <div class="d-none" id="kyc">
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control" required name="surname" value="">
                                    </div>

                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="name"  value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <input type="text" class="form-control" name="caddress" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>État/Region</label>
                                        <input type="text" class="form-control" name="cstate"  value="" >
                                    </div>

                                    <div class="form-group">
                                        <label>Ville</label>
                                        <input type="text" class="form-control" name="ccity"  value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Code postal</label>
                                        <input type="text" class="form-control" name="czip_code"  value="" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Country">Pays</label>
                                        <select name="ccountry" class="form-control selectpicker" data-live-search="true">
                                            
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon"  selected="selected">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
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
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                    
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="_token" value="Noi8fbzKJPUo9D2TlUHaDU12qYjFshi2aFVBtaxf">
                                <button type="submit" class="btn btn-success btn-sm pull-right purchase_button"><i
                                     class="fa fa-plus"></i> Acheter maintenant 
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection