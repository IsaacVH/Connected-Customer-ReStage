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

// This will bring up the homepage.
Route::get('/', function()
{
	$data['title'] = 'Home';
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/_main')->with('data', $data);
});


// Route for 529-savings.
Route::get('529-savings', function()
{
	$data['title'] = '529 Savings';
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/529-savings')->with('data', $data);
});


// Route for banking-101.
Route::get('banking-101', function()
{
	$data['title'] = "Banking 101";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/banking-101')->with('data', $data);
});


// Route for creating a portfolio.
Route::get('creating-a-portfolio', function()
{
	$data['title'] = "Creating a Portfolio";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/creating-a-portfolio')->with('data', $data);
});


// Route for games page.
Route::get('games', function() 
{
	$data['title'] = "Games";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/games')->with('data', $data);
});

// Route for interesting facts in games.
Route::get('games/interesting-facts', function() 
{
	$data['title'] = "Interesting Facts";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/interesting-facts')->with('data', $data);
});


// Route for joke telling in games.
Route::get('games/jokes', function()
{
	$data['title'] = "Read a Few Jokes";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/jokes')->with('data', $data);
});


// Route for killing time.
Route::get('killing-time', function()
{
	$data['title'] = "Killing Time";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/killing-time')->with('data', $data);
});


// Route for Local Attractions
Route::get('local-attractions', function()
{
	$data['title'] = "Local Attractions";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/local-attractions')->with('data', $data);
});


// Route for Sending Mail
Route::get('send-mail', function()
{
	$data['title'] = "Send Some Mail";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/send-mail')->with('data', $data);
});

// Route for Teaching Children
Route::get('teaching-children', function()
{
	$data['title'] = "Teaching Children How to Save";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/teaching-children')->with('data', $data);
});

// Route for tic-tac-toe in games.
Route::get('games/tic-tac-toe', function()
{
	$data['title'] = "Tic Tac Toe";
	$data['header'] = View::make('templates/header');
	$data['footer'] = View::make('templates/footer');
	return View::make('pages/tic-tac-toe')->with('data', $data);
});

