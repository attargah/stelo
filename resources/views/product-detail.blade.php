@extends('layouts.main')

@section('title', $product->name)
@push('styles')
    <script>
        if(window.innerWidth > 1024) {
            // LOGO ANIMATION | START
            setTimeout(() => { document.querySelector('.logo-item').classList.add('fx-reveal'); }, 100);

            // LOGO ANIMATION | END
            let logoItems = document.querySelectorAll('.logo-item');
            let logoItemsLength = logoItems.length;
            let logoItemsDelay = 100*logoItemsLength;
            setTimeout(() => {
                logoItems.forEach((logoItem, index) => { logoItem.style.transitionDelay = `0ms`; });
            }, logoItemsDelay);
        }
    </script>
@endpush

@section('content')

    <main class="main-field block relative overflow-clip pt-[--header-height]">
        <section
            class="page-navigation-section clamp-1 [--minv-1:12] [--maxv-1:24] pb-[--clamp-1] clamp-2 [--minv-2:8] [--maxv-2:12] pt-[--clamp-2]">
            <div
                class="container clamp-1 [--minv-1:1260] [--maxv-1:1900] max-w-[--clamp-1] px-[30px] sm:px-[24px] mx-auto w-full">
                <div class="wrapper">
                    <div class="page-navigation">
                        @if(!$product->collections->isEmpty())
                        <ul class="flex flex-wrap items-center gap-[5px] [&_li:last-child_.split]:hidden">
                            <li class="flex gap-[5px]">
                                <a href="index.html" class="link flex items-center group/link">
                        <span class="text clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight duration-300
                        text-[#84878C]
                        group-hover/link:text-main-500
                        ">{{__('page.home')}}</span>
                                </a>
                                <div class="split clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-relaxed
            text-[#84878C]
                     ">/
                                </div>
                            </li>
                            <li class="flex gap-[5px]">
                                <a href="product.html" class="link flex items-center group/link">
                        <span class="text clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight duration-300
                        text-[#84878C]
                        group-hover/link:text-main-500
                        ">{{__('page.collections')}}</span>
                                </a>
                                <div class="split clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-relaxed
            text-[#84878C]
                     ">/
                                </div>
                            </li>
                            <li class="flex gap-[5px]">
                                @foreach($product->collections as $collection)
                                <a href="javascript:void('0');" class="link flex items-center group/link">
                        <span class="text clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight duration-300
                        text-[#84878C]
                        group-hover/link:text-main-500
                        ">


                                {{$collection->name}}

                                @if(!$loop->last) | @endif




                        </span>
                                </a>


                                @endforeach
                                <div class="split clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-relaxed
            text-[#84878C]
                     ">/
                                </div>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- NOT: "product-detail-section" ALANINA "botteras" CLASS'I EKLENİRSE; SOL TARAFTAKİ RESİM STICKY ALANI DVH YÜKSEKLİK HALİNE GEÇİŞ YAPAR. -->
        <section class="product-detail-section clamp-1 [--minv-1:15] [--maxv-1:50] pb-[--clamp-1] group/pds botteras">
            <div
                class="container clamp-1 [--minv-1:1260] [--maxv-1:1900] max-w-[--clamp-1] px-[30px] sm:px-[24px] mx-auto w-full">
                <div
                    class="wrapper grid grid-cols-[minmax(0,9.4fr)_minmax(0,8.2fr)] clamp-1 [--minv-1:20] [--maxv-1:80] gap-[--clamp-1] md:grid-cols-1 md:gap-5">
                    <div
                        class="image-wrapper min-md:group-[&.botteras]/pds:flex min-md:group-[&.botteras]/pds:items-end">
                        <div
                            class="dynamic-sticky duration-300 min-md:sticky min-md:flex min-md:top-[calc(var(--header-height)-20px)] min-md:h-[calc(100dvh-var(--header-height))] min-md:group-[&.scrolling-down]/body:h-[calc(100dvh-40px)] min-md:group-[&.scrolling-down]/body:top-5 min-md:group-[&.botteras]/pds:top-auto min-md:group-[&.botteras]/pds:bottom-5 min-md:group-[&.scrolling-down]/body:group-[&.botteras]/pds:top-auto min-md:group-[&.scrolling-down]/body:group-[&.botteras]/pds:bottom-5 min-md:group-[&.botteras]/pds:h-[calc(100dvh-var(--header-height))] min-md:group-[&.scrolling-down]/body:group-[&.botteras]/pds:h-[calc(100dvh-40px)] lg:group-[&.botteras]/pds:h-[calc(100dvh-var(--header-height)-30px)] md:group-[&.botteras]/pds:h-auto">
                            <div class="web-view block md:hidden">
                                <x-product-image-grid :images="$product->getMedia('images')"></x-product-image-grid>
                            </div>
                            <div class="mobile-view hidden md:block">
                                <div class="carousel-field relative">
                                    <div class="product-gallery-carousel swiper !h-fit !w-full">
                                        <x-product-image-slider :images="$product->getMedia('images')"></x-product-image-slider>
                                    </div>
                                    <div class="carousel-controller md:mt-5 sm:mt-4 xs:mt-3">
                                        <div
                                            class="carousel-navigation flex justify-center gap-5 md:gap-4 sm:gap-2.5 pointer-events-none">

                                            <div
                                                class="product-gallery-prev pointer-events-auto duration-300 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none flex items-center justify-center clamp-1 size-[--clamp-1] bg-main-500 rounded-full cursor-pointer hover:bg-secondary-500 group/navigation [--minv-1:32] [--maxv-1:56]">
                                                <i class="icon-chevron-left text-white clamp-1 [--minv-1:12] [--maxv-1:18] [font-size:var(--clamp-1)] h-[--clamp-1] flex items-center justify-center group-hover/navigation:text-white duration-300"></i>
                                            </div>


                                            <div
                                                class="product-gallery-next pointer-events-auto duration-300 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none flex items-center justify-center clamp-1 size-[--clamp-1] bg-main-500 rounded-full cursor-pointer hover:bg-secondary-500 group/navigation [--minv-1:32] [--maxv-1:56]">
                                                <i class="icon-chevron-right text-white clamp-1 [--minv-1:12] [--maxv-1:18] [font-size:var(--clamp-1)] h-[--clamp-1] flex items-center justify-center group-hover/navigation:text-white duration-300"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-wrapper">
                        <div
                            class="dynamic-sticky sticky top-[calc(var(--header-height)+30px)] group-[&.scrolling-down]/body:top-5 duration-300">
                            <div class="content flex flex-col clamp-1 [--minv-1:20] [--maxv-1:50] gap-[--clamp-1]">
                                <div class="title-field flex flex-col gap-1">
                                    <h1 class="product-name title clamp-fs [--minv-fs:24] [--maxv-fs:64] [font-size:--clamp-fs] leading-tight text-main-500 [font-family:var(--playfair)] font-bold">
                                        {{$product->name}}</h1>
                                    <p class="name clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 [font-family:var(--playfair)]">
                                        {!!  $product->description!!}</p>
                                </div>
                                <div class="description-field">
                                    <div class="text-editor !max-w-full">
                                        {!! $product->content !!}
                                    </div>
                                </div>
                                <x-icon-field :attrs="$product->attributes"></x-icon-field>


                                <div class="button-field">
                                    <div class="flex flex-wrap clamp-1 [--minv-1:12] [--maxv-1:24] gap-[--clamp-1]">
                                        <!-- NOT: TASARIMDA "Teklif Formu" BUTONU ÇİZİLMEMİŞ, ONU EKLEDİM. "Bakım ve Kullanım Kılavuzu İndir" BUTONUNU YORUM SATIR YAPTIM. DURUMA GÖRE DEĞİŞTİRİLEBİLİR. -->
                                        <button popovertarget="productOfferPopup" popovertargetaction="show"
                                                class="product-offer-popup-trigger group/button h-16 lg:h-14 bg-secondary-500 clamp-1 [--minv-1:20] [--maxv-1:30] px-[--clamp-1] rounded-full overflow-clip translate-z-0 gap-[10px] flex items-center justify-center duration-300 hover:bg-secondary-600 sm:w-full">
                                            <span
                                                class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium text-center text-white">{{__('page.quote-form')}}</span>
                                            <i class="icon icon-feather clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-white block leading-none duration-300"></i>
                                        </button>
                                        @if(!$product->getMedia('document')->isEmpty())
                                        <a href="{{$product->getMedia('document')->first()->getUrl()}}" target="_blank"
                                           class="group/button h-16 lg:h-14 bg-transparent clamp-1 [--minv-1:20] [--maxv-1:30] px-[--clamp-1] rounded-full overflow-clip translate-z-0 gap-[10px] flex items-center justify-center duration-300 hover:bg-[#E6DACB] border border-[#E6DACB] sm:w-full">
                                            <span
                                                class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium text-center text-main-500">{{__('page.download-catalog')}}</span>
                                            <i class="icon icon-download clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-main-500 block leading-none duration-300"></i>
                                        </a>
                                        @endif
                                        <button popovertarget="productGalleryPopup" popovertargetaction="show"
                                                class="group/button h-16 lg:h-14 bg-transparent clamp-1 [--minv-1:20] [--maxv-1:30] px-[--clamp-1] rounded-none overflow-clip translate-z-0 gap-[10px] flex items-center justify-center duration-300 sm:w-full">
                                            <span
                                                class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium text-center text-main-500">{{__('page.gallery')}}</span>
                                            <i class="icon icon-feather clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-main-500 block leading-none duration-300"></i>
                                            <div
                                                class="line absolute left-0 bottom-0 w-full h-[1px] bg-[#E6DACB] pointer-events-none">
                                                <div
                                                    class="line absolute left-0 bottom-0 w-full h-full bg-main-500 duration-300 scale-x-0 origin-left group-hover/button:scale-x-100"></div>
                                            </div>
                                        </button>
                                        <!-- <a href="assets/file/sample.pdf" download class="group/button h-16 lg:h-14 bg-transparent clamp-1 [--minv-1:20] [--maxv-1:30] px-[--clamp-1] rounded-full overflow-clip translate-z-0 gap-[10px] flex items-center justify-center duration-300 hover:bg-[#E6DACB] sm:w-full">
                                           <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium text-center text-main-500">Bakım ve Kullanım Kılavuzu İndir</span>
                                           <i class="icon icon-download clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-main-500 block leading-none duration-300"></i>
                                        </a> -->
                                    </div>
                                </div>
                                <x-accordion-field :groups="$product->groups"></x-accordion-field>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="similar-product-section clamp-1 [--minv-1:30] [--maxv-1:120] pb-[--clamp-1] clamp-2 [--minv-2:15] [--maxv-2:50] pt-[--clamp-2] relative group/sps ">
            <div class="overflow-clip">
                <div
                    class="container clamp-1 [--minv-1:1260] [--maxv-1:1820] max-w-[--clamp-1] px-[30px] sm:px-[24px] mx-auto w-full !overflow-visible">
                    <div class="wrapper">
                        <div
                            class="title-wrapper flex flex-col clamp-1 [--minv-1:20] [--maxv-1:44] gap-[--clamp-1] group-[&.style-2]/sps:flex-row group-[&.style-2]/sps:justify-between group-[&.style-2]/sps:items-center max-w-[1500px] md:group-[&.style-2]/sps:max-w-full md:group-[&.style-2]/sps:flex-col md:group-[&.style-2]/sps:items-start"
                            data-fx-reveal="scroll y 10% 0.45">
                            <h3 class="title clamp-fs [--minv-fs:24] [--maxv-fs:64] [font-size:--clamp-fs] leading-tight text-main-500 [font-family:var(--playfair)]">
                                {{__('page.related-products')}}</h3>
                            <div class="button-field">
                                <a href="product.html"
                                   class="flex items-center clamp-1 [--minv-1:10] [--maxv-1:20] gap-[--clamp-1] group/link">
                                    <span
                                        class="text text-[14px] leading-normal md:leading-tight min-md:tracking-[0.05em] text-main-500 duration-300 font-medium group-hover/link:text-secondary-500">{{__('page.view-all')}}</span>
                                    <i class="icon icon-chevron-right clamp-fs [--minv-fs:8] [--maxv-fs:10] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                </a>
                            </div>
                        </div>
                        <div
                            class="product-list-wrapper clamp-1 [--minv-1:20] [--maxv-1:72] mt-[--clamp-1] group/plw fx-product-list"
                            data-fx-reveal="scroll y 10% 0.45">
                            <div class="web-view block md:hidden">
                                <div
                                    class="inner [&_.product-item]:flex [&_.product-item]:shrink-0 [&_.product-item]:max-w-[--clamp-1] gap-9 hidden group-[&.fx-product-list]/plw:flex clamp-1 [--minv-1:325] [--maxv-1:412]">
                                    <div class="product-item item relative group/item ">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                        <span>Yeni</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-1.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Talitha 1</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item item relative group/item ">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                        <span>Yeni</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-2.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Talitha 2</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item item relative group/item ">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                        <span>Yeni</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-3.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Sargas</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item item relative group/item ">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-popular">
                                                        <span>Popüler</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-4.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Meissa</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item item relative group/item ">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-5.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Antares 1</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item item relative group/item ">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-6.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Antares 2</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-[&.fx-product-list]/plw:hidden">
                                    <div class="carousel-field relative">
                                        <div class="product-similar-carousel swiper !h-fit">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide group/slide">
                                                    <div class="product-item item relative group/item ">
                                                        <div class="content relative flex flex-col h-full">
                                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                                <div
                                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                                    <div
                                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                                        <span>Yeni</span>
                                                                    </div>
                                                                </div>
                                                                <a href="product-detail.html"
                                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                                    <img src="{{asset('assets/image/photo/product-7.webp')}}"
                                                                         class="full-cover" alt=""/>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                                <div class="product-name-field">
                                                                    <a href="product-detail.html"
                                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                                        Adı</a>
                                                                </div>
                                                                <div
                                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                                    <div class="name sm:order-2">
                                                                        <a href="product-detail.html"
                                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                                            <span
                                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Talitha 1</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                                            <span>#</span>12345678</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide group/slide">
                                                    <div class="product-item item relative group/item ">
                                                        <div class="content relative flex flex-col h-full">
                                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                                <div
                                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                                    <div
                                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                                        <span>Yeni</span>
                                                                    </div>
                                                                </div>
                                                                <a href="product-detail.html"
                                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                                    <img src="{{asset('assets/image/photo/product-8.webp')}}"
                                                                         class="full-cover" alt=""/>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                                <div class="product-name-field">
                                                                    <a href="product-detail.html"
                                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                                        Adı</a>
                                                                </div>
                                                                <div
                                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                                    <div class="name sm:order-2">
                                                                        <a href="product-detail.html"
                                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                                            <span
                                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Talitha 2</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                                            <span>#</span>12345678</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide group/slide">
                                                    <div class="product-item item relative group/item ">
                                                        <div class="content relative flex flex-col h-full">
                                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                                <div
                                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                                    <div
                                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                                        <span>Yeni</span>
                                                                    </div>
                                                                </div>
                                                                <a href="product-detail.html"
                                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                                    <img src="{{asset('assets/image/photo/product-9.webp')}}"
                                                                         class="full-cover" alt=""/>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                                <div class="product-name-field">
                                                                    <a href="product-detail.html"
                                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                                        Adı</a>
                                                                </div>
                                                                <div
                                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                                    <div class="name sm:order-2">
                                                                        <a href="product-detail.html"
                                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                                            <span
                                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Sargas</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                                            <span>#</span>12345678</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide group/slide">
                                                    <div class="product-item item relative group/item ">
                                                        <div class="content relative flex flex-col h-full">
                                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                                <div
                                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                                    <div
                                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-popular">
                                                                        <span>Popüler</span>
                                                                    </div>
                                                                </div>
                                                                <a href="product-detail.html"
                                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                                    <img src="{{asset('assets/image/photo/product-10.webp')}}"
                                                                         class="full-cover" alt=""/>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                                <div class="product-name-field">
                                                                    <a href="product-detail.html"
                                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                                        Adı</a>
                                                                </div>
                                                                <div
                                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                                    <div class="name sm:order-2">
                                                                        <a href="product-detail.html"
                                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                                            <span
                                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Meissa</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                                            <span>#</span>12345678</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide group/slide">
                                                    <div class="product-item item relative group/item ">
                                                        <div class="content relative flex flex-col h-full">
                                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                                <a href="product-detail.html"
                                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                                    <img src="{{asset('assets/image/photo/product-11.webp')}}"
                                                                         class="full-cover" alt=""/>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                                <div class="product-name-field">
                                                                    <a href="product-detail.html"
                                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                                        Adı</a>
                                                                </div>
                                                                <div
                                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                                    <div class="name sm:order-2">
                                                                        <a href="product-detail.html"
                                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                                            <span
                                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Antares 1</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                                            <span>#</span>12345678</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide group/slide">
                                                    <div class="product-item item relative group/item ">
                                                        <div class="content relative flex flex-col h-full">
                                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                                <a href="product-detail.html"
                                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                                    <img src="{{asset('assets/image/photo/product-6.webp')}}"
                                                                         class="full-cover" alt=""/>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                                <div class="product-name-field">
                                                                    <a href="product-detail.html"
                                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                                        Adı</a>
                                                                </div>
                                                                <div
                                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                                    <div class="name sm:order-2">
                                                                        <a href="product-detail.html"
                                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                                            <span
                                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Antares 2</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                                            <span>#</span>12345678</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-controller mt-5 md:mt-4 sm:mt-3">
                                            <div
                                                class="carousel-navigation flex justify-center gap-5 md:gap-4 sm:gap-2.5 pointer-events-none">

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
                            <div class="mobile-view hidden md:block overflow-visible relative scrollable-wrapper">
                                <div
                                    class="scrollable-field flex [&_.product-item]:flex [&_.product-item]:shrink-0 [&_.product-item]:max-w-[--clamp-1] [&_.product-item_.content]:w-full gap-5 pb-5 scrollbar-none overflow-x-visible overflow-y-hidden clamp-1 [--minv-1:300] [--maxv-1:412] [scroll-snap-type:x_mandatory]">
                                    <div
                                        class="product-item item relative group/item [scroll-snap-align:center] sm:!w-full">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                        <span>Yeni</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-1.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Talitha 1</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item item relative group/item [scroll-snap-align:center] sm:!w-full">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                        <span>Yeni</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-2.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Talitha 2</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item item relative group/item [scroll-snap-align:center] sm:!w-full">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-new">
                                                        <span>Yeni</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-3.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Sargas</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item item relative group/item [scroll-snap-align:center] sm:!w-full">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <div
                                                    class="badge-field absolute clamp-1 [--minv-1:12] [--maxv-1:32] right-[--clamp-1] top-[--clamp-1] z-10 pointer-events-none">
                                                    <div
                                                        class="badge px-5 py-[10px] xs:px-[10px] xs:py-[4px] text-4 xs:text-[14px] leading-tight [&.badge-new]:text-white [&.badge-new]:bg-secondary-500 [&.badge-popular]:text-main-500 [&.badge-popular]:bg-third-500 rounded-full badge-popular">
                                                        <span>Popüler</span>
                                                    </div>
                                                </div>
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-4.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Meissa</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item item relative group/item [scroll-snap-align:center] sm:!w-full">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-5.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Antares 1</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item item relative group/item [scroll-snap-align:center] sm:!w-full">
                                        <div class="content relative flex flex-col h-full">
                                            <div class="image-wrapper relative flex w-full shrink-0">
                                                <a href="product-detail.html"
                                                   class="image aspect-[412/435] w-full h-auto overflow-clip translate-z-0">
                                                    <img src="{{asset('assets/image/photo/product-6.webp')}}" class="full-cover"
                                                         alt=""/>
                                                </a>
                                            </div>
                                            <div
                                                class="text-wrapper bg-[--backgroundColor] clamp-1 [--minv-1:16] [--maxv-1:24] p-[--clamp-1] flex flex-col gap-[10px] group-hover/item:bg-[--backgroundColorHover] duration-300 h-full"
                                                style="--backgroundColor: #FCF7F1; --backgroundColorHover: #FFFFFF">
                                                <div class="product-name-field">
                                                    <a href="product-detail.html"
                                                       class="text text-main-500/65 leading-tight clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] duration-300 hover:text-main-500 line-clamp-1">Kolekiyon
                                                        Adı</a>
                                                </div>
                                                <div
                                                    class="name-field flex items-center justify-between gap-5 sm:gap-3 sm:flex-col h-full sm:items-start">
                                                    <div class="name sm:order-2">
                                                        <a href="product-detail.html"
                                                           class="flex items-center group/link gap-4 md:gap-3 sm:gap-2">
                                                            <i class="icon icon-favicon clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 mt-1"></i>
                                                            <span
                                                                class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 duration-300 group-hover/link:text-main-400 [font-family:var(--playfair)] font-bold line-clamp-2">Antares 2</span>
                                                        </a>
                                                    </div>
                                                    <div class="code mt-1 sm:mt-0 sm:order-1">
                                                        <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_span]:text-secondary-500 [&_span]:mr-1 duration-300 group-hover/item:text-main-500">
                                                            <span>#</span>12345678</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scrollbar-field absolute left-0 bottom-0 w-full h-[4px] bg-transparent">
                                    <div
                                        class="line absolute left-0 bottom-0 w-20 h-full bg-main-500 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- POPUP | PRODUCT GALLERY -->
    <!-- NOT: POPUP İÇERİĞİ, ÜRÜN BAZLIDIR. -->
    <section
        class="popup-field group/popup border-0 outline-none p-[30px] m-0 fixed left-0 top-0 w-dvw h-dvh bg-transparent overflow-hidden backdrop-blur-none"
        id="productGalleryPopup" popover data-productGalleryPopup-popup>
        <button class="background fixed left-0 top-0 w-full h-full bg-black/75 translate-z-0 cursor-pointer border-0"
                popovertarget="productGalleryPopup" popovertargetaction="hide"
                data-productGalleryPopup-popup-close></button>
        <div
            class="content-wrapper fx w-full h-full relative z-[2] pointer-events-none grid range-1 [--minv-1:30] [--maxv-1:60] p-[--range-1]">
            <div
                class="inner-wrapper relative max-w-full max-h-full mx-auto my-auto w-max h-max pointer-events-auto md:w-full">
                <button
                    class="icon-wrapper group/close absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 duration-300 clamp-1 [--minv-1:36] [--maxv-1:54] size-[--clamp-1] bg-white border border-solid border-white items-center justify-center rounded-full cursor-pointer hover:bg-secondary-500 hover:border-secondary-500 z-[10] shadow-[0px_10px_10px_rgba(0,0,0,0.1)] flex"
                    popovertarget="productGalleryPopup" popovertargetaction="hide" data-productGalleryPopup-popup-close>
                    <div
                        class="close cursor-pointer clamp-1 [--minv-1:14] [--maxv-1:18] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                        <div
                            class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                        <div
                            class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                    </div>
                </button>
                <div
                    class="overflow-wrapper max-w-[1024px] md:max-w-full max-h-[calc(100dvh-var(--range-1)*2)] h-full w-full md:rounded-none md:w-[calc(100dvw-60px)] md:mx-auto">
                    <div class="carousel-field relative w-full h-full">
                        <div class="product-gallery-carousel swiper md:!max-w-full md:!w-full !h-fit">
                            <x-product-image-slider :images="$product->getMedia('images')"></x-product-image-slider>
                        </div>
                        <div class="carousel-controller">
                            <div
                                class="carousel-navigation flex justify-center gap-5 md:gap-4 sm:gap-2.5 pointer-events-none mt-5">
                                <div
                                    class="product-gallery-prev pointer-events-auto duration-300 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none flex items-center justify-center clamp-1 size-[--clamp-1] bg-white rounded-full cursor-pointer hover:bg-secondary-500 group/navigation [--minv-1:32] [--maxv-1:56]">
                                    <i class="icon-chevron-left text-main-500 clamp-1 [--minv-1:12] [--maxv-1:18] [font-size:var(--clamp-1)] h-[--clamp-1] flex items-center justify-center group-hover/navigation:text-white duration-300"></i>
                                </div>

                                <div
                                    class="product-gallery-next pointer-events-auto duration-300 [&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:pointer-events-none flex items-center justify-center clamp-1 size-[--clamp-1] bg-white rounded-full cursor-pointer hover:bg-secondary-500 group/navigation [--minv-1:32] [--maxv-1:56]">
                                    <i class="icon-chevron-right text-main-500 clamp-1 [--minv-1:12] [--maxv-1:18] [font-size:var(--clamp-1)] h-[--clamp-1] flex items-center justify-center group-hover/navigation:text-white duration-300"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section
        class="popup-field group/popup border-0 outline-none md:p-[30px] m-0 fixed left-0 top-0 w-dvw h-dvh bg-transparent overflow-hidden backdrop-blur-none"
        id="productOfferPopup" popover data-productOfferPopup-popup>
        <button class="background fixed left-0 top-0 w-full h-full bg-black/75 translate-z-0 cursor-pointer border-0"
                popovertarget="productOfferPopup" popovertargetaction="hide"
                data-productOfferPopup-popup-close></button>
        <div
            class="content-wrapper fx-right-to-left w-full h-full relative z-[2] pointer-events-none grid range-1 [--minv-1:30] [--maxv-1:60] p-[--range-1]">
            <div
                class="inner-wrapper relative max-w-full max-h-full w-max h-max pointer-events-auto md:w-full ml-auto mr-0 mt-auto mb-0 md:mx-auto md:my-auto">
                <button
                    class="icon-wrapper group/close absolute clamp-1 [--minv-1:24] [--maxv-1:48] top-[--clamp-1] right-[--clamp-1] duration-300 flex items-center justify-center rounded-full cursor-pointe z-[10] md:hidden"
                    popovertarget="productOfferPopup" popovertargetaction="hide" data-productOfferPopup-popup-close>
                    <div
                        class="close cursor-pointer clamp-1 [--minv-1:16] [--maxv-1:24] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                        <div
                            class="line clamp-1 [--minv-1:16] [--maxv-1:24] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-main-500"></div>
                        <div
                            class="line clamp-1 [--minv-1:16] [--maxv-1:24] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-main-500"></div>
                    </div>
                </button>
                <button
                    class="icon-wrapper group/close absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 duration-300 clamp-1 [--minv-1:36] [--maxv-1:54] size-[--clamp-1] bg-white border border-solid border-white items-center justify-center rounded-full cursor-pointer hover:bg-secondary-500 hover:border-secondary-500 z-[10] shadow-[0px_10px_10px_rgba(0,0,0,0.1)] hidden md:flex"
                    popovertarget="productOfferPopup" popovertargetaction="hide" data-productOfferPopup-popup-close>
                    <div
                        class="close cursor-pointer clamp-1 [--minv-1:14] [--maxv-1:18] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                        <div
                            class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                        <div
                            class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                    </div>
                </button>
                <div
                    class="overflow-wrapper max-w-[660px] max-h-[calc(100dvh-var(--range-1)*2)] h-full w-full rounded-none bg-white rounded-tl-[32px] md:rounded-none clamp-1 [--minv-1:20] [--maxv-1:60] px-[--clamp-1] clamp-2 [--minv-2:20] [--maxv-2:80] py-[--clamp-2] md:p-[--clamp-1] md:w-full md:max-w-full">
                    <div
                        class="content-field relative pr-7 md:px-2 prevent-scroll-bounce h-full overflow-x-hidden overflow-y-auto pr-7.5 scrollbar-thin scrollbar-w-0.5 scrollbar-track-main-50 scrollbar-thumb-main-200 scrollbar-track-rounded-full scrollbar-thumb-rounded-full overscroll-none clamp-1 [--minv-1:20] [--maxv-1:80] max-h-[calc(100dvh-var(--clamp-1)-60px)]"
                        data-detect-scroll-position="fade-y">
                        <div class="title-field flex flex-col gap-5">
                            <h5 class="title clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 font-medium [font-family:var(--playfair)]">
                                {{__('page.quote-form')}}</h5>
                            <div
                                class="description-field clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight text-main-500/65">
                                <p>{{__('page.quote-form-desc')}}</p>
                            </div>
                        </div>
                        <div class="form-wrapper clamp-1 [--minv-1:20] [--maxv-1:42] mt-[--clamp-1]">
                            <form action="{{ route('product.send.request') }}" method="POST">
                                @csrf
                                <div class="grid grid-cols-2 gap-5 sm:grid-cols-1">
                                    <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="{{__('page.name')}}"
                                               class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500">
                                    </div>

                                    <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="{{__('page.phone')}}"
                                               class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500">
                                    </div>

                                    <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="{{__('page.email')}}"
                                               class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500">
                                    </div>

                                    <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                        <input type="text" name="product_name" value="{{$product->name}}" placeholder="{{__('page.product-name')}}" disabled
                                               class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500">
                                    </div>

                                    <div class="form-item relative group/item col-span-2 sm:col-span-1">
            <textarea name="note" placeholder="{{__('page.note')}}"
                      class="w-full h-[100px] lg:h-[80px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] clamp-2 [--minv-2:20] [--maxv-2:24] py-[--clamp-2] duration-300 hover:border-main-500/50 focus:border-main-500 resize-none [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500">{{ old('note') }}</textarea>
                                    </div>

                                    <div class="form-item relative group/item col-span-2 sm:col-span-1">
                                        <div class="custom-checkbox relative flex items-center gap-[10px] group/checkbox my-[10px] sm:my-0 w-fit">
                                            <input type="checkbox" name="approve_check" value="1"
                                                   class="absolute left-0 top-0 w-full h-full z-[2] opacity-0 cursor-pointer peer">
                                            <div class="box relative size-[20px] rounded-full border border-main-500/15 peer-hover:border-main-500/50 peer-checked:!border-main-500 duration-300 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:size-[10px] before:rounded-full before:bg-main-500 before:duration-300 before:scale-0 peer-checked:before:scale-100 shrink-0"></div>
                                            <div class="text clamp-fs [--minv-fs:14] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_input]:text-main-500 [&_input]:cursor-pointer [&_input]:duration-300 [&_input:hover]:text-main-500/70 [&_input]:relative [&_input]:z-[3] duration-300 peer-checked:text-main-500">
                                                <input class="trigger" popovertarget="gdpr" popovertargetaction="show" type="button" value="{{__('page.approve_text')}}">'{{__('page.read-and-accept')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-item relative group/item col-span-2 sm:col-span-1">
                                        <input type="hidden" name="product_code" value="{{ $product->code }}">

                                        <button type="submit" class="group/button h-16 lg:h-14 bg-secondary-500 clamp-1 [--minv-1:12] [--maxv-1:40] px-[--clamp-1] rounded-[6px] overflow-clip translate-z-0 gap-[10px] flex items-center justify-between duration-300 hover:bg-secondary-600 w-full">
                                            <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium text-center text-white">{{__('page.send-form')}}</span>
                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:10] [--maxv-fs:14] [font-size:--clamp-fs] h-[--clamp-fs] text-white block leading-none duration-300"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        let accordionItems = document.querySelectorAll('.accordion-item')

        accordionItems.forEach((item) => {
            let title = item.querySelector('.title-field')

            title.addEventListener('click', () => {
                if (item.classList.contains('active')) {
                    item.classList.remove('active')
                } else {
                    accordionItems.forEach((itemer) => {
                        itemer.classList.remove('active')
                    })
                    item.classList.add('active')
                }
            })
        })
    </script>

    <script>
        if (document.querySelector('.product-offer-popup-trigger')) {
            let productOfferPopupTrigger = document.querySelector('.product-offer-popup-trigger')
            let productNameInput = document.querySelector('.product-name-input')

            productOfferPopupTrigger.addEventListener('click', () => {
                productNameInput.value = document.querySelector('.product-name').textContent
            })
        }
    </script>

@endpush
