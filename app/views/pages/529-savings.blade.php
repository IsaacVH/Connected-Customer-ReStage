@extends('layouts.master')

@section('title')529 Savings @stop
@section('content')
	<div class="headbox"><h2>529 Savings Content</h2></div>
	@include('carousel', array('some'=>'data'))
@stop

