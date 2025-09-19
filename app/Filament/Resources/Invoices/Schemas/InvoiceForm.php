<?php

namespace App\Filament\Resources\Invoices\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_id')
                    ->required()
                    ->numeric(),
                TextInput::make('guest_id')
                    ->required()
                    ->numeric(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('currency')
                    ->required()
                    ->default('USD'),
                DateTimePicker::make('paid_at'),
                TextInput::make('payment_method'),
                Select::make('status')
                    ->options(['unpaid' => 'Unpaid', 'paid' => 'Paid', 'refunded' => 'Refunded'])
                    ->default('unpaid')
                    ->required(),
            ]);
    }
}
