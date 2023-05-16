<!doctype html>
<html lang="en">

<?php
session_start();
if (!isset($_SESSION["utilisateur"])) {
    header("location:connexion.php");
}
require '../heady.php';
?>

<body>
        <?php
        require_once "../nav.php";
        ?>
    <div class="container py-2 admin-container">
        <div class="hello-container">
            <h1 class="hello"> Bienvenue <?php echo ($_SESSION['utilisateur']['login']) ?></h1>
        </div>
        <div class="inbox-container">

            <?php
            $sql = 'select * from contact_form ';
            require_once 'DB.php';
            $sqlstate = $conn->prepare($sql);
            $sqlstate->execute();
            $results = $sqlstate->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $result) {

                echo "<div class='inbox'>
                    <div class='inbox-left'>
                        <div class='inbox-name'>" . $result['name'] . " </div>
                        <div class='inbox-plan'>" . $result['plan'] . "</div>
                        
                    </div>
                    <div class='inbox-right'>
                         <div class='inbox-details'>
                            <div class='inbox-email'>Email : " . $result['email'] . " </div>
                            <div class='inbox-number'>Number :  " . $result['number'] . "</div>
                            <div class='inbox-address'>Address : " . $result['address'] . " </div>
                            <div class='inbox-message'>Message : " . $result['message'] . "</div>
                        </div>
                    </div>
            </div>";
            }
            ?>

        </div>

    </div>

    <!-- FOOTER -->
<?php require_once "../footer.php" ?>
</body>

</html>