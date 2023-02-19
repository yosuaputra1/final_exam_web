@extends('admin.index')
@section('content')
    <div class="row no-gutters">
        <h1>Rooms</h1>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Room Number</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$room->name}}</td>
                    <td>{{$room->type->name}}</td>
                    <td><a class="text-danger" href="">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        {{ $rooms->links() }}--}}

        <h2 class="mt-5">Add New Room</h2>
        <h5>Select room type:</h5>
        <form action="{{route('admin-add-room')}}" method="post">
            @csrf
            <div class="col">
                @foreach ($room_types as $type)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="room-type" value="{{$type->name}}"
                               id="{{$type->id}}" {{ ($loop->index == 0)? "checked" : "" }}>
                        <label class="form-check-label" for="{{$type->id}}">
                            {{$type->name}}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3 mt-3">
                <label class="form-label" for="room-number">Room number</label>
                <input class="form-control" type="text" id="room-number" name="room-number" placeholder="#####">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
