<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request)
    {

        $user = Auth::user()->email;
        // $wish = $request->user();
        // $itemwishlist = Wishlist::where('dari', $wish->id)
        //                     ->Paginate(10);
        // $data = array('title' => 'Wishlist',
        //         'itemwishlist' => $itemwishlist);

        //  $sapi = DB::table('wishlists')->where('dari',$user)->where('hapus',1)->first();
         $ayam = DB::table('wishlists')->where('dari',$user)->get();
        if(isset($ayam)){
         foreach($ayam as $sapi){
           
         $errors = DB::table('users')->where('email',$sapi->untuk)->get();
        
         
         return view('gawe.wishlist')->with(compact('errors','sapi'));
        }
    }
         return view('gawe.wishlist');
        //  with('no', ($request->input('page',1)-1) * 10)->
    }
    public function create(Request $request,$email){
       
        if($request->wishlist=='wishlist'){
            
            $user=Auth::user()->email;
            $isi=DB::table('wishlists');
            $isi->insert([
                'dari'=>$user,
                'untuk'=>$email,
            ]);
            return redirect('listings');
        }
    }

    public function store(Request $request){
        $user = Auth::user()->email;
        if($request->hapuswishlist=='hapus'){
            $model = DB::table('wishlists')->where('dari',$user)->where('untuk',$request->untuk);
            
            $model->delete();
            
            return redirect('wishlist');
        }
    }
      
}