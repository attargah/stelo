@props(['values'])

<div class="content px-0 py-5">
    <div class="grid grid-cols-6 lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-3 gap-6 sm:gap-4">

        @foreach($values as $value)
            <a href="javascript:void(0)"
               class="corner-profile flex flex-col gap-5 group/link">
                <div class="image aspect-[110/70] w-full h-auto overflow-clip translate-z-0">
                    <img src="{{$value->getMedia('image')->first()->getUrl()}}"
                         class="full-cover" alt=""/>
                </div>
                <div class="text-field">
                    <p class="name clamp-fs [--minv-fs:14] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight min-md:tracking-[-0.02em] text-main-500 font-medium text-center duration-300 group-hover/link:text-secondary-500">
                        {{$value->value}}</p>
                </div>
            </a>

        @endforeach


    </div>
</div>
