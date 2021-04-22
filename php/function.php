<?php
require_once "init.php";


function insertBooking()
{
  $email = isset($_GET['emails']) ? $_GET['emails'] : "";
  $branch = isset($_GET['branches']) ? $_GET['branches'] : "";
  $row = isset($_GET['rows']) ? $_GET['rows'] : "";
  $movie = isset($_GET['movies']) ? $_GET['movies'] : "";
  $schedule = isset($_GET['schedules']) ? $_GET['schedules'] : "";
  $qty = isset($_GET['quantities']) ? $_GET['quantities'] : "";
  
  $branchId = (int)$branch;
  $rowNum = (int)$row;
  $movieId = (int)$movie;
  $schedId = (int)$schedule;
  $qtyNum = (int)$qty;

  if (!empty($email) && !empty($branchId) && !empty($rowNum)&& !empty($movieId)&& !empty($schedId)&& !empty($qtyNum)) {
    $insert = new insert($email,$movieId,$branchId,$rowNum,$schedId,$qtyNum);


    if ($insert->insertBooking()) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> Reservation successful!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Something went wrong!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  }
}














?>


