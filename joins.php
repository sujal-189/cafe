<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Menu & Orders</title>
</head>
<body>

</body>
</html>

<?php   
    $conn = mysqli_connect("localhost", "root", "", "cafe_management");
    if (!$conn) {
    die("Database not connected.");
}

    $sql = "SELECT menus.*, orders.id AS order_id, orders.quantity FROM menus INNER JOIN orders ON menus.id = orders.menu_id";
    $run = mysqli_query($conn, $sql);
    if ($run) {
?>

<h1 class="ms-5 mt-3">Menu & Orders </h1>
<hr>
<table class="table table-striped table-bordered w-75 mx-auto">
    <thead class="table-dark">
        <tr>
            <th>Menu ID</th>
            <th>Menu Name</th>
            <th>Price</th>
            <th>Order ID</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while ($row = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>{$row['order_id']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>

<?php
} else {
    echo "Query execution failed.";
}
?>


