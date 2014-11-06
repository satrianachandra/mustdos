<?php

class Entry extends \Eloquent {
	protected $fillable = [];

	public function mustdo()
	{
		return $this->belongsTo('Mustdo');
	}

	public function items()
	{
		return $this->hasMany('Item');
	}
}