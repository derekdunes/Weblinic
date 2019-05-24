<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    function getSpeciality($id){

    	$speciality = DB::table('speciality')->where('cat_id','=', $id)->get();

    	echo json_encode($speciality);

    	exit;
    }

    function getSpecialist($cat_id,$speciality,$location){
		
		switch ($cat_id) {
				case 1:
					$specialist = DB::table('pharmacist_information')->where('speciality','=', $speciality)->where('location', '=' , $location)->get();
					break;
				case 2:
					$specialist = DB::table('doctor_informations')->where('speciality','=', $speciality)->where('location', '=' , $location)->get();
					break;
				case 3:
					$specialist = DB::table('laboratory_information')->where('speciality','=', $speciality)->where('location', '=' , $location)->get();
					break;
				case 4:
					 $specialist = DB::table('radiologist_information')->where('speciality','=', $speciality)->where('location', '=' , $location);
					break;
				default:
					$specialist = DB::table('doctor_informations')->where('speciality','=', $speciality)->where('location', '=' , $location);
					break;
			}	  

    	echo json_encode($specialist);

    	exit;
    }


}
