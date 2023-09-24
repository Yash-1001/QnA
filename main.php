<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QnA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="compo/footer.css">
</head>

<body>
  <?php
  include "compo/navbar.php";
  ?>
  <?php
  include "compo/connectsql.php";
  ?>



  <!-- SLIDER -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.jpg" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <h3 class="text-center my-4">Categories</h3>

    <div class="row">
      <?php
      $sql = "SELECT * from `categories`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id=$row['cat_id'];
       $cat = $row['cat_name'];
        $desc = $row['cat_desc'];
        echo '
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="img/cards_temporary.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> ' .$cat . '</h5>
            <p class="card-text">' . substr($desc, 0, 80).'....</p> 
            <a href="threadlist.php?catid=' .$id . '" class="btn btn-primary">Explore Thread</a>
          </div>
        </div>
      </div>';
      }
      ?>

      <!-- WHILE LOOP ITERATE FOR CATEGORIES -->

      <!-- <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="https://picsum.photos/500/400" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">name</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur modi in, corrupti molestias officia blanditiis?</p>
            <a href="#" class="btn btn-primary">View Page</a>
          </div>
        </div>
      </div> -->





    </div>
  </div>
  <?php
  include ("compo/footer.html");
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>

</html>




<!-- FIRST COMMIT MADE -->