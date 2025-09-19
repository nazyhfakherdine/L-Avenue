<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('rate')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(['available' => 'Available', 'occupied' => 'Occupied', 'maintenance' => 'Maintenance'])
                    ->default('available')
                    ->required(),
                TextInput::make('capacity')
                    ->required()
                    ->numeric()
                    ->default(1),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
