<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users & Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

    $conn = mysqli_connect("localhost", "root", "", "cafe_management");
    if (!$conn) {
    die("Database connection failed.");
}


    $sql = "SELECT users.*, orders.id AS order_id, orders.total_price, orders.quantity FROM users LEFT JOIN orders ON users.id = orders.user_id";
    $run = mysqli_query($conn, $sql);
    if ($run):
?>

<div class="container mt-5">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Username</th>
                <th>Order ID</th>
                <th>quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($run)): ?>
            <tr>
                <td><?= $row['username'] ?? '-' ?></td>
                <td><?= $row['order_id'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td><?= $row['total_price'] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php else: ?>
    <p>Query failed.</p>
<?php endif; ?>

</body>
</html>
