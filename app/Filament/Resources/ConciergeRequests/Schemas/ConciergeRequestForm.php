<?php

namespace App\Filament\Resources\ConciergeRequests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ConciergeRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('guest_id')
                    ->required()
                    ->numeric(),
                TextInput::make('booking_id')
                    ->numeric(),
                TextInput::make('subject')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['open' => 'Open', 'in_progress' => 'In progress', 'closed' => 'Closed'])
                    ->default('open')
                    ->required(),
                Select::make('priority')
                    ->options(['low' => 'Low', 'medium' => 'Medium', 'high' => 'High'])
                    ->default('medium')
                    ->required(),
            ]);
    }
}
