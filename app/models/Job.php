<?php

class Job extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'jobs';

	/**
	 * Get all data needed for creating a job 
	 *
	 */
	public static function getData() 
	{

		$jobs = static::all();
		$technicians = User::getTechicians();
		$locations = Location::all();
		$categories = Category::all();
		
		return array(
			'jobs' => $jobs,
			'technicians' => $technicians,
			'locations' => $locations,
			'categories' => $categories
		);

	}

}