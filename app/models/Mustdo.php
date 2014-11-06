<?php

class Mustdo extends \Eloquent {
	protected $fillable = [];

	public function entries()
	{
		return $this->hasMany('Entry');
	}
}