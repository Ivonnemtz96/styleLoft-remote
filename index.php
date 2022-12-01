<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');

if (isset($_GET)) {
    include_once("php/msg.php");
}
?>
<body>
    <div class="page-wrapper">
        <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        ?>
    </div>
    <?php
    include('includes/scripts.php');
    ?>
</body>

</html>