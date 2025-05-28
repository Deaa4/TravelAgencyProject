<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

// Verify the CSRF token
if (!isset($_SESSION['csrf_token']) || empty($_SESSION['csrf_token'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Database configuration
$host = 'localhost';
$dbname = 'tours';
$username = 'tours-1';
$password = 'tours-1';

// Create a connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the admin is logged in
if (!isset($_SESSION['user_name'])) {
    header('Location: login.php');
    exit();
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        $action = $_POST['action'] ?? '';

        switch ($action) {
            case 'update_status':
                $status = $_POST['status'] ?? '';
                $stmt = $pdo->prepare("UPDATE enquiry SET Statusfield = :status WHERE Enquiryid = :id");
                $stmt->execute(['status' => $status, 'id' => $id]);
                break;

            case 'delete_enquiry':
                $stmt = $pdo->prepare("DELETE FROM enquiry WHERE Enquiryid = :id");
                $stmt->execute(['id' => $id]);
                break;

            case 'delete_package':
                $stmt = $pdo->prepare("DELETE FROM package WHERE Packid = :id");
                $stmt->execute(['id' => $id]);
                break;

            case 'delete_category':
                $stmt = $pdo->prepare("DELETE FROM category WHERE Cat_id = :id");
                $stmt->execute(['id' => $id]);
                break;
        }
    }
        if (isset($_POST['add_package'])) {
            $category = $_POST['category'];
            $subcategory = $_POST['subcategory'];
            $packprice = $_POST['packprice'];
            $detail = $_POST['detail'];
    
            // Handle file uploads
            $uploadDir = 'admin/packimages/';
            $pic1 = $uploadDir . basename($_FILES['pic1']['name']);
            $pic2 = $uploadDir . basename($_FILES['pic2']['name']);
            $pic3 = $uploadDir . basename($_FILES['pic3']['name']);
    
            move_uploaded_file($_FILES['pic1']['tmp_name'], $pic1);
            move_uploaded_file($_FILES['pic2']['tmp_name'], $pic2);
            move_uploaded_file($_FILES['pic3']['tmp_name'], $pic3);
    
            // Insert into the database
            $stmt = $pdo->prepare("INSERT INTO package (Category, Subcategory, Packprice, Pic1, Pic2, Pic3, Detail) 
                                   VALUES (:category, :subcategory, :packprice, :pic1, :pic2, :pic3, :detail)");
            $stmt->execute([
                'category' => $category,
                'subcategory' => $subcategory,
                'packprice' => $packprice,
                'pic1' => $pic1,
                'pic2' => $pic2,
                'pic3' => $pic3,
                'detail' => $detail,
            ]);
        }
}

// Fetch data from the database
$enquiries = $pdo->query("SELECT * FROM enquiry")->fetchAll(PDO::FETCH_ASSOC);
$packages = $pdo->query("SELECT * FROM package")->fetchAll(PDO::FETCH_ASSOC);
$categories = $pdo->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboardstyle.css">
</head>
<body>
    <h1>Admin Dashboard</h1>

    <div style="text-align: right; margin: 10px;">
        <a href="/tours-and-travel" style="text-decoration: none; padding: 10px 15px; background-color:rgb(0, 38, 161); color: white; border-radius: 5px;">Web</a>
        <a href="logout.php" style="text-decoration: none; padding: 10px 15px; background-color: #f44336; color: white; border-radius: 5px;">Logout</a>
    </div>
    <!-- Enquiries Section -->
    <section>
        <h2>Enquiries</h2>
        <table>
            <thead>
                <tr>
                    <th>Enquiry ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enquiries as $enquiry): ?>
                    <tr>
                        <td><?= htmlspecialchars($enquiry['Enquiryid']) ?></td>
                        <td><?= htmlspecialchars($enquiry['Name']) ?></td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($enquiry['Enquiryid']) ?>">
                                <input type="hidden" name="action" value="update_status">
                                <input type="text" name="status" value="<?= htmlspecialchars($enquiry['Statusfield']) ?>">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($enquiry['Enquiryid']) ?>">
                                <input type="hidden" name="action" value="delete_enquiry">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Packages Section -->
    <section>
        <h2>Packages</h2>
        <table>
            <thead>
                <tr>
                    <th>Package ID</th>
                    <th>Package Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packages as $package): ?>
                    <tr>
                        <td><?= htmlspecialchars($package['Packid']) ?></td>
                        <td><?= htmlspecialchars($package['Packname']) ?></td>
                        <td><?= htmlspecialchars($package['Category']) ?></td>
                        <td><?= htmlspecialchars($package['Packprice']) ?></td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($package['Packid']) ?>">
                                <input type="hidden" name="action" value="delete_package">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Categories Section -->
    <section>
        <h2>Categories</h2>
        <table>
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= htmlspecialchars($category['Cat_id']) ?></td>
                        <td><?= htmlspecialchars($category['Cat_name']) ?></td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($category['Cat_id']) ?>">
                                <input type="hidden" name="action" value="delete_category">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <!-- Add Package Form -->
    <section>
        <h2>Add New Package</h2>
        <form method="post" enctype="multipart/form-data">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required><br>

            <label for="subcategory">Subcategory:</label>
            <input type="text" id="subcategory" name="subcategory" required><br>

            <label for="packprice">Price:</label>
            <input type="number" id="packprice" name="packprice" required><br>

            <label for="pic1">Picture 1:</label>
            <input type="file" id="pic1" name="pic1" accept="image/*" required><br>

            <label for="pic2">Picture 2:</label>
            <input type="file" id="pic2" name="pic2" accept="image/*" required><br>

            <label for="pic3">Picture 3:</label>
            <input type="file" id="pic3" name="pic3" accept="image/*" required><br>

            <label for="detail">Details:</label>
            <textarea id="detail" name="detail" rows="5" required></textarea><br>

            <button type="submit" name="add_package">Add Package</button>
        </form>
    </section>
</body>
</html>

