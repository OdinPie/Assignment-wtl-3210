<?php 
    $proname = $_POST['proname'];
    $procat = $_POST['procat'];
    $mdate = $_POST['manufacturing_date'];
    $img = $_POST['img'];

    $currdate = date("Y-m-d") ;
    
    if($mdate > $currdate){
        echo "Enter a valid manufacturing date!";
    }else{
        //db connect
        $conn = new mysqli('localhost:3306', 'root', '', 'shop');
        if($conn->connect_error){
            die('Connection Failed :' .$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into products(proname, procat, mdate, img) 
                        values (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $proname,$procat,$mdate,$img);
            $stmt->execute();
            echo "data saved successfully!!";
            $stmt->close();
            // $stmt->close();
        }
    }


?>