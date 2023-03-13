<ul class="nav nav-pills d-flex flex-lg-row justify-content-between flex-column align-items-center"
    id="pills-tab" role="tablist">
    @if(!empty($data['tab_lists']))
        @foreach($data['tab_lists'] as $index => $tab_list)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $index === 0 ? 'active' : '' }}" data-bs-toggle="pill"
                        data-bs-target="#pills_{{$index}}"
                        type="button" role="tab" aria-controls="pills_{{$index}}"
                        aria-selected="true">{!! $tab_list['text'] !!}
                </button>
            </li>
        @endforeach
    @endif
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active mt-3" id="pills_0" role="tabpanel"
         aria-labelledby="pills-tab">
        @include('components.table', ['key' => 'arka'])
    </div>
</div>
<div class="tab-content" id="pills-tabheraka">
    <div class="tab-pane fade mt-3" id="pills_1" role="tabpanel"
         aria-labelledby="pills-tab">
        @include('components.table', ['key' => 'heraka'])
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane fade mt-3" id="pills_2" role="tabpanel"
         aria-labelledby="pills-tab">
        @include('components.exams')
    </div>
</div>
