<footer>
    <hr>
    <div class="d-flex justify-content-between flex-column flex-sm-row gap-3 p-3">
        <div class="d-flex flex-column">
            <a href={{url('/')}}>
                <img src="{{asset('images/logo_arm.svg')}}" height="60px" width="150px" alt="logo">
            </a>
            <p>© Copyright NATIONAL UNIVERSITY<br> OF ARCHITECTURE AND CONSTRUCTION OF ARMENIA</p>
        </div>
        <div class="address-section">
            @if(!empty($data['footer_texts']))
                @foreach($data['footer_texts'] as $footer_text)
                    <p>
                        {!!$footer_text['paragraph']!!}
                        <a href={{asset($footer_text['link_url'])}}>
                            {{$footer_text['text']}}
                        </a>
                    </p>
                @endforeach
            @endif
        </div>
    </div>
</footer>
