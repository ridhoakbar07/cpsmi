<?php
namespace App\Filament\Pages\Auth;

use Coderflex\FilamentTurnstile\Forms\Components\Turnstile;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as AuthRegister;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Register extends AuthRegister
{
    /**
     * @return array<int|string, string|Form>
     */
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        Turnstile::make('captcha')
                            ->label('Captcha')
                            ->theme('auto')
                            ->size('flexible'),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function handleRegistration(array $data): Model
    {
        $user = $this->getUserModel()::create($data);
        $user->assignRole('user'); 
        return $user;
    }

    protected function onValidationError(ValidationException $exception): void
    {
        $this->dispatch('reset-captcha');

        // Perform additional actions as necessary (e.g., display error messages)
    }
}