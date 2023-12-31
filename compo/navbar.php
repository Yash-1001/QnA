<?php 
echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
    
<div class="container-fluid">
  <a class="navbar-brand" href="main.php">QnA</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="main.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Topics
        </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>
             </ul>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
    </li>
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="mx-2">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</button>
    </div>
  </div>
</div>

</nav>';
include "loginmodal.php";
include "signupmodal.php";

?>