<div class="parallax__content">
    <h1 class="text-center pt-5">Ֆակուլտետներ</h1>
    <div class="single-item">
        @foreach($data['slides'] as $slide)
            <div class="facultet-image">
                <a href={{url($slide['link_url'])}}>
                    <img src="{{asset($slide['image_url'])}}" alt="shin">
                    <p>{{$slide['text']}}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
