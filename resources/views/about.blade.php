@extends('layouts.app', ['title' => 'About'])
@section('content')
<h1>About the application</h1><p>This POS application demonstrates the Laravel MVC pattern. Routes select controller methods, controllers retrieve Eloquent models, and Blade views render the response.</p><p class="muted">Customer and user records are stored in and retrieved from the database.</p>
@endsection
