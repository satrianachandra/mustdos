<?php

class ItemsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /items
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('items.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /items/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /items
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//public function show($id)
	public function show(Mustdo $mustdo,Entry $entry, Item $item)
	{
		$this->layout->content = View::make('items.show', compact('item'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /items/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Item $item)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Item $item)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /items/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Item $item)
	{
		//
	}

}