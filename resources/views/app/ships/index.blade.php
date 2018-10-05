@extends('layouts.app')
@section('content')
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Cargo</th>
            <th>Crew</th>
            <th>Speed</th>
            <th>Cannons</th>
            <th>Price</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($ships as $ship)
            <tr>
                <td class="p-4">{{ $ship->name }}</td>
                <td class="p-4">{{ $ship->cargo }}</td>
                <td class="p-4">{{ $ship->crew }}</td>
                <td class="p-4">{{ $ship->speed }}</td>
                <td class="p-4">{{ $ship->cannons }}</td>
                <td class="p-4">{{ $ship->price }}</td>
                <td class="p-4">
                    <button class="btn btn-primary">Buy</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection