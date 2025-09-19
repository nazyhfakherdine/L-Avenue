<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('guest_id')
                    ->required()
                    ->numeric(),
                TextInput::make('room_id')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('checkin')
                    ->required(),
                DateTimePicker::make('checkout')
                    ->required(),
                Select::make('status')
                    ->options([
            'pending' => 'Pending',
            'confirmed' => 'Confirmed',
            'cancelled' => 'Cancelled',
            'completed' => 'Completed',
        ])
                    ->default('pending')
                    ->required(),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
            ]);
    }
}
