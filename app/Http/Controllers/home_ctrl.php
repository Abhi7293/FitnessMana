<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\CommonModel;
class home_ctrl extends Controller
{
    //
    public function sign_up_user(){
       
    }

    public function physical(Request $request, $subCategory=null){
        $Return =   null;
        if(!empty($subCategory)){
            $subCategoryId = DB::table('category')->select('CategoryId')->where('CategoryName', 'like', '%' . $subCategory . '%')->get()->first();
            if(!empty($subCategoryId)){
                $Return['subCategoryId']    =   $subCategoryId->CategoryId;
            }
            return $Return;
        }
    }

    public function mental(Request $request, $subCategory=null){
        $Return =   null;
        if(!empty($subCategory)){
            $subCategoryId = DB::table('category')->select('CategoryId')->where('CategoryName', 'like', '%' . $subCategory . '%')->get()->first();
            if(!empty($subCategoryId)){
                $Return['subCategoryId']    =   $subCategoryId->CategoryId;
            }
            return $Return;
        }
    }

    public function emotional(Request $request, $subCategory=null){
        $Return =   null;
        if(!empty($subCategory)){
            $subCategoryId = DB::table('category')->select('CategoryId')->where('CategoryName', 'like', '%' . $subCategory . '%')->get()->first();
            if(!empty($subCategoryId)){
                $Return['subCategoryId']    =   $subCategoryId->CategoryId;
            }
            return $Return;
        }
    }
}