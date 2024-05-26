<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = Wishlist::where('user_id', auth()->id())->get();
        return view('app.landingpage.wishlist', compact('wishlistItems'));
    }

    public function store(Request $request, $id)
    {
        $product = Products::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        Wishlist::firstOrCreate([
            'user_id' => $request->user()->id,
            'product_id' => $product->id,
        ]);

        return redirect()->route('template.index');
    }

    public function destroy($id)
    {
        $wishlistItem = Wishlist::where('user_id', auth()->id())->where('product_id', $id)->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
        }

        return redirect()->route('template.index');
    }
}
