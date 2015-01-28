<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$data['title'] = 'Home';
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('_main')->with('data', $data);
});

Route::get('529-savings', function()
{
	return View::make('529-savings');
});

Route::get('banking-101', function()
{
	return View::make('banking-101');
});

Route::get('creating-a-portfolio', function()
{
	return View::make('creating-a-portfolio');
});

Route::get('interesting-facts', function() 
{
	return View::make('interesting-facts');
});

Route::get('tic-tac-toe', function()
{
	return View::make('tic-tac-toe');
});

Route::get('jokes', function()
{
	return View::make('jokes');
});

