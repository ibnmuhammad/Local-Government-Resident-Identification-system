<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

        <title>LGRI Online Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Boostrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-sm">
            <div class="row" style="margin-top: 30px">
                <div class="col px-md-5" style="margin-top: 15px">
                    Karibu katika mfumo wa <b>SERIKALI ZA MITAA(LGRI) </b> <br>
                    Jaza taarifa zako kwa usahihi
                </div>
                <div class="col px-md-5 text-right" style="margin-right: 30px">
                    <img src="{{ asset('images/lgri.jpg') }}" style="width: 100px; height: 100px;">     
                </div>
            </div>
            <div class="jumbotron">
                <form method="POST" action="{{ route('pdf.generate') }}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Namba ya NIDA</label>
                      <input type="text" name="resid" pattern="[0-9]{8}-[0-9]{5}-[0-9]{5}-[0-9]{2}" class="form-control" id="exampleFormControlInput1" placeholder="mf; 19700101-00001-00001-00">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Barua kwenda kwa</label>
                        <input type="text" name="to" class="form-control" id="exampleFormControlInput1" placeholder="mf; NIDA/RITA/NSSF etc.">
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Sanduku la Posta</label>
                        <input type="text" name="slp" class="form-control" id="exampleFormControlInput1" placeholder="mf; SLP 20202">
                      </div>
                    {{-- <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div> --}}
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Kitu unachoomba</label>
                      <textarea class="form-control" name="requesting" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group row float-left">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Tuma') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
