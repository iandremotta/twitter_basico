<h2>Tela de cadastro</h2>

<form action="" method="post">

    Nome: <br>
    <input type="text" name="nome" id="nome"> <br><br>
    Email: <br>
    <input type="email" name="email" id="email"> <br><br>
    Senha: <br>
    <input type="password" name="senha" id="senha"> <br><br>
    <input type="submit" value="Entrar">
    <a href="/login">Voltar</a> <br><br>

    <?php
    if(!empty($aviso)){
        echo $aviso;
    }
    ?>
</form>