<?php

class News extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'titulo' => 'required',
    	'descricao' => 'required'
    );
}