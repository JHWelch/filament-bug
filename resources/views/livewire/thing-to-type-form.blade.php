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

    <a
        href="https://github.com/JHWelch/filament-bug/blob/main/app/Http/Livewire/ThingToTypeForm.php"
        class="text-blue-500 underline hover:text-blue-700"
    >
        The form's code can be found here
    </a>

    <form
        class="mt-10"
        wire:submit.prevent="submit"
    >
        {{ $this->form }}
    </form>
</div>
