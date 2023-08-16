<?php
function insert_comment($id_user,$id_product,$date_comment,$Content){
    $sql=" INSERT INTO `comment`( `id_user`, `id_product`, `date_comment`, `Content`) VALUES ('$id_user','$id_product','$date_comment','$Content')";
    echo $sql;
        pdo_execute($sql);
    }
    function list_bl($id_product){
        $sql = "select * from comment where id_product='$id_product' order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function load_all_comment(){
        $sql = "select * from comment order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function xoabl($id){
        $sql = "DELETE FROM `comment` WHERE id=".$id;
        pdo_execute($sql);
    
    }
    

?>