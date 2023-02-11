<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Category;
use App\Models\color;
use App\Models\colormain;
use App\Models\occasion;
use App\Models\Product;
use App\Models\subcategory;
use App\Models\subtosubcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        if(session('utype') == 'ADM'){
            $category = Category::all();
            $subcategory = subcategory::all();
            return view('admin.action.addcategory',['category' => $category,'sub' => $subcategory]);
        }
        else{
             return redirect('/');
        }

    }
    public function subcategorybview(){
        if(session('utype') == 'ADM'){
             $category = Category::all();
            $subcategory = subcategory::join('categories','subcategories.category_id', '=', 'categories.id')->get(['subcategories.*','categories.cname']);
            return view('admin.action.subcategory',['cats'=> $category,'sub' => $subcategory]);
        }
        else{
             return redirect('/');
        }

    }
    public function seconsubview(Request $req){
        if(session('utype') == 'ADM'){
            $subcategory = subcategory::all();
           $second = subtosubcategory::join('subcategories','subtosubcategories.subcategory_id', '=', 'subcategories.id')->get(['subtosubcategories.*','subcategories.sname']);
           return view('admin.action.secondsub',['seconds'=> $second,'sub' => $subcategory]);
       }
       else{
            return redirect('/');
       }

    }
    public function addcategory(Request $req){
        try {
            $category = new Category();
            $category->cname = $req->categoryname;
            $category->slug = $req->categoryname;
            $category->save();
            $notify[] = ['success', 'Category  has been added successfully'];
            return back()->withNotify($notify);

        } catch (\Illuminate\Database\QueryException $e) {
            $notify[] = ['error', 'Category Could not be added .'];
            return back()->withNotify($notify);
        }

    }
    public function updatecategory(Request $req){
        try{
        $cat = Category::findOrFail($req->id);
        $cat->cname =$req->categoryname;
        $cat->save();
        $notify[] = ['success', 'Category  has been updated successfully'];
        return back()->withNotify($notify);

        }
     catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'Category Could not be updated .'];
        return back()->withNotify($notify);
    }
    }
    public function updatesubcategory(Request $req){
        try{
        if($req->category == '' || null){
            $cat_id = $req->cat_id;
        }
        else{
            $cat_id = $req->category;
        }
        $cat = subcategory::findOrFail($req->id);
        $cat->category_id =$cat_id;
        $cat->sname =$req->subname;
        $cat->save();
        $notify[] = ['success', 'SubCategory  has been updated successfully'];
        return back()->withNotify($notify);

        }
     catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'SubCategory Could not be updated .'];
        return back()->withNotify($notify);

    }
    }

    public function updatesecondsub(Request $req){
        try{
            if($req->subcategory == '' || null){
                $cat_id = $req->subcat_id;
            }
            else{
                $cat_id = $req->subcategory;
            }
            $cat = subtosubcategory::findOrFail($req->id);
            $cat->subcategory_id =$cat_id;
            $cat->subname=$req->subname;
            $cat->save();
        $notify[] = ['success', 'Second Sub  has been updated successfully'];
        return back()->withNotify($notify);

        }
     catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'Second Sub Could not be updated .'];
        return back()->withNotify($notify);
    }
    }
    public function updatebrand(Request $req){
        try{

            if($req->shortcut1 == '' || null){
                $cat_id = $req->shortcut;
            }
            else{
                $cat_id = $req->shortcut1;
            }
            $cat = brand::findOrFail($req->id);
            $cat->shortcut=$cat_id;
            $cat->bname=$req->bname;
        $cat->save();
        $notify[] = ['success', 'Brand  has been updated successfully'];
        return back()->withNotify($notify);

        }
     catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'Brand Could not be updated .'];
        return back()->withNotify($notify);
    }
    }
    public function updatecolor(Request $req){
        try{
        $cat = Category::findOrFail($req->id);
        $cat->cname =$req->categoryname;
        $cat->save();
        $notify[] = ['success', 'Category  has been updated successfully'];
        return back()->withNotify($notify);

        }
     catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'Category Could not be updated .'];
        return back()->withNotify($notify);
    }
    }

    public function updatecocasion(Request $req){
        try{
        $cat = Category::findOrFail($req->id);
        $cat->cname =$req->categoryname;
        $cat->save();
        $notify[] = ['success', 'Category  has been updated successfully'];
        return back()->withNotify($notify);

        }
     catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'Category Could not be updated .'];
        return back()->withNotify($notify);
    }
    }

    public function categoryview(){
        if(session('utype') == 'ADM'){
            $category = Category::all();
            return view('admin.action.category',['category' => $category]);
        }
        else{
             return redirect('/');
        }



    }

    public function addsubcategory(Request $req){
        try {
            $subcategory = new subcategory();
            $subcategory->sname = $req->subname;
            $subcategory->category_id = $req->category;
            $subcategory->save();
            $notify[] = ['success', 'SubCategory  has been added successfully'];
            return back()->withNotify($notify);

        } catch (\Illuminate\Database\QueryException $e) {
            $notify[] = ['error', 'SubCategory Could not be added .'];
            echo $e;
            // return back()->withNotify($notify);
        }
    }
    public function subtosub(Request $req){
        try {
            $sub= new subtosubcategory();
            $sub->subname = $req->subtosub;
            $sub->subcategory_id = $req->subcategory;
            $sub->save();
            $notify[] = ['success', 'substosub  has been added successfully'];
            return back()->withNotify($notify);

        } catch (\Illuminate\Database\QueryException $e) {
            $notify[] = ['error', 'substosub Could not be added .'];
            return back()->withNotify($notify);
        }

    }
    public function brand(Request $req){
        try {
            $brand= new brand();
            $brand->bname = $req->brand;
            $brand->shortcut = $req->short;
            $brand->save();
            $notify[] = ['success', 'Brand  has been added successfully'];
            return back()->withNotify($notify);

        } catch (\Illuminate\Database\QueryException $e) {
            $notify[] = ['error', 'Brand Could not be added .'];
            return back()->withNotify($notify);
        }

    }
    public function brandview()
{
    if(session('utype') == 'ADM'){
        $brand = brand::all();
        return view('admin.action.brand',['brand' => $brand]);
    }
    else{
         return redirect('/');
    }

}

public function color(Request $req)
{
    try {
        $color= new colormain();
        $color->color = $req->color;
        $color->title = $req->title;
        $color->save();
        $notify[] = ['success', 'Color  has been added successfully'];
        return back()->withNotify($notify);

    } catch (\Illuminate\Database\QueryException $e) {
        $notify[] = ['error', 'Color Could not be added .'];
        return back()->withNotify($notify);
    }
}

public function occasion(Request $req)
{
    try {
        $ocasion= new occasion();
        $ocasion->occasionn = $req->occasion;
        $ocasion->title = $req->title;
        $ocasion->save();
        $notify[] = ['success', 'Occasion  has been added successfully'];
            return back()->withNotify($notify);

        } catch (\Illuminate\Database\QueryException $e) {
            $notify[] = ['error', 'Occasion Could not be added .'];
            return back()->withNotify($notify);
        }
}
}
