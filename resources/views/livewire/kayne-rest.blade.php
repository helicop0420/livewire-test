
<div wire:poll.60s="updateSentence" >
    <x-jet-button class="ml-4 mt-5" wire:click="updateSentence">
        Refresh
    </x-jet-button>
    @if ($sentence[0])
    <ul class="mt-4 ml-4 pl-3">
        <li>{{$sentence[0]["quote"]}}</li>
        <li>{{$sentence[1]["quote"]}}</li>
        <li>{{$sentence[2]["quote"]}}</li>
        <li>{{$sentence[3]["quote"]}}</li>
        <li>{{$sentence[4]["quote"]}}</li>
    </ul>
    @endif
</div>
