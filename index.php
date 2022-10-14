<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <style>
   #ques
   {
     min-height: 43px;
   }
 </style>
    <title>iCom - The Companion</title>
</head>

<body>

  <?php include 'partials/_dbconnect.php'; ?>
  <?php include 'partials/_header.php'; ?>

    <!-- slider start here -->

 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider1.jpg" class="d-block w-100" alt="..." height="500" >
    </div>
    <div class="carousel-item">
      <img src="img/slider2.jpg" class="d-block w-100" alt="..." height="500" >
    </div>
    <div class="carousel-item">
      <img src="img/slider3.jpg" class="d-block w-100" alt="..."height="500" >
    </div>
    <div class="carousel-item">
      <img src="img/slider4.jpg" class="d-block w-100" alt="..."height="500" >
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
    <!-- category contain start here -->
    <div class="container my-4 "id="ques" >
        <h2 class="text-center my-4">iCom- Browser Features</h2>
        <div class="row my-4">

        <!-- fetch all the  categories  -->
        <!-- use a for loop to iterate through categories -->
      <?php 
       $sql = "SELECT * FROM `categories`";
       $result = mysqli_query($conn,$sql);
       $id=1;
        $cat = "Mental health tracker";
        $desc ="Track Your Mental Health Today";
        echo ' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "./mlt/mlt.php?catid='  . $id. '">'  . $cat . ' </a></h5>
                      
                        <p class="card-text">'  .substr($desc,0,90). '...</p>
                        <a href="./mlt/mlt.php?catid='  . $id. '" class="btn btn-primary">Track Now</a>
                    </div>
                </div>
        </div>';
        $id=2;
        $cat = "Expert Help";
        $desc ="Get Epert Help Now";
        echo ' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "threadlist.php?catid='  . $id. '">'  . $cat . ' </a></h5>
                      
                        <p class="card-text">'  .substr($desc,0,90). '...</p>
                        <a href="threadlist.php?catid='  . $id. '" class="btn btn-primary">Get Help</a>
                    </div>
                </div>
        </div>';
        $id=3;
        $cat = "Depression Analysis";
        $desc ="Find out if you're really depressed";
        echo ' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "threadlist.php?catid='  . $id. '">'  . $cat . ' </a></h5>
                      
                        <p class="card-text">'  .substr($desc,0,90). '...</p>
                        <a href="./depression/depression.php?catid='  . $id. '" class="btn btn-primary">Test Now</a>
                    </div>
                </div>
        </div>';
        $id=4;
        $cat = "Sentiment Analysis";
        $desc ="let's check How you Feeling Right Now";
        echo ' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "threadlist.php?catid='  . $id. '">'  . $cat . ' </a></h5>
                      
                        <p class="card-text">'  .substr($desc,0,90). '...</p>
                        <a href="./sentiment/sentiment.php?catid='  . $id. '" class="btn btn-primary">Try Now</a>
                    </div>
                </div>
        </div>';
        $id=5;
        $cat = "TO-DO-List";
        $desc ="Add your to do list item for the day";
        echo ' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="img/todo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href = "threadlist.php?catid='  . $id. '">'  . $cat . ' </a></h5>
                      
                        <p class="card-text">'  .substr($desc,0,90). '...</p>
                        <a href="./todolist/todolist.php?catid='  . $id. '" class="btn btn-primary">Try Now</a>
                    </div>
                </div>
        </div>';
       /*while($row = mysqli_fetch_assoc($result))
       {
            //echo $row['category_id'];
            //echo $row['category_name'];
            $id=$row['category_id'];
            $cat =$row['category_name'];
            $desc =$row['category_description'];
            echo ' <div class="col-md-4 my-2">
                    <div class="card" style="width: 18rem;">
                        <img src="img/card-'.$id.'.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href = "threadlist.php?catid='  . $id. '">'  . $cat . ' </a></h5>
                          
                            <p class="card-text">'  .substr($desc,0,90). '...</p>
                            <a href="threadlist.php?catid='  . $id. '" class="btn btn-primary">Select</a>
                        </div>
                    </div>
            </div>';
       }*/
       ?>




            
    </div>
    <?php include 'partials/_footer.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>