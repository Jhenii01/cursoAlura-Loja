<?php

/**
 * Description of Produto
 *
 * @author Jhenifer Santos
 */
class Produto {

    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $categoria;
    private $usado;

    function __construct($nome, $preco, $descricao, $categoria, $usado) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->categoria = $categoria;
        $this->usado = $usado;
    }

    function _toString() {
        return $this->nome . ": R$" . $this->preco;
    }

    function __destruct() {
        echo "Destruindo o produto " . $this->getNome();
    }

    public function precoComDesconto($valor = 0.1) {
        if ($valor > 0 && $valor <= 0.5) {
            return $this->preco - ($this->preco * $valor);
        }
        return $this->preco;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getUsado() {
        return $this->usado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsado($usado) {
        $this->usado = $usado;
    }

}
