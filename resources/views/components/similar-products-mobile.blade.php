@props(['products'])

<div class="scrollable-field flex [&_.product-item]:flex [&_.product-item]:shrink-0 [&_.product-item]:max-w-[--clamp-1] [&_.product-item_.content]:w-full gap-5 pb-5 scrollbar-none overflow-x-visible overflow-y-hidden clamp-1 [--minv-1:300] [--maxv-1:412] [scroll-snap-type:x_mandatory]">
    @foreach($products as $product)
        <x-similar-products-mobile-item :product="$product"></x-similar-products-mobile-item>
    @endforeach

</div>
<div class="scrollbar-field absolute left-0 bottom-0 w-full h-[4px] bg-transparent">
    <div class="line absolute left-0 bottom-0 w-20 h-full bg-main-500 rounded-full"></div>
</div>
