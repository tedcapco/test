<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="create.php">Create Thread</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">BBS Test</h3>
      </div>

      <div class="jumbotron">
        <h1>BBS</h1>
        <p class="lead">Bulletin Board System Applicant Test</p>
      </div>
    <?php   if ($conn) :
                $sql = "SELECT * FROM thread ORDER BY created DESC";
                $result = $conn->query($sql);
                
           ?>
      <div class="row marketing">
        <div class="col-lg-6">
        <?php if ($result->num_rows > 0): 
                while ($row = mysqli_fetch_assoc($result)):
                ?>
          <h4><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
          <p>Posted: <?php echo $row['created']; ?></p>
        <?php endwhile; endif; ?>
        </div>

      <?php else: ?>
        <div class="col-lg-6">
          <h4>No result</h4>
        </div>
      <?php endif; ?>
      </div>

      <footer class="footer">
        <p>&copy; 2016 YNS TEST.</p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
