<?php 

$title = "Hangout Guide";
$link = "guide";
include 'inc/header.php'; 
include 'functions/dbconn.php';
?>
<script>
// Select the contents of a text field with id="myText"
function changeFunc() {
    var selectBox = document.getElementById("activity");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    window.location.href="?act="+selectedValue;
   }
</script>
<body>
 <?php include 'inc/navbar.php'; 
 $somevar = @$_GET["act"];
 $user = @$_SESSION['user_id'];
 $name = @$_SESSION['user_name'];
 $age = $_SESSION['age'];
 ?>
 <!--Main layout-->
  <main class="mt-5 pt-5">

    <div class="container mt-2">

<section class="text-center">

        <!--Grid row-->
        <div class="row mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                
          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card-->
            <div class="card">
                <?php
                $stat = @$_GET['stat'];
                if($stat == 1){
                    echo "Post success!";
                }else if($stat == 2){
                    echo "Delete success!";
                }else if($stat == 3){
                    echo "Join success!";
                }else{
                    
                }
                ?>
              <!--Card image-->
              <div class="view overlay">
                <div class="embed-responsive embed-responsive-16by9 rounded-top">
                    
                </div>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">
                    <?php
                    if(@$_SESSION['user_id'] != null){
                        echo '<form method="POST" action="./functions/saveTrans.php?act='.$somevar.'">
                        Activity: <select name="activity" id="activity" onchange="changeFunc()"">
                             <option>------</option>';
                    if($age >= 18){
                        $qry = "SELECT tara_activity_id, tara_activity_name FROM u982083468_nyangay.activities WHERE tara_activity_restriction >= 0";
                        $result = $conn->query($qry);
                   
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            
                            echo "<option value='".$row['tara_activity_id'].",".$row['tara_activity_name']."'>".$row['tara_activity_name']."</option>";
                        }
                    } else {
                        echo "<option>No activities available</option>";
                    }
                    }else{
                        $qry = "SELECT tara_activity_id, tara_activity_name FROM u982083468_nyangay.activities WHERE tara_activity_restriction = 0";
                        $result = $conn->query($qry);
                   
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            
                            echo "<option value='".$row['tara_activity_id'].",".$row['tara_activity_name']."'>".$row['tara_activity_name']."</option>";
                        }
                    } else {
                        echo "<option>No activities available</option>";
                    }
                    }
                    
                    
                    
                       
                            
                            
                    echo '    </select><br />';
                       
                    if($age >= 18){
                        echo ' Venue: <select name="venue">';
                        $plod = explode(",", $somevar);
                    $query = "SELECT * FROM u982083468_nyangay.venues WHERE tara_venue_type LIKE '%".$plod[0]."%' AND tara_venue_desc >= 0";
                    $results = $conn->query($query);

                    if (mysqli_num_rows($results) > 0) {
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            echo "<option value='".$row['tara_venue_id'].",".$row['tara_venue_name']."'>".$row['tara_venue_name']."</option>";
                        }
                    } else {
                        echo "<option>No venues available</option>";
                        echo "</select>";
                    }
                    
                    }else{
                        echo "<select name='venue'>";$plod = explode(",", $somevar);
                    $query = "SELECT * FROM u982083468_nyangay.venues WHERE tara_venue_type LIKE '%".$plod[0]."%' AND tara_venue_desc = 0";
                       echo ' Venue: <select name="venue">';
                    $results = $conn->query($query);
                    if (mysqli_num_rows($results) > 0) {
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            echo "<option value='".$row['tara_venue_id'].",".$row['tara_venue_name']."'>".$row['tara_venue_name']."</option>";
                        }
                    } else {
                        echo "<option>No venues available</option>";
                    }
                    }
                    echo '
                        </select><br />
                        Date: <input type="date" name="date" placeholder="Date" /><br />
                        Time: <input type="time" name="time" placeholder="Time" /><br />
                        <p class="card-text">How many people?<br />';
                    echo "<input type='radio' name='crowd' value='1'>Just one</input><br />
                <input type='radio' name='crowd' value='0'>Group</input></p>";
                
                echo '<p class="card-text">
                  <strong>Message: </strong><br />
                  <textarea name="msg" rows="4" cols="30">Enter message here</textarea>
                  <input type="submit" value="Save entry" class="btn btn-primary btn-md waves-effect waves-light"/>
                    </form>
                </h4>
                <!--Text-->
                
                  
                </p>
              </div>
            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                Your posts:
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                
              </div>

              <!--Card content-->
              <div class="card-body">';
                  
                    
