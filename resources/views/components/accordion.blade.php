<section class="accordion-section {{\Illuminate\Support\Facades\Request::path() === '/' ? 'faculty_accordion' : ''}}">
    <div class="accordion">
        @foreach($data['accordions'] as $index => $accordion)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading_{{$index}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse_{{$index}}" aria-expanded="false">
                        <div class="circle-icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 256 512">
                                <path
                                    d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/>
                            </svg>
                        </div>
                        {{$accordion['text']}}
                    </button>
                </h2>
                <div id="collapse_{{$index}}" class="accordion-collapse collapse" aria-labelledby="heading_{{$index}}">
                    @foreach($accordion['accordionTexts'] as $accordionText)
                        <div class="accordion-body">
                            @if(!empty($accordionText['link_url']))
                                <a href={{url($accordionText["link_url"])}} class="accordion-text">{{$accordionText['anchor']}}</a>
                            @else
                                {!! $accordionText['paragraph'] !!}
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
