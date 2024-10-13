<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Volunteer Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#e18c7a',
                        secondary: '#10B981',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex flex-col">
        <header class="bg-primary text-white shadow-lg">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <div class="text-2xl font-bold">
                    Online Volunteer Management System
                </div>
                <nav>
                    <ul class="flex space-x-6">
                        <?php
                        session_start();
                        if(isset($_SESSION['login_user'])) {
                        ?>
                            <li><a href="index.php" class="hover:text-secondary transition">Home</a></li>
                            <li><a href="Volunteer.php" class="hover:text-secondary transition">Details</a></li>
                            <li><a href="logout.php" class="hover:text-secondary transition">Logout</a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="index.php" class="hover:text-secondary transition">Home</a></li>
                            <li><a href="Login.php" class="hover:text-secondary transition">Volunteer Login</a></li>
                            <li><a href="VolunteerRegistration.php" class="hover:text-secondary transition">Volunteer Sign-up</a></li>
                            <li><a href="admin_login.php" class="hover:text-secondary transition">Admin Login</a></li>
                            <li><a href="companyLogin.php" class="hover:text-secondary transition">Company Login</a></li>
                            <li><a href="companySignUp.php" class="hover:text-secondary transition">Company Registration</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>

		<main class="flex-grow">
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow-xl p-8 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Volunteer Management System</h1>
            <p class="text-xl text-gray-600 mb-4">We're here to connect volunteers with meaningful opportunities.</p>
            <div class="flex justify-center space-x-8 mt-8">
                <div class="rounded-lg p-4" style="background-color: #e18c7a; color: white;">
                    <p class="text-2xl font-semibold">Opens at</p>
                    <p class="text-3xl font-bold">09:00</p>
                </div>
                <div class="rounded-lg p-4" style="background-color: #e18c7a; color: white;">
                    <p class="text-2xl font-semibold">Closes at</p>
                    <p class="text-3xl font-bold">15:00</p>
                </div>
            </div>
        </div>
    </div>
</main>


        <footer class="bg-gray-800 text-white py-6">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; 2024 Online Volunteer Management System. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        // Add any JavaScript functionality here
    </script>
</body>
</html>