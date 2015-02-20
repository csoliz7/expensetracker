@extends('templates.default')

@section('content')
<h3>Tip Results at: {{$tip}}% </h3>

<div class="row">

    <div class="medium-8 columns">
    <p>Tip:</p>
    </div>
    <div class="medium-4 columns">
        <p>${{round($result)}}</p>
    </div>

</div>

<div class="row">

    <div class="medium-8 columns">
    Total Bill:
    </div>
    <div class="medium-4 columns">
    <p>${{$total}}</p>
    </div>

</div>


<div class="row">
    <hr class="divider">
</div>


@stop