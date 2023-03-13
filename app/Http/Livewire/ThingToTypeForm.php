<?php

namespace App\Http\Livewire;

use App\Models\Thing;
use App\Models\Type;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms;
use Livewire\Component;

class ThingToTypeForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $type_id;
    public $thing_id;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Select::make('type_id')
                ->options(function () {
                    return Type::orderBy('name')
                        ->pluck('name', 'id');
                })
                ->label('Type')
                ->required(),

            Forms\Components\Select::make('thing_id')
                ->options(function ($get) {
                    return Thing::where('type_id', $get('type_id'))
                        ->orderBy('name')
                        ->pluck('name', 'id');
                })
                ->searchable()
                ->label('Thing')
                ->required(),
        ];
    }

    public function render()
    {
        return view('livewire.thing-to-type-form');
    }
}
