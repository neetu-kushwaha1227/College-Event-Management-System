<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>
 
  <style>
        .event-container { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; }
        .past-event { background-color: #f8d7da; }
        .current-event { background-color: #d4edda; }
        .participate-btn { padding: 8px 15px; border: none; cursor: pointer; }
        .disabled-btn { background-color: grey; cursor: not-allowed; }
    </style>

  <link rel="stylesheet" href="event.css">
  <link rel="stylesheet" href="responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
<body>
<?php
    include("db.php");
    //Session start
     session_start();
   ?>
  <header class="home" id="home" >
   <div class="header-scrolled">
     <div class="logo">
          <h1><a href="student.php" style="color: white; text-decoration:none;">CEMS</a></h1>
          welcome:<?php
          
          echo $_SESSION['username'];
        
    
        ?>
        
         <div class="navbar fixed-top" >
              <a href="student.php">Home</a>
              <a href="eventshow.php">Event show</a>
              <a href="student_status.php">Participant Event</a>
              <a href="editstudprofile.php">change profile</a>
              <a href="homepage.php">Logout</a>
            
            
            </div>
        </div>
    </div>

<?php
// Database Connection
include("db.php");

// Fetch Current Date
$current_date = date("2025-01-01");

// Fetch Events
$sql = "SELECT * FROM addevent ORDER BY dates";
$result = $conn->query($sql);
?>



<table border='1' width='100%' style='margin-top:37px;'>
    <tr>
        <th  width="10%">Images</th>
        <th  width="20%">Event Name</th>
        <th  width="10%">minimum Guest</th>
        <th  width="10%">Maximum Guest</th>
        <th  width="10%">Date</th>
        <th width="10%">Status</th>
        <th width="10%">Action</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $event_id = $row["eid"];
            $photo_path=$row["photo_path"];
            $event_name = $row["etitle"];
            $min = $row["miniguest"];
            $max=$row["maxguest"];
            $event_date = $row["dates"];
            
            // Check if the event is past or current
            $is_past_event = ($event_date < $current_date);
            
            // Assign class based on event type
            $event_class = $is_past_event ? "past-event" : "current-event";
            ?>

            <tr class="<?php echo $event_class; ?>">
                <td><center><img src="<?php echo $photo_path ?>" height=89px width=50% style="display:flex; justify-content:center; align-items:center;"></center></td>
                 <td><?php echo $event_name; ?></td>
                 <td><?php echo $min; ?></td>
                 <td><?php echo $max; ?></td>
                <td><?php echo $event_date; ?></td>
                <td><ceenter><?php echo $is_past_event ? "Past Event" : "Current Event"; ?></ceenter></td>
                <td>
                    <?php if (!$is_past_event) { ?>
                        <form action="Participates_request.php" method="POST" >
                            <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                            <button type="submit" class="participate-btn" style="background-color: green; color: white;">Participate</button>
                        </form>
                    <?php } else { ?>
                        <button class="participate-btn disabled-btn" disabled>Participation Closed</button>
                    <?php } ?>
                </td>
            </tr>

        <?php
        }
    } else {
        echo "<tr><td colspan='5'>No events available.</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>