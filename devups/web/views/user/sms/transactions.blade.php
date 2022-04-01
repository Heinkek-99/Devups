@extends('home.sms')

@section('container')

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">Mes transactions</h2>
        </div>

        <div class="p-30 p-t-none p-b-none">
                </div>
        <div class="p-30 p-t-none p-b-none">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Mes transactions</h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover" id="">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Prix unitaire</th>
                                        <th>Quantité</th>
                                        <th>Raison</th>
                                        <th>Référence</th>
                                        <th>Frais de transaction</th>
                                        <th>Statut</th>
                                        <th>Description</th>
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