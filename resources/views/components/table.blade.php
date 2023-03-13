<table class="table table-responsive table-bordered">
    <tbody>
    <tr>
        <td rowspan="2">
            <p class="mt-4 fs-5">
                Մասնագիտությունը, Կրթական ծրագիրը
            </p>
        </td>
        <td colspan="3">Ընդունելության քննություններ</td>
        <td rowspan="2">
            <p class="mt-4 fs-5 text-center">Ուսման վարձը</p>
        </td>
    </tr>
    <tr>
        <td colspan="2">Մրցութային</td>
        <td>Ոչ մրցութային</td>
    </tr>
    @if(!empty($data[$key]['tables']))
        @foreach($data[$key]['tables'] as $table)
            <tr>
                <th colspan="1"
                    class="{{strlen(implode($table['contents'])) === 0 ? 'fw-bold' : 'fw-normal' }}">{{$table['heading']}}</th>
                @foreach($table['contents'] as $content)
                    <td colspan="1">{!! $content !!}</td>
                @endforeach
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
