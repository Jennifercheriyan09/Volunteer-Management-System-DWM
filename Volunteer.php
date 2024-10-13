<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        background: '#F3F4F6',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background font-sans">
    <?php
    include "DBconnect.php";
    include "navbar.php";

    $profpic = "images/index2.jpg";
    ?>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative">
                <img src="images/volunteer.png" alt="Volunteer Banner" class="w-full h-48 object-cover">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h1 class="text-3xl font-bold text-white">Volunteer Profile</h1>
                </div>
            </div>

            <div class="p-6">
                <form action="" method="post" class="mb-6">
                    <button class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-600 transition float-right" name="submit1">Edit</button>
                </form>

                <?php
                if(isset($_POST['submit1'])) {
                    echo "<script type='text/javascript'>window.location='edit.php'</script>";
                }

                $q = mysqli_query($db, "SELECT * FROM Volunteer WHERE Volunteer_ID='$_SESSION[login_user]';");
                $row = mysqli_fetch_assoc($q);
                ?>

                <div class="text-center mb-6">
                    <img class="w-32 h-32 rounded-full mx-auto mb-4" src="<?php echo 'images/login.jpg'.$_SESSION['pic']; ?>" alt="Profile Picture">
                    <h2 class="text-2xl font-semibold text-gray-800">Welcome, <?php echo $_SESSION['login_user']; ?></h2>
                </div>

                <div class="bg-gray-100 rounded-lg p-6">
                    <table class="w-full">
                        <tr class="border-b border-gray-200">
                            <td class="py-2 font-semibold text-gray-600">Volunteer ID:</td>
                            <td class="py-2 text-gray-800"><?php echo $row['Volunteer_ID']; ?></td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 font-semibold text-gray-600">Name:</td>
                            <td class="py-2 text-gray-800"><?php echo $row['Name']; ?></td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 font-semibold text-gray-600">Date of Birth:</td>
                            <td class="py-2 text-gray-800"><?php echo $row['Date_of_Birth']; ?></td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 font-semibold text-gray-600">Password:</td>
                            <td class="py-2 text-gray-800">********</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 font-semibold text-gray-600">Interest:</td>
                            <td class="py-2 text-gray-800"><?php echo $row['Interest']; ?></td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-2 font-semibold text-gray-600">Location:</td>
                            <td class="py-2 text-gray-800"><?php echo $row['Location']; ?></td>
                        </tr>
                        <tr>
                            <td class="py-2 font-semibold text-gray-600">Contact:</td>
                            <td class="py-2 text-gray-800"><?php echo $row['Contact']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add any JavaScript functionality here
    </script>
</body>
</html>