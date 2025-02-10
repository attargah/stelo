<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCollection;
use App\Models\ProductLabel;
use App\Models\ProductPriceRequest;
use App\Models\ProductSpecification;
use App\Models\ProductSpecificationGroup;
use App\Models\ProductSpecificationValue;
use App\Models\User;
use App\Policies\PermissionPolicy;
use App\Policies\ProductAttributePolicy;
use App\Policies\ProductCollectionPolicy;
use App\Policies\ProductLabelPolicy;
use App\Policies\ProductPolicy;
use App\Policies\ProductPriceRequestPolicy;
use App\Policies\ProductSpecificationGroupPolicy;
use App\Policies\ProductSpecificationPolicy;
use App\Policies\ProductSpecificationValuePolicy;
use App\Policies\RolePolicy;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use TomatoPHP\FilamentSettingsHub\Facades\FilamentSettingsHub;
use TomatoPHP\FilamentSettingsHub\Services\Contracts\SettingHold;
use App\Settings\SiteSettings;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();


        Gate::before(function (User $user, string $ability) {
            return $user->isSuperAdmin() ? true: null;
        });

        Gate::policy(Role::class, RolePolicy::class);
        Gate::policy(Permission::class, PermissionPolicy::class);
        Gate::policy(Product::class, ProductPolicy::class);
        Gate::policy(ProductAttribute::class, ProductAttributePolicy::class);
        Gate::policy(ProductCollection::class, ProductCollectionPolicy::class);
        Gate::policy(ProductLabel::class, ProductLabelPolicy::class);
        Gate::policy(ProductPriceRequest::class, ProductPriceRequestPolicy::class);
        Gate::policy(ProductSpecificationGroup::class, ProductSpecificationGroupPolicy::class);
        Gate::policy(ProductSpecification::class, ProductSpecificationPolicy::class);
        Gate::policy(ProductSpecificationValue::class, ProductSpecificationValuePolicy::class);

        $locales = ['tr','en']; //diller dinamik hale getirilirse değiştirilecek yer

        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) use ($locales) {
            $switch
                ->locales($locales);
        });



        View::composer('*', function ($view) use($locales) {
            $settings = app(SiteSettings::class);
            $locale = app()->getLocale();
            $inactiveLocales = array_diff($locales, [$locale]);

            $view->with('settings', $settings);
            $view->with('locale', $locale);
            $view->with('inactiveLocales', $inactiveLocales);
        });
    }
}
