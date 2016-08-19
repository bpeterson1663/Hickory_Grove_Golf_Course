<?php

				if ($_POST["submit"]) {
					$result='<div class="alert alert-success"> Form Submitted</div>';

				if (!$_POST['name']) {
					$error="<br/>Please enter your name";
				}

				if (!$_POST['email']) {
					$error.="<br/>Please enter your email";
				}

				if (!$_POST['comment']) {
					$error.="<br/> Please enter your comments";
				}

				if ($_POST['email']!="" AND (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
					$error.="<br />Please enter a valid email address";
				}
				if ($error) {
					$result='<div class="alert alert-danger center"><strong> There were error(s) in your form:</strong>'.$error.'</div>';
				} else {

					if (mail("bpeterson1663@gmail.com", "Comment From Website!", "Name: ".$_POST['name']."
					Email: ".$_POST['email']."
					Comment: ".$_POST['comment'])) {
						$result='<div class="alert alert-success center"><strong>Thank You!</strong> We\'ll be in touch with you shortly.</div>';
					} else {
						$result='<div class="alert alert-danger"><strong>Sorry there was an error.</strong>Please Try Again!</div>';
					}
				}
			}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Hickory Grove Golf Course</title>

    <script src="../vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js" type='text/javascript'></script>
    <script src="../scripts/app.js" type="text/javascript" ></script>

    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../stylesheets/cover.css" rel="stylesheet" />
    <link href="../stylesheets/styles.css" rel="stylesheet" />

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="stylesheets/ie10-viewport-bug-workaround.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="scripts/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <img src="../images/HG-Logo-Small.png" alt="HG Logo" class="logo masthead-brand" />
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                   <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav masthead-nav">
                          <li><a href="../index.html">Home</a></li>
                          <li><a href="../views/course.html">The Course</a></li>
                          <li><a href="../views/events.html">Events</a></li>
                          <li><a href="../views/foodandbev.html">Food And Beverage</a></li>
                          <li><a href="../views/contact.php">Contact Us</a></li>
                      </ul>
                    </div>  
               </div>
              </nav>
            </div>
            </div>
            <div class="row">
              <h1 class="center title">Let's Talk</h1>
              <?php echo $result; ?>
            </div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3 centerContent">
                <form method="post">
                <div class="form-group">
                  <label form="name">Your Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name'];?>"/>
                </div>
                <div class="form-group">
                  <label form="name">Email:</label>
                  <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email'];?>" />
                </div>
                <div class="form-group">
                  <label form="comment">Your Comment:</label>
                  <textarea name="comment" class="form-control" placeholder="Enter Your Comments" value="<?php echo $_POST['comment'];?>"> </textarea>
                </div>
                <input type="submit" class="btn btn-success btn-lg center-block" value="Submit" name="submit" onclick="window.location.href='#letsTalk'"/>
              </form>
                <div class="center contactInfo">
                  <h4><a href="tel:+19522501663">Cell Phone: (952) 250-1663</a></h4>
                      <h4><a href="mailto:bpeterson1663@gmail.com">Email: bpeterson1663@gmail.com</a></h4>
                    </div>
              <br/>
                  </div>
   		      </div>
          

  

          <div class="mastfoot">
            <div class="inner">
               <p>&copy; Hickory Grove Golf Course 2016</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../scripts/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>