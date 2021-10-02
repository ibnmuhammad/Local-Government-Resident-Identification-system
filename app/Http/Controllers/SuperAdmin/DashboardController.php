<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Districtadmin;
use Illuminate\Support\Facades\DB;
use App\Models\LGoffice;
use App\Models\Resident;
use App\Models\House;
use App\Models\TenCellLeader;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }

    public function index(){
        $localgovt = DB::table('lgdetails')->get();
        $local = $localgovt->count();
        $residents = DB::table('residents')->get();
        $wakazi = $residents->count();
        $houses = DB::table('houses')->get();
        $nyumba = $houses->count();
        $tencellleaders = DB::table('tencellleaders')->get();
        $balozi = $tencellleaders->count();
        return view('superadmin.dashboard')->with('local', $local)->with('wakazi', $wakazi)->with('nyumba', $nyumba)->with('balozi', $balozi);
    }

    public function showlg(){
        $lgs = DB::select('select * from lgdetails');
        return view('superadmin.showlg')->with('lgs', $lgs);
    }

    public function mkazi($id){
        // $LocalGovtID = DB::table('lgdetails')->where('id', $id)->value('LocalGovtID');
        $residents = Resident::where('LocalGovtID', '=', [$id])->get();
        $mtaa = LGoffice::find($id);
        return view('superadmin.LocalGovt.resident')->with('residents', $residents)->with('mtaa', $mtaa);
    }

    public function nyumba($id){
        $LocalGovtID = DB::table('lgdetails')->where('id', $id)->value('LocalGovtID');
        $houses = House::where('LocalGovtID', '=', [$LocalGovtID])->get();
        $mtaa = LGoffice::find($id);
        return view('superadmin.LocalGovt.house')->with('houses', $houses)->with('mtaa', $mtaa);
    }

    public function balozi($id){
        $LocalGovtID = DB::table('lgdetails')->where('id', $id)->value('LocalGovtID');
        $balozi = TenCellLeader::where('LocalGovtID', '=', [$LocalGovtID])->get();
        $mtaa = LGoffice::find($id);
        return view('superadmin.LocalGovt.balozi')->with('balozi', $balozi)->with('mtaa', $mtaa);
    }
}
