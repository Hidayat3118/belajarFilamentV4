<?php

namespace App\Filament\Resources\Produks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ProdukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                ->required(),
                Textarea::make('deskripsi_produk')
                ->required(),
                TextInput::make('harga_produk')
                ->required()
                ->numeric(),
            ]);
    }
}
