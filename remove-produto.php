<?php require_once ("cabecalho.php");
      require_once ("banco-produto.php");
      require_once  'logica-usuario.php';
      
$_SESSION["success"] = "Produto removido com sucesso";
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php");
die();
?>
