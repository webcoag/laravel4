<?php

Route::get('admin/content', Config::get('content::namespace_controller') . '\HomeController@index');