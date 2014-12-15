<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		if(Auth::check()) {

			return Redirect::to('profiles');

		} else {

			return View::make('users.login');
			
		}

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
		$validator = Validator::make(
            $data,
            [
                'email' => 'required|email|min:8',
                'password' => 'required',
            ]
        );

        if($validator->fails()){
            return Redirect::route('login')->withErrors($validator)->withInput();
        }

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return Redirect::to('profiles');
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
	public function profiles()
	{

		$users = User::all();
		$usersGroups = UsersGroup::all();

		$groups = [];
		foreach ($usersGroups as $group) {
			$groups[$group->id] = $group->name;
		}

		if(Auth::check() && $this->group(Auth::user()->id) === 1) {

			return View::make('users.profiles', compact('users', 'groups'));
			// return 'success';

		} else {

			return 'You don\'t have permission to access this page. Go back to <a href="' . URL::to('login') . '">Dashboard</a>';

		}

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return View::make('users.create');
		return Redirect::route('login');
	}

	/**
	 * Store new users data.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Save new user
		// return false; // turning off for now
		$input = Input::all();

		$validator = Validator::make(
            $input,
            [
                'email' => 'required|email',
                'name' 	=> 'required',
                'password' => 'required|min:8',
                'group' => 'required'
            ]
        );

        if($validator->fails()){
            return Redirect::route('profiles')->withErrors($validator)->withInput();
        }

		
		$data = Input::only(['email', 'name', 'group']);
		$data['password'] = Hash::make(Input::get('password'));

        $newUser = new User;
        $newUser->email = $data['email'];
        $newUser->name = $data['name'];
        $newUser->password = $data['password'];
        $newUser->group = $data['group'];
        $newUser->save();

        if($newUser){
            return Redirect::to('profiles');
        }

        return Redirect::route('profiles')->withInput();
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

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function group($id)
	{
		return User::find($id)->group;
	}

}
