<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class KayneRest extends Component
{

    public $sentence = ["", "", "", "", ""];

    public function render()
    {
        $this->updateSentence();
        return view('livewire.kayne-rest');
    }

    public function updateSentence() {
        $quote = [];
        for($i = 0; $i < 5; $i ++) {
            $quote[$i] = Http::get('https://api.kanye.rest')['quote'];
        }
        $this->sentence = $quote;
    }
}
