<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $categories = "";
            $query = Category::select('categories.*');

            if($request->status){
                $query->where('categories.status', $request->status);
            }

            $categories = $query->get();

            return DataTables::of($categories)
            ->addIndexColumn()
            ->editColumn('category_photo', function($row){
                return '
                    <img src="'.asset('uploads/category_photo').'/'.$row->category_photo.'" alt="category_photo" width="80" height="80">
                    ';
            })
            ->editColumn('status', function($row){
                if($row->status == 'Active'){
                    $status = '
                    <span class="badge bg-success">'.$row->status.'</span>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-warning btn-sm statusBtn">Status</button>
                    ';
                }else{
                    $status = '
                    <span class="badge bg-warning">'.$row->status.'</span>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-success btn-sm statusBtn">Status</button>
                    ';
                };
                return $status;
            })
            ->addColumn('action', function ($row) {
                $btn = '
                    <button type="button" data-id="'.$row->id.'" class="btn btn-default btn-sm editBtn" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-danger btn-sm deleteBtn">Delete</button>
                ';
                return $btn;
            })
            ->rawColumns(['category_photo', 'status', 'action'])
            ->make(true);
        }
        return view('backend.admin.category.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|unique:categories|string|max:255',
            'category_photo' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'=> $validator->errors()->toArray()
            ]);
        }else{
            $category_photo_name =  Str::slug($request->category_name).".". $request->file('category_photo')->getClientOriginalExtension();
            $upload_link = base_path("public/uploads/category_photo/").$category_photo_name;
            Image::make($request->file('category_photo'))->resize(239, 110)->save($upload_link);

            Category::insert([
                'category_name' => $request->category_name,
                'category_photo' => $category_photo_name,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
            ]);

            return response()->json([
                'status' => 200,
                'message'=> "Category store successfully."
            ]);
        }
    }

    public function edit(string $id)
    {
        $category = Category::where('id', $id)->first();
        return response()->json($category);
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'category_name' => 'required|unique:categories,category_name,'.$category->id,
            'category_photo' => 'nullable|image|mimes:png,jpg,jpeg',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error'=> $validator->errors()->toArray()
            ]);
        }else{
            $category->update([
                'category_name' => $request->category_name,
                'updated_by' => Auth::user()->id,
            ]);

            if($request->hasFile('category_photo')){
                unlink(base_path("public/uploads/category_photo/").$category->category_photo);
                $category_photo_name =  Str::slug($category->category_name).".". $request->file('category_photo')->getClientOriginalExtension();
                $upload_link = base_path("public/uploads/category_photo/").$category_photo_name;
                Image::make($request->file('category_photo'))->resize(239, 110)->save($upload_link);
                $category->update([
                    'category_photo' => $category_photo_name,
                    'updated_by' => Auth::user()->id,
                ]);
            }

            return response()->json([
                'status' => 200,
                'message'=> "Category update successfully."
            ]);
        }
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->updated_by = Auth::user()->id;
        $category->deleted_by = Auth::user()->id;
        $category->save();
        $category->delete();
    }

    public function trash(Request $request)
    {
        if($request->ajax()){
            $recycle_companies = Category::onlyTrashed();
            return DataTables::of($recycle_companies)
            ->addColumn('action', function ($row) {
                $btn = '
                    <button type="button" data-id="'.$row->id.'" class="btn btn-success btn-sm restoreBtn">Reset</button>
                    <button type="button" data-id="'.$row->id.'" class="btn btn-danger btn-sm forceDeleteBtn">Close</button>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    public function restore($id)
    {
        Category::onlyTrashed()->where('id', $id)->update([
            'deleted_by' => NULL
        ]);
        Category::onlyTrashed()->where('id', $id)->restore();
    }

    public function forceDelete($id)
    {
        $category = Category::onlyTrashed()->where('id', $id)->first();
        unlink(base_path("public/uploads/category_photo/").$category->category_photo);
        $category->forceDelete();
    }

    public function status($id)
    {
        $category = Category::findOrFail($id);
        if($category->status == "Active"){
            $category->status = "Inactive";
        }else{
            $category->status = "Active";
        }
        $category->updated_by = Auth::user()->id;
        $category->save();
    }
}
