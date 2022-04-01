@extends('home.sms')

@section('container')

    <section class="wrapper-bottom-sec">
        <div class="p-30 clearfix">
            <h2 class="page-title inline-block"> Prix personnalisés </h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        
                        Vous trouverez ici les tarifs spéciaux pour les pays éligibles. 
                    </div>
                    <div class="panel">
                        <div class="panel-body  pt-5">
                            <table class="table data-table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 10%;">SL#</th>
                                    <th style="width: 10%;">Pays</th>
                                    <th style="width: 10%;">opérateur</th>
                                    <th style="width: 10%;">SMS (<span class="currency">EUR</span>)</th>
                                    <th style="width: 10%;">Voix (<span class="currency">EUR</span>)</th>
                                    <th style="width: 10%;">MMS (<span class="currency">EUR</span>)</th>
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