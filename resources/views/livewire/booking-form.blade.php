<div>
    <form action="{{route('add-reservation')}}" method="post">
        @csrf
        <div class="col-md-6">
            <label class="form-label" for="check-in">Check In Date</label>
            <input wire:model="checkIn" wire:change="calculatePrice" class="form-control" type="date" id="check-in" name="check-in">
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label" for="check-out">Check Out Date</label>
            <input wire:model="checkOut" wire:change="calculatePrice" class="form-control" type="date" id="check-out" name="check-out">
        </div>
        <div class="col-md-6 mt-3">
            <label class="form-label" for="total-rooms">Total rooms</label>
            <input wire:model="totalRoom" wire:change="calculatePrice" class="form-control" type="number" id="total-rooms" name="total-rooms"
                   value="1">
        </div>
        <p class="card-text mt-4" style="color: black">Total price: {{$type->price * $multiplier}}</p>
        <input name="total-price" id="total-price" type="hidden" value="{{$type->price * $multiplier}}">
        <input name="type-name" id="type-name" type="hidden" value="{{$type->name}}">
        <button type="submit" class="btn btn-primary mt-3">Submit Booking
        </button>
    </form>
</div>
