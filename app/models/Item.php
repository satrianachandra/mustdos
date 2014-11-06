<?php

class Item extends \Eloquent {
	//protected $fillable = [];
	protected $guarded = [];

	public function entry()
	{
		return $this->belongsTo('Entry');
	}
}