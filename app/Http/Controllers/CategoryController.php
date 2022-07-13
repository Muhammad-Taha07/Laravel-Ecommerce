<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryValidation;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

/*
Viewing Category Page
*/
    public function index()
    {
        $data = Category::all();
        return view('admin.categories.categories', ['data'=>$data]);
    }

/*
Inserting Category into Database
*/
    public function fetchCategories()
    {
        $data = Category::all();
        return view('admin.categories.categories', ['data' => $data]);
    }

    public function AddCategoryIndex()
    {
        return view('admin.categories.categories_add');
    }

    public function InsertCategory(Request $request, Category $category)
    {
        $category->category_name = $request->input('category_name');
        $category->category_description = $request->input('category_name');
        $category->save();

        if($request->hasFile('category_image'))
        {
            $file = $request->file('category_image');
            $extension = $file->getClientOriginalExtension();
            $filename = "image_".rand(1111, 9999).'.'.$extension;
            $file->move('uploads/category_image/', $filename);
            $photo = new Image;
            $photo->image = $filename;
            $photo->type = "Master";
            $category->images()->save($photo);
        }
        $request->session('status')->flash('status', 'Submitted Successfull');
        return redirect('/category/view');
    }

/* Updating Categories Method */
    public function editCategory($id)
    {
        $category = Category::find($id);
        if($category)
        {
            return view('admin.categories.categories_edit',['category'=>$category]);
        }
    }

    public function updateCategory(Request $request, Category $category)
    {
        $category->update($request->all());
        Session::flash('updated_status', 'Updated Successfully');
        return redirect('/category/view');
        // $category->category_name = $request->input('category_name');
        // $category->category_description = $request->input('category_description');
        // $category->save();
        // $request->session()->flash('updated_status', 'Category Updated Successfull');
        // return redirect('/category/view');
    // }
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        Session::flash('delete_status', 'Category Deleted Successfully');
        return redirect('/category/view');
    }
}
