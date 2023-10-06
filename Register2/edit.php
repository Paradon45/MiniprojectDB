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
		
	<div class="container">

		<!-- panel -->
		<div class="panel panel-primary">

		<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6 col-md-6">
                    <h3 class="panel-title"><?php echo $result['title']; ?> <p><br>USER ID :<?php echo $result['id'] ?></p></h3>
					</div>
					<div class="col-xs-6 col-md-6 text-right">
						<a href="profile.php" class="btn btn-warning">กลับไปหน้าโปรไฟล์</a>
					</div>
				</div>
			</div>


			<div class="panel-body">
				<form class="form-horizontal" action="edit_db.php" method="post">
				<input type="hidden" name="userid" value="<?php echo $result['id']; ?>">
				<input type="hidden" name="id" value="<?php echo $result['post_id']; ?>">
					<div class="form-group">
						<label class="col-sm-2 control-label">หัวเรื่อง</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="title" required
                            value="<?php echo $result['title'];?>">
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label">เนื้อหา</label>
						<div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="detail" required>
                                <?php echo $result['detail'];?></textarea>

						</div>
					</div>
					

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
					
						    <button type="submit" class="btn btn-success">แก้ไข</button>
						</div>
                        <div class="col-sm-offset-2 col-sm-10 text-right">
                            <?php
                                echo '<tr>';
                                echo '<td><a href="read.php?id='.$result['post_id'].'" class="btn btn-info">ย้อนกลับ</a></td>';
                                echo '</tr>';
                                ?>
                         </div>
					</div>
				</form>
			</div>


			<div class="panel-footer">
			<p> Hello : <strong><?php echo  $_SESSION['username'];?></strong></p>	
			</div>

		</div>
		<!--/panel -->

	</div>
	</section>
</body>
</html>