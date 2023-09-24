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
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE cat_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['cat_name'];
        $catdesc = $row['cat_desc'];
    }
    ?>
    <div class="container my-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h3 class="display-5 fw-bold">Explore <?php echo $catname; ?> Forum</h3>


                <p class="lead my-4"><?php echo $catdesc; ?></p>
                <hr class="my-4">
                <a href="#ask_ques"><button class="btn btn-success btn-lg" type="button">Ask your Doubt</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Browse Questions</h2>
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result = mysqli_query($conn, $sql);
        $noresult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noresult = false;
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $id = $row['thread_id'];


            echo '<div class="d-flex my-4 ">
            <div class="flex-shrink-0">
                <img src="img/usericon.png" width="30px" alt="...">
            </div>
            <div class="media-body">
            <h5 class="mt-0 mx-3"><a class="text-dark" href="compo/threads.php?threadid=' . $id . '"> ' . $title . '</a></h5>
            
               ' . $desc . '
            </div>
        </div>';
        }
        if ($noresult) {
            echo ' <div class="container my-4"> <div class="card text-center">
        
        <div class="card-body">
          <h5 class="card-title">No Questions related to this category</h5>
          <p class="card-text">Be the first one to ask the question.</p>
          <a href="#ask_ques" class="btn btn-success">Ask</a>
        </div>
        <div class="card-footer text-body-secondary">
        <p class="h6">© All right Reversed.
        </div>
      </div></div>';
        }


        ?>
        <section class="container my-5" id="ask_ques">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Keep Title Short</div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Elaborate your problem</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </section>
        <?php
        include("compo/footer.html");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>

</html>