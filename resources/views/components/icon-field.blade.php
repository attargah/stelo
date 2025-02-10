
@props(['attrs'])


@if(!$attrs->isEmpty())
<div class="icon-field">
    <ul class="flex flex-wrap clamp-1 [--minv-1:20] [--maxv-1:50] gap-x-[--clamp-1] gap-y-3 sm:grid sm:grid-cols-2">
        @foreach($attrs as $attr)
            <li>
                <x-icon-field-item :attr="$attr"></x-icon-field-item>
            </li>
        @endforeach
    </ul>
</div>
@endif



