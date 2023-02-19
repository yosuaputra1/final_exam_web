<div>
    <form action="{{route('admin-room-types-update-post', ['id' => $selectedID])}}" method="post">
        @csrf
        <div class="col">
            @foreach ($room_types as $type)
                <div class="form-check form-check-inline">
                    <input wire:click="updateSelectedID({{$type->id}})" class="form-check-input" type="radio" name="room-type" id="{{$type->id}}" {{ ($loop->index == 0)? "checked" : "" }}>
                    <label class="form-check-label" for="{{$type->id}}">
                        {{$type->name}}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="col-md-3 mt-3">
            <label class="form-label" for="room-price">New price</label>
            <input class="form-control" type="text" id="room-price" name="room-price" placeholder="Type amount in $">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Apply</button>
    </form>
</div>
