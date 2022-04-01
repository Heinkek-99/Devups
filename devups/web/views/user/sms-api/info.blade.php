@extends('home.sms')

@section('container')

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">Informations sur l&#039;API</h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">
                <div class="col-lg-5">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Informations sur l&#039;API</h3>
                        </div>
                        <div class="panel-body">
                            <form class="" role="form" method="post" action="https://app.techsoft-web-agency.com/user/sms-api/update-info">
                                <input type="hidden" name="_token" value="Noi8fbzKJPUo9D2TlUHaDU12qYjFshi2aFVBtaxf">
                                <div class="form-group">
                                    <label>Clé API SMS</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="api-key" name="api_key" value="S3JvbmZ5OkhlaW5rZWstOTk=">
                                        <span class="input-group-addon btn btn-success getNewPass"><i class="fa fa-refresh"></i> Générer une nouvelle clé</span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-save"></i> Mise à jour </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Détails de l&#039;API</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label>Clé API SMS:</label>
                                <p class="text-sm api_key_break">S3JvbmZ5OkhlaW5rZWstOTk=</p>
                            </div>
							<div class="card">
							  <ul class="list-group list-group-flush">
								<li class="list-group-item bg-success"> Nouveautés </li>
								<li class="list-group-item">
									<label> Réponse obtenue après l&#039;envoi réussi d&#039;un SMS depuis l&#039;API </label>
									<p class="text-sm api_url_break">
										{  <br>
											&nbsp;&nbsp; "code":"ok",  <br>
											&nbsp;&nbsp; "message":"Successfully Send",  <br>
											&nbsp;&nbsp; "balance":8364,  <br>
											&nbsp;&nbsp; "user":"David eson",  <br>
											&nbsp;&nbsp; "msgId":"5f21331445f37",  <br>
											&nbsp;&nbsp; "phoneNumber":"237656321133"  <br>
										} 
										<br><label>  Bulk send </label> <br>
										0 : &nbsp;&nbsp;	{  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "code":"ok",  <br>
												&nbsp;&nbsp; &nbsp;&nbsp; "message":"Successfully Send",  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "balance":8364,  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "user":"David eson",  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "msgId":"5f21331445f37",  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "phoneNumber":"237656321133"  <br>
											} <br>
										1 : &nbsp;&nbsp;	{  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "code":"ok",  <br>
												&nbsp;&nbsp; &nbsp;&nbsp; "message":"Successfully Send",  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "balance":8364,  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "user":"David eson",  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "msgId":"5f21331445f37",  <br>
												&nbsp;&nbsp;&nbsp;&nbsp; "phoneNumber":"237656321133"  <br>
											} 
										
									</p>
									<p class="text-sm api_url_break"> Les nouveautés sont les paramètres &quot;msgId&quot; et &quot;phoneNumber&quot; qui vont servir pour demander le dlr (accusé de reception). </p>
								</li>
								<li class="list-group-item">
									<label>  DLR API : Accusé de reception  </label>
									<p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=sms-status&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;sms_uid=msgId</p>
									<p class="text-sm api_url_break"> <label> response code </label> <br>
									{  <br>
											&nbsp;&nbsp; "status":"DELIVRE",  <br>
											&nbsp;&nbsp; "msgId":"5f2058f9d7b7f"  <br>
									} 
									</p>
								</li>
								<li class="list-group-item">  <a href="https://techsoft-sms.com/api" target="blank">  Complete API Documentatiton </a>  </li>
								<li class="list-group-item">  <a href="/Techsoft-sms-api-master.zip" class="btn btn-danger download_bad"> <i class="fa fa-download"></i> Download API SDK </a>  Techsoft-sms-api-master </li>
							  </ul>
							</div>
                            <div class="form-group">
                                <label>URL DE L&#039;API Pour SMS texte/simple:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=send-sms&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;to=PhoneNumber&amp;from=SenderID&amp;sms=YourMessage</p>
                            </div>

                            <div class="form-group">
                                <label>URL DE L&#039;API Pour les SMS Unicode:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=send-sms&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;to=PhoneNumber&amp;from=SenderID&amp;sms=YourMessage&amp;unicode=1</p>
                            </div>

                            <div class="form-group">
                                <label>URL DE L&#039;API Pour les SMS vocaux:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=send-sms&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;to=PhoneNumber&amp;from=SenderID&amp;sms=YourMessage&amp;voice=1</p>
                            </div>

                            <div class="form-group">
                                <label>URL DE L&#039;API Pour les MMS:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=send-sms&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;to=PhoneNumber&amp;from=SenderID&amp;sms=YourMessage&amp;mms=1&amp;media_url=YourMediaUrl</p>
                            </div>


                            <div class="form-group">
                                <label>URL DE L&#039;API Pour les MMS programmés:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=send-sms&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;to=PhoneNumber&amp;from=SenderID&amp;sms=YourMessage&amp;schedule=YourScheduleTime</p>
                            </div>

                            <div class="form-group">
                                <label>Vérification du solde:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/sms/api?action=check-balance&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;response=json</p>
                            </div>

                            <div class="form-group">
                                <label>Contact Insert API:</label>
                                <p class="text-sm api_url_break">https://app.techsoft-web-agency.com/contacts/api?action=subscribe-us&amp;api_key=S3JvbmZ5OkhlaW5rZWstOTk=&amp;phone_book=ContactListName&amp;phone_number=PhoneNumber&amp;first_name=FirstName_optional&amp;last_name=LastName_optional&amp;email=EmailAddress_optional&amp;company=Company_optional&amp;user_name=UserName_optional</p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


@endsection