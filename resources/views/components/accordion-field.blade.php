





<div class="accordion-field flex flex-col gap-[30px]">
    @foreach($groups as $group)
        @foreach($group->specifications as $key=>$spec)
        <div @class(['accordion-item group/item','active'=>$key == 0]) >


            <div class="title-field flex items-center justify-between gap-5 px-4 py-5 relative cursor-pointer">
                <p class="title clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-main-500 font-medium">
                    {{ $spec->name }}</p>
                <div class="icon-field relative size-5 shrink-0">
                    <div
                        class="line w-5 h-[1px] absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] bg-main-500 duration-300"></div>
                    <div
                        class="line w-5 h-[1px] absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] bg-main-500 duration-300 rotate-90 group-[&.active]/item:rotate-0"></div>
                </div>
                <div
                    class="line absolute left-0 bottom-0 w-full h-[1px] bg-main-500/15 duration-300 group-[&.active]/item:opacity-0"></div>
            </div>
            <div class="content-field grid grid-rows-[0fr] duration-300 group-[&.active]/item:grid-rows-[1fr]">
                <div class="overflow-wrapper overflow-hidden">

                            @switch($spec->type)
                                @case('text')
                                @case('textarea')
                            <x-accordion-field-content :value="$spec->values->first()"></x-accordion-field-content>
                                    @break

                                @case('select')
                                @case('multiselect')
                                @break
                                @case('list')

                                    <x-accordion-field-list :values="$spec->values"></x-accordion-field-list>
                                    @break

                                @case('table')

                                  <x-accordion-field-table :values="$spec->values"></x-accordion-field-table>

                                    @break

                                @case('content')
                                    <x-accordion-field-content :value="$spec->values->first()"></x-accordion-field-content>
                                    @break

                            @endswitch

                </div>
            </div>
        </div>
        @endforeach
    @endforeach
</div>
