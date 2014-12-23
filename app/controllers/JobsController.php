<?php

class JobsController extends \BaseController {

	public function __construct() {

		$this->beforeFilter('auth');
		$this->beforeFilter('csrf', array('on' => 'post'));

	}

	/**
	 * Display a listing of the jobs.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$data = Job::getData();
		return View::make('jobs.index', $data);
	}


	/**
	 * Store a newly created job in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input = Input::all();
		
		$validator = Validator::make(
            $input,
            [
                'title' 		=> 'required|min:5',
                'description' 	=> 'required',
                'category' 	=> 'required',
                'assigned_to' 	=> 'required',
                'location' 		=> 'required',
                'priority'		=> 'required'
            ]
        );

        if($validator->fails()){
            return Redirect::to('jobs')->withErrors($validator)->withInput();
        }

        $newJob = new Job;
        $newJob->title = $input['title'];
        $newJob->description = $input['description'];
        $newJob->category = $input['category'];
        $newJob->assigned_to = (int)$input['assigned_to'];
        $newJob->location = $input['location'];
        $newJob->priority = $input['priority'];
        $newJob->save();

        if($newJob){
            return Redirect::to('jobs');
        }

        return Redirect::to('jobs')->withInput();
	}


	/**
	 * Display the specified job.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		
		$job = Job::find($id);
		return View::make('jobs.show', compact('job'));
	}


	/**
	 * Show the form for editing the specified job.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$data = Job::getData();
		$job = Job::find($id);
		return View::make('jobs.edit', compact('job', 'data'));
	}


	/**
	 * Update the specified job in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		dd(Input::all());
	}


	/**
	 * Remove the specified job from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
