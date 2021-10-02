<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no"> --}}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <title>LGRI Online Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Boostrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- The javascript file for printing -->
        <script src="{{ asset('js/print.js') }}"></script>

        <script src="{{ asset('dist/html2pdf.bundle.min.js') }}"></script>


    </head>
<body>
    <div class="container-sm">
        <div class="card">
            @if($details)
            @foreach ($details as $detail)
            <div class="card-header">
                <div class="col-sm-3">
                    <button onclick="generatePDF()" class="btn btn-primary">Pakua Barua</button>
                </div>
            </div>
            <div class="card-body" id="print">
                <div class="card-title text-center">
                    <h1 style="font-weight: bold; text-transform: uppercase">HALMASHAURI YA MANISPAA YA {{ $detail->lgoffice->district }}</h1>
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="ml-auto">
                            Anuani : {{ $detail->lgoffice->slp }} <br>
                            Simu : {{ $detail->lgoffice->phonenumber }}
                        </div>
                        <div class="mx-auto">
                            <img src="{{ asset('images/lgri.jpg') }}" style="width: 100px; height: 100px;">
                        </div>
                        <div class="mr-auto">
                            Afisa Mtendaji wa Mtaa <br>
                            Mtaa wa {{ $detail->lgoffice->street }} <br>
                            Kata ya {{ $detail->lgoffice->ward }} <br>
                            Manispaa ya {{ $detail->lgoffice->district }} <br>
                            <p id="date"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto text-left">
                            Kwenda: <br>
                            <b>{{ $to }}</b> <br>
                            <b>{{ $slp }}</b>
                        </div>
                        <div class="mx-auto">
                        </div>
                        <div class="mx-auto">
                        </div>
                        <div class="mr-auto">
                            <div style="opacity: 0.5">
                                <label>picha ya mwombaji</label>
                            </div>
                            <img src="/storage/images/{{ $detail->pic }}" style="width: 100px; height: 100px;" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto text-center">
                            <p style="font-weight: bold; text-decoration: underline"> YAH: UTAMBULISHO WA MKAZI WA MTAA </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <p style="text-transform: uppercase">
                                BWANA/BIBI <b>{{ $detail->firstname }} {{ $detail->middlename }} {{ $detail->lastname }}</b> AMEZALIWA TAREHE <b>{{ $detail->dob }}</b><br>
                                MKAZI WA MTAA WA <b>{{ $detail->lgoffice->street }}</b> MWENYEKITI WA MTAA WAKE NI <b>{{ $detail->lgoffice->leader }}</b> <br>
                                BALOZI WA ENEO LAKE NI <b>{{ $detail->balozi }}</b> ANAISHI NYUMBA NAMBA <b>{{ $detail->house->HouseNumber }}</b>  <br>
                                MWENYE NYUMBA NI <b>{{ $detail->house->owner }}</b> KUTOKEA MKOA WA <b>{{ $detail->lgoffice->region}}</b> <br>
                                WILAYA YA <b>{{ $detail->lgoffice->district }}</b> NA KATA YA <b>{{ $detail->lgoffice->ward }}</b> <br>
                                NAMBA YA SIMU NI <b>{{ $detail->phonenumber }}</b> HALI YAKE YA NDOA NI <b>{{ $detail->marital }}</b> <br>
                                KAZI YAKE NI <b>{{ $detail->work }}</b> <br>
                                <br>
                                <b>ANAOMBA ASAIDIWE:</b> <br>
                                {{ $requesting }}<br> <br> 
                                Ni Matumaini yetu atahudumiwa vyema <br>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            WAKO KATIKA UJENZI WA TAIFA
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto" style="text-transform: uppercase">
                            <b>{{ $detail->lgoffice->AfisaMtendaji }}</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            AFISA MTENDAJI WA MTAA
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto" style="text-transform: uppercase">
                            MTAA WA <b>{{ $detail->lgoffice->street }}</b>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
                <div class="jumbotron">
                    Hauwezi kupata huduma hii, Kwa sababu haujasajiliwa katika mtaa unaoishi
                </div>
            @endif
        </div>
    </div>
</body>
    <script>
        function generatePDF(){
        const element = document.getElementById("print");

        html2pdf()
        .from(element)
        .save();
        }

        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = d + "/" + m + "/" + + y;
    </script>
</html>
