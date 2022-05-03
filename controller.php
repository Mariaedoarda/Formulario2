<?php
include("pessoa.class.php");

$pessoa = new Pessoa();

$pessoa -> setNome($_GET ['txtNome']);
echo "Nome: " . $pessoa -> getNome() . "<br>";

$pessoa -> setEndereco($_GET ['txtEndereco']);
echo "Endereço: " . $pessoa -> getEndereco(). "<br>";

$pessoa -> setBairro($_GET ['txtBairro']);
echo "Bairro: " . $pessoa -> getBairro(). "<br>";

$pessoa -> setCep($_GET ['txtCep']);
echo "Cep: " . $pessoa -> getCep(). "<br>";

?>