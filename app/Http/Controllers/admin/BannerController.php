<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banner;
use Illuminate\Support\Facades\Validator;



class BannerController extends Controller
{
    public function index()
    {
        $banner = banner::orderBy("id", "desc")->get();
        return view('admin.banner.banner', compact('banner'));
    }

    public function create()
    {
        $banner = Banner::all();
        return view('admin.banner.banner_create', compact('banner'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|string',
            'slug' => 'required|unique:banners,slug',
            'type' => 'required|in:big,small',
            'status' => 'required|boolean',
            'image' => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation->errors());
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/banner';
            $file->move($destinationPath, $fileName);
        }

        Banner::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'type' => $request['type'],
            'status' => $request['status'],
            'image' => $fileName,
        ]);

        return back()->with('message', "Banner Added Successfully");
    }

    public function status($id){
        $banner = Banner::find($id);
        if($banner != ''){
            if($banner['status'] == '1'){
                $banner->update(['status'=>"0"]);
            }else{
                $banner->update(['status'=>"1"]); 
            }
        }
        return back()->with('message'," Status Updated Successfully"); 
    }

    public function delete($id){
        Banner::find($id)->delete();
       return back()->with('message', 'SuccessFully Deleted' );
   }

}
