<?php
require_once 'config.php';

class view extends config
{

  public function viewMovies()
  {
    $con = $this->con();
    $sql = "SELECT * FROM `movies`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $movie) {
      echo "<div class='col-xl-4 col-lg-6 col-md-12'>
          <div
            class='card card-shadow mx-auto my-3'
            style='width: 18rem'
            data-aos='fade-right'
            data-aos-duration='2000'
          >
            <img
              src='$movie[image]'
              class='card-img-top card-image-custom'
              alt='$movie[description]'
            />
  
            <div class='card-body'>
              <h5 class='card-title'>Sangano, Sangano't, Sanggwapo</h5>
              <p class='card-text'>
                $movie[description]
              </p>
            </div>
          </div>
        </div>";
    }
  }

  public function viewMovieOption(){
    $con = $this->con();
    $sql = "SELECT * FROM `movies`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $movie) {
      echo "<option value='$movie[id]'>$movie[title]</option>";
    }

  }
  public function viewSchedOption(){
    $con = $this->con();
    $sql = "SELECT * FROM `schedule`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $date) {
      echo "<option value='$date[id]'>$date[sched]</option>";
    }

  }
  public function viewBranchOption(){
    $con = $this->con();
    $sql = "SELECT * FROM `branch`";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $branch) {
      echo "<option value='$branch[id]'>$branch[name]</option>";
    }

  }
  public function viewReserved(){
    $con = $this->con();
    $sql = "SELECT e.email AS Email, e.type AS Row, e.quantity as quantity,m.title AS Movie, s.sched AS Schedule, b.name AS Branch FROM booking as e JOIN branch b ON e.branch_id=b.id JOIN movies m ON e.movie_id=m.id JOIN schedule s ON e.schedule_id=s.id";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
    $date_time = new DateTime($row["Schedule"]);
    $sched = $date_time->format('g:ia \o\n l jS F Y');
     echo "<tr>";
            echo "<td>$row[Email]</td>";
            echo "<td>$row[Row]</td>";
            echo "<td>$row[quantity]</td>";
            echo "<td>$sched</td>";
            echo "<td>$row[Branch]</td>";
            echo
              '<td>
                <a  href="#" class="btn btn-success" style="background-color: red; color: white; border: none">
                  Delete
                </a>
              </td>';

         echo "</tr>";
    }

  }
}
