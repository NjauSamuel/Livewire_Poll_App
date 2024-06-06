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
                    <label for="">
                        Option {{ $index + 1}}
                    </label>

                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{$index}}" />
                        <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
                    </div>

                </div>                

            @endforeach
        </div>

    </form>
</div>