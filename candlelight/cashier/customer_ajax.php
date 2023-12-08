<?php
include('config/config.php');

if (!empty($_POST["custName"])) {
    $id = $_POST['custName'];
    $sql = "SELECT * FROM  customers WHERE customer_name = '$id'";
    $query = mysqli_query($mysqli, $sql);
?>
<?php
    while ($row = mysqli_fetch_assoc($query)) {
?>
<?php echo htmlentities($row['customer_id']); ?>
<?php
    }
}
