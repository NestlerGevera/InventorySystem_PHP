<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff.css">
    <title>Staff Management System</title>
    <style>
        /* Additional styling for navigation buttons */
        .nav-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #db3434;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .nav-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Staff Management System</h1>

    <!-- Navigation Button -->
    <a href="admin.php" class="nav-button">Back to Dashboard</a>

    <form id="addStaffForm">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="text" name="position" placeholder="Position" required>
        <button type="submit">Add Staff</button>
    </form>

    <h2>Staff List</h2>
    <table id="staffTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script src="staff.js"></script>
</body>

</html>
