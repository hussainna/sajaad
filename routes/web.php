<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request; // Import the Request class


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products=DB::table('products')->get();
    

    return view('master',compact('products'));
});

Route::get('/single-product', function () {

    return view('singleProduct');
});


Route::post('/heart-product', function (Request $request) {
    if(auth()->check())
    {
        $productId = $request->input('product_id');

        $heart_numbers=DB::table('products')->where('id',$productId)->value('heart_numbers');
        $productHeartChange=1+$heart_numbers;
        DB::table('products')->where('id',$productId)->update(['heart_numbers'=>$productHeartChange]);
        return response()->json(['message' => 'heart add success']);

    }else{
        return response()->json(['message' => 'you must login first']);

    }
});



Route::post('/like-product', function (Request $request) {
    if(auth()->check())
    {
        $productId = $request->input('product_id');

        $like_numbers=DB::table('products')->where('id',$productId)->value('like_numbers');
        $productLikeChange=1+$like_numbers;
        DB::table('products')->where('id',$productId)->update(['like_numbers'=>$productLikeChange]);
        return response()->json(['message' => 'like add success']);

    }else{
        return response()->json(['message' => 'you must login first']);

    }
});






Route::get('/admin', function () {
    if(auth()->check() && Auth::user()->email === 'admin@gmail.com')
    {
        $products=DB::table('products')->get();

        return view('admin.index',compact('products'));

    }else{
        return redirect('/');
    }
});

Route::get('/admin/products', function () {
    if(auth()->check() && Auth::user()->email === 'admin@gmail.com')
    {
        $products=DB::table('products')->get();
        return view('admin.pages.products.index',compact('products'));

    }else{
        return redirect('/');
    }
});
Route::get('/admin/users', function () {
    if(auth()->check() && Auth::user()->email === 'admin@gmail.com')
    {
        $users=DB::table('users')->get();


        return view('admin.pages.users.index',compact('users'));

    }else{
        return redirect('/');
    }
});




Route::get('/admin/create-product', function () {
    if(auth()->check() && Auth::user()->email === 'admin@gmail.com')
    {
        return view('admin.pages.products.createProduct');

    }else{
        return redirect('/');
    }
});


Route::post('insert-product', function (Request $request) {
    if(auth()->check() && Auth::user()->email === 'admin@gmail.com')
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('uploads/image', $fileName);
        
            DB::table('products')->insert([
                'image' => $fileName,
                'name'=>$request->name,
                'price' => $request->price
            ]);
        } 
        return redirect('/admin/products');
        

    }else{
        return redirect('/');
    }
});

Route::get('delete-product/{id}', function (Request $request,$id){
    
    DB::table('products')->where('id', $id)->delete();
    return redirect('/admin/products');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
