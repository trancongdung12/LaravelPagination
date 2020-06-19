<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    function index(Request $request){

        $page = $request->page;
        $photos = Photo::all()->skip($page * 5)->take(5);
        if($photos->isEmpty()){ //Nếu photo lớn hơn số lượng trong database sẽ trả về 0
            $photos = Photo::all()->take(5);
            return redirect('admin/photo/?page=0');
        }else if($page<0){
            $totalPage = round(count(Photo::all())/5)-1;
            return redirect('admin/photo/?page='.$totalPage);
        }

        return view('admin.photo.index', ["photos" => $photos, "page" => $page]);
    }

}
