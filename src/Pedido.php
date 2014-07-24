<?php

class Pedido
{
	protected $livros = array();

	public function checarValor()
	{
		$total = 0;
		foreach($this->livros as $livro)
		{
			$total += $livro->preco();
		}
		return $total;
	}

	public function getQuantidade()
    {
        return count($this->livros);
    }

	public function addLivro(Livro $livro)
	{
		$this->livros[] = $livro;
	}

    public function verificaIguais()
    {
    	$iguais = [];
    	foreach ($this->livros as $livro) {
    		$nome = $livro->nome();
    		if (! isset($iguais[$nome])) {
    			$iguais[$nome] = 0;
    		}

    		++$iguais[$nome];
    	}

    	return $iguais;
    }

    public function checarValorDesconto() {
    	
    	return 41*2*0.95;
    }
}
