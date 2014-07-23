<?php

class Livro
{
	private $nome;
	private $preco;

	public function __construct($titulo, $valor)
	{
		$this->nome = $titulo;
		$this->preco = $valor;
	}

	public function nome() {
		return $this->nome;
	}

    public function preco()
    {
        return $this->preco;
    }

}
