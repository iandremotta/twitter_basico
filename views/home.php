<div class="feed">
    <form action="" method="post">
        <textarea name="msg" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Enviar</button>
    </form>
    <?php foreach($feed as $item):?>
        <strong><?php echo $item['nome'] ?></strong> - <?php echo date('H:i', strtotime($item['data_post']));?>  <br>
        <?php echo $item['mensagem'];?>
        <hr>
    <?php endforeach ?>
</div>

<div class="rightside">
    <h1>Relacionamentos</h1>
    <div class="rs_meio"><?php echo $qt_seguidores; ?> <br>Seguidores</div>
    <div class="rs_meio"><?php echo $qt_seguindo;?> <br>Seguindo</div>
    <div style="clear:both"></div>

    <h4>Sugestões de amigos</h4>
    <table border="0" width="100%">
        <tr>
            <td width="80%"></td>
            <td></td>
        </tr>
        <?php foreach($sugestao as $usuario):?>
        <tr>
            <td><?php echo $usuario['nome']?></td>
            <td>
                <?php if ($usuario['seguido'] ==0):?>
                    <a href="home/seguir/<?php echo $usuario['id'];?>">Seguir</a>
                    <?php else:?>
                        <a href="home/desseguir/ <?php echo $usuario['id'];?>">Desseguir</a>
                    <?php endif;?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
