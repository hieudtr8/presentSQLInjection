<?php
require 'db/connect.php';

$sqlFetchTable = "SELECT * FROM `tbl_users`";

$result = mysqli_query($databaseConnection, $sqlFetchTable);
$listClient = array();

$index = 0;
while ($row = mysqli_fetch_array($result)) {
  $listClient[$index] = $row;
  $index++;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assests/img/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <link rel="stylesheet" href="assests/css/all.css">
  <link rel="stylesheet" href="assests/js/all.js">

  <link rel="stylesheet" href="assests/css/main.css">
  <link rel="stylesheet" href="assests/css/insideBank.css">

  <script type="text/javascript" src="assests/js/jquery.js"></script>
  <script type="text/javascript" src="assests/js/main.js" defer></script>
  <title>Bank System</title>
</head>

<body>
  <div class="bg bg-inside-bank pt-5 ">
    <div class="container container-list-clients border px-5">
      <h2 class='my-4 text-center'>List clients</h2>
      <div class="mb-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Client ID</th>
              <th scope="col">Client Mame</th>
              <th scope="col">Client Email</th>
              <th scope="col">Current Balance</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listClient as $clent) {
            ?>
              <tr>
                <th scope="row"><?php echo $clent['user_id'] ?></th>
                <td><?php echo $clent['username'] ?></td>
                <td><?php echo $clent['email'] ?></td>
                <td><?php echo number_format($clent['current_balance'],2)."$" ?></td>
                <td> <a class="fas fa-trash" href="deleteClient.php/?clientId=<?php echo $clent['user_id'] ?>"></a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
          <div id="log-out-button">
            <a class="btn btn-danger" href="http://localhost/presentSQLInjection/">Logout </a>
          </div>
      </div>

    </div>
  </div>
</body>

</html>