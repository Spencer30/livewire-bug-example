<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewOne extends Component
{
    public $input;

    public function handleClick()
    {
        error_log($this->input);
        $this->input = "";
    }
    public function render()
    {
        return view('livewire.view-one');
    }
}
