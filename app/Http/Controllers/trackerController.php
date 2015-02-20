<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\billTracker;
use Illuminate\Http\Request;







class trackerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

        $bike = new billTracker();

     	return view('tracker');
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
        //$amount = $request->input('amount');
        $amount = $request->input('amount');
        $restaurant = $request->input('restaurant');
        $tip = $request->input('tip');
        $result = $amount * $tip / 100;
        $total = round($amount) + round($result);

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
