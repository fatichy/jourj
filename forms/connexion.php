<?php
    session_start();
    if(isset($_SESSION["utilisateur"])){
        header("location: admin.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'DB.php'?>
    <title>Connexion</title>

</head>
<body>
<?php include "../heady.php" ?>
<?php include "../nav.php"?>
<div class="container py-2 conn-container">
    <?php
        if(isset($_POST['connexion'])){
            $login = $_POST['login'];
            $pwd   = $_POST['password'];
            flush();

            if(!empty($login) && !empty($pwd)){
                $sqlState = $conn->prepare('SELECT * FROM utilisateurs Where login=? and password=?');
                $sqlState->execute([$login,$pwd]);
                $result = $sqlState->fetchAll(PDO::FETCH_ASSOC);
                if(count($result)>0){
                    $_SESSION['utilisateur'] = $result[0];
                     echo "<script>window.location.href = 'admin.php'</script>";
                    
                }else{
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Login ou password incorrectes.
                    </div>
                    <?php
                }
            }else{
                ?>
                <div class="alert alert-danger" role="alert">
                    Login , password sont obligatoires
                </div>
                <?php
            }
        }
    ?>
    <h4>Connexion</h4>
    <form method="post">
        <label class="form-label">Login</label>
        <input type="text" class="form-control form-input-cs" name="login">

        <label class="form-label">Password</label>
        <input type="password" class="form-control form-input-cs" name="password">

        <input type="submit" value="Connexion" class="btn btn-primary my-2 login-btn" name="connexion">
    </form>
</div>
<?php require_once "../footer.php"?>

</body>
</html>