<?php
function isert_acount($user,$pass,$dress,$phone,$email,$role,$filename){
    $sql = " INSERT INTO `account`( `user`, `pass`, `email`, `dress`, `phone`,`role`,`img`) VALUES ('$user','$pass','$email','$dress','$phone','$role','$filename')";
    pdo_execute($sql);
}
function isert_acountclien($user,$pass,$dress,$phone,$email){
    $sql = " INSERT INTO `account`( `user`, `pass`, `email`, `dress`, `phone`) VALUES ('$user','$pass','$email','$dress','$phone')";
    pdo_execute($sql);
}
function checkacount($user,$pass){
    $sql = "select * from account where user='$user' and pass='$pass'";
    $user = pdo_query_one($sql);
    return $user;



}
function list_account(){
    $sql = "select * from account order by id desc";
    $listaccount=pdo_query($sql);
    return $listaccount;
}
function delete_account($id){
    $sql = "delete from account where id=".$id;
    pdo_execute($sql);
}
function loadone_account($id){
    $sql="select * from account where id=".$id;
    $ac=pdo_query_one($sql);
    return $ac;
}

function updateac($user,$pass,$email,$dress,$phone,$role,$id){
    $sql = "UPDATE `account` SET `user`='$user',`pass`='$pass',`email`='$email',`dress`='$dress',`phone`='$phone',`role`='$role' WHERE id=".$id;
    pdo_execute($sql);

}








?>