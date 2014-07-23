<?php

class Livro
{
	private $preco;

	public function __construct($valor)
	{
		$this->preco = $valor;
	}

    public function preco()
    {
        return $this->preco;
    }

}
