
@props(['attr'])

@if(isset($attr))
    <div class="content flex flex-col clamp-1 [--minv-1:12] [--maxv-1:30] gap-[--clamp-1]">
        <div
            class="image aspect-square clamp-1 [--minv-1:40] [--maxv-1:64] max-w-[--clamp-1] mx-auto w-full h-auto overflow-clip translate-z-0">
            <img src="{{$attr->getMedia('images')->first()->getUrl()}}" class="full-contain" alt=""/>
        </div>
        <div class="text-field">
            <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight text-main-500 text-center">
                {{$attr->title}}
            </p>
        </div>
    </div>

@endif

