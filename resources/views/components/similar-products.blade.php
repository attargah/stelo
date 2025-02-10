@props(['products'])


<div class="web-view block md:hidden">


    <div class="inner [&_.product-item]:flex [&_.product-item]:shrink-0 [&_.product-item]:max-w-[--clamp-1] gap-9 hidden group-[&.fx-product-list]/plw:flex clamp-1 [--minv-1:325] [--maxv-1:412]">
      @foreach($products as $product)
            <x-similar-products-inner-item :product="$product"></x-similar-products-inner-item>
      @endforeach

    </div>
    <div class="group-[&.fx-product-list]/plw:hidden">
        <div class="carousel-field relative">
            <div class="product-similar-carousel swiper !h-fit">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <x-similar-products-slider-item :product="$product"></x-similar-products-slider-item>
                    @endforeach
                </div>
            </div>
            <div class="carousel-controller mt-5 md:mt-4 sm:mt-3">
                <div class="carousel-navigation flex justify-center gap-5 md:gap-4 sm:gap-2.5 pointer-events-none">

                    <div
                        class="product-similar-prev pointer-events-auto duration-300 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none flex items-center justify-center clamp-1 size-[--clamp-1] bg-main-500 rounded-full cursor-pointer hover:bg-secondary-500 group/navigation [--minv-1:32] [--maxv-1:56]">
                        <i class="icon-chevron-left text-white clamp-1 [--minv-1:12] [--maxv-1:18] [font-size:var(--clamp-1)] h-[--clamp-1] flex items-center justify-center group-hover/navigation:text-white duration-300"></i>
                    </div>

                    <div
                        class="product-similar-next pointer-events-auto duration-300 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none flex items-center justify-center clamp-1 size-[--clamp-1] bg-main-500 rounded-full cursor-pointer hover:bg-secondary-500 group/navigation [--minv-1:32] [--maxv-1:56]">
                        <i class="icon-chevron-right text-white clamp-1 [--minv-1:12] [--maxv-1:18] [font-size:var(--clamp-1)] h-[--clamp-1] flex items-center justify-center group-hover/navigation:text-white duration-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
