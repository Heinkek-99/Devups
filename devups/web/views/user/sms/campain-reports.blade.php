@extends('home.sms')

@section('container')
    
    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title inline-block">Rapports de campagne</h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Critères de recherche</h3>
                        </div>
                        <div class="panel-body">
                            <form class="" role="form" method="post" id="search-form">

                                <div class="row">

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="camp_type">Type de campagne</label>
                                            <select class="selectpicker form-control" name="camp_type" id="camp_type">
                                                <option value="0">Tout les</option>
                                                <option value="regular">Régulier</option>
                                                <option value="scheduled">Programmé</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="campaign_id">Identifiant de la campagne</label>
                                            <input type="text" id="campaign_id" class="form-control" name="campaign_id">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="from">De</label>
                                            <input type="text" id="sender" class="form-control" name="sender">
                                        </div>
                                    </div>


                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="status">Statut</label>
                                            <input type="text" id="status" class="form-control" name="status">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="date_from">Date De</label>
                                            <input type="text" id="date_from" class="form-control dateTimePicker" name="date_from">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="date_to">Date À</label>
                                            <input type="text" id="date_to" class="form-control dateTimePicker" name="date_to">
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" name="_token" value="Noi8fbzKJPUo9D2TlUHaDU12qYjFshi2aFVBtaxf">
                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-search"></i> Rechercher</button>

                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <button id="deleteTriger" class="btn btn-danger btn-xs pull-right m-r-20"><i class="fa fa-trash"></i> Supprimer en bloc</button>
                            <h3 class="panel-title">Rapports de campagne</h3>
                        </div>
                        <div class="panel-body">


                            <table class="table data-table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 5%">

                                        <div class="coder-checkbox">
                                            <input type="checkbox"  id="bulkDelete"  />
                                            <span class="co-check-ui"></span>
                                        </div>

                                    </th>
                                    <th style="width: 20%;">SL</th>
                                    <th style="width: 20%;">De</th>
                                    <th style="width: 15%;">Destinataires</th>
                                    <th style="width: 10%;">Statut</th>
                                    <th style="width: 30%;">Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection