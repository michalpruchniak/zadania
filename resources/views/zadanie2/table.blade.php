@extends('zadanie2.layout')

@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th></th>
                @foreach ($columnNames as $columnName)
                    <th>{{ $columnName }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData as $rowIndex => $rowData)
                <tr>
                    <th>{{ $rowIndex + 1 }}</th>
                    @foreach ($rowData as $cellData)
                        <td>{{ $cellData['location'] }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
