@extends('home.sms')

@section('container')
     
    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">Toutes les factures</h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Toutes les factures</h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 10%;">#</th>
                                    <th style="width: 10%;">Montant</th>
                                    <th style="width: 15%;">Date de facturation</th>
                                    <th style="width: 15%;">Échéance</th>
                                    <th style="width: 10%;">Statut</th>
                                    <th style="width: 15%;">Type</th>
                                    <th style="width: 30%;">Gérer</th>
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