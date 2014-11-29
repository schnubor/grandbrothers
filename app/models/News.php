<?php

class News extends \Eloquent {
	protected $fillable = ['id','title','author','body'];
  protected $table = 'news';
}