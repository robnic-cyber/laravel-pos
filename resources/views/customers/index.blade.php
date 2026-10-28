@extends('layouts.app', ['title' => 'Customers'])
@section('content')
<h1>Customer Accounts</h1><p class="muted">{{ $customers->count() }} customer records from the database</p>
<table><thead><tr><th>#</th><th>Full name</th><th>Email</th><th>Phone</th></tr></thead><tbody>@forelse ($customers as $customer)<tr><td>{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>@empty<tr><td colspan="4">No customers found.</td></tr>@endforelse</tbody></table>
@endsection
