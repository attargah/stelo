<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailMarketingRequest;
use App\Http\Requests\ProductFormRequest;
use App\Models\MailMarketingForm;
use App\Models\Product;
use App\Models\ProductPriceRequest;
use App\Settings\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{


    public function product($slug = null)
    {


        $product = Product::bySlug($slug)->firstOrFail();


        return view('product-detail', compact('product'));
    }

    public function handleProductForm(ProductFormRequest $request)
    {
        $request->validated();

        $product = Product::query()->where('code', $request->product_code)->first();

        if (empty($product)) {
            return back()->withErrors([__('messages.product_form.isset_validation')]);
        }

        $data = $request->only(['name', 'phone', 'email', 'note']);
        $data['ip_address'] = $request->ip();
        $data['product_id'] = $product->id;
        ProductPriceRequest::create($data);

        return back()->with('success', __('messages.product_form.success'));
    }

    public function handleMailMarketingForm(MailMarketingRequest $request)
    {

        $request->validated();
        $form = MailMarketingForm::query()->where('email', $request->email)->first();

        if (!empty($form)) {
            return back()->withErrors([__('messages.mail_marketing.email_validation')]);
        }

        $data = [
            'phone' => empty($request->phone) ? '' : $request->phone,
            'email' => empty($request->email) ? '' : $request->email,
        ];

        MailMarketingForm::create($data);

        return back()->with('success', __('messages.mail_marketing.success'));

    }

    public function language($locale)
    {

        App::setLocale($locale);
        Session::put('locale', $locale);
        config(['app.locale' => $locale]);


        return redirect()->back();
    }

}
