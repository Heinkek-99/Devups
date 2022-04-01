@extends('home.sms')

@section('container')


    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">Envoyer SMS via contacts</h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <div class="show_notification"></div>
                        <div class="row">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Envoyer SMS via contacts</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <div class="form-group">
                                    <a href="https://app.techsoft-web-agency.com/user/sms/download-sample-sms-file" class="btn btn-complete"><i
                                                class="fa fa-download"></i> Télécharger un exemple de fichier
                                    </a>
                                </div>
                            </div>

                            <div id="send-sms-file-wrapper">


                                <form id="send-sms-file-form" class="" role="form" method="post"
                                      action="https://app.techsoft-web-agency.com/user/sms/post-sms-from-file" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="Noi8fbzKJPUo9D2TlUHaDU12qYjFshi2aFVBtaxf">

                                    <div class="form-group">
                                        <label>Importer les numéros</label>
                                        <div class="form-group input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                Parcourir <input
                                                        type="file" class="form-control" name="import_numbers"
                                                        @change="handleImportNumbers">
                                            </span>
                                        </span>
                                            <input type="text" class="form-control" readonly="">
                                        </div>

                                        <div id='loadingmessage' style='display:none' class="form-group">
                                            <label>Téléchargement de fichiers... Merci de patienter</label>
                                            <div class="progress">
                                                <div class="progress-bar-indeterminate"></div>
                                            </div>
                                        </div>

                                        <div class="coder-checkbox">
                                            <input type="checkbox" name="header_exist" :checked="form.header_exist"
                                                   v-model="form.header_exist">
                                            <span class="co-check-ui"></span>
                                            <label>Utiliser la première ligne du fichier comme en-tête</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Code du pays</label>
                                        <select class="selectpicker form-control" name="country_code" data-live-search="true">
                                           <option value="0"  selected  >Existe déjà sur le numéro de téléphone</option>
                                                                                            <option value="93"  >Afghanistan (93)</option>
                                                                                            <option value="355"  >Albania (355)</option>
                                                                                            <option value="213"  >Algeria (213)</option>
                                                                                            <option value="376"  >Andorra (376)</option>
                                                                                            <option value="244"  >Angola (244)</option>
                                                                                            <option value="672"  >Antarctica (672)</option>
                                                                                            <option value="54"  >Argentina (54)</option>
                                                                                            <option value="374"  >Armenia (374)</option>
                                                                                            <option value="297"  >Aruba (297)</option>
                                                                                            <option value="61"  >Australia (61)</option>
                                                                                            <option value="43"  >Austria (43)</option>
                                                                                            <option value="994"  >Azerbaijan (994)</option>
                                                                                            <option value="973"  >Bahrain (973)</option>
                                                                                            <option value="880"  >Bangladesh (880)</option>
                                                                                            <option value="375"  >Belarus (375)</option>
                                                                                            <option value="32"  >Belgium (32)</option>
                                                                                            <option value="501"  >Belize (501)</option>
                                                                                            <option value="229"  >Benin (229)</option>
                                                                                            <option value="975"  >Bhutan (975)</option>
                                                                                            <option value="591"  >Bolivia (591)</option>
                                                                                            <option value="387"  >Bosnia and Herzegovina (387)</option>
                                                                                            <option value="267"  >Botswana (267)</option>
                                                                                            <option value="55"  >Brazil (55)</option>
                                                                                            <option value="673"  >Brunei (673)</option>
                                                                                            <option value="359"  >Bulgaria (359)</option>
                                                                                            <option value="226"  >Burkina Faso (226)</option>
                                                                                            <option value="95"  >Burma (Myanmar) (95)</option>
                                                                                            <option value="257"  >Burundi (257)</option>
                                                                                            <option value="855"  >Cambodia (855)</option>
                                                                                            <option value="237"  >Cameroon (237)</option>
                                                                                            <option value="1"  >Canada (1)</option>
                                                                                            <option value="238"  >Cape Verde (238)</option>
                                                                                            <option value="236"  >Central African Republic (236)</option>
                                                                                            <option value="235"  >Chad (235)</option>
                                                                                            <option value="56"  >Chile (56)</option>
                                                                                            <option value="86"  >China (86)</option>
                                                                                            <option value="61"  >Christmas Island (61)</option>
                                                                                            <option value="61"  >Cocos (Keeling) Islands (61)</option>
                                                                                            <option value="57"  >Colombia (57)</option>
                                                                                            <option value="269"  >Comoros (269)</option>
                                                                                            <option value="243"  >Congo (243)</option>
                                                                                            <option value="682"  >Cook Islands (682)</option>
                                                                                            <option value="506"  >Costa Rica (506)</option>
                                                                                            <option value="385"  >Croatia (385)</option>
                                                                                            <option value="53"  >Cuba (53)</option>
                                                                                            <option value="357"  >Cyprus (357)</option>
                                                                                            <option value="420"  >Czech Republic (420)</option>
                                                                                            <option value="45"  >Denmark (45)</option>
                                                                                            <option value="253"  >Djibouti (253)</option>
                                                                                            <option value="593"  >Ecuador (593)</option>
                                                                                            <option value="20"  >Egypt (20)</option>
                                                                                            <option value="503"  >El Salvador (503)</option>
                                                                                            <option value="240"  >Equatorial Guinea (240)</option>
                                                                                            <option value="291"  >Eritrea (291)</option>
                                                                                            <option value="372"  >Estonia (372)</option>
                                                                                            <option value="251"  >Ethiopia (251)</option>
                                                                                            <option value="500"  >Falkland Islands (500)</option>
                                                                                            <option value="298"  >Faroe Islands (298)</option>
                                                                                            <option value="679"  >Fiji (679)</option>
                                                                                            <option value="358"  >Finland (358)</option>
                                                                                            <option value="33"  >France (33)</option>
                                                                                            <option value="689"  >French Polynesia (689)</option>
                                                                                            <option value="241"  >Gabon (241)</option>
                                                                                            <option value="220"  >Gambia (220)</option>
                                                                                            <option value="970"  >Gaza Strip (970)</option>
                                                                                            <option value="995"  >Georgia (995)</option>
                                                                                            <option value="49"  >Germany (49)</option>
                                                                                            <option value="233"  >Ghana (233)</option>
                                                                                            <option value="350"  >Gibraltar (350)</option>
                                                                                            <option value="30"  >Greece (30)</option>
                                                                                            <option value="299"  >Greenland (299)</option>
                                                                                            <option value="502"  >Guatemala (502)</option>
                                                                                            <option value="224"  >Guinea (224)</option>
                                                                                            <option value="245"  >Guinea-Bissau (245)</option>
                                                                                            <option value="592"  >Guyana (592)</option>
                                                                                            <option value="509"  >Haiti (509)</option>
                                                                                            <option value="39"  >Holy See (Vatican City) (39)</option>
                                                                                            <option value="504"  >Honduras (504)</option>
                                                                                            <option value="852"  >Hong Kong (852)</option>
                                                                                            <option value="36"  >Hungary (36)</option>
                                                                                            <option value="354"  >Iceland (354)</option>
                                                                                            <option value="91"  >India (91)</option>
                                                                                            <option value="62"  >Indonesia (62)</option>
                                                                                            <option value="98"  >Iran (98)</option>
                                                                                            <option value="964"  >Iraq (964)</option>
                                                                                            <option value="353"  >Ireland (353)</option>
                                                                                            <option value="44"  >Isle of Man (44)</option>
                                                                                            <option value="972"  >Israel (972)</option>
                                                                                            <option value="39"  >Italy (39)</option>
                                                                                            <option value="225"  >Ivory Coast (225)</option>
                                                                                            <option value="81"  >Japan (81)</option>
                                                                                            <option value="962"  >Jordan (962)</option>
                                                                                            <option value="7"  >Kazakhstan (7)</option>
                                                                                            <option value="254"  >Kenya (254)</option>
                                                                                            <option value="686"  >Kiribati (686)</option>
                                                                                            <option value="381"  >Kosovo (381)</option>
                                                                                            <option value="965"  >Kuwait (965)</option>
                                                                                            <option value="996"  >Kyrgyzstan (996)</option>
                                                                                            <option value="856"  >Laos (856)</option>
                                                                                            <option value="371"  >Latvia (371)</option>
                                                                                            <option value="961"  >Lebanon (961)</option>
                                                                                            <option value="266"  >Lesotho (266)</option>
                                                                                            <option value="231"  >Liberia (231)</option>
                                                                                            <option value="218"  >Libya (218)</option>
                                                                                            <option value="423"  >Liechtenstein (423)</option>
                                                                                            <option value="370"  >Lithuania (370)</option>
                                                                                            <option value="352"  >Luxembourg (352)</option>
                                                                                            <option value="853"  >Macau (853)</option>
                                                                                            <option value="389"  >Macedonia (389)</option>
                                                                                            <option value="261"  >Madagascar (261)</option>
                                                                                            <option value="265"  >Malawi (265)</option>
                                                                                            <option value="60"  >Malaysia (60)</option>
                                                                                            <option value="960"  >Maldives (960)</option>
                                                                                            <option value="223"  >Mali (223)</option>
                                                                                            <option value="356"  >Malta (356)</option>
                                                                                            <option value="692"  >Marshall Islands (692)</option>
                                                                                            <option value="222"  >Mauritania (222)</option>
                                                                                            <option value="230"  >Mauritius (230)</option>
                                                                                            <option value="262"  >Mayotte (262)</option>
                                                                                            <option value="52"  >Mexico (52)</option>
                                                                                            <option value="691"  >Micronesia (691)</option>
                                                                                            <option value="373"  >Moldova (373)</option>
                                                                                            <option value="377"  >Monaco (377)</option>
                                                                                            <option value="976"  >Mongolia (976)</option>
                                                                                            <option value="382"  >Montenegro (382)</option>
                                                                                            <option value="212"  >Morocco (212)</option>
                                                                                            <option value="258"  >Mozambique (258)</option>
                                                                                            <option value="264"  >Namibia (264)</option>
                                                                                            <option value="674"  >Nauru (674)</option>
                                                                                            <option value="977"  >Nepal (977)</option>
                                                                                            <option value="31"  >Netherlands (31)</option>
                                                                                            <option value="599"  >Netherlands Antilles (599)</option>
                                                                                            <option value="687"  >New Caledonia (687)</option>
                                                                                            <option value="64"  >New Zealand (64)</option>
                                                                                            <option value="505"  >Nicaragua (505)</option>
                                                                                            <option value="227"  >Niger (227)</option>
                                                                                            <option value="234"  >Nigeria (234)</option>
                                                                                            <option value="683"  >Niue (683)</option>
                                                                                            <option value="672"  >Norfolk Island (672)</option>
                                                                                            <option value="850"  >North Korea (850)</option>
                                                                                            <option value="47"  >Norway (47)</option>
                                                                                            <option value="968"  >Oman (968)</option>
                                                                                            <option value="92"  >Pakistan (92)</option>
                                                                                            <option value="680"  >Palau (680)</option>
                                                                                            <option value="507"  >Panama (507)</option>
                                                                                            <option value="675"  >Papua New Guinea (675)</option>
                                                                                            <option value="595"  >Paraguay (595)</option>
                                                                                            <option value="51"  >Peru (51)</option>
                                                                                            <option value="63"  >Philippines (63)</option>
                                                                                            <option value="870"  >Pitcairn Islands (870)</option>
                                                                                            <option value="48"  >Poland (48)</option>
                                                                                            <option value="351"  >Portugal (351)</option>
                                                                                            <option value="1"  >Puerto Rico (1)</option>
                                                                                            <option value="974"  >Qatar (974)</option>
                                                                                            <option value="242"  >Republic of the Congo (242)</option>
                                                                                            <option value="40"  >Romania (40)</option>
                                                                                            <option value="7"  >Russia (7)</option>
                                                                                            <option value="250"  >Rwanda (250)</option>
                                                                                            <option value="590"  >Saint Barthelemy (590)</option>
                                                                                            <option value="290"  >Saint Helena (290)</option>
                                                                                            <option value="508"  >Saint Pierre and Miquelon (508)</option>
                                                                                            <option value="685"  >Samoa (685)</option>
                                                                                            <option value="378"  >San Marino (378)</option>
                                                                                            <option value="239"  >Sao Tome and Principe (239)</option>
                                                                                            <option value="966"  >Saudi Arabia (966)</option>
                                                                                            <option value="221"  >Senegal (221)</option>
                                                                                            <option value="381"  >Serbia (381)</option>
                                                                                            <option value="248"  >Seychelles (248)</option>
                                                                                            <option value="232"  >Sierra Leone (232)</option>
                                                                                            <option value="65"  >Singapore (65)</option>
                                                                                            <option value="421"  >Slovakia (421)</option>
                                                                                            <option value="386"  >Slovenia (386)</option>
                                                                                            <option value="677"  >Solomon Islands (677)</option>
                                                                                            <option value="252"  >Somalia (252)</option>
                                                                                            <option value="27"  >South Africa (27)</option>
                                                                                            <option value="82"  >South Korea (82)</option>
                                                                                            <option value="34"  >Spain (34)</option>
                                                                                            <option value="94"  >Sri Lanka (94)</option>
                                                                                            <option value="249"  >Sudan (249)</option>
                                                                                            <option value="597"  >Suriname (597)</option>
                                                                                            <option value="268"  >Swaziland (268)</option>
                                                                                            <option value="46"  >Sweden (46)</option>
                                                                                            <option value="41"  >Switzerland (41)</option>
                                                                                            <option value="963"  >Syria (963)</option>
                                                                                            <option value="886"  >Taiwan (886)</option>
                                                                                            <option value="992"  >Tajikistan (992)</option>
                                                                                            <option value="255"  >Tanzania (255)</option>
                                                                                            <option value="66"  >Thailand (66)</option>
                                                                                            <option value="670"  >Timor-Leste (670)</option>
                                                                                            <option value="228"  >Togo (228)</option>
                                                                                            <option value="690"  >Tokelau (690)</option>
                                                                                            <option value="676"  >Tonga (676)</option>
                                                                                            <option value="216"  >Tunisia (216)</option>
                                                                                            <option value="90"  >Turkey (90)</option>
                                                                                            <option value="993"  >Turkmenistan (993)</option>
                                                                                            <option value="688"  >Tuvalu (688)</option>
                                                                                            <option value="256"  >Uganda (256)</option>
                                                                                            <option value="380"  >Ukraine (380)</option>
                                                                                            <option value="971"  >United Arab Emirates (971)</option>
                                                                                            <option value="44"  >United Kingdom (44)</option>
                                                                                            <option value="1"  >United States (1)</option>
                                                                                            <option value="598"  >Uruguay (598)</option>
                                                                                            <option value="998"  >Uzbekistan (998)</option>
                                                                                            <option value="678"  >Vanuatu (678)</option>
                                                                                            <option value="58"  >Venezuela (58)</option>
                                                                                            <option value="84"  >Vietnam (84)</option>
                                                                                            <option value="681"  >Wallis and Futuna (681)</option>
                                                                                            <option value="970"  >West Bank (970)</option>
                                                                                            <option value="967"  >Yemen (967)</option>
                                                                                            <option value="260"  >Zambia (260)</option>
                                                                                            <option value="263"  >Zimbabwe (263)</option>
                                                                                    </select>
                                    </div>


                                    <div class="form-group" v-show="number_columns.length > 0">
                                        <label>Numéro de téléphone Colonne</label>
                                        <select class="selectpicker form-control" ref="number_column"
                                                name="number_column" data-live-search="true" v-model="number_column">
                                            <option v-for="column in number_columns" :value="column.key"
                                                    v-text="column.value"></option>
                                        </select>
                                    </div>

                                    
                                    <div class="form-group sr-only">
                                        <label>Passerelle SMS</label>
                                        <select class="selectpicker form-control" name="sms_gateway" data-live-search="true">
                                                                                            <option value="135">Route nexah cameroon</option>
                                                                                    </select>
                                    </div><!-- 
									Custom 
                                                                            <div class="form-group">
                                            <label>Mot-clé de la campagne</label>
                                            <select class="selectpicker form-control" name="keyword[]" data-live-search="true" multiple>
                                                                                            </select>
                                        </div>
                                    									Custom -->
                                                                                                                        <div class="form-group">
                                                <label>ID expéditeur / Nom d&#039;envoi du SMS</label>
                                                <select class="selectpicker form-control sender_id" name="sender_id"
                                                        data-live-search="true">
                                                                                                            <option value="TECHSOF SMS">TECHSOF SMS</option>
                                                                                                    </select>
                                            </div>
											<p>
												<a href="https://app.techsoft-web-agency.com/user/sms/sender-id-management"
                                                    class="text-uppercase">Demander un nouvel ID d&#039;envoi
												</a>
                                            </p>
                                                                            

                                    <div class="form-group">
                                        <label>Supprimer les doublons</label>
                                        <select class="selectpicker form-control" name="remove_duplicate">
                                            <option value="yes">Oui</option>
                                            <option value="no">Non</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Message Type</label>
                                        <select class="selectpicker form-control message_type" name="message_type" readonly>
                                            <option value="plain">SMS</option>
                                            <option value="unicode">Unicode</option>
                                            <option value="arabic">Arabe</option>
                                            <option value="voice">Voix</option>
                                            <option value="mms">MMS</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" name="message" rows="5" id="message"
                                                  ref="message"></textarea>
										<div id="sms-counter">
											<span class="help text-uppercase remaining"> 160 </span>
											/ <span class="help text-uppercase per_message"> 160 </span>
											<span class="help text-uppercase">caractères restants</span>
											<span class="help text-success messages"> 1 </span>
											<span class="help text-success"> Message (s)</span>
											 - <span class="help text-uppercase encoding"></span>
										</div>
										<!-- Original 
                                        <span class="help text-uppercase"
                                              id="remaining">160 caractères restants</span>
                                        <span class="help text-success"
                                              id="messages">1 Message
                                            (s)</span>
											Original -->
                                    </div>

								<!-- Original 
                                    <div class="form-group">
                                        <div class="coder-checkbox">
                                            <input type="checkbox" value="yes" name="unsubscribe_sms" class="unsubscribe_sms">
                                            <span class="co-check-ui"></span>
                                            <label>Générer un message de désabonnement</label>
                                        </div>
                                    </div>
								Original -->
								
                                    <div class="form-group send-mms">
                                        <label>Sélectionner un fichier</label>
                                        <div class="form-group input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                Parcourir <input
                                                        type="file" class="form-control" name="image"
                                                        accept="audio/*,video/*,image/*">
                                            </span>
                                        </span>
                                            <input type="text" class="form-control" readonly="">
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-sm-6" v-show="number_columns.length > 0">
                                            <div class="form-group">
                                                <label>Sélectionner un champ  issus du fichier/ de la liste</label>
                                                <select class="selectpicker form-control" ref="merge_field"
                                                        data-live-search="true" v-model="number_column">
                                                    <option v-for="column in number_columns" :value="column.key"
                                                            v-text="column.value"></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Modèles SMS</label>
                                                <select class="selectpicker form-control" name="sms_template"
                                                        data-live-search="true" id="sms_template">
                                                    <option>Sélectionner un modèle</option>
                                                                                                    </select>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <div class="coder-checkbox">
                                            <input type="checkbox" name="send_later"  class="send_later" value="on">
                                            <span class="co-check-ui"></span>
                                            <label>Envoyer plus tard</label>
                                        </div>
                                    </div>


                                    <div class="schedule_time">


                                        <div class="form-group">
                                            <label>Mode définition de la date d&#039;envoi</label>
                                            <select class="selectpicker form-control schedule_time_type"
                                                    ref="schedule_time_type" name="schedule_time_type">
                                                <option value="from_date">Entrer soi même la date</option>
                                                <option value="from_file">Selectionner la date dans votre fichier (si le fichier contient la date d&#039;envoi de chaque SMS)</option>
                                            </select>
                                        </div>

                                        <div class="form-group from_date">
                                            <label>PLANIFICATION DU TEMPS D&#039;ENVOI</label>
                                            <input type="text" class="form-control dateTimePicker" name="schedule_time">
                                            <span class="help text-danger text-uppercase">Format de la date
                                                ( dd/mm/yyyy h:m AM ) Ex. 03/28/2022 05:50 PM</span>
                                        </div>

                                        <div class="form-group from_file"
                                             v-show="number_columns.length > 0 && schedule_time_type == 'from_file'">
                                            <label>PLANIFICATION DU TEMPS D&#039;ENVOI Colonne</label>
                                            <select class="selectpicker form-control" ref="schedule_time_column"
                                                    name="schedule_time_column" data-live-search="true"
                                                    v-model="schedule_time_column">
                                                <option v-for="column in number_columns" :value="column.key"
                                                        v-text="column.value"></option>
                                            </select>
                                            <span class="help text-danger text-uppercase">Format de la date
                                                ( dd/mm/yyyy h:m AM ) Ex. 03/28/2022 05:50 PM</span>
                                        </div>

                                    </div>

                                    <div id='uploadContact' style='display:none' class="form-group">
                                        <label>Ajout d&#039;un message dans la file d&#039;attente... Veuillez patienter</label>
                                        <div class="progress">
                                            <div class="progress-bar-indeterminate"></div>
                                        </div>
                                    </div>


                                    <input type="hidden" value="" id="schedule_sms_status"
                                           name="schedule_sms_status">


                                    <span class="text-uppercase text-complete help">Après avoir cliqué sur le bouton Envoyer, NE FERMEZ PAS votre navigateur. L&#039;envoi se fait en arrière plan.</span>

                                    <button type="submit" id="submitContact" class="btn btn-success btn-sm pull-right">
                                        <i class="fa fa-send"></i> Envoyer
                                    </button>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection