<?php

declare(strict_types=1);

namespace App\Filament\App\Pages\Auth;

use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Override;

class Register extends BaseRegister
{
    #[Override]
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }

    #[Override]
    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label(__('filament-panels/auth/pages/register.form.name.label'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }
}
