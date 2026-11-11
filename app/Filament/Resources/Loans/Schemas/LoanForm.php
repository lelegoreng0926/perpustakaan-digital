<?php

namespace App\Filament\Resources\Loans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class LoanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('user_id')
                ->label('Nama Siswa')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),

            Select::make('book_id')
                ->label('Judul Buku')
                ->relationship('book', 'title')
                ->searchable()
                ->required(),

            DatePicker::make('loan_date')
                ->label('Tanggal Pinjam')
                ->required(),

            DatePicker::make('due_date')
                ->label('Batas Pengembalian')
                ->required(),

            Select::make('status')
                ->options([
                    'dipinjam' => 'Dipinjam',
                    'dikembalikan' => 'Dikembalikan',
                ])
                ->required(),
        ]);
    }
}