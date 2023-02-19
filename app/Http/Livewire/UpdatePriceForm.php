<?php

namespace App\Http\Livewire;

use App\Models\RoomType;
use Livewire\Component;

class UpdatePriceForm extends Component
{
    public $selectedID = 1;
    public $room_types;

    public function updateSelectedID($id) {
        $this->selectedID = $id;
    }

    public function render()
    {
        $this->room_types = RoomType::all();
        return view('livewire.update-price-form');
    }
}
