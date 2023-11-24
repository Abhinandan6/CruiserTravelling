<?php
include("db.php");

// Read Operation - Fetch product data
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Display products
$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>


    <main class="main" id="main">

        <div class="sidebar" id="sidebar">

            <div class="logo">
                <p>Dashboard</p>
            </div>

            <ul class="navigation">
                <li><a href="dashboard.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="admin_view.php"><i class="fa-solid fa-boxes-stacked"></i> Rooms Info</a></li>
                <li><a href="add_room_admin.php"><i class="fa-solid fa-user"></i> Add Rooms</a></li>
                <li><a href="remove_room_admin.php"><i class="fa-solid fa-chart-simple"></i> Remove Rooms</a></li>
                <li><a href="confirmed_bookings.php"><i class="fa-solid fa-chart-simple"></i> Confirmed Rooms</a></li>
                <li><a href="booking_history.php"><i class="fa-regular fa-user"></i> Booking History</a></li>
                <li><a href="p.php"><i class="fa-regular fa-user"></i> Add Hotels</a></li>
                <li> <a href="dashboard.php"><i class="fa-solid fa-money-bill"></i> Refunds </a></li>
            </ul>


        </div>




        <div class="main-area" id="main-area">
            <!-- header  -->
            <header class="header">

                <div class="intro">
                    <h1>Enter new Hotels!!!</h1>
                </div>

                <div class="profile">
                    <img src="https://preview.keenthemes.com/metronic-v4/theme/assets/pages/media/profile/profile_user.jpg"
                        alt="profile">
                    <p>admin</p>
                    <p>Logout</p>
                    <p><i id="light-mode" class="fa-solid fa-sun" style="color: yellow;"
                            title="Switch To Light Mode"></i></p>
                    <p style="display: none;"><i id="dark-mode" class="fa-solid fa-moon" style="color: darkgray"
                            title="Switch To Night Mode"></i></p>
                </div>

            </header>
            <div class="container mt-5">
                <h2>Hotels List</h2>

                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                    Add Hotels
                </button>

                <!-- Table to display products -->
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hotel Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Services</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td>
                                    <?php echo $product['id']; ?>
                                </td>
                                <td>
                                    <?php echo $product['name']; ?>
                                </td>
                                <td>
                                    <?php echo $product['price']; ?>
                                </td>
                                <td>
                                    <?php echo $product['description']; ?>
                                </td>
                                <td>
                                    <?php echo $product['services']; ?>
                                </td>
                                <td>
                                    <?php echo $product['image']; ?>
                                </td>
                                <td>
                                    <?php if (!empty($product['image_path'])): ?>
                                        <img src="<?php echo $product['image_path']; ?>" alt="Product Image" height="50">
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Add Product Modal -->
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog"
                aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductModalLabel">Add Hotel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for adding a new product -->
                            <form action="add_product.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Hotel Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Pricing:</label>
                                    <input type="number" class="form-control" name="price" min="0" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Description:</label>
                                    <input type="text" class="form-control" name="description" min="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Services:</label>
                                    <input type="text" class="form-control" name="services" min="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Add Hotel Images:</label>
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                                <button type="submit" class="btn btn-primary">Add This Hotel</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>



    <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>