<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use File;
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
        $request->session('status')->flash('status', 'Category Added Successfully');
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
        // $isCategory = $category->imagesForListing->toArray();
        if($request->hasFile('category_image'))
        {
            $file = $request->file('category_image');
            if($category->imagesForListing)
            {
                $category->imagesForListing()->delete();
                $imageName = $category->imagesForListing->first()->image;
                $imagePath = public_path("uploads/category_image/".$imageName);
                if(File::exists($imagePath))
                {
                    unlink("uploads/category_image/".$imageName);
                }
            }
            $extension = $file->getClientOriginalExtension();
            $filename = "image_".rand(1111, 9999).'.'.$extension;
            $file->move('uploads/category_image/', $filename);
            $photo = new Image;
            $photo->image = $filename;
            $photo->type = "Master";
            $category->images()->save($photo);
        }
        $category->update($request->all());
        Session::flash('status', 'Category Updated Successfully');
        return redirect('/category/view');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        Session::flash('status', 'Category Deleted Successfully');
        return redirect('/category/view');
    }
}
