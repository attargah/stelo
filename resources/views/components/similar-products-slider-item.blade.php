@props(['product'])
@php
    $collection = $product->collections->first();
@endphp
<div class="swiper-slide group/slide">
    <div class="product-item item relative group/item ">
        <div class="content relative flex flex-col h-full">
            <div class="image-wrapper relative flex w-full shrink-0">
                @if(!$product->labels->isEmpty())
                <div class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                    <div style="background-color: {{$product->labels->first()->color}}!important;" class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                        <span>{{$product->labels->first()->name}}</span>
                    </div>
                </div>
                @endif
                <a href="{{route('product.detail',$product->slug)}}"
                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                    @if(!$collection->getMedia('image')->isEmpty())
                        <img src="{{$collection->getMedia('image')->first()->getUrl()}}" class="full-cover"
                             alt=""/>
                    @endif
                </a>
            </div>
            <div
                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                <div class="product-name-field">
                    <a href="{{route('product.detail',$product->slug)}}"
                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1"> {{$collection->name}}</a>
                </div>
                <div
                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                    <div class="name sm:order-2">
                        <a href="{{route('product.detail',$product->slug)}}"
                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                            <span
                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">{{$product->name}}</span>
                        </a>
                    </div>
                    <div class="code mt-1 sm:mt-0 sm:order-1">
                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                          {{$product->code}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
