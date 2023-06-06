
<div wire:poll.60s="updateSentence" >
    <x-jet-button class="ml-4 mt-5" wire:click="updateSentence">
        Refresh
    </x-jet-button>
    @if ($sentence[0])
    <ul class="mt-4 ml-4 pl-3">
        <li>{{$sentence[0]}}</li>
        <li>{{$sentence[1]}}</li>
        <li>{{$sentence[2]}}</li>
        <li>{{$sentence[3]}}</li>
        <li>{{$sentence[4]}}</li>
    </ul>
    @endif
</div>
