<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('اسم المنتج')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', str($state)->slug());
                    }),


                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true),


                Select::make('category_id')
                    ->label('التصنيف')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),


                FileUpload::make('cover_image')
                    ->label('صورة المنتج')
                    ->image()
                    ->disk('public')
                    ->directory('products')
                    ->visibility('public'),

                Textarea::make('description')
                    ->label('الوصف')
                    ->rows(5)
                    ->columnSpanFull(),


                TextInput::make('sort_order')
                    ->label('الترتيب')
                    ->numeric()
                    ->default(0),


                Toggle::make('is_active')
                    ->label('نشط')
                    ->default(true),

                Toggle::make('is_featured')
                    ->label('منتج مميز')
                    ->default(false),

            ]);
    }
}
