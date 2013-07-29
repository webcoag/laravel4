<?php

class Banner extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'url' => 'required:link',
    	'descricao' => 'required'
    );
}