
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
   ?>
</head>


<body>
<div id="record" class="container" style="display: block ; background-color: #fff; ">
    <button style="width: 20%;" type="button" onclick="back()"> Back </button>
    <table class="table"> 
        <tr>
        <th scope="col"> NAMES </th>
        <th scope="col"> GENDER </th>
        <th scope="col"> AGE </th>
        </tr>
        
<?php 
     Record($conn);
?>

</table>
</div>

  <script>

function back(){
window.location.href = "index.php";
}
 
  </script>
</body>
</html>