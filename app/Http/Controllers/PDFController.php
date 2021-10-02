<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;
use Illuminate\Support\Facades\DB;
use App;
use App\Models\LGoffice;
use PDF;

class PDFController extends Controller
{
    public function index(){
        return view('lgri');
    }

    public function pdf(Request $request){
        $this->validate($request, [
            'to' => 'required',
            'resid' => 'required',
            'requesting' => 'required',
            'slp' => 'required'
        ]);
        $resid = $request->input('resid');
        $to = $request->input('to');
        $slp = $request->input('slp');
        $requesting = $request->input('requesting');
        $details = Resident::where('resid', '=', $resid)->get();
        // $LocalGovtID = DB::table('residents')->where('resid', $resid)->value('LocalGovtID');
        // $LocalGovt = LGoffice::where('id', '=', $LocalGovtID)->get();
        // $LocalGovt = DB::table('lgdetails')->where('LocalGovtID', $LocalGovtID)->get();
        // $details = Resident::where('resid', '=', $resid);
        // return $LocalGovt;
        return view('lgri2')->with('details', $details)->with('to', $to)->with('requesting', $requesting)->with('slp', $slp);
    }
}
