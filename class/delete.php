<?php
require_once "config.php";
class delete extends config
{
  public $id;


  public function __construct($id)
  {
    $this->id = $id;
  }
  public function deleteBooking()
  {
    $con = $this->con();
    $sql = "DELETE FROM `booking` WHERE `id` = $this->id";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }
    else{
      return false;
    }
    
  }
}
