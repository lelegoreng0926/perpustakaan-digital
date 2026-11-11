<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()?->role === 'admin';
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Buku', Book::count())->color('primary'),
            Stat::make('Total Pengguna', User::count())->color('primary'),
            Stat::make('Total Peminjaman', Loan::count())->color('primary'),
            Stat::make('Peminjaman Aktif', Loan::where('status', 'dipinjam')->count())->color('primary'),
        ];
    }
}

