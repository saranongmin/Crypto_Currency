<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Carbon\Carbon;
use Image;
use App\Http\Requests\VideoRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class VideoController extends Controller
{

    public function index()
    {

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $videos = Video::orderBy('created_at', 'desc')->get();

        return view('backend.videos.index', compact('videos', 'sl'));
    }
   public function create()
    {


        return view('backend.videos.create');
    }

    public function store(VideoRequest $request)
    {
       try {        
           

              $data = $request->all();
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->image, $request->title);
            }
            Video::create($data);  
    return redirect()->route('videos.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
}
     
}
}
