<h2 class="text-center m-5">ԲՈՎԱՆԴԱԿՈՒԹՅՈՒՆ</h2>
@if(!empty($data['scrolling_texts']))
    @foreach($data['scrolling_texts'] as $scrolling_text)
        <a href="{{asset($scrolling_text['id'])}}">
            <p>
                {!!$scrolling_text['text']!!}
            </p>
        </a>
    @endforeach
@endif
@if(!empty($data['tabs']))
    @foreach($data['tabs'] as $tab)
        <div id="{{!empty($tab['anchor']) ? $tab['anchor'] : '' }}">
            @if(!empty($tab['heading']))
                <h4 class="text-center p-4">
                    {!!$tab['heading'] !!}
                </h4>
            @endif
            @if(!empty($tab['content']))
                <p>{!! $tab['content'] !!}</p>
            @endif
            @if(!empty($tab['lists']))
                <ul class="{{count($tab['lists']) > 7 ? 'numeric' : '' }}">
                    @foreach($tab['lists'] as $list)
                        <li>{!! $list !!}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endforeach
@endif
