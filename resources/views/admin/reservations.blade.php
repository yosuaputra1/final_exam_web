@extends('admin.index')
@section('content')
    <div class="row no-gutters">
        <h1>Reservations</h1>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">Reservation ID</th>
                <th scope="col">Guest Name</th>
                <th scope="col">Room Number</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($reservations as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->user->name}}</td>
                    <td>{{$data->room->name}}</td>
                    <td>{{$data->check_in}}</td>
                    <td>{{$data->check_out}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--        {{ $rooms->links() }}--}}
    </div>
@endsection
