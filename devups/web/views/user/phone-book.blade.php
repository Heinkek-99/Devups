@extends('home.sms')

@section('container')

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">Répertoire de contact</h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
                        <div class="row">

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ajouter une nouvelle liste</h3>
                        </div>
                        <div class="panel-body">
                            <form class="" role="form" method="post" action="https://app.techsoft-web-agency.com/user/post-phone-book">

                                <div class="form-group">
                                    <label>Nom de la liste</label>
                                    <input type="text" class="form-control" name="list_name">
                                </div>

                                <input type="hidden" name="_token" value="Noi8fbzKJPUo9D2TlUHaDU12qYjFshi2aFVBtaxf">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Ajouter </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Répertoire de contact</h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover">
                                <thead>
                                <tr>
                                    <th style="width: 10%">SL</th>
                                    <th style="width: 35%">Nom de la liste</th>
                                    <th style="width: 55%">Action</th>
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