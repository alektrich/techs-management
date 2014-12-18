<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = ['name','email','password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Get users groups
	 *
	 * @return array
	 */
	public static function getGroups() {
		
		$usersGroups = UsersGroup::all();

		$groups = [];

		foreach ($usersGroups as $group) {

			$groups[$group->id] = $group->name;

		}

		return $groups;

	}

}
