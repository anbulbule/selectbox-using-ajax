<?php
    $conn = new mysqli("localhost", "root", "", "country_state") or die("connection failed");

    $sql = "select * from country";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $str = "";
        while($rows = $result->fetch_assoc()){
            $str .="<option value='$rows[cid]'> $rows[cname] </option>";
        }
    }

    if(isset($_POST['cid'])){
        $cid = $_POST['cid'];

        $sql = "select * from state where cid='$cid' ";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $str = "";
            while($rows = $result->fetch_assoc()){
                $str .="<option value='$rows[sid]'> $rows[sname] </option>";
            }
        }
    }

    echo $str;

?>