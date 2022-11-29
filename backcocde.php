<?php
    $conn = new mysqli("localhost", "root", "", "country_state") or die("connection failed");


    if(isset($_POST['type'])==""){
        $sql= "select * from country";
        $result= $conn->query($sql);
        if($result->num_rows>0){
            $str="";
            while($row = $result->fetch_assoc()){
                $str .= "<option value='$row[cid]'> $row[cname] </option>";
            }
        } 
    }else if(isset($_POST['type'])=="stateData"){

        $sql= "select * from state where cid='$_POST[id]'";
        $result= $conn->query($sql);
        if($result->num_rows>0){
            $str="";
            while($row = $result->fetch_assoc()){
                $str .= "<option value='$row[sid]'> $row[sname] </option>";
            }
        } 
    }
    
    echo($str) ;


?>