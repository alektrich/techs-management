<?php

class UsersController extends BaseController {

	public function __construct() {

		$this->beforeFilter('auth', array('except' => array('login', 'handleLogin')));
		$this->beforeFilter('super.admin', array('except' => array('login', 'handleLogin', 'logout')));
	}

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
		$groups = User::getGroups();

		return View::make('users.profiles', compact('users', 'groups'));

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

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
            return Redirect::to('profiles')->withErrors($validator)->withInput();
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

        return Redirect::to('profiles')->withInput();
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
		$user = User::find($id);

		$this->data['id'] = $id;
		$this->data['name'] = $user->name;
		$this->data['email'] = $user->email;
		$this->data['group'] = $user->group;
		$usersGroups = UsersGroup::all();

		$this->data['groups'] = User::getGroups();

		return View::make('users.edit', $this->data);
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
		$input = Input::all();

		$validator = Validator::make(
            $input,
            [
                'email' => 'required|email',
                'name' 	=> 'required',
                'password' => 'min:8',
                'group' => 'required'
            ]
        );

        if($validator->fails()){
            return Redirect::route('profiles')->withErrors($validator)->withInput();
        }

		
		$data = Input::only(['email', 'name', 'group']);
		$data['password'] = Hash::make(Input::get('password'));

        $updateUser = User::find($id);
        $updateUser->email = $data['email'];
        $updateUser->name = $data['name'];
        $updateUser->password = $data['password'];
        $updateUser->group = $data['group'];
        $updateUser->save();

        return Redirect::to('profiles');

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
		User::find($id)->delete();
		return Redirect::to('profiles');
	}

}
