<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sean Faubus - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://seanfaub.us/images/frogo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://seanfaub.us/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    </head>
    <body id="page-top">
        <script type="application/ld+json">
            {
                "@context": "http://www.schema.org",
                "@type": "WebSite",
                "name": "Sean Faubus",
                "url": "https://sfaubus.heyuhnem.com/index.html",
                "description": "Personal website of Sean Faubus."
            }
        </script>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo">Welcome.</div>
           <ul class="menu">
               <li><a class="navText" href="https://seanfaub.us/">Home</a></li>
               <li><a class="navText" href="https://seanfaub.us/contact.html">Contact</a></li>
           </ul>
           <div class="menu-btn">
                <i class="fa fa-bars"></i>
           </div>

        </div>
    </nav>
<!-- home section start -->
<section class="home" id="home">
    <div class="max-width">
    <?php
  
  if($_POST) {
      $visitor_name = "";
      $visitor_email = "";
      $visitor_message = "";
      $subject = "Faubus Contact Page";
      $email_body = "<div>";
        
      if(isset($_POST['visitor_name'])) {
          $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
          $email_body .= "<div>
                             <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                          </div>";
      }
   
      if(isset($_POST['visitor_email'])) {
          $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
          $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
          $email_body .= "<div>
                             <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                          </div>";
      }
      
      if(isset($_POST['visitor_message'])) {
          $visitor_message = htmlspecialchars($_POST['visitor_message']);
          $email_body .= "<div>
                              <label><b>Visitor Message:</b></label>
                              <div>".$visitor_message."</div>
                          </div>";
      }
      
      $recipient = "seanfaubus@gmail.com";
        
      $email_body .= "</div>";
   
      $headers  = 'MIME-Version: 1.0' . "\r\n"
      .'Content-type: text/html; charset=utf-8' . "\r\n"
      .'From: ' . $visitor_email . "\r\n";
        
      if(mail($recipient, $subject, $email_body, $headers)) {
          echo "<p>Thank you for contacting me, $visitor_name. I have received your feedback!</p>";
      } else {
          echo '<p>We are sorry but the email did not go through.</p>';
      }
        
  } else {
      echo '<p>Something went wrong</p>';
  }
  ?>

    </div>

</section>

<!-- footer section start -->
<footer>
    <ul class="socials">
        <li><a>Sugar Land, Tx</a></li>
        <li><a href="https://www.linkedin.com/in/seanfaubus/" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a></li>
        <li><a href="https://github.com/seanfaubus" target="_blank"><i class="fab fa-fw fa-github"></i></a></li>
        <li><a href="https://seanfaub.us/contact.html">Contact</a></li>
    </ul>
    <span>
        <!-- Copyright Section-->
        <div class="copyYear">
        <div class="container" id="copyYear"></div>
        </div>
    <script>
        var copyYear = new Date();
        document.getElementById("copyYear").innerHTML = "Copyright &copy; Sean Faubus " +  copyYear.getFullYear();
    </script>
    </span>
</footer>


<script src="https://seanfaub.us/script.js"></script>
</body>
</html>
