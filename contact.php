<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        >
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Future Path</title>
    </head>
    <body class="contact">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <b>Future Path</b>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="myweb.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">SignUp</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        >
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <img id="image" src="boris-smokrovic-RLLR0oRz16Y-unsplash.jpg">
        <h1>Contact Us</h1>
        <form action="contact.php" method="post">
        <div class="forms" style="height: 450px;padding: 10px;">
            <h2>Leave Us A Comment</h2>
            <div class="mb-3 my-5">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input
                    style="width: 100%;"
                    type="email"
                    name="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="name@example.com"
                >
            </div>
            <div class="mb-3 my-5">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea
                    style="width: 60%;"
                    class="form-control"
                    name="desc"
                    id="exampleFormControlTextarea1"
                    rows="3"
                ></textarea>
            </div>
            <button type="submit" id="button2">Submit</button>
            <?php
  if(isset($_POST['email'])){
      include "config.php";
      $email = $_POST['email'];
      $other = $_POST['desc'];
      $sql = "INSERT INTO `contact`(`email`,`other`,`date`) VALUES ('$email','$other',current_timestamp());";
      $to = "srinidhimiyapuram@gmail.com";
      $email_subject = "Contact form submission";
      $email_body = "You have recieved a new message."."Here are the details."."Email: $email"."Message: $other";
      $headers= "From: website@000webhostapp.com";
      $headers.= "Reply-To: $email";
      if(mail($to,$email_subject,$email_body,$headers)){
           echo '<div class="success"> Success Email Sent! </div>';
    }
    else{
        echo '<div class="failed"> Failed! </div>';
    }
      if($con -> query($sql) == true){
          echo "<div><b>Thank You For Giving Your Feedback</b></div>";
          $insert = true;
      }else{
          echo "Internal Server Error";
      }
      $con->close();
  }
?>
        </div>
       
        </form>

        <div class="foot">
            <footer>
            <h3>Follow Us</h3>
            <div class="social">
            <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="#">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
            </div>
            </footer>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
    </body>
</html>
