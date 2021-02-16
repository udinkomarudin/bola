<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Klasemen;
use App\Pertandingan;

class KlasemenController extends Controller
{
     public function index(request $request)
    {
       
    	return response()->json(Klasemen::all(),200);

    }

    public function indexView(request $request)
    {
        $klasemen = Klasemen::get();  
        return view('klasemen.list',compact('klasemen'));
    }

    public function store(Request $request){

    	$insert = new Pertandingan;
    	$insert->home_team = $request->nama_team_home;
    	$insert->away_team = $request->nama_team_away;
    	$insert->score = $request->score;
    	$insert->save();

		$nama_team_home = $request->nama_team_home;
		$nama_team_away = $request->nama_team_away;
		$score= $request->score;

	    $pisah=explode("-", $score);

	    if($pisah[0] > $pisah[1]  ) {
	    	$hasil_menang = 3;
		    $hasil_kalah = 0;
	    	$data = array(
		    array(
		        'nama_team'=>$nama_team_home,
		        'poin'=> $hasil_menang,
		       ), array(
		        'nama_team'=>$nama_team_away,
		        'poin'=>$hasil_kalah,
		       ),
	   
		);
	    }
	     if($pisah[0] == $pisah[1]  ) {
	    	$hasil_menang = 1;
		    $hasil_kalah = 1;
	    	$data = array(
		    array(
		        'nama_team'=>$nama_team_home,
		        'poin'=> $hasil_menang,
		       ), array(
		        'nama_team'=>$nama_team_away,
		        'poin'=>$hasil_kalah,
		       ),
	   
		);
	    }
	     if($pisah[1] > $pisah[0]  ) {
	    	$hasil_menang = 0;
		    $hasil_kalah = 3;
	    	$data = array(
		    array(
		        'nama_team'=>$nama_team_home,
		        'poin'=> $hasil_menang,
		       ), array(
		        'nama_team'=>$nama_team_away,
		        'poin'=>$hasil_kalah,
		       ),
	   
		);
	    }

		Klasemen::insert($data);
		return response([
    			'status' => 'ok',
    			'message' => 'Success',
    			'ddata' => $data
    	],200);

	  }
    
   

}
