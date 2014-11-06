<?php

class EntriesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /entries
	 *
	 * @return Response
	 */
	public function index(Mustdo $mustdo)
	{
		//return View::make('entries.index');
		$this->layout->content = View::make('entries.index', compact('mustdo'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /entries/create
	 *
	 * @return Response
	 */
	public function create(Mustdo $mustdo)
	{
		$this->layout->content = View::make('entries.create', compact('mustdo'));	
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /entries
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /entries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Mustdo $mustdo,Entry $entry)
	{
		$this->layout->content = View::make('entries.show', compact('mustdo', 'entry'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /entries/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Mustdo $mustdo,Entry $entry)
	{
		$this->layout->content = View::make('entries.edit', compact('mustdo', 'entry'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /entries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Mustdo $mustdo,Entry $entry)
	{
		//$this->layout->content = View::make('entries.update', compact('mustdo', 'entry'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /entries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Mustdo $mustdo,Entry $entry)
	{
		
	}

}