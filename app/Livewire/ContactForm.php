<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    #[Rule('required|string|min:3')]
    public string $name = '';

    #[Rule('required|email')]
    public string $email = '';

    #[Rule('required|string|min:10')]
    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        $this->validate();

        Mail::raw(
            "Nome: {$this->name}\nEmail: {$this->email}\n\nMensagem:\n{$this->message}",
            function ($mail): void {
                $mail
                    ->to(config('mail.from.address'))
                    ->replyTo($this->email, $this->name)
                    ->subject('Novo contato do portfólio de economista');
            }
        );

        $this->reset(['name', 'email', 'message']);
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
