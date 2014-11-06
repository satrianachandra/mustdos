<?php

class Item extends \Eloquent {
	protected $fillable = [];

	public function entry()
	{
		return $this->belongsTo('Entry');
	}
}