<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-4">Student Records</h2>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Full Name</th>
                    <th class="p-3 border">Email</th>
                    <th class="p-3 border">Course</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='text-center border hover:bg-gray-100'>
                                <td class='p-3 border'>{$row['id']}</td>
                                <td class='p-3 border'>{$row['fullname']}</td>
                                <td class='p-3 border'>{$row['email']}</td>
                                <td class='p-3 border'>{$row['course']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='p-3 text-center text-gray-600'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
