<div class="max-w-lg p-10">
    <div class="prose">
        <h1 class="text-lg">To recreate bug</h1>
        <ol>
            <li>Pick any <strong>Type</strong> from first select.</li>
            <li>Click <strong>[Tab]</strong> key until <strong>Thing</strong> select is active</li>
            <li>Type a single character</li>
            <li>See that search is not filtering list.</li>
        </ol>

    </div>


    <form wire:submit.prevent="submit">
        {{ $this->form }}
    </form>
</div>
