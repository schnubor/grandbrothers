<?php

class Image extends \Eloquent {
	protected $fillable = ['id','filename','section'];
	protected $table = 'images';
}
