@extends('layouts.app', ['title' => 'Customers'])
@section('content')
<h1>Customer Accounts</h1><p class="muted">{{ count($customers) }} sample customer records</p>
<table><thead><tr><th>#</th><th>Name</th><th>Email</th><th>Phone</th></tr></thead><tbody>@foreach ($customers as $customer)<tr><td>{{ $customer['id'] }}</td><td>{{ $customer['name'] }}</td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td></tr>@endforeach</tbody></table>
@endsection
