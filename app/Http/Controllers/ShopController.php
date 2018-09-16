<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getPopular(){
        $urlpopular = "https://api.themoviedb.org/3/movie/popular?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US&page=1";
        $popular = access_api($urlpopular,'GET',[]);
		if (is_array($popular->results)) {
            $data['popular'] = $popular->results;
		}else{
            $data['popular'] = [];
        }
		return view('welcome', $data);
    }

    public function getDetail($id) {
        $a = explode('-', $id); // Restricts it to only 2 values, for names like Billy Bob Jones

        $id = $a[0];
        $urldetail="https://api.themoviedb.org/3/movie/".$id."?api_key=fe969c9839d99ddbd49bce311034c232&language=en-US";

        $detailmovie = access_api($urldetail,'GET',[]);
        
        $data['detail'] = $detailmovie;
        
        return view('detail', $data);
    }
}
