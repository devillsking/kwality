<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\plan;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }



    public function index_plan_view()
    {
        $plan = plan::all();
        return view('admin.plan', compact('plan'));
    }


    public function index_plan_details($id)
    {
        $plan = plan::all()->where('id', $id);
        return view('admin.plandetails', compact('plan'));
    }

    public function index_plan()
    {
        $plan = null;
        return view('admin.planform', compact('plan'));
    }

    public function index_edit($id)
    {
        $plan = plan::find($id);
        return view('admin.planform', compact('plan'));
    }

    public function index_plan_create(Request $request)
    {   
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'sku' => 'required',
            'keyword' => 'required',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation->errors());
        }

        if ($request->hasFile('plan_image')) {
            $file = $request->file('plan_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/plan';
            $file->move($destinationPath, $fileName);
        }
        if ($request->hasFile('elevation_image')) {
            $file = $request->file('elevation_image');
            $elevation_image = $file->getClientOriginalName();
            $destinationPath = public_path() . '/elevation_image';
            $file->move($destinationPath, $elevation_image);
        }
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf = $file->getClientOriginalName();
            $destinationPath = public_path() . '/pdf';
            $file->move($destinationPath, $pdf);
        }

        $plan = plan::create([
            'name' => $request->name,
            'sku' => $request->sku,
            'price' => $request->price,
            'slug' => $request->slug,
            'sell_price' => $request->sell_price,
            'keyword' => $request->keyword,
            'pdf' => $pdf,
            'video' => $request->video,
            'plan_image' => $fileName,
            'elevation_image' => $elevation_image,
            'width' => $request->width,
            'height' => $request->height,
            'vastu' => $request->vastu,
            'faces' => $request->faces,
            'parking' => $request->parking,
            'long_description' => $request->long_description,
            'short_description' => $request->short_description,
            'bhk' => $request->bhk,
            'floor' => $request->floor,
            'swiming_pool' => $request->swiming_pool,
            'plot' => $request->plot,
            'column_placement' => $request->column_placement,
            'door_size' => $request->door_size,
            'window_size' => $request->window_size,
            'ventilation_size' => $request->ventilation_size,
        ]);
        return back()->with('message', "Plan Create Successfully");
    }


    public function index_plan_update(Request $request,$id)
    {

           

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'sku' => 'required',
            'keyword' => 'required',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation->errors());
        }
      
        if ($request->hasFile('plan_image')) {
            $file = $request->file('plan_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/plan';
            $file->move($destinationPath, $fileName);
        }
        if ($request->hasFile('elevation_image')) {
            $file = $request->file('elevation_image');
            $elevation_image = $file->getClientOriginalName();
            $destinationPath = public_path() . '/elevation_image';
            $file->move($destinationPath, $elevation_image);
        }
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $pdf = $file->getClientOriginalName();
            $destinationPath = public_path() . '/pdf';
            $file->move($destinationPath, $pdf);
        }

        $plan = plan::find($id);
        $plan->update([
            'name' => $request->name,
            'sku' => $request->sku,
            'price' => $request->price,
            'slug' => $request->slug,
            'sell_price' => $request->sell_price,
            'keyword' => $request->keyword,
            // 'pdf' => $pdf,
            'video' => $request->video,
            // 'plan_image' => $fileName,
            // 'elevation_image' => $elevation_image,
            'width' => $request->width,
            'height' => $request->height,
            'vastu' => $request->vastu,
            'faces' => $request->faces,
            'parking' => $request->parking,
            'long_description' => $request->long_description,
            'short_description' => $request->short_description,
            'bhk' => $request->bhk,
            'floor' => $request->floor,
            'swiming_pool' => $request->swiming_pool,
            'plot' => $request->plot,
            'column_placement' => $request->column_placement,
            'door_size' => $request->door_size,
            'window_size' => $request->window_size,
            'ventilation_size' => $request->ventilation_size,
        ]);
        return back()->with('message', "Update Success Full");
    }

    public function delete_plan($id){
        plan::find($id)->delete();
       return redirect('/plan-view')->with('message', 'SuccessFully Deleted' );
   }
}
