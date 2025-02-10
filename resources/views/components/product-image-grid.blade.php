@props(['images'])

<div class="grid grid-cols-1 gap-6 h-full">
    @foreach($images->take(2) as $img)
    <div class="image w-full h-full group-[&.botteras]/pds:aspect-auto group-[&.botteras]/pds:h-full overflow-clip translate-z-0 group/image">
        <img src="{{$img->getUrl()}}" class="full-cover" alt=""/>
        <button popovertarget="productGalleryPopup" popovertargetaction="show"
                class="background absolute left-0 top-0 w-full h-full bg-black/25 opacity-0 duration-300 group-hover/image:opacity-100">
            <div
                class="icon-field absolute left-1/2 top-1/2 -translate-x-1/2 translate-y-[calc(-50%+16px)] clamp-1 [--minv-1:40] [--maxv-1:60] size-[--clamp-1] rounded-0 bg-secondary-500 flex items-center justify-center duration-300 opacity-0 rotate-45 group-hover/image:rotate-0 group-hover/image:opacity-100 scale-75 group-hover/image:scale-100 group-hover/image:-translate-y-1/2">
                <i class="icon icon-resize clamp-fs [--minv-fs:16] [--maxv-fs:24] [font-size:--clamp-fs] h-[--clamp-fs] text-white block leading-none duration-300"></i>
            </div>
        </button>
    </div>
    @endforeach
</div>
