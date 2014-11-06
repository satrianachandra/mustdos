<?php

class MustdosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /mustdos
	 *
	 * @return Response
	 */
	public function index()
	{
		$mustdos = Mustdo::all(); 
		return $this->layout->content = View::make('mustdos.index',compact('mustdos'));
		//return View::make('mustdos.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /mustdos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->layout->content = View::make('mustdos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /mustdos
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /mustdos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//public function show($id)
	public function show(Mustdo $mustdo)

	{
		$this->layout->content = View::make('mustdos.show', compact('mustdo'));		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /mustdos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Mustdo $mustdo)
	{
		$this->layout->content = View::make('mustdos.edit', compact('mustdo'));		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /mustdos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Mustdo $mustdo)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /mustdos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Mustdo $mustdo)
	{
		//
	}

}