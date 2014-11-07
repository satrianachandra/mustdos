<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::only(['first_name','last_name','email','password']);
		$validator = Validator::make(
            $data,
            [
                'email' => 'required|email|min:8',
                'password' => 'required',
            ]
        );

        if($validator->fails()){
            return Redirect::route('user.create')->withErrors($validator)->withInput();
        }

        $newUser = User::create(array(
        			'first_name' => Input::get('first_name'),
        			'last_name' => Input::get('last_name'),
					'email' => Input::get('email'),
	                'password' => Hash::make(Input::get('password'))
	       			));	
					


        $newUser = User::create($data);
        if($newUser){
            Auth::login($newUser);
            return Redirect::route('profile');
        }

        return Redirect::route('user.create')->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
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
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login(){
		return View::make('users.login');
	}

	public function handleLogin(){
		$data = Input::only(['email', 'password']);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return Redirect::to('/');
        }

        return Redirect::route('login')->withInput();

	}

	public function logout(){
		if(Auth::check()){
  			Auth::logout();
		}
 		return Redirect::route('login');
	}

	public function profile(){
		return View::make('users.profile');
	}

}