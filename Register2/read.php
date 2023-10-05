<?php
	session_start();
	include 'server.php';
	if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }
	if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

	$sql = "SELECT * FROM post WHERE post_id='{$_GET['id']}' ";
	$query = mysqli_query($conn, $sql) or die("Error in sql : $query".mysqli_error($conn)); 
	$result = mysqli_fetch_assoc($query);

	$sql_a = "SELECT * FROM comment WHERE id='{$_GET['id']}' ";
    $query_a = mysqli_query($conn, $sql_a) or die("Error in sql : $query".mysqli_error($conn));
	$rows_a = mysqli_num_rows($query_a);

	$uid = $result['id'];
    $sql_b = "SELECT * FROM user WHERE id = $uid ";
    $query_b = mysqli_query($conn, $sql_b) or die("Error in sql : $query".mysqli_error($conn)); 
	$result_b = mysqli_fetch_assoc($query_b);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thailand Community NO.1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="web_board.css">
</head>
<body>
	<section>
<nav>
        <div class="logo">
            <a href="#">Thailand-community-No.1</a>
        </div>

         <ul class="menu">
		    <li><a href="post.php">POST</a></li>
		    <li><a href="profile.php">PROFILE</a></li>
            <li><a href="index.php">HOME</a></li>
            <li><?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome! <strong><?php echo $_SESSION['username']; ?></strong></p></li>
            <li><p><a href="index.php?logout='1'" style="color: red;">LOGOUT</a></p></li>
          <?php endif ?>
        </ul>
    </nav>
	<div class="container">
		<!-- panel -->
        
		<div class="panel panel-primary">
			
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6 col-md-6">
                    <h3 class="panel-title" style="font-size: 25px;"><?php echo $result['title']; ?></h3>
					</div>
					<div class="col-xs-6 col-md-6 text-right">
						<a href="profile.php" class="btn btn-default">กลับไปหน้าแรก</a>
					</div>
					
                    <div class="col-xs-6 col-md-6">
						<p style="font-size: 18px;"><?php echo $result['detail'];?><p><br>USER ID : <?php echo $result['id'] ?></p>
                    <p>NAME :<?php echo $result_b['username'] ?></p></p>
					</div>
				</div>
			</div>
			
			<div class="panel-body">
				<div class="row" style = "font-size: 30px;">
				<div class="col-xs-6 col-md-6">
			    	<p style = "margin-left:15px" ><strong>การตอบกลับ :</strong></p>
			     	</div>
						<div class="col-xs-6 col-md-6 text-right">
                            <?php
                                echo '<tr>';
                                echo '<td><a href="edit.php?id='.$result['post_id'].'" class="btn btn-info">แก้ไขกระทู้</a></td>';
                                echo '</tr>';
                            ?>
                    	</div>
				</div>
				


				<?php
					if ($rows_a > 0) {
					$i = 1;
						while ($result_a = mysqli_fetch_assoc($query_a)) {
                         $cid = $result_a['user_id'];
                         $sql_c = "SELECT * FROM user WHERE id = $cid ";
                         $query_c = mysqli_query($conn, $sql_c) or die("Error in sql : $query".mysqli_error($conn));
	                     $result_c = mysqli_fetch_assoc($query_c);
                               
				?>
					<?php    echo '<hr>'; ?>
					<?php    echo '<div class="comment">';?>
					<?php    echo '<strong><p style = "font-size: 20px;">'.$result_a['comment'].'</p></strong>';?>
					<?php    echo '<p>USER ID : '.$result_a['user_id'].'</p>';?>
                    <?php    echo '<p>NAME : '.$result_c['username'].'</p>';?>
					<?php    echo '<span>เวลา : '.$result_a['date'].'</span>';?>
					<?php    echo '</div>';?>
					<?php    echo '<hr>';    ?>
				<?php	
						}
						} else {
				?>
						<p style="text-align: center;color: red;">ไม่มีการตอบกลับ</p>
				<?php
						}
				?>

				<form class="form-horizontal" action="read_db.php" method="post">
				<input type="hidden" name="id" value="<?php echo $result['post_id']; ?>">
				  
				  <div class="form-group">
				    <label class="col-sm-2 control-label">comment</label>
				   <div class="col-sm-10">
				       <textarea class="form-control" rows="3" name="comment"></textarea>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">send</button>
				    </div>
				  </div>
				</form>

			</div>

			<div class="panel-footer">
		    <?php if (isset($_SESSION['username'])) ?>
		    <p> Hello : <strong><?php echo  $_SESSION['username'];?></strong></p>			
            </div>
		</div>
        
		<!--/panel -->
	</div>
	</section>

	<script src="dist/js/jquery.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>