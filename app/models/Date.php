<?php

class Date extends \Eloquent {
	protected $fillable = ['id','title','body','date','location','author','price'];
  protected $table = 'dates';
}