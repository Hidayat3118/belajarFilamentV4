<?php

namespace App\Filament\Resources\Produks\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Filters\Filter;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class ProduksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->searchable()
                ->sortable(),
                TextColumn::make('deskripsi_produk')
                ->sortable(),
                TextColumn::make('harga_produk')
                ->sortable(),
            ])
            ->filters([
                Filter::make('harga di atas_5000')
                ->query(fn($query) => $query->where('harga_produk', '>', 5000))
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
