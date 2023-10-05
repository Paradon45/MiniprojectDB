<?php
    session_start();
    include 'server.php';

	$sql = "SELECT * FROM post ORDER BY title DESC";
    $result = $conn->query($sql);
    $totalPosts = $result->num_rows;

$commentSql = "SELECT * FROM comment ORDER BY comment DESC";
$commentResult = $conn->query($commentSql);
$totalComments = $commentResult->num_rows;
  
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
    <div class="left-box">
	<p style="float: right;">โพสต์ทั้งหมด: <?php echo $totalPosts; ?> โพสต์</p>
    <p style="float: right;">การตอบกลับทั้งหมด :<br><?php echo $totalComments; ?> ความคิดเห็น</p>
    </div>
   <div class="container">
		<!-- panel -->
		<div class="panel panel-primary">

			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<h3 class="panel-title" style="font-size: 40px;">WEB BOARD</h3>
					</div>
					<div class="col-xs-6 col-md-6 text-right">
						<a href="create_post.php" class="btn btn-warning">New post</a>
					</div>
				</div>
			</div>

			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>รหัสกระทู้</th>
							<th>ชื่อกระทู้</th>
							<th>ตอบกลับ</th>
							<th>เวลาที่โพส</th>
							<th>ตัวเลือก</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$i = 0;
							$sql = "SELECT * FROM `post` ORDER BY `post`.`date` DESC";
							$query = mysqli_query($conn, $sql);

							
							while ($result = mysqli_fetch_assoc($query)) {
                                echo '<tr>';
                                echo '<td>' . $result['post_id'] . '</td>';
                                echo '<td>' . $result['title'] . '</td>';
                                echo '<td>' . $result['reply'] . '</td>';
                                echo '<td>' . $result['date'] . '</td>';
                                echo '<td><a href="read_no_edit.php?id='.$result['post_id'].'" class="btn btn-info">อ่าน</a></td>';
                                echo '</tr>';
                            $i++;
                            }

						?>
					</tbody>
				</table>
			</div>
			</div>

			<div class="panel-footer">
				
			  </div>
			</div>

		</div>

		<!--/panel -->
	</div>
	</section>
</body>
</html>