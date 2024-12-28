<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Sections</title>
    <style>
        html,
        body {
            font-family: Times New Roman, serif;
            color: rgb(0, 0, 0);
        }


        .details {
            margin-bottom: 5vh;
        }
        
        .section {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 0;
            display: none; /* Initially hidden */
        }
        button {
            margin-bottom: 10px;
            cursor: pointer;
            padding: 10px 15px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>hello, <?php echo $_SESSION['id']; ?></h1>

    <button onclick="showSection('section1')">Add bid</button>
    <button onclick="showSection('section2')">Show bids</button>
    <button onclick="showSection('section3')">Profile</button>

    <div id="section1" class="section">
        <form action="shome.php" method="post">
            <h2>Add new bid</h2>
            <input type="number" placeholder="Bid amount" name="amount" class="input" required>
            <input type="text" placeholder="Message" name="message" class="input" required>
            <label for="dateField">Select a Date:</label>
            <input type="date" id="dateField" name="deadline">
            <button type="submit" name="submit" class="submit">Submit</button>
        </form>
    </div>
        
    <div id="section2" class="section">
        <div class="box">
            <?php
            include('connection.php');
            $sql = "SELECT * FROM bids WHERE provider_id=" . $_SESSION['id'];
            $result = $con->query($sql);
            ?>
            <h2>Bid records</h2>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Bid ID</th>
                        <th>Posting ID</th>
                        <th>Amount</th>
                        <th>Deadline</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["bid_id"] . "</td>";
                            echo "<td>" . $row["posting_id"] . "</td>";
                            echo "<td>" . $row["bid_amount"] . "</td>";
                            echo "<td>" . $row["Deadline"] . "</td>";
                            echo "<td>" . $row["provider_message"] . "</td>";
                            echo "<td>" . $row["status"] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div id="section3" class="section">

        <div class="details">

            <?php
            include("connection.php");
            $user_id = $_SESSION['id'];
            $sql = "select * from users where user_id='$user_id'";
            $r = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($r);

            $name = $row['name'];
            $email = $row['email'];
            $mbl = $row['phone_number'];
            $ad = $row['address'];
            $role = $row['role'];


            echo "<h2 class='h'>Hello ! I am $name</h2>";
            echo "<h3 class='h'>Email: $email</h3>";
            echo "<h3 class='h'>Mobile No : $mbl</h3>";
            echo "<h3 class='h'>Address : $ad</h3>";
            echo "<h3 class='h'>Your current role is: $role</h3>";
            ?>
        </div>

    </div>
    
    <script>
        function showSection(id) {
            // Hide all sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => section.style.display = 'none');

            // Show the selected section
            const selectedSection = document.getElementById(id);
            selectedSection.style.display = 'block';
        }

        // Set the default date field to 7 days ahead
        const today = new Date();
        const priorDate = new Date(today);
        priorDate.setDate(today.getDate() + 7);
        const formattedDate = priorDate.toISOString().split('T')[0];
        document.getElementById('dateField').value = formattedDate;
    </script>

</body>
</html>
