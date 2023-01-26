<?php
include_once "../Users_interface/mysql.php";
if (isset($_POST['submit'])) {
    $candidate_name = $_POST['candidate_name'];
    $candidate_id = $_POST['candidate_id'];
    $party_id = $_POST['party_id'];
    $party_name = $_POST['party_name'];
    $department_id = $_POST['department_id'];
    $no_of_votes = $_POST['no_of_votes'];
}
// echo $candidate_name."<br>".$candidate_id."<br>".$party_id."<br>".$party_name."<br>".$position_id."<br>".$department_id."<br>"
// .$no_of_votes;        
$query1 = "INSERT INTO CANDIDATES VALUES('$candidate_name','$candidate_id','$party_id','$department_id','$party_name','$no_of_votes')";
if (mysqli_query($conn, $query1)) {
?>
    <script>
        window.alert("inserted successfully")
        window.location.assign("Entry.php")
    </script>
<?php
} else {
?>
    <script>
        window.alert("Error during insertion!!")
    </script>
<?php
}
?>