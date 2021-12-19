<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Services\ImageService;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');
        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('shop');
            if(!is_null($id)) {
                $shop_owner_id = Shop::findOrFail($id)->owner->id;
                $owner_id = Auth::id();
                if($shop_owner_id != $owner_id) {
                    abort(404);
                }
            }
            return $next($request);
        });
    }

    public function index()
    {
        $owner_id = Auth::id();
        $shops = Shop::where('owner_id', $owner_id)->get();

        return view('owner.shops.index', compact('shops'));
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('owner.shops.edit', compact('shop'));
    }

    public function update(UploadImageRequest $request, $id)
    {
        $image_file = $request->image;
        if(!is_null($image_file) && $image_file->isValid()) {
            $file_name_to_store = ImageService::upload($image_file, 'shops');
        }

        return redirect()->route('owner.shops.index');
    }
}
