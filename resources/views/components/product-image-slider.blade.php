@props(['images'])

<div class="swiper-wrapper">

   @foreach($images as $img)
        <div class="swiper-slide group/slide">
            <div class="image-field relative translate-z-0">
                <div
                    class="image aspect-video sm:aspect-[5/4] w-full h-auto overflow-clip translate-z-0">
                    <img src="{{$img->getUrl()}}" class="full-cover" alt=""/>
                </div>
            </div>
        </div>
   @endforeach

</div>
