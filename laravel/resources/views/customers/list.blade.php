@extends('layout.temp')

@section('add-to-head')
<script src="" ></script>
@endsection

@section('content')
<h1>Customer List</h1>
<p>This is the customer list page.</p>

<table>
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Surname</td>
    <td>Birth Year</td>
</tr>

@foreach($customers as $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->surname }}</td>
        <td>{{ $customer->birthYear }}</td>
    </tr>
@endforeach
</table>
@endsection
