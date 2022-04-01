@extends('home.sms')

@section('container')

    <div class="p-30"></div>
        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10">         
        </div>

        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"> Bienvenue! Comment ça fonctionne ? </h3>
                        </div>
                        <div class="panel-body">
                            Bienvenue sur la meilleure plateforme d&#039;envoi de sms

                            <a href="#" class="tuto" > Démarrez une visite guidé </a> ou consultez les reponses aux 
                            <a href="{{route('faq')}}"  class="" >  questions fréquentes  </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">  Envoyer SMS </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('quick-sms')}}" type="button" class="btn btn-success" >  Envoyer un sms rapide </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"> Personnaliser le nom d&#039;envoi du SMS  </h3>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('sender-id-management')}}" type="button" class="btn btn-success" >  Demander un nouvel ID d&#039;envoi </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Historique des factures</h3>
                        </div>
                        <div class="panel-body">
                            <canvas id="invoiceChart" width="400" height="200">
                            <script>
                                document.addEventListener("DOMContentLoaded", function(event) {
                                    (function() {
                                        "use strict";
                                        var ctx = document.getElementById("invoiceChart");
                                        window.invoiceChart = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                                labels: ["Unpaid","Paid","Cancelled","Partially Paid"],
                                                datasets: [{"backgroundColor":["#F0AD4E","#30DDBC","#D9534F","#5BC0DE"],"hoverBackgroundColor":["#F0AD4E","#30DDBC","#D9534F","#5BC0DE"],"data":[0,0,0,0]}]
                                            },
                                                                options: {"legend":{"display":false}}
                                                        });
                                    })();
                                });
                            </script>
                            </canvas>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center">Historique des billets</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <canvas id="supportTicketChart" width="400" height="200">
                            <script>
                                document.addEventListener("DOMContentLoaded", function(event) {
                                    (function() {
                                        "use strict";
                                        var ctx = document.getElementById("supportTicketChart");
                                        window.supportTicketChart = new Chart(ctx, {
                                            type: 'doughnut',
                                            data: {
                                                labels: ["Pending","Answered","Customer Reply","Closed"],
                                                datasets: [{"backgroundColor":["#d9534f","#30DDBC","#5bc0de","#7E57C2"],"hoverBackgroundColor":["#d9534f","#30DDBC","#5bc0de","#7E57C2"],"data":[0,0,0,0]}]
                                            },
                                                                options: {"legend":{"display":false}}
                                                        });
                                    })();
                                });
                            </script>
                            </canvas>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center">Historique des SMS Envoyés</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <canvas id="smsStatusChat" width="400" height="200">
                            <script>
                                document.addEventListener("DOMContentLoaded", function(event) {
                                    (function() {
                                        "use strict";
                                        var ctx = document.getElementById("smsStatusChat");
                                        window.smsStatusChat = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                                labels: ["Sent","Failed"],
                                                datasets: [{"backgroundColor":["#5BC0DE","#F95F5B"],"hoverBackgroundColor":["#5BC0DE","#F95F5B"],"data":[0,0]}]
                                            },
                                                                options: {"legend":{"display":false}}
                                                        });
                                    })();
                                });
                            </script>
                            </canvas>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                    </div>
                                    <div class="p-15 p-t-none p-b-none">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center">Historique des SMS par date</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <canvas id="smsHistoryChart" width="200" height="50">
                            <script>
                                document.addEventListener("DOMContentLoaded", function(event) {
                                    (function() {
                                        "use strict";
                                        var ctx = document.getElementById("smsHistoryChart");
                                        window.smsHistoryChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: ["30 Mar {{date("Y")}}","31 Mar {{date("Y")}}","01 Avr {{date("Y")}}","02 Avr {{date("Y")}}","03 Avr {{date("Y")}}","04 Avr {{date("Y")}}","05 AVr {{date("Y")}}","06 Avr {{date("Y")}}","07 Avr {{date("Y")}}","08 Avr {{date("Y")}}"],
                                                datasets: [{"label":"Outbound","backgroundColor":"rgba(0, 51, 102, 0.5)","borderColor":"rgba(0, 51, 102, 0.8)","pointBorderColor":"rgba(0, 51, 102, 0.8)","pointBackgroundColor":"rgba(0, 51, 102, 0.8)","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgba(220,220,220,1)","data":[0,0,0,0,0,0,0,0,0,0]},{"label":"Inbound","backgroundColor":"rgba(233, 114, 76, 0.5)","borderColor":"rgba(233, 114, 76, 0.8)","pointBorderColor":"rgba(233, 114, 76, 0.8)","pointBackgroundColor":"rgba(233, 114, 76, 0.8)","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgba(220,220,220,1)","data":[0,0,0,0,0,0,0,0,0,0]}]
                                            },
                                                                options: {"legend":{"display":false}}
                                                        });
                                    })();
                                });
                            </script>
                            </canvas>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="p-15 p-t-none p-b-none">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">5 dernières Factures</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 45px;">SL</th>
                                            <th style="width: 20px;">Montant</th>
                                            <th style="width: 20px;">Échéance</th>
                                            <th style="width: 15px;">Statut</th>
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

                <div class="col-lg-6 p-none">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">5 derniers billets d&#039;assistance</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 30%;">SL</th>
                                            <th style="width: 50%;">Sujet</th>
                                            <th style="width: 20%;">Date</th>
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

            </div>
        </div>
   
@endsection