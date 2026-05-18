<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index()
    {
        return view('pages.contato');
    }

    public function enviar(Request $request)
    {
        $validated = $request->validate([
            'nome'     => 'required|min:3|max:100',
            'empresa'  => 'required|max:100',
            'email'    => 'required|email',
            'telefone' => 'nullable|max:20',
            'assunto'  => 'required',
            'mensagem' => 'required|min:10|max:2000',
        ], [
            'nome.required'     => 'O nome é obrigatório.',
            'nome.min'          => 'O nome deve ter pelo menos 3 caracteres.',
            'empresa.required'  => 'O nome da empresa é obrigatório.',
            'email.required'    => 'O email é obrigatório.',
            'email.email'       => 'Informe um email válido.',
            'assunto.required'  => 'Selecione um assunto.',
            'mensagem.required' => 'A mensagem é obrigatória.',
            'mensagem.min'      => 'A mensagem deve ter pelo menos 10 caracteres.',
        ]);

        Mail::send([], [], function ($message) use ($validated) {
            $message->to('financeiro@aliancaadministracao.com')
                ->subject("Contato via Site — {$validated['assunto']} — {$validated['nome']}")
                ->setBody(
                    "Nome: {$validated['nome']}\n" .
                    "Empresa: {$validated['empresa']}\n" .
                    "Email: {$validated['email']}\n" .
                    "Telefone: " . ($validated['telefone'] ?? 'Não informado') . "\n" .
                    "Assunto: {$validated['assunto']}\n\n" .
                    "Mensagem:\n{$validated['mensagem']}",
                    'text/plain'
                );
        });

        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso! Retornaremos em breve.');
    }
}
