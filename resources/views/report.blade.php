

@extends('templates.default')

@section('content')


<table>

    <tr>
        <th>Date</th>
        <th>Restaurant</th>
        <th>Amount</th>
    </tr>

    @foreach($report as $r)
        <tr>
            <td>{{$r['date']}}</td>
            <td>{{$r['restaurant']}}</td>
            <td>{{$r['total']}}</td>
        </tr>
        @endforeach
</table>


@stop