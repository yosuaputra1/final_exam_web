<?php

namespace App\Http\Livewire;

use DateTime;
use Livewire\Component;

class BookingForm extends Component
{
    public $type;
    public $multiplier = 1;
    public $checkIn = '';
    public $checkOut = '';
    public $totalRoom = 1;

    public function calculatePrice() {
        $checkOutTime = new DateTime($this->checkOut);
        $checkInTime = new DateTime($this->checkIn);
        $date_diff = $checkOutTime->diff($checkInTime)->format("%a");

        $this->multiplier = (int)$this->totalRoom * $date_diff;
    }


    public function render()
    {
        return view('livewire.booking-form');
    }
}
