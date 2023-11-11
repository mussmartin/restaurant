<?php
// Include database connection file
include('connection/connect.php');

// Check if user is logged in, else redirect to login page
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Fetch menu items from the database
$query = "SELECT * FROM menu_items";
$result = mysqli_query($conn, $query);
$menuItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .menu-item {
            margin-bottom: 20px;
        }

        .logout-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Restaurant Management System, <?php echo $_SESSION['username']; ?>!</h1>

        <h2>Menu Items</h2>
        <?php foreach ($menuItems as $menuItem) : ?>
            <div class="menu-item">
                <strong><?php echo $menuItem['name']; ?></strong> - $<?php echo $menuItem['price']; ?>
                <a href="edit_menu_item.php?id=<?php echo $menuItem['id']; ?>">Edit</a>
                <a href="delete_menu_item.php?id=<?php echo $menuItem['id']; ?>">Delete</a>
            </div>
        <?php endforeach; ?>

        <div class="logout-btn">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>
