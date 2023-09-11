<?php
require_once 'config/database.php';
?>
        <link rel="stylesheet" href="js/style.css">
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/ajaxreq.js"></script>
        <div class="wrap" >
            <div id="loader">
                
            </div>
        <?php
        global $db;
        $db->connect();
        $result=$db->query("SELECT * FROM question WHERE id=1  LIMIT 1");
        while($row=$db->fetch_array($result)){
            echo '<p class="title">'.$row['title'].'</p>';
            $result=$db->query("SELECT * FROM answers WHERE q_id='{$row['id']}'");?>
        <form action="" method="post" >
             <div class="options">
                 <input type="hidden" id="question_id" value="<?php echo $row['id']; ?>">
        <?php
            while($ans=$db->fetch_array($result)){
                ?>
            <p class="vote" ><input  type="radio" value="<?php echo $ans['id'];  ?>" name="group">&nbsp<?php echo $ans['title'];  ?></p> 
            <?php
            }
        }
        $db->disconnect();
        ?>
            
                </div>
            
       </form>
            <p class="btns">
              <a href="javascript:void(0);" id="send" class="btn btn_poll btn-primary">
                  ثبت نظر
              </a>
              <a href="javascript:void(0);" id="results" class="btn btn_poll btn-primary">
                  نمایش نتایج
              </a>
            </p>
            
            </div>