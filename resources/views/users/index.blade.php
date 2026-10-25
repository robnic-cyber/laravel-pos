@extends('layouts.app', ['title' => 'Users'])
@section('content')
<h1>User Accounts</h1><p class="muted">{{ count($users) }} sample user records</p>
<table><thead><tr><th>#</th><th>Name</th><th>Email</th><th>Role</th></tr></thead><tbody>@foreach ($users as $user)<tr><td>{{ $user['id'] }}</td><td>{{ $user['name'] }}</td><td>{{ $user['email'] }}</td><td>{{ $user['role'] }}</td></tr>@endforeach</tbody></table>
@endsection
