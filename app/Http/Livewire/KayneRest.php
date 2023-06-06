<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Pool;

class KayneRest extends Component
{

    public $sentence = ["", "", "", "", ""];

    public function render()
    {
        return view('livewire.kayne-rest');
    }

    public function mount()
    {
        $this->updateSentence();
    }
    
    public function updateSentence() {
        $quote = [];
        $quote = Http::pool(fn (Pool $pool) => [
            $pool->get('https://api.kanye.rest'),
            $pool->get('https://api.kanye.rest'),
            $pool->get('https://api.kanye.rest'),
            $pool->get('https://api.kanye.rest'),
            $pool->get('https://api.kanye.rest'),
        ]);
        for($i = 0; $i < 5; $i ++) {
            $this->sentence[$i] = $quote[$i]->json();
        }
        
    }
}
