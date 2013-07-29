<?php

	namespace App\Modules\Content\Controllers;

	class HomeController extends \BaseController {

		public function index()
		{
			return \View::make('content::home');
		}

	}