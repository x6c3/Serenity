<?php 
include_once '../php/config.php';

// Check if the user ID is set in cookies
if (isset($_COOKIE['uid'])) {
    $uid = $_COOKIE['uid'];

    // Prepare and execute SQL query
    $sql = "SELECT * FROM subscriptions WHERE uid = '$uid'";
    $result = $conn->query($sql);

    // Check if there are any subscriptions
    if ($result->num_rows > 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscribed Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h1 class="mb-4">My Subscriptions</h1>
  
  <div class="card-deck">
    <?php 
        // Fetch and display subscription cards
        while ($row = $result->fetch_assoc()) {
    ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['doctorname']; ?></h5>
            <a href="#" class="btn btn-primary">Remove</a>
          </div>
        </div>
    <?php 
        }
    ?>
  </div>
</div>
</body>
</html>

<?php
    } else {
        echo "No subscriptions found.";
    }
} else {
    echo "User ID not found in cookies.";
}
?>
