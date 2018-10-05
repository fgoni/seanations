@extends('layouts.app')

@section('content')
    <div class="container mx-auto mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="md:w-2/3 pr-4 pl-4">
                <div class="col">
                    <i class="fa fa-user">City</i>
                    <span>Gold: ${{ $user->city->gold }}</span>
                </div>
                <div class="col">
                    <i class="fa fa-lifevest"></i> Fleet
                    <span>{{ $user->ships->count() }} ships</span>
                    <a href="{{ route('ships.index') }}">Buy ship</a>
                    <table>
                        <tbody>
                        @foreach($user->ships as $ship)
                            <tr>
                                <td>{{ $ship->name }}</td>
                                <td>{{ $ship->cargo }}</td>
                                <td>{{ $ship->crew }}</td>
                                <td>{{ $ship->speed }}</td>
                                <td>{{ $ship->cannons }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
