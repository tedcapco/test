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
            <li role="presentation"><a href="/test/">Home</a></li>
            <li role="presentation"><a href="/test/create.php">Create Thread</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">BBS Test</h3>
      </div>
        <?php 
            if ($conn):
                $sql = "SELECT * FROM thread WHERE id=".$_GET['id'];
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0):
                    while($row = mysqli_fetch_assoc($result)): 
        ?>

      <div class="jumbotron">
        
        <h1><?php echo ucfirst($row['title']); ?></h1>
      </div>
    <?php endwhile; else:
    $error = true; ?>
      <div class="jumbotron">
          <h1>Not found</h1>
      </div>
     <?php endif;  ?>
      <?php if(isset($error) && $error == true): ?>
        <div class="row">
        <div class="col-lg-6">
          <h4>Error</h4>
        </div>
      <?php else: 
      $page = ' LIMIT 5 ';
      if (isset($_GET['page'])) {
        $offset = (5 * $_GET['page']) - 5;
        $page = 'LIMIT 5 OFFSET '.$offset;
      }
      $sql = "SELECT * FROM comment WHERE thread_id=".$_GET['id'].' ORDER BY id  '.$page;
      $comments = mysqli_query($conn, $sql); ?>
      <div class="row">
        <div class="col-lg-6">
        <?php 
        $key = 0;
            while($row_comment = mysqli_fetch_assoc($comments)):
            $key++; ?>
          <h4><?php echo $row_comment['comment']; ?></h4>
          <p>Posted: <?php echo $row_comment['created']; ?></p>
          <?php if($key == 4 || $key == 8 || $key == 12): ?>
            <div class="alert alert-info">
                <strong>Advertisement!</strong> Good Luck in your exam!!!!
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
        </div>
        
      </div>
      <ul class="pagination">
          <?php $sql = "SELECT * FROM comment WHERE thread_id=".$_GET['id']; 
                $result = mysqli_query($conn, $sql); ?>
                <h5> Comments (<?php echo mysqli_num_rows($result); ?>) </h5>
          <?php
                $pages = round(mysqli_num_rows($result) / 5);
                    
                for ($i=1; $i <= $pages ; $i++):
                ?>

          <li><a href="/test/detail.php?id=<?php echo $_GET['id']; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php endfor; ?>
        </ul>
        <div class="form-group">
          <label for="comment">Comments:</label> 
          <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$_GET['id']; ?> method="post">
          <input type="hidden" value="<?php echo $_GET['id']; ?>" name="thread_id">
          <?php if(isset($_GET['page']) && $_GET['page'] != null) : ?>
          <input type="hidden" value="<?php echo $_GET['page']; ?>" name="page">
          <?php endif; ?>
          <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                  <input type="submit" class="btn btn-primary">
          </form>
        </div>
        <?php endif; else: ?>
          <div class="jumbotron">
              <h1>Error </h1>
          </div>
        <?php endif; ?>

      <footer class="footer">
        <p>&copy; 2016 YNS TEST.</p>
      </footer>

    </div> <!-- /container -->
  </body>
  <?php
      if (!empty($_POST) && $_POST['comment'] != null) {
          $sql = "INSERT INTO comment (thread_id, comment)
            VALUES (".$_POST['thread_id'].",'".$_POST['comment']."')";
          if ($conn->query($sql) === FALSE) {
              echo "Error: " . $sql . "<br>" . $conn->error;
          } else {
              $page = isset($_POST['page']) && $_POST['page'] != null
                      ? '&page='.$_POST['page']
                      : '';
              header('Location: /test/detail.php?id='.$_POST['thread_id'].$page);
              exit(0);
          }
      }
  ?>
</html>
