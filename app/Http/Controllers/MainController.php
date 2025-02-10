<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Models\ProductPriceRequest;
use App\Settings\SiteSettings;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function product($slug = null){


        $product = Product::bySlug($slug)->firstOrFail();

        return view('product-detail', compact('product'));
    }

    public function handleProductForm(ProductFormRequest $request)
    {
        $request->validated();

        $product = Product::query()->where('code',$request->product_code)->first();

        if (empty($product)) {
            return back()->withErrors(['Beklenmedik bir hata oluştu. Lütfen sayfayı yenileyip yeniden deneyin.']);
        }

        $data = $request->only(['name', 'phone', 'email', 'note']);
        $data['ip_address'] = $request->ip();
        $data['product_id'] = $product->id;
        ProductPriceRequest::create($data);

        return back()->with('success', 'Fiyat talebiniz başarıyla iletilmiştir. En kısa sürede belirttiğiniz iletişim adreslerine geri dönüş sağlanacaktır!');
    }
}
