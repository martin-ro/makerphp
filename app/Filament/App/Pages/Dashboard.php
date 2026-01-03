<?php

namespace App\Filament\App\Pages;

use BackedEnum;
use Filament\Pages\Page;
use ToneGabes\Filament\Icons\Enums\Phosphor;

class Dashboard extends Page
{
    protected string $view = 'filament.app.pages.dashboard';

    protected static string|BackedEnum|null $navigationIcon = Phosphor::HouseDuotone;
}
