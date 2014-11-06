<?php

class Mustdo extends \Eloquent {
	//protected $fillable = [];
	protected $guarded = [];

	public function entries()
	{
		return $this->hasMany('Entry');
	}
}