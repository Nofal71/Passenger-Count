<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Counter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <?php 
   include "db_connect.php";
     session_start();

   ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
              <form method="post" action="db_connect.php">
                    <button name="record" type="submit" style="background-color: red ; color: black;">Record</button>
                </form>
              </li>
              <li class="nav-item">
                <form method="post" action="db_connect.php">
                    <button name="clear" type="submit" style="background-color: red ; color: black;">CLEAR</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div id="main" class="container" style="background-color: #fff;">
        <label>COUNT PASSANGERS</label>
        <br><br>
        <center>
            <label style="color: rgb(0, 0, 0); font-size: 30px;">Passanger Count : </label>
            <br><br>
            <div class="border border-secondary" style="border-radius: 20px; width: 50%;">
                <label id="current" name="current" style="color: rgb(0, 0, 0); font-size: 30px;"> <?php echo isset($_SESSION['count']) ? $_SESSION['count'] : 0; ?> </label>
            </div>
            <br><br>
        <button type="button" style="width: 30%;" onclick="count()">Add Passanger </button>
        </center>
    </div>

    <div id="data" class="container" style="display: none; background-color: #fff; ">
    <form method="post" action="db_connect.php">
      <label>ENTER PASSENGER INFO</label>
      <br><br>
      <label for="name">Name</label><br>
      <input id="name" name="name" type="text" required>
      <br>
      <label for="gender">Gender</label><br>
      <input id="gender" name="gender" type="text" required>
      <br>
      <label for="age">Age</label><br>
      <input id="age" type="number" name="age" required>
      <br><br>
      <button class="btn btn-primary" type="submit" name="save" >SAVE</button>
    </div>
  </form>
    
    <script src="site.js">
        
    </script>
</body>
</html>
