<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center mb-4">Student Registration</h2>
        
        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700">Full Name</label>
                <input type="text" name="fullname" required 
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required 
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Course</label>
                <input type="text" name="course" required 
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <button type="submit" name="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg">
                Add Student
            </button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $course = $_POST['course'];

            $sql = "INSERT INTO students (fullname, email, course) VALUES ('$fullname', '$email', '$course')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='mt-4 text-green-600 text-center'>Student added successfully!</p>";
            } else {
                echo "<p class='mt-4 text-red-600 text-center'>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>

</body>
</html>
