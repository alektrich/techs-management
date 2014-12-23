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
	 * @return array
	 */
	public static function getData() 
	{

		$locations = Location::all();

		$cities = [];

		foreach ($locations as $location) {
			$cities[$location->location] = $location->location;
		}

		$categories = Category::all();

		$names = [];

		foreach ($categories as $category) {
			$names[$category->name] = $category->name;
		}

		$priorities = Priority::all();

		$priors = [];

		foreach ($priorities as $priority) {
			$priors[$priority->priority] = $priority->priority;
		}

		return [ 'jobs' 		  => static::all(),
				 'technicians' => User::getTechnicians(),
				 'locations'   => $cities,
				 'categories'  => $names,
				 'priorities'  => $priors ];
	}
}