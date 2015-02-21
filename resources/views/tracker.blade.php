@extends('templates.default')

@section('content')
<h1>Expense Tracker</h1>




<form method="post" action="store" >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


    <div class="row">
        <div class="medium-6 columns">
            <label>Select Restaurant:
                <select name="restaurant">

                    @foreach($restaurants as $r)

                    <option value="{{$r['name']}}">{{$r['name']}}</option>

                    @endforeach




                </select>
            </label>
        </div>
    </div>





    <div class="row">
    <div class="medium-6 columns">
        <label>Enter Bill Amount:
            <input type="number" step="any" name="amount" placeholder="Enter amount" />
        </label>
    </div>
</div>

<div class="row">

    <div class="medium-6 columns">
        <label>Choose Tip</label>
        <input type="radio" name="tip" value="15"><label for="tip">15%</label>
        <input type="radio" name="tip" value="20"><label for="tip">20%</label>
    </div>
</div>


<div class="row">
    <div class="medium-6 columns">
    <input type="submit" class="button" name="submit" value="Submit">
    <input type="reset" class="button" value="Reset">
    </div>
</div>

</form>

@stop

