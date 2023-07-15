<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{

    public function index(Request $request)
    {
        if($request->ajax()){
            $subcategories = "";
            $query = Subcategory::select('subcategories.*');

            if($request->status){
                $query->where('subcategories.status', $request->status);
            }

            $subcategories = $query->get();

            return DataTables::of($subcategories)
            ->addIndexColumn()
            ->editColumn('subcategory_photo', function($row){
                return '
                    <img src="'.asset('uploads/subcategory_photo').'/'.$row->subcategory_photo.'" alt="subcategory_photo" width="80" height="80">
                    ';
            })
            ->editColumn('status', function($row){
                if($row->status == 'Active'){
                    $status = '
                    <span class="badge bg-success">'.$row->status.'</span>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-warning btn-sm statusBtn"><i class="lni lni-ban"></i></button>
                    ';
                }else{
                    $status = '
                    <span class="badge bg-warning">'.$row->status.'</span>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-success btn-sm statusBtn"><i class="lni lni-checkmark-circle"></i></button>
                    ';
                };
                return $status;
            })
            ->addColumn('action', function ($row) {
                $btn = '
                    <button type="button" data-id="'.$row->id.'" class="btn btn-warning btn-sm editBtn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="lni lni-pencil-alt"></i></button>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-danger btn-sm deleteBtn"><i class="fadeIn animated bx bx-trash-alt"></i></button>
                ';
                return $btn;
            })
            ->rawColumns(['subcategory_photo', 'status', 'action'])
            ->make(true);
        }

        $categories = Category::all();
        return view('backend.admin.subcategory.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:subcategories|string|max:255',
            'subcategory_photo' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'=> $validator->errors()->toArray()
            ]);
        }else{
            $subcategory_photo_name =  Str::slug($request->subcategory_name).".". $request->file('subcategory_photo')->getClientOriginalExtension();
            $upload_link = base_path("public/uploads/subcategory_photo/").$subcategory_photo_name;
            Image::make($request->file('subcategory_photo'))->resize(239, 110)->save($upload_link);

            Subcategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'subcategory_photo' => $subcategory_photo_name,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
            ]);

            return response()->json([
                'status' => 200,
                'message'=> "Subcategory store successfully."
            ]);
        }
    }

    public function edit(string $id)
    {
        $subcategory = Subcategory::where('id', $id)->first();
        return response()->json($subcategory);
    }

    public function update(Request $request, string $id)
    {
        $subcategory = Subcategory::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'subcategory_name' => 'required|unique:subcategories,subcategory_name,'.$subcategory->id,
            'subcategory_photo' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'=> $validator->errors()->toArray()
            ]);
        }else{
            $subcategory->update([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'updated_by' => Auth::user()->id,
            ]);

            if($request->hasFile('subcategory_photo')){
                unlink(base_path("public/uploads/subcategory_photo/").$subcategory->subcategory_photo);
                $subcategory_photo_name =  Str::slug($subcategory->subcategory_name).".". $request->file('subcategory_photo')->getClientOriginalExtension();
                $upload_link = base_path("public/uploads/subcategory_photo/").$subcategory_photo_name;
                Image::make($request->file('subcategory_photo'))->resize(239, 110)->save($upload_link);
                $subcategory->update([
                    'subcategory_photo' => $subcategory_photo_name,
                    'updated_by' => Auth::user()->id,
                ]);
            }

            return response()->json([
                'status' => 200,
                'message'=> "Subcategory update successfully."
            ]);
        }
    }

    public function destroy(string $id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->updated_by = Auth::user()->id;
        $subcategory->deleted_by = Auth::user()->id;
        $subcategory->save();
        $subcategory->delete();
    }

    public function trash(Request $request)
    {
        if($request->ajax()){
            $recycle_companies = Subcategory::onlyTrashed();
            return DataTables::of($recycle_companies)
            ->addColumn('action', function ($row) {
                $btn = '
                    <button type="button" data-id="'.$row->id.'" class="btn btn-success btn-sm restoreBtn"><i class="fadeIn animated bx bx-reset"></i></button>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-danger btn-sm forceDeleteBtn"><i class="lni lni-close"></i></button>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function restore($id)
    {
        Subcategory::onlyTrashed()->where('id', $id)->update([
            'deleted_by' => NULL
        ]);
        Subcategory::onlyTrashed()->where('id', $id)->restore();
    }

    public function forceDelete($id)
    {
        $subcategory = Subcategory::onlyTrashed()->where('id', $id)->first();
        unlink(base_path("public/uploads/subcategory_photo/").$subcategory->subcategory_photo);
        $subcategory->forceDelete();
    }

    public function status($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        if($subcategory->status == "Active"){
            $subcategory->status = "Inactive";
        }else{
            $subcategory->status = "Active";
        }
        $subcategory->updated_by = Auth::user()->id;
        $subcategory->save();
    }
}
