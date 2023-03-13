<div class="menu_content m-3 p-4 border border-1">
    <h3>
        {{$data['heading']}}
    </h3>
    @if(!empty($data['paragraphs_under_heading']))
        @foreach($data['paragraphs_under_heading'] as $data['paragraph'])
            <p class="d-block">{!!$data['paragraph'] !!}</p>
        @endforeach
    @endif

    @if(!empty($data['images']))
        <div class="gallery d-flex justify-content-center flex-wrap flex-row">
            @foreach($data['images'] as $image)
                <a href="{{asset($image)}}" data-rel="lightcase:my-slideshow">
                    <img src={{asset($image)}}/ alt="Student">
                </a>
            @endforeach
        </div>
    @endif

    @if(!empty($data['lists']))
        @foreach($data['lists'] as $list)
            <i>{!!$list['italic']!!}</i>
            <ul>
                @foreach($list['content'] as $item)
                    <li>{!! $item !!}</li>
                @endforeach
            </ul>
            @if(!empty($list['strong']))
                <strong>{!!$list["strong"]!!}</strong>
            @endif
        @endforeach
    @endif

    @if(!empty($data['second_lists']))
        @foreach($data['second_lists'] as $second_list)
            <i>{!!$second_list['italic']!!}</i>
            <ul>
                @foreach($second_list['content'] as $item)
                    <li>{!! $item !!}</li>
                @endforeach
            </ul>
            @if(!empty($second_list['strong']))
                <strong>{!!$second_list["strong"]!!}</strong>
            @endif
        @endforeach
    @endif

    @if(!empty($data['secondary_paragraphs']))
        @foreach($data['secondary_paragraphs'] as $data['secondary_paragraph'])
            <p>{!!$data['secondary_paragraph'] !!}</p>
        @endforeach
    @endif

    @if(!empty($data['facultet_paragraphs']))
        @foreach($data['facultet_paragraphs'] as $data['facultet_paragraph'])
            <p>{!!$data['facultet_paragraph'] !!}</p>
        @endforeach
    @endif

    @if(!empty($data['second_headings']))
        @foreach($data['second_headings'] as $second_heading)
            <h4>{!!$second_heading['heading']!!}</h4>
            @foreach($second_heading['content'] as $test)
                <p>{!!$test!!}</p>
            @endforeach
        @endforeach
    @endif
</div>
