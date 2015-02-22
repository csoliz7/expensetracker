<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bill;
use App\Amount;
use App\Restaurant;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BillController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $r = new Bill;
        $object = $r::all();
        return view('tracker')->with('restaurants', $object);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}




	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
        $amount = $request->input('amount');

        $tip = $request->input('tip');
        $result = $amount * $tip / 100;
        $total = round($amount) + round($result);

        $record = new Amount;
        $record->id = '';
        $record->restaurant = $request->input('restaurant');
        $record->total = $total;
        $record->date = Carbon::now()->toDateTimeString();
        $record->save();

        return view('results')->with('result', $result)
            ->with('total', $total)
            ->with('tip', $tip);




	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
