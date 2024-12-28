<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Times New Roman, serif;
      color: rgb(0, 0, 0);
      background-image: none;
      background-size: cover;
    }

    .main {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 95vh;
      background-color: #C5D5F8;
      background-image: url('https://images.unsplash.com/photo-1515895309288-a3815ab7cf81?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTh8fGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60');
      background-size: cover;
    }

    .box {
      margin-top: 8vh;
      display: inline-block;
      text-align: center;
      width: 450px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 30px rgb(0, 0, 0);
      border-radius: 10px;
      padding: 20px;
    }

    .box h1 {
      padding-top: 20px;
      margin-bottom: 15px;
    }

    .info {
      text-align: center;
      margin-top: 20px;
    }

    .info p {
      margin: 10px 0;
      font-size: 18px;
    }
  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact Us</title>
  <script src="https://kit.fontawesome.com/06d164d474.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>

  <!-- navbar start -->
  <script>
    $(function () {
      $("#nav-placeholder").load("nav.php");
    });
  </script>
  <div id="nav-placeholder"></div>
  <!-- navbar end -->

  <div class="main">
    <div class="box">
      <h1>Contact Us</h1>
      <div class="info">
        <p><strong>Name:</strong> Online Service Management System </p>
        <p><strong>Phone Number:</strong> 01747333257 </p>
        <p><strong>Address:</strong> Port City International University </p>
      </div>
    </div>
  </div>

  <!-- footer start -->
  <script>
    $(function () {
      $("#footer-placeholder").load("footer.php");
    });
  </script>
  <div id="footer-placeholder"></div>
  <!-- footer end -->

</body>

</html>
