<?php

class Pedido
{
	protected $livros = array();
	public function getQuantidade()
    {
        return count($this->livros);
    }

	public function addLivro(Livro $livro)
	{
		$this->livros[] = $livro;
	}
    
}
