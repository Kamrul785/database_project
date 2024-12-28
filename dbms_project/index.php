<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-image: url('bg.png'); 
            background-size: contain;
            background-repeat: no-repeat; 
            padding: 10px 20px;
        }
        /* Navbar Container */
        nav {
            background-color: #333;
            padding: 10px 20px;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Logo */
        #logo {
            width: 70px; 
            height: auto;
            margin-right: 20px;
        }

        /* Links */
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        /* Hover Effect for Links */
        .nav a:hover {
            color:rgb(247, 153, 2); /* Color change on hover */
        }

        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                text-align: center;
            }
            #logo {
                margin-bottom: 15px;
            }
            .nav a {
                margin: 10px 0;
            }
        }
    </style>
</head>


<body>
    <main>
    <nav>
    <div class="nav">
        <div class="logo">
            <img src="logo.png" alt="Logo" id="logo"> 
        </div>
        <a href="#">HOME</a>
        <a href="SignUp.php">SIGNUP</a>
        <a href="login.php">LOGIN</a>
        <a href="contact.php">CONTACT</a>
    </div>
</nav>

    <div class="bg">

    </div>
    </main>

</body>
</html>