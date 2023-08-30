@extends('zadanie1.layout')
@section('content')
<h1><span class="red">{{__($selectedMonthName)}}</span> / {{$year}}</h1>
<table>
    <thead>
        <tr>
            <th>Pn</th>
            <th>Wt</th>
            <th>Śr</th>
            <th>Cz</th>
            <th>Pt</th>
            <th>So</th>
            <th class="red">N</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($weeks as $week)
            <tr>
                @foreach ($week as $day)
                    <td @if ($day && $day->isSunday()) class="red" @endif>
                        @if ($day)
                            {{ $day->day }}
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
