<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="basestyle.css">
</head>
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
<body>


    <main class="main" id="main">

        <div class="sidebar" id="sidebar">

            <div class="logo">
                <p>Dashboard</p>
            </div>
            <ul class="navigation">
                <li><a href="dashboard.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="..\dashboard\admin_view.php"><i class="fa-solid fa-boxes-stacked"></i> Rooms Info</a></li>
                <li><a href="..\dashboard\add_room_admin.php"><i class="fa-solid fa-user"></i> Add Rooms</a></li>
                <li><a href="..\dashboard\remove_room_admin.php"><i class="fa-solid fa-chart-simple"></i> Remove Rooms</a></li>
                <li><a href="..\dashboard\confirmed_bookings.php"><i class="fa-solid fa-chart-simple"></i> Confirmed Rooms</a></li>
                <li><a href="..\dashboard\booking_history.php"><i class="fa-regular fa-user"></i> Booking History</a></li>
                <li><a href="p.php"><i class="fa-regular fa-user"></i> Add Hotels</a></li>
                <li><i class="fa-solid fa-money-bill"></i> Refunds</li>
            </ul>
        </div>
        <div class="main-area" id="main-area">
            <!-- header  -->
            <header class="header">

                <div class="intro">
                    <h1>Availability</h1>
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