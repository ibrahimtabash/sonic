<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('الصورة'),

                TextColumn::make('name')
                    ->label('المنتج')
                    ->searchable()
                    ->sortable(),


                TextColumn::make('category.name')
                    ->label('التصنيف')
                    ->sortable(),


                IconColumn::make('is_active')
                    ->label('نشط')
                    ->boolean(),


                TextColumn::make('sort_order')
                    ->label('الترتيب')
                    ->sortable(),


                TextColumn::make('created_at')
                    ->label('تاريخ الإضافة')
                    ->date(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
