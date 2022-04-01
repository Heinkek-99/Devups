@extends('home.sms')

@section('container')

    <section class="wrapper-bottom-sec">
        <div class="p-30 clearfix">
            <h2 class="page-title inline-block">Modèles SMS</h2>

            <a href="https://app.techsoft-web-agency.com/user/sms/create-sms-template" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Créer un modèle</a>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Modèles SMS</h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 10%;">SL#</th>
                                    <th style="width: 45%;">Nom du modèle</th>
                                    <th style="width: 10%;">Globale</th>
                                    <th style="width: 10%;">Statut</th>
                                    <th style="width: 25%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


@endsection