/*
                    if (mysqli_num_rows($results) > 0) {
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            echo "<option value='".$row['tara_venue_id']."'>".$row['tara_venue_name']."</option>";
                        }
                    } else {
                        echo "<option>No activities available</option>";
                        echo "</select>";
                    } 
                    */
                    
                 $searchSelf = "SELECT * FROM u982083468_nyangay.transactions WHERE tara_transaction_user = '$name'";
                 
                   $resultSelf = $conn->query($searchSelf);
                   
                   while($row = $resultSelf->fetch_assoc()){
                       echo "Date: ".$row['tara_transaction_date']."<br />";
                       echo "Time: ".$row['tara_transaction_time']."<br />";
                       echo "Activity: ".$row['tara_transaction_activity']."<br />";
                       echo "Venue: ".$row['tara_transaction_venue']."<br />";
                       echo "Status: ".$row['tara_transaction_status']."<br />";
                       echo "<strong>Joined by: ".$row['tara_transaction_buddy']."</strong><br />";
                       echo "<a href='./functions/delete.php?id=".$row['tara_transaction_id']."' class='btn btn-primary btn-md waves-effect waves-light'>Delete</a> ";
                       echo "<hr>";
                   }
                  echo '
                <!--Title-->
                <h4 class="card-title">Postings of other users:</h4>
                <!--Text-->
                ';
                   
                 $searchOthers = "SELECT * FROM u982083468_nyangay.transactions WHERE tara_transaction_user <> '$name'";
                   $resultOthers = $conn->query($searchOthers);
                   
                   while($row = $resultOthers->fetch_assoc()){
                       if($row['tara_transaction_status'] == 'Available'){
                       echo "Date: ".$row['tara_transaction_date']."<br />";
                       echo "Time: ".$row['tara_transaction_time']."<br />";
                       echo "Activity: ".$row['tara_transaction_activity']."<br />";
                       echo "Venue: ".$row['tara_transaction_venue']."<br />";
                       echo "Age: ".$row['tara_transaction_age']."<br />";
                       echo "Status: ".$row['tara_transaction_status']."<br />";
                       if($row['tara_transaction_crowd'] == 1){
                           echo "<strong>Availability: Just One</strong><br />";
                       }else{
                           echo "Availability: Group";
                       }
                       echo "<strong>Posted by: ".$row['tara_transaction_user']."</strong><br />";
                       echo "<a href='./functions/join.php?tact=".$row['tara_transaction_id']."&who=".$_SESSION['user_name']."' class='btn btn-primary btn-md waves-effect waves-light'>Join</a> ";
                       echo "<hr>";
                       }
                   }
                  echo '<p class="card-text"></p>';
              
                echo "<strong>Activities you joined:</strong><br />";  
                 $searchOthers1 = "SELECT * FROM u982083468_nyangay.transactions WHERE tara_transaction_buddy = '".$name."'";
                   $resultOthers1 = $conn->query($searchOthers1);
                   
                   while($row = $resultOthers1->fetch_assoc()){
                       if($row['tara_transaction_status'] == 'unavail'){
                       echo "Date: ".$row['tara_transaction_date']."<br />";
                       echo "Time: ".$row['tara_transaction_time']."<br />";
                       echo "Activity: ".$row['tara_transaction_activity']."<br />";
                       echo "Venue: ".$row['tara_transaction_venue']."<br />";
                       echo "<hr>";
                       }
                   }
                    
                    }else{
                        echo "Please login first!";
                    }
                    
                   
                  ?>
                    
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
   
    </div>
  </main>
  <!--/. main-->

<?php include 'inc/footer.php'; ?>
<?php include 'inc/scripts.php'; ?>
</body>

</html>