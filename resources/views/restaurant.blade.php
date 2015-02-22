@extends('templates.default')


@section('content')
<h2>Add a Restaurant</h2>
 <form action="restaurant" method="post">

     <div class="row">
     <div class="medium-6 columns">
         <label for="name">Restaurant Name</label>
         <input type="text" name="name" >
         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
     </div>
     </div>
     <div class="row">
         <div class="medium-6 columns">
             <input class="button" type="submit" value="Add Restaurant">
         </div>
     </div>

 </form>



@stop