<?php
require_once "config.php";
class insert extends config
{
  public $email;
  public $movid;
  public $branchid;
  public $type;
  public $schedid;
  public $quantity;



  public function __construct($email,$movid,$branchid,$type,$schedid,$quantity)
  {
    $this->email = $email;
    $this->movid = $movid;
    $this->branchid = $branchid;
    $this->schedid = $schedid;
    $this->type = $type;
    $this->quantity = $quantity;
  }
  public function insertBooking()
  {
    $con = $this->con();
    $sql = "INSERT INTO `booking`(`email`,`movie_id`,`branch_id`,`row`,`schedule_id`,`quantity`) VALUES ('$this->email',$this->movid,$this->branchid,$this->type,$this->schedid,$this->quantity)";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }
    else{
      return false;
    }
    
  }
}
