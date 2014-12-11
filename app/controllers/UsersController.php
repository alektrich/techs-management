<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('users.login');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function handleLogin()
	{
		// Login user
		$data = Input::only(['email', 'password']);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return Redirect::to('jobs');
        }

        return Redirect::route('login')->withInput();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function logout()
	{
		if(Auth::check()){
		  Auth::logout();
		}
		return Redirect::route('login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store new users data.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Save new user

		$data = Input::all();
		$data['group'] = 1; // Tehnician by default
		dd($data);
        $newUser = User::create($data);
        if($newUser){
            Auth::login($newUser);
            return Redirect::route('jobs');
        }

        return Redirect::route('user.create')->withInput();
	}


	/**
	 * Display user profile.
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
