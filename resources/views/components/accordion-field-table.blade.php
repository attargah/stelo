@props(['values'])

<div class="content px-4 py-5">
    <div
        class="table-wrapper [&_table]:w-full [&_table_thead]: [&_table_thead_tr_]: [&_table_thead_tr_td]:text-[18px] [&_table_thead_tr_td]:text-main-500 [&_table_thead_tr_td]:font-medium [&_table_thead_tr_td]:leading-relaxed [&_table_thead_tr_td]:py-2 [&_table_thead_tr_td]:px-6 [&_table_thead_tr_td]:bg-[#E9DFD3] [&_table_thead_tr_td]:border-0 [&_table_thead_tr_td]:border-b [&_table_thead_tr_td]:border-r [&_table_thead_tr_td]:border-[#3B3C40]/15 [&_table_tbody]: [&_table_tbody_tr]: [&_table_tbody_tr_td]:text-[18px] [&_table_tbody_tr_td]:text-main-500 [&_table_tbody_tr_td]:py-2 [&_table_tbody_tr_td]:px-6 [&_table_tbody_tr_td]:border-0 [&_table_tbody_tr_td]:border-r [&_table_tbody_tr_td]:border-[#3B3C40]/15 [&_table_tbody_tr_td:first-child]:flex [&_table_tbody_tr_td:first-child]:items-center [&_table_tbody_tr_td:first-child]:gap-[10px] [&_table_tbody_tr_td:first-child_.line]:w-[30px] scrollbar scrollbar-h-1 scrollbar-track-rounded-2 scrollbar-thumb-rounded-2 scrollbar-thumb-main-500 scrollbar-track-main-500/0 overflow-x-auto overflow-y-hidden">
        <table>
            <thead>
            <tr>


                @php($maxCount = 0)
                @foreach($values as $val)
                    <td>{{$val->value['label']}}</td>

                    @if (count($val->value['items']) > $maxCount)
                        @php($maxCount = count($val->value['items']))
                    @endif

                @endforeach
            </tr>
            </thead>
            <tbody>

            @for($i = 0; $i < $maxCount; $i++)

                <tr>
                    @php($key = 0)
                    @while(!empty($values[$key]))

                        <td>
                            {!! $values[$key]->value['items'][$i]['value'] !!}
                        </td>

                        @php($key++)
                    @endwhile
                </tr>
            @endfor

            </tbody>
        </table>
    </div>
</div>
