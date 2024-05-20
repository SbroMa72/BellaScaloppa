<?PHP

    require_once ('../config/connection.php');

    $username =$_POST["username"];
    $password =$_POST["password"];

    $stmt= $conn -> prepare ("SELECT * FROM utenti WHERE username=? AND password=?");
    $stmt -> bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt -> get_result();

    if($result -> num_rows == 1){
        $row = $result -> fetch_assoc();
        $_SESSION["logged-in"]=true;
        $_SESSION["username"]=$username;
        $_SESSION["ID"]=$row["ID"];
        echo true;
    }else{
        echo "credenziali errate";
    }
    
?>