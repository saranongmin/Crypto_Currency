<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Carbon\Carbon;
use Image;
class TeamController extends Controller
{
    public function index()
    {
 $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $teams = Team::orderBy('created_at', 'desc')->get();

        return view('backend.teams.index', compact('teams', 'sl'));
    }
    public function create()
    {
    	return view('backend.teams.create');

    }
    public function store(TeamRequest $request)
    {
    	 try {        
           

            // Team::create($request->all());
            $data = $request->all();
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->image, $request->name);
            }
            Team::create($data);

            return redirect()->route('teams.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

    }
}
 private function uploadImage($file, $name)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $file_name = $timestamp .'-'.$name. '.' . $file->getClientOriginalExtension();
        $pathToUpload = storage_path().'/app/public/teams/';
        Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/teams/';
        if ($file != '' && file_exists($pathToUpload. $file)) {
            @unlink($pathToUpload. $file);
        }
    }
}
