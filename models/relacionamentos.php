<?php
class relacionamentos extends model{

    public function seguir($seguidor, $seguido){
        $sql = "INSERT INTO relacionamentos SET id_seguidor ='$seguidor', id_seguido = '$seguido'";
        $this->db->query($sql);
        echo "Erro";
    }
}