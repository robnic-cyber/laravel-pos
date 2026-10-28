@extends('layouts.app', ['title' => 'Users'])
@section('content')
<h1>User Accounts</h1><p class="muted">{{ $users->count() }} user records from the database</p>
<table><thead><tr><th>#</th><th>Username</th><th>Full name</th></tr></thead><tbody>@forelse ($users as $user)<tr><td>{{ $user->id }}</td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>@empty<tr><td colspan="3">No users found.</td></tr>@endforelse</tbody></table>
@endsection
