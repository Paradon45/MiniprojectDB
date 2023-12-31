<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index2.css">
    <title>Thailand Community NO.1</title>
    </head>
   <body>
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
    <section class="banner">
        <div class="banner-info">
            <!-- <img src="https://3.bp.blogspot.com/-NqMu4VqWs0k/WVhvsA8a9ZI/AAAAAAAAAAw/aAeA1xyE6QoQjjgL6MOCk1sBy7FSpLi_wCLcBGAs/s1600/nik_4257-2.jpg" alt=""> -->
            <h1>วัฒนธรรมภาคเหนือ</h1>
            <p>ภาคเหนือ หรือล้านนา ดินแดนแห่งความหลากหลายทางประเพณีและวัฒนธรรม
            <br>ที่มีความน่าสนใจไม่น้อยไปกว่าภาคอื่นของไทย 
            <br>เพราะเป็นเมืองที่เต็มไปด้วยเสน่ห์มนตร์ขลัง ชวนให้น่าขึ้นไปสัมผัสความงดงามเหล่านี้</p>
            <a href="post.php">ตั้งกระทู้ได้ที่นี่</a>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="info">
                <div class="mean">
                    <div>
                        <h3>ประเพณีเทศกาลลอยโคม ยี่เป็ง</h3>
                        <p>โคมลอย นิยมลอยกันในเทศกาลลอยกระทง ทางภาคเหนือเรียกว่าประเพณี ยี่เป็ง เป็นประเพณีลอยกระทงของชาวล้านนา 
                        ซึ่งหมายถึงวันเพ็ญเดือน 2 เป็นการนับเดือนตามจันทรคติ โดยคำว่า ยี่เป็ง เป็นภาษาเหนือ 
                        ยี่ แปลว่า สอง และคำว่า 
                        เป็ง ตรงกับคำว่า เพ็ง หรือ เพ็ญ หมายถึงพระจันทร์เต็มดวงคือวันขึ้น 15 ค่ำเดือน 2 </p>
                    </div>
                    <div>
                        <img src="https://www.tqm.co.th/gallery/2750.jpg" alt="">
                    </div>
                </div>
                
                <div class="detail">
                    <div>
                        <p>เพื่อบูชาพระเกตุแก้วจุฬามณี บนสรวงสรรค์ชั้นดาวดึงส์ จุดเด่นของงานนี้อยู่ที่การปล่อย โคมลอย ขึ้นไปในท้องฟ้า <br>โดยเชื่อกันว่า 
                            เปลวไฟในโคมเป็นสัญลักษณ์ของความรู้ และแสงสว่างที่ได้รับจากโคม จะส่งผลให้ ดำเนินชีวิต<br>ไปในทางที่ถูกต้อง การจุดโคมลอยมี 2 แบบ คือแบบที่ใช้ปล่อยใน 
                            ประเพณียี่เปงจะเริ่มตั้งแต่วันขึ้น 13 ค่ำ <br>ซึ่งถือว่าเป็น "วันดา" หรือวันจ่ายของเตรียมไปทำบุญเลี้ยงพระที่วัด ครั้น ถึงวันขึ้น 14 ค่ำ 
                            พ่ออุ้ยแม่อุ้ยและ<br>ผู้มีศรัทธาก็จะพากันไปถือศีล ฟังธรรม และทำบุญเลี้ยงพระที่วัด มีการทำ กระทงขนาด ใหญ่ตั้งไว้ที่ลานวัด <br>ในกระทงนั้นจะใส่ของกินของใช้ 
                            ใครจะเอาของมาร่วมสมทบด้วยก็ได้เพื่อเป็น ทานแก่คนยากจน ครั้นถึงวันขึ้น 15 ค่ำ <br>จึงนำกระทงใหญ่ที่วัดและกระทงเล็ก ๆ ของส่วนตัวไปลอยในลำน้ำ ในงาน 
                            บุญยี่เป็งนอกจากจะมีการปฏิบัติธรรม <br>ฟังเทศน์มหาชาติตามวัดวาอารามต่าง ๆ แล้ว ยังมีการประดับตกแต่งวัด บ้านเรือน และถนนหนทางด้วย 
                            ต้นกล้วย <br>ต้นอ้อย ทางมะพร้าว ดอกไม้ ตุง ช่อประทีป และชักโคมยี่เป็ง แบบต่าง ๆ ขึ้นเป็นพุทธบูชา พอตกกลางคืน<br>ก็จะมีมหรสพและ การละเล่นมากมาย มีการแห่โคมทอง 
                            พร้อมกับมีการจุดถ้วย ประทีป (การจุดผางปะติ๊ด)<br>เพื่อบูชาพระรัตนตรัยการจุดบอกไฟ การจุดโคมไฟประดับตกแต่งตาม วัดวาอาราม 
                            และการจุดโคมลอยปล่อยขึ้นท้องฟ้า<br>เพื่อเพื่อบูชาพระเกตุแก้วจุฬามณีบนสรวงสวรรค์ชั้นดาวดึงส์ ความเชื่อ การปล่อยว่าวไฟหรือโคมลอยนี้ <br>ชาวบ้านมักมีความเชื่อกันว่า 
                            เพื่อให้ว่าวได้นำเอาเคราะห์ ร้ายภัยพิบัติต่างๆออก ไป จาก หมู่บ้าน ดังนั้นว่าวหรือโคมลอย<br>ที่ปล่อยขึ้นไปถ้าไปตกในบ้าน ใครบ้าน นั้นต้องจะทำพิธีสะเดาะเคราะห์ 
                            เพื่อล้างเสนียด จัญไรทั้งปวงออกไป นอกจากนี้ <br>ยังถือกันว่าเป็น 
                            การทำเพื่อบูชาพระพุทธ พระธรรม พระสงฆ์ และเพื่อความสนุกสนาน สร้างความสามัคคีกันใน หมู่บ้าน
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <p>Copyright 2023. Made by PPTT</p>
        </div>
    </footer>
</body>
</html>