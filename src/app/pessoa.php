<?php

namespace App;

class Pessoa{
    public function nomeCompleto(): string{
        $nome = $this->nome();
        $sobrenome = $this->sobrenome();

        return ucwords($nome . ' ' . $sobrenome);
    }

    private function nome(): string{
        return 'renan';
    }

    private function sobrenome(): string{
        return 'tescaro';
    }

    public function idade(): string{
        $dataNascimento = $this->dataNascimento();
        $anoAtual = date('Y');
        $diferenca = $anoAtual - $dataNascimento->format('Y');
        return $diferenca;
    }

    private function dataNascimento(): \DateTime{
        $data = new \DateTime('26-06-1996');
        return $data;
    }
}
