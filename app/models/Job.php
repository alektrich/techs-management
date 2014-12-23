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
		return ['jobs' 		  => static::all(),
				'technicians' => User::getTechnicians(),
				'locations'   => Location::all()->lists('location'),
				'categories'  => Category::all()->lists('name'),
				'priorities'  => Priority::all()->lists('priority')];
	}

}