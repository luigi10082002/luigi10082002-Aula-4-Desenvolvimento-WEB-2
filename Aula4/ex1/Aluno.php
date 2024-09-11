<?php

class Aluno {
    private $nome;
    private $nascimento;
    private $curso;
    private $matricula;

    public function __construct($nome, $nascimento, $curso, $matricula) {
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->curso = $curso;
        $this->matricula = $matricula;
    }

    public function idade() {
        $dataAtual = new DateTime();
        $dataNascimento = new DateTime($this->nascimento);
        $intervalo = $dataAtual->diff($dataNascimento);
        return $intervalo->y;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getMatricula() {
        return $this->matricula;
    }
}
?>
