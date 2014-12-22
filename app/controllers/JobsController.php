<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of the jobs.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$jobs = Job::all();
		return View::make('jobs.index', compact('jobs'));
	}


	/**
	 * Show the form for creating a new job.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('jobs.create');
	}


	/**
	 * Store a newly created job in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		return View::make('jobs.edit');
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
