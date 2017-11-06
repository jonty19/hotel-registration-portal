<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title></title>
    <?php
    $connection = mysql_connect("localhost", "root", "abc"); // Establishing Connection with Server
    $db = mysql_select_db("hotel_booking_portal", $connection); // Selecting Database from Server
    if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $identity = $_POST['identity'];
      $hotel = $_POST['hotel'];
      $room_type = $_POST['room_type'];
      $no_of_room = $_POST['no_of_room'];
      $fr = $_POST['fr'];
      $to = $_POST['to'];
      if ($hotel== "a") {
        $query = mysql_query("insert into a_hotel(name, identity, room_type, no_of_room, date_fr, date_to) values ('$name','$identity','$room_type','$no_of_room','$fr','$to')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your A hotel booking confirmed... !')</script>";
      } elseif ($hotel== "b") {
        $query = mysql_query("insert into b_hotel(name, identity, room_type, no_of_room, date_fr, date_to) values ('$name','$identity','$room_type','$no_of_room','$fr','$to')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your B hotel booking confirmed... !')</script>";
      }
      elseif ($hotel== "c") {
        $query = mysql_query("insert into c_hotel(name, identity, room_type, no_of_room, date_fr, date_to) values ('$name','$identity','$room_type','$no_of_room','$fr','$to')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        echo "<script type='text/javascript'>alert('your C hotel booking confirmed... !')</script>";
      }
      else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
      }

      }

    mysql_close($connection); // Closing Connection with Server
     ?>
  </head>
  <body>
    <h1>Goa Tourisim Hotel Booking Portal</h1>
    <h1>confirm Your Booking</h1> <hr><hr>
    <form class="form-horizantal" role="form" name="booking" method="post" action="">
                        <div class="form-group">
                            <label for="sel1">fill up details:</label>
                            <input class="form-control" type="name" name="name" placeholder="enter your name">
                            <input class="form-control" type="text" name="identity" placeholder="enter your Any Indentity Number">
                            <label for="sel2">Select Your Hotel:</label>
                            <select class="form-control" name="hotel" id="hotel" title="Select your hotel">
                                <option value="a">A Hotel</option>
                                <option value="b">B Holtel</option>
                                <option value="c">C hotel</option>
                            </select>
                            <label for="sel3">Select Your Room Type:</label>
                            <select class="form-control" name="room_type" id="room_type" title="Select type of room">
                                <option value="Single Bed Non -AC">Single Bed Non -AC</option>
                                <option value="FAmily Bed Non-AC">FAmily Bed Non-AC</option>
                                <option value="Single Bed AC">Single Bed AC</option>
                                <option value="Family Bed AC">Family Bed AC</option>
                            </select>
                            <label for="sel4">Select Your No Of Rooms:</label>
                            <select class="form-control" name="no_of_room" id="no_of_room" title="Select number of rooms">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <label for="sel4">Duration:</label>
                            <input type="date" name="fr" placeholder="date from"> <input type="date" name="to" placeholder="date to"> <br>
                            <input type="submit" class="btn btn-info" name="submit" value="Book">
                        </div>
                    </form>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
</html>
