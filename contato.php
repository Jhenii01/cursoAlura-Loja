<?php require_once 'cabecalho.php'; ?>
<form action="envia-contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td> <input class="form-control" name="nome" type="text" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input class="form-control" name="email" type="email"></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea class="form-control" name="mensagem" ></textarea></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Enviar</button></td>
        </tr>
    </table>
</form>

<?php require_once 'rodape.php'; ?>