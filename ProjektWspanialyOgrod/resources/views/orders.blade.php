@extends('layouts.app')

@section('content')
<h2>Twoje zamówienia</h2>
<table>
    <tr>
        <th>Data zamówienia</th>
        <th>Numer zamówienia</th>
        <th>Status zamówienia</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->id }}</td>
        <td>{{ $order->status }}</td>
    </tr>
    @endforeach
</table>

@endsection