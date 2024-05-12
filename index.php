<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #282828;
            color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        p {
            margin: 20px;
        }
        .button {
            display: block;
            width: 200px;
            height: 50px;
            margin: 20px auto;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            text-decoration: none;
        }
        .button:hover {
            background-color: #45a049;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            border: 3px solid #444444;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        th, td {
            border: 1px solid #444444;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #444444;
            color: #FFFFFF;
        }
        tr:nth-child(even) {
            background-color: #333333;
        }
        tr:hover {
            background-color: #555555;
        }
    </style>
</head>
<body>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    switch ($page) {
        case 'home':
            echo "<h1>Cloud Computing Project</h1>";
            echo "<p>In this project, we set up a PHP application with a MySQL database using Docker. We used Docker Compose to define and run our multi-container application. The PHP application connects to the MySQL database and fetches data from it. We also styled our application using CSS to give it a modern, dark theme.</p>";
            echo "<a href='?page=table' class='button'>View Database Table</a>";
            echo "<a href='?page=contact' class='button'>Contact Us</a>";
            break;
        case 'contact':
            echo "<h1>Contact Us</h1>";
            echo "<p>Phone Number: +201123494344</p>";
            break;
        case 'table':
            $connect = mysqli_connect(
                'db', # service name
                'php_docker', # username
                'password', # password
                'TeamDB' # db table
            );

            $table_name = "TeamMembers";

            $query = "SELECT * FROM $table_name";

            $response = mysqli_query($connect, $query);

            if($response->num_rows>0){
                echo "<table>";
                echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>CGPA</th></tr>";
                //Output data of each row
                while($row=$response->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . $row["ID"]. "</td>";
                    echo "<td>" . $row["Name"]. "</td>";
                    echo "<td>" . $row["Age"]. "</td>";
                    echo "<td>" . $row["CGPA"]. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 responses"; 
            }
            break;
        default:
            echo "<h1>Page not found</h1>";
            break;
    }
    ?>
</body>
</html>
