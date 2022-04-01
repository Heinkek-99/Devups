<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bulk SMS SK </title>
    <link rel="icon" type="image/x-icon"  href="{{__front}}images/logo.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="eKxJQWqhP7AERzb6GcBGbfqQiVEZ1ja1xYBi4PdS" />
	
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/bootstrap/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/bootstrap-toggle/css/bootstrap-toggle.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/font-awesome/font-awesome.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/alertify/css/alertify.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/alertify/css/alertify-bootstrap-3.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/bootstrap-select/css/bootstrap-select.min.css">
    
    <script src="{{__front}}libs/chartjs/chart.js"></script>

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}css/style3.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}css/admin.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{__front}}css/responsive3.css">

	
	<link media="all" type="text/css" rel="stylesheet" href="{{__front}}libs/intro/introjs.min.css">
</head>



<body class="has-left-bar has-top-bar ">

    <nav id="left-nav" class="left-nav-bar">
        <div class="nav-top-sec">
            <div class="app-logo">
                <img src="{{__front}}img/logo.png" alt="logo" class="bar-logo" width="155px" height="40px">
            </div>

            <a href="#" id="bar-setting" class="bar-setting pt-5"><i class="fa fa-bars"></i></a>
        </div>
        <div class="nav-bottom-sec">
            <ul class="left-navigation" id="left-navigation">

                
                <li  class="active" ><a href="https://app.techsoft-web-agency.com/dashboard"><span class="menu-text">Tableau de bord</span> <span class="menu-thumb"><i class="fa fa-dashboard"></i></span></a></li>

                <li  id=cash class="has-sub ">
                    <a href="#"><span class="menu-text icon_badge">Rechargez</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a>
                    <ul class="sub">
                        <!---
                        <li ><a href="{{('')}}"purchase-sms-plan><span class="menu-text">Acheter un forfait SMS</span> <span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a></li>
                        ----->
                        <li ><a href="{{('buy-unit')}}"><span class="menu-text">Acheter</span> <span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a></li>
                        <li ><a href="{{('transactions')}}"><span class="menu-text icon_badge">Mes transactions</span> <span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a></li>

                    </ul>
                </li>

                <li class="has-sub  ">
                    <a href="#"><span class="menu-text  icon_badge" >Couverture / Tarifs</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-money"></i></span></a>
                    <ul class="sub">
                        <li ><a href="{{('coverage')}}"><span class="menu-text">Couverture / Tarifs</span> <span class="menu-thumb"><i class="fa fa-money"></i></span></a></li>
                        <li ><a href="{{('custum-price')}}"><span class="menu-text icon_badge">Prix personnalisés</span> <span class="menu-thumb"><i class="fa fa-money"></i></span></a></li>
                        <li ><a href="{{('price-bundle')}}"><span class="menu-text icon_badge">Plan tarifaire spécial</span> <span class="menu-thumb"><i class="fa fa-money"></i></span></a></li>
                    </ul>
                </li>

                
                <li class="has-sub ">
                    <a href="#"><span class="menu-text">Factures</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-file"></i></span></a>
                    <ul class="sub">
                    
                        <li ><a href="{{('all')}}"><span class="menu-text">Toutes les factures</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                        <li ><a href="{{('recurring')}}"><span class="menu-text">Récurrent Factures</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                    </ul>
                </li>

                
                <li id=send_sms class="has-sub ">
                    <a href="#"><span class="menu-text">Envoyer SMS</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-comment"></i></span></a>
                    <ul class="sub">

                        <li ><a href="{{('quick-sms')}}"><span class="menu-text">Envoyer SMS par saisie  des numéros</span> <span class="menu-thumb"><i class="fa fa-space-shuttle"></i></span></a></li>

                        <li ><a href="{{('send-sms')}}"><span class="menu-text">Envoyer SMS via contacts</span> <span class="menu-thumb"><i class="fa fa-send"></i></span></a></li>

                        <li ><a href="{{('send-schedule-sms')}}"><span class="menu-text">Envoyer SMS programmé</span> <span class="menu-thumb"><i class="fa fa-send-o"></i></span></a></li>

                        <li id=campaign_reports ><a href="{{('campain-reports')}}"><span class="menu-text">Rapports de campagne</span> <span class="menu-thumb"><i class="fa fa-line-chart"></i></span></a></li>

                    </ul>
                </li>
                
                
                <li class="has-sub ">
                    <a href="#"><span class="menu-text">Envoyer des SMS récurrents</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-clock-o"></i></span></a>
                    <ul class="sub">

                        <li ><a href="{{('recurring-sms')}}"><span class="menu-text">Tout les Envoyer des SMS récurrents</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                        <li ><a href="{{('send-recurring-sms')}}"><span class="menu-text">Envoyer Envoyer des SMS récurrents</span> <span class="menu-thumb"><i class="fa fa-send"></i></span></a></li>

                    </ul>
                </li>
                
                <li ><a href="{{('sms-templates')}}"><span class="menu-text">Modèles SMS</span> <span class="menu-thumb"><i class="fa fa-file-code-o"></i></span></a></li>

                

                <li id=rapports class="has-sub ">
                    <a href="#"><span class="menu-text">Rapports d&#039;envoi</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-list"></i></span></a>
                    <ul class="sub">

                        <li ><a href="{{('history')}}"><span class="menu-text">Historique des SMS / Accusée de réception</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>
                        <li ><a href="{{('campain-reports')}}"><span class="menu-text">Rapports de campagne</span> <span class="menu-thumb"><i class="fa fa-line-chart"></i></span></a></li>
                    </ul>
                </li>

                <li id="sender_id" ><a href="{{('sender-id-management')}}"><span class="menu-text">ID expéditeur / Nom d&#039;envoi</span> <span class="menu-thumb"><i class="fa fa-id-card"></i></span></a></li>


                
                

                <li class="has-sub ">
                    <a href="#"><span class="menu-text">Contacts</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-users"></i></span></a>
                    <ul class="sub">

                        <li ><a href="{{('phone-book')}}"><span class="menu-text">Répertoire de contact</span> <span class="menu-thumb"><i class="fa fa-book"></i></span></a></li>

                        <li ><a href="{{('import-contacts')}}"><span class="menu-text"> Importer vos contacts</span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>

                        <li ><a href="{{('blacklist-contacts')}}"><span class="menu-text"> Liste noire</span> <span class="menu-thumb"><i class="fa fa-remove"></i></span></a></li>

                    </ul>
                </li>
                
                <!---
                                <li ><a href=""{{('')}}"keywords"><span class="menu-text">mots-clés</span> <span class="menu-thumb"><i class="fa fa-keyboard-o"></i></span></a></li>
                
                <li ><a href="{{('')}}"chat-box><span class="menu-text">Chat SMS</span>
                        <span class="menu-thumb"><i class="fa fa-comments"></i></span>
                    </a>
                </li>
                ----->
                
                                <li id=api ><a href="{{('info')}}"><span class="menu-text">API</span> <span class="menu-thumb"><i class="fa fa-plug"></i></span></a></li>
                            

                
                <li id=support class="has-sub ">
                    <a href="#"><span class="menu-text">billets d&#039;assistance</span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-envelope"></i></span></a>
                    <ul class="sub">
                        <li ><a href="{{('all')}}"tickets/><span class="menu-text">Tout les billets d&#039;assistance</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                        <li ><a href="{{('create-new')}}"tickets/><span class="menu-text">Créer un nouveau billet</span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>

                    </ul>
                </li>


                
                <li ><a href="https://app.techsoft-web-agency.com/logout"><span class="menu-text">Se déconnecter</span> <span class="menu-thumb"><i class="fa fa-power-off"></i></span></a></li>

            </ul>
        </div>
    </nav>

    <main id="wrapper" class="wrapper pb-5">

        <div class="top-bar clearfix">
            <ul class="top-info-bar">
                <li class="dropdown bar-notification ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-cart"></i></a>
                    <ul class="dropdown-menu arrow" role="menu">
                        <li class="title">5 dernières Factures impayées</li>
                                            <li class="footer"><a href="{{('all')}}">Voir toutes les factures</a></li>
                    </ul>
                </li>

                <li class="dropdown bar-notification ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-envelope"></i></a>
                    <ul class="dropdown-menu arrow message-dropdown" role="menu">
                        <li class="title">5 derniers billets en attente</li>
                        
                        <li class="footer"><a href="{{('all')}}"tickets/>Voir tous les billets</a></li>
                    </ul>
                </li>


                <li id=solde class="text-uppercase hidden-solde">  <span class="text-complete "> Solde SMS  <span> : <span class="price" data-price="0.09">0.09 </span> 
                    <select class="devise price-bar">
                        <option data-curr="EUR" value="EUR_EUR"> EUR </option>
                        <option data-curr="XAF"  value="EUR_XAF"> FCFA</option>
                        <option data-curr="USD" value="EUR_USD"> USD </option>
                    </select> 
                </li>

            </ul>



            <div class="navbar-right">
                <div class="clearfix">
                    <div class="dropdown user-profile pull-right">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                            <span class="user-info">CROFT CHRIS</span>

                                                        <img class="user-image" src="{{__front}}client_pic/profile.jpg" alt="CROFT CHRIS">
                            
                        </a>
                        <ul class=" dropdown-menu arrow right-arrow" role="menu">
                            <li><a href="{{('edit-profile')}}"><i class="fa fa-edit"></i> Mise à jour du profil</a></li>
                            <li><a href="{{('change-password')}}"><i class="fa fa-lock"></i> Changer le mot de passe</a></li>
                            <li class="bg-dark">
                                <a href="https://app.techsoft-web-agency.com/logout" class="clearfix">
                                    <span class="pull-left">Se déconnecter</span>
                                    <span class="pull-right"><i class="fa fa-power-off"></i></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>

            <div id=langue class="language-var user-info">
                
                <a href="#" class="dropdown-toggle text-success  m-r-30" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="{{__front}}country_flag/drapeau-francais.png" alt="Language">
                </a>
                <ul class="dropdown-menu lang-dropdown arrow right-arrow" role="menu">
                                        <li>
                            <a href="{{('language/change/1')}}" >
                                <img class="user-thumb" src="{{__front}}country_flag/us.png" alt="user thumb">
                                <div class="user-name">English</div>
                            </a>
                        </li>
                                        <li>
                            <a href="{{('language/change/3')}}"  class="text-complete" >
                                <img class="user-thumb" src="{{__front}}country_flag/drapeau-francais.png" alt="user thumb">
                                <div class="user-name">French</div>
                            </a>
                        </li>
                                </ul>

                <span id=solde class="text-complete text-uppercase">Solde SMS : <span class="price" data-price="0.09">0.09 </span> </span>
                <select  class="devise price-bar">
                    <option data-curr="EUR" value="EUR_EUR"> EUR </option>
                    <option data-curr="XAF"  value="EUR_XAF"> FCFA</option>
                    <option data-curr="USD" value="EUR_USD"> USD </option>
                </select> 
                
            </div>

        </div>

        

        
        <section class="wrapper-bottom-sec">
        @yield('container')		
        </section>


        

        <input type="hidden" id="_url" value="https://app.techsoft-web-agency.com">
        <input type="hidden" id="_unsubscribe_message" value="Evoyez STOP pour vous désinscrire">
    </main>


        <script src="{{__front}}libs/jquery-1.10.2.min.js"></script>

        <script src="{{__front}}libs/jquery.slimscroll.min.js"></script>

        <script src="{{__front}}libs/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{__front}}libs/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>

        <script src="{{__front}}libs/alertify/js/alertify.js"></script>

        <script src="{{__front}}libs/bootstrap-select/js/bootstrap-select.min.js"></script>

        <script src="{{__front}}libs/bootstrap-select/js/i18n/fr.js"></script>

        <script src="{{__front}}js/scripts.js"></script>


        <script src="{{__front}}libs/intro/intro.min.js"></script>

        <script src="{{__front}}libs/intl-tel-input/js/utils.js"></script>

        <script src="{{__front}}js/tarifs.js"></script>




		<!-- Custom -->
		<div id="footer" class="visible-xs-block">
			<!-- <div class="d-flex">
					<div class="dropup">
						<a class="btn btn-primary" type="button" onclick="showTawk()">
							<span class="fa fa-question-circle d-block"></span>
							<span class="d-block"> Aide? </span>
						</a>
					</div>
					<div class="dropup">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-language d-block"></span>
							<span class="d-block"> Langue </span>
						</button>
						<ul class="dropdown-menu drop-up" role="menu">
															<li>
									<a href="{{('language/change/1')}}">
										English
									</a>
								</li>
								<li class="divider"></li>
															<li>
									<a href="{{('language/change/3')}}">
										French
									</a>
								</li>
								<li class="divider"></li>
													</ul>
					</div>
					<div class="dropup">
						<a href=""{{('')}}"buy-unit" type="button" class="btn btn-primary">
							</span><span class="fa fa-credit-card d-block"></span>
							<span class="d-block"> Acheter </span>
						</a>
					</div>
					<div class="dropup ">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-comment d-block"></span>
							<span class="d-block"> Envoyer SMS </span>
						</button>
						<ul class="dropdown-menu drop-up" role="menu">
							<li><a href=""{{('')}}"quick-sms"> Envoyer SMS par saisie  des numéros </a></li>
							<li class="divider"></li>
							<li><a href=""{{('')}}"send-sms-file"> Envoyer un SMS à partir d&#039;un fichier </a></li>
							<li class="divider"></li>
							<li><a href=""{{('')}}"send-sms"> Envoyer SMS via contacts </a></li>
							<li class="divider"></li>
							<li><a href="#"> Browse top menu for more options </a></li>
						</ul>
					</div>
			</div> -->
		</div>
 
		<!-- Modal -->
            <div class="modal fade" id="welcome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <button type="button" class="close welcome_close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> Vous avez une minute SVP? </h4>
                        </div>
						<div class="modal-body">
									  <p class="">  <span id="text-success">   </span></p>
										<p class=""> 
											Bonjour, vous avez remarqué un changement au niveau de votre solde?
										</p>
								
										<p class="">
											<i>
												
													Pour vous permettre d'envoyer des sms <strong> vers plus de 200 pays dans le monde</strong>, la devise par defaut sur la plateforme passe à l'euro.
													Tout les tarifs ainsi que votre solde seront donc en euro par defaut. 
												
											</i>
										</p>
										<p class=""> Nous avons ajouté quelques options de conversion pour vous permettre de voir les prix en FCFA ou en Dollars. </p>
								
										<p class="alert alert-success"> 
											<strong> Qu'est ce que cela change pour vous ?</strong> RIEN de grave.
											Mais la bonne nouvelle c'est que vous pouvez à partir de votre compte envoyer désormais des sms vers pratiquement TOUT les pays du monde.
											Chaque pays a ses tarifs. <a href="{{('coverage')}}" target="blank"> Voir les tarifs ici </a>
											
										</p>
										<p class="alert alert-warning"> 
											<strong> Qu'en est-il de votre solde?</strong>  Si vous êtes au cameroun, votre solde etait en FCFA. Ce montant a été converti en euro. Vous disposez de la même quantité de sms mais maintenant en euro. 
											Si vous pensez qu'il y'a une erreur où si vous avez des questions, merci de nous contacter sur le bouton de tchat vert, sur Aide ou en créant un ticket.
										</p>
						</div>
                    </div>
                </div>
            </div>
			
        <!-- Modal -->
            <div class="modal fade" id="feebackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> Excusez-nous s&#039;il vous plaît </h4>
                        </div>
						
							<div class="modal-body">
								<div id="feedback">
									  <p class="">  Nous avons rencontré quelques soucis avec votre fichier. Nous n&#039;avons pas réussi à determiner le pays des numeros suivants 
									  (<span id="badCount" class="badge"></span> numéros sur <span id="fileCount" class="badge"></span>)</p>
										<div id="badNumbers" class="alert alert-danger h-50"> loading....</div>
										<p>
											<ul>
												<li>Souhaitez-vous continuer et envoyer uniquement aux numéros valides? Si oui cliquez sur le button vert</li>
												<li> Souhaitez-vous télécharger le fichier des mauvais numéros? <a class="btn btn-xs btn-danger download_bad"> <i class="fa fa-download"></i> Download </a> </li>
												<li> Voir comment corriger les erreurs liées aux fichiers et aux numéros en suivant le lien ci-dessous. </li>
											</ul>
										</p>
								</div>
								
								<div id="phonecolumnerror" class="sr-only">
									<p class="alert alert-danger"> Désolé, nous n&#039;avons pas pu identifier quelle colonne de votre fichier contient des numéros de téléphone. Trouvez de l&#039;aide en suivant le lien ci-dessous
									</p>
								</div>
								
								<div class="invalid_contact sr-only">
									<p class="alert alert-danger"> Désolé, tous les numéros de cette liste ne sont pas valides. Vous trouverez de l&#039;aide dans le lien ci-dessous.
									</p>
								</div>
								
								<a href="https://techsoft-sms.com/faq" target="blank"> Corriger les erreurs liées aux fichiers et aux codes de pays <span class="sr-only"> causes (fichier avec entete ou sans, choix de la colone contenant le fichier, selction du code du pays)</span>
								</a>
							</div>
							
                            <div class="modal-footer">
                                <button type="button" id="continu_sending" class="btn btn-success">  Envoyer à aux numéros valides </button>
                                <button type="submit" class="btn btn-primary"  data-dismiss="modal"> Annuler et réparer le dossier </button>
                            </div>
							
                    </div>
                </div>
            </div>
			
		<!-- Custum -->

        <style>
            #aide{
                position: fixed;
                top: 40%;
                right: 0;
                background: #2a2e36;
                color: white;
                z-index: 101;
                border-radius: 5px 0 0 5px;
                padding: 10px;
                
                webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                -webkit-transform-origin: 77% 9px;
                transform-origin: 77% 17px;
            }
            .aide_texte{
                transform: rotate(90deg) !important;
                transform-origin: 64% 54px !important;
            }
            .bg_for_dark{
                background-color : rgba(255, 255, 255, 0.61);
                border: 1px solid #709cc4;
            }
            .left-nav-bar {
                background-color: #091244  !important;
            }
            .slimScrollDiv .fa{
                color: #5bcdf9;
            }
            #footer {
                position: fixed;
                bottom:0px;
                
                z-index:101;
                width: 100% !important;
                background-color: #7E57C2;
            }
            #footer .dropup{
                flex: 1;
            }
            .drop-up{
                background-color: #091244;
            }
            .drop-up li:hover {
                background-color: white;
            }
            .d-flex{
                display:flex;
            }
            .d-block {
                display: block;
            }
            .text-white{
                color: white;
            }
            .pb-5{
                padding-bottom: 25px;
            }
            .pt-5{
                padding-top: 20px;
            }
            #tawkchat-minified-box, #tawkchat-status-text-container {
                display: none;
            }
            .top-bar > .navbar-right {
                padding-right: 15px !important;
            }
            .d-none, .hidden-solde{
                display:none ;
            }

            @media  screen and (max-width: 500px){
                .hidden-solde{
                    display: inline-block;
                    margin-right: 5px;
                }
            }

            .icon_badge {
            position:relative;
            }
            .icon_badge[data-badge]:after {
            content:attr(data-badge);
            position:absolute;

            top: -13px;
            right: -32px;
            font-size: .8em;
            text-align: center;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
            z-index: 2;
            -webkit-border-radius: 10em;
            border-radius: 10em;
            padding: 1px 7px;
            background-color: #2f9432;
            color: #fff;
            left: auto;
            }
                
        </style>

        <script>

            // Original scripts
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });

            var _url=$('#_url').val();

            $('#bar-setting').click(function(e){
                e.preventDefault();
                $.post(_url+'/user/menu-open-status');
            });

            var width = $(window).width();
            if (width <= 768 ) {
            $("body").removeClass('left-bar-open')
            }
            
            //end original scripts
            
            /*
            var key = 'saw',
            modal = localStorage.getItem(key);
            if (!modal) {
                $('#welcome').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
            }
            */
        
            // $('#welcome').on('shown.bs.modal', function () {
            //     localStorage.setItem(key, true);
            // 	console.log("shon")
            // })

            $('.welcome_close').click(function (e) {
                localStorage.setItem(key, true);
            })
            
        </script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJ7WSCW"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5e2169c1daaca76c6fce79c8/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();

            var width = $(window).width();
            Tawk_API = Tawk_API || {};
            Tawk_API.visitor = {
                name  : 'CROFT CHRIS',
                email : 'kengicroft@gmail.com'
            };

            if(width <= 768)
            {
                Tawk_API.onLoad = function(){
                    Tawk_API.hideWidget();
                    hideTawk();
                    $('#tawk').click(function (e) {
                        e.preventDefault();
                    });
                };
                
                Tawk_API.onChatMinimized = function(){
                    hideTawk();
                };
            }
            else
            {
                Tawk_API.onLoad = function(){
                    $('#tawk').click(function (e) {
                        e.preventDefault();
                    });
                };
            }

            function showTawk(){	
                Tawk_API.showWidget();
                Tawk_API.maximize();
            }
            function hideTawk(){	
                setTimeout( function(){
                    Tawk_API.hideWidget();
                    }, 500 ); 
                console.log('hidden');
            }


            
        </script>
        <!--End of Tawk.to Script--> 


</body>

</html>
