@extends('home.sms')

@section('container')

      
    <section class="wrapper-bottom-sec">
        <div class="p-30 clearfix">
            <h2 class="page-title inline-block">Tout les ID expéditeur / Nom d&#039;envoi du SMS</h2>
            <button class="btn btn-danger btn-sm ml-5" data-toggle="modal" data-target="#request-new-sender"><i class="fa fa-plus"></i> Demander un nouvel ID d&#039;envoi</button>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tout les ID expéditeur / Nom d&#039;envoi du SMS</h3>
							<p class="mt-4 alert alert-info">
								Afin de lutter contre la fraude par SMS, nous validons manuellement les ID d&#039;expéditeur. Veuillez attendre que le statut passe à &quot;actif&quot; pour pouvoir l&#039;utiliser dans vos campagnes. 
							</p>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 20%;">SL#</th>
                                    <th style="width: 60%;">ID expéditeur / Nom d&#039;envoi du SMS</th>
                                    <th style="width: 20%;">Statut</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                    <tr>
                                        <td data-label="SL">1</td>
                                        <td data-label="Sender ID"><p>TECHSOF SMS</p></td>

                                                                                    <td data-label="Status"><p class="label label-success">Actif</p></td>
                                        
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="request-new-sender" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Demander un nouvel ID d&#039;envoi</h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="https://app.techsoft-web-agency.com/user/sms/post-sender-id">

                            <div class="modal-body">
                                <div class="form-group">
                                    <label>ID expéditeur / Nom d&#039;envoi du SMS</label>
                                    <input type="text" class="form-control" required="" name="sender_id" maxlength="11">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" name="_token" value="Noi8fbzKJPUo9D2TlUHaDU12qYjFshi2aFVBtaxf">
                                <button type="button" class="btn btn-default" data-dismiss="modal"> Fermer </button>
                                <button type="submit" class="btn btn-primary"> Envoyer </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection