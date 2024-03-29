<?php

namespace App\Http\Livewire;

use App\Models\box;
use App\Models\card;
use App\Models\brand;
use App\Models\Product;
use App\Models\sticker;
use Livewire\Component;
use App\Models\Category;
use App\Models\occasion;
use App\Models\optional;
use App\Models\colormain;
use App\Models\giftvoucher;
use App\Models\subcategory;
use App\Models\cardcategory;
use Livewire\WithPagination;
use App\Models\giftvoucherprice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class GiftboxComponent extends Component

{
    public $amount = 2;
    public $link;
    public function mount($url)
    {
        $this->link = $url;

    }

public function add(){
    $this->amount += 10;
    dd($this->amount);

  }
    public function render()
    {
        $user_id = Auth::id();



        if($this->link == 'box'){

            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->get(['products.*','images.*','optionals.*']);
        }
        else{
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('brands','products.brand_id', '=', 'brands.id')
            ->join('subcategories','products.subcategory', '=', 'subcategories.id')
            ->join('categories','products.category_id', '=', 'categories.id')
            ->join('colormains','products.color_id', '=', 'colormains.id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->where('categories.cname','=',$this->link)
            ->orwhere('brands.bname','=',$this->link)
            ->orwhere('subcategories.sname','=',$this->link)
            ->orwhere('colormains.color','=',$this->link)
            ->get(['products.*','images.*','optionals.*']);
        }
        // $product = Product::paginate(24);
        if(Request::get('sort') == 'price-ascending')
        {
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.regular_price','asc')
            -> get(['products.*','images.*','optionals.*']);

        }
        elseif(Request::get('sort') == 'price-descending'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.regular_price','desc')
            -> get(['products.*','images.*','optionals.*']);
        }
        elseif(Request::get('sort') == 'title-ascending'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.title','asc')
            -> get(['products.*','images.*','optionals.*']);
        }
        elseif(Request::get('sort') == 'title-descending'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.title','desc')
            -> get(['products.*','images.*','optionals.*']);
        }
        elseif(Request::get('sort') == 'created-ascending'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.created_at','asc')
            -> get(['products.*','images.*','optionals.*']);
        }
        elseif(Request::get('sort') == 'created-descending'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.created_at','desc')
            -> get(['products.*','images.*','optionals.*']);
        }
        elseif(Request::get('sort') == 'best-selling'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('colors','products.id', '=', 'colors.product_id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->orderBy('products.created_at','desc')
            -> get(['products.*','images.*','optionals.*']);
        }
        elseif($this->link =='colors'){
            $product =Product::join('images','products.id', '=', 'images.product_id')
            ->join('brands','products.brand_id', '=', 'brands.id')
            ->join('subcategories','products.subcategory', '=', 'subcategories.id')
            ->join('categories','products.category_id', '=', 'categories.id')
            ->join('colormains','products.color_id', '=', 'colormains.id')
            ->join('optionals','products.id', '=', 'optionals.product_id')
            ->where('colormains.color','=','red')
            ->get(['products.*','images.*','optionals.*']);
        }
        if($this->link == 'card'){
            $key = $_REQUEST['filter'];
            $card = card::where('cat_id','=',$key)->get();
        }
        else{
            $card = card::all();
        }






        $sticker =sticker::all();

        $box = box::all();
        $category = Category::all();
        $sub = subcategory::all();
        $brand = brand::all();
        $ocassion = occasion::all();
        $clor = colormain::all();
        $voucher = giftvoucher::all();
        $voucherprice = giftvoucherprice::all();
        $cardcatgery = cardcategory::all();
        return view('livewire.giftbox-component',['products' => $product,'box' => $box,'sticker' => $sticker,'card'=>$card,'category'=> $category,'brand'=> $brand,'ocassion'=>$ocassion,'color' => $clor,'url'=>$this->link,'user'=>$user_id,'voucher'=>$voucher,'voucherprice'=>$voucherprice,'cardcategory'=>$cardcatgery,'sub'=>$sub]) -> layout('layout.base');
    }


}
