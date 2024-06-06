<div>
    <form action="">
        <label for="">Poll Title</label>

        <input type="text" wire:model="title" />

        <div class="mt-4">
            <button class="btn" wire:click.prevent="addOption">
                Add Option!
            </button>
        </div>

        <div class="mt-4">
            @foreach($options as $index => $option)
                <div>
                    {{$index}} - {{$option}}
                </div>
            @endforeach
        </div>

    </form>
</div>