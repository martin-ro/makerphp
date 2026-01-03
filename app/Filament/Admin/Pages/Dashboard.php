<?php

declare(strict_types=1);

namespace App\Filament\Admin\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Override;
use ToneGabes\Filament\Icons\Enums\Phosphor;

class Dashboard extends Page
{
    protected string $view = 'filament.admin.pages.dashboard';

    protected static string|BackedEnum|null $navigationIcon = Phosphor::HouseDuotone;

    #[Override]
    protected function getHeaderWidgets(): array
    {
        return [
            //
        ];
    }
}
