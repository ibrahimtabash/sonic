<?php

namespace App\Filament\Resources\Currencies;

use App\Filament\Resources\Currencies\Pages\CreateCurrency;
use App\Filament\Resources\Currencies\Pages\EditCurrency;
use App\Filament\Resources\Currencies\Pages\ListCurrencies;
use App\Filament\Resources\Currencies\Schemas\CurrencyForm;
use App\Filament\Resources\Currencies\Tables\CurrenciesTable;
use App\Models\Currency;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CurrencyResource extends Resource
{
    protected static ?string $model = Currency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('code')
                    ->label('Code')
                    ->required()
                    ->maxLength(3),

                TextInput::make('name')
                    ->label('Currency Name')
                    ->required(),

                TextInput::make('symbol')
                    ->label('Symbol')
                    ->required(),

                TextInput::make('country_code')
                    ->label('Country Code')
                    ->maxLength(2),

                Toggle::make('is_default')
                    ->label('Default Currency'),

                Toggle::make('is_active')
                    ->label('Active'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('code')
                    ->sortable(),

                TextColumn::make('name'),

                TextColumn::make('symbol'),

                TextColumn::make('country_code'),

                IconColumn::make('is_default')
                    ->boolean(),

                IconColumn::make('is_active')
                    ->boolean(),

            ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCurrencies::route('/'),
            'create' => CreateCurrency::route('/create'),
            'edit' => EditCurrency::route('/{record}/edit'),
        ];
    }
}
