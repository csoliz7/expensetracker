

@extends('templates.default')

@section('content')


<table role="grid">
    <caption>Report</caption>
<thead>
    <tr>
        <th width="200">Date</th>
        <th width="300">Restaurant</th>
        <th width="150">Amount</th>
    </tr>
</thead>


    @foreach($report as $r)
        <tr>
            <td>{{$r['date']}}</td>
            <td>{{$r['restaurant']}}</td>
            <td>$ {{$r['total']}}</td>
        </tr>
        @endforeach
</table>


@stop
