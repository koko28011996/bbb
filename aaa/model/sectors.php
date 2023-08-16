<?php
function insertdm($name){
    $sql= " INSERT INTO `sectors`( `name`) VALUES ('$name')";
    pdo_execute($sql);
}
function load_all(){
    $sql = "select * from `sectors` order by name";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function load_one($id){
    $sql = "SELECT * FROM `sectors` WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;


}
function xoadm($id){
    $sql = "DELETE FROM `sectors` WHERE id=".$id;
    pdo_execute($sql);

}
function update_dm($id,$name){
    $sql = "UPDATE `sectors` SET name='".$name."' WHERE id=".$id;
    pdo_execute($sql);
}
function load_4dm(){
     $sql="SELECT * FROM sectors LIMIT 4";
     $listdanhmuc=pdo_query($sql);
     return $listdanhmuc;

}

function load_6dm(){
    $sql="SELECT * FROM sectors LIMIT 6";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;

}






?>