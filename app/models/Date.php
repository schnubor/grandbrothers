<?php

class Date extends \Eloquent {
	protected $fillable = ['id','city','country','date','location'];
  protected $table = 'dates';
}