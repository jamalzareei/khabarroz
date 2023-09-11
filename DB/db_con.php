<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db_con
 *
 * @author jamal
 */
class db_con {
    //put your code here

    const db_server = "localhost";
    const db_name = "db_irnews"; // "khabarro_db_news";
    const db_user = "root"; //"khabarro_khabar";
    const db_password = ""; // "1430548jamal";

    private $db = null;

    public function db_con() {
        //PDO Database Connection
        $dsn = 'mysql:dbname=' . self::db_name . ';host=' . self::db_server;
        //Try-Catch Block
        try {
            $this->db = new PDO($dsn, self::db_user, self::db_password,
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } 
        catch (PDOException $e) {
            echo 'Connection Failed: ' . $e->getMessage();
        }
    }

    public function insert_commentnews($id_news, $name_sender, $img, $email, $message, $date, $taeid) {
        $query_reg = "insert into tbl_commentnews (id_news,name_sender,img,email,message,date_commentnews,taeid_modir)
            values (N'" . $id_news . "',N'" . $name_sender . "',N'" . $img . "',N'" . $email . "',N'" . $message . "',N'" . $date . "',N'" . $taeid . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_commentnote($id_note, $name_sender, $img, $email, $message, $date, $taeid) {
        $query_reg = "insert into tbl_commentnote (id_note,name_sender,img,email,message,date_commentnote,taeid_modir)
            values (N'" . $id_note . "',N'" . $name_sender . "',N'" . $img . "',N'" . $email . "',N'" . $message . "',N'" . $date . "',N'" . $taeid . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_commentpersonality($id_personality, $name_sender, $img, $email, $message, $date, $taeid) {
        $query_reg = "insert into tbl_commentpersonality (id_personality,name_sender,img,email,message,date_commentpersonality,taeid_modir)
            values (N'" . $id_personality . "',N'" . $name_sender . "',N'" . $img . "',N'" . $email . "',N'" . $message . "',N'" . $date . "',N'" . $taeid . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_connect($name_sender, $email, $title, $message) {
        $query_reg = "insert into tbl_connect (name_sender,emial,title,message)
            values (N'" . $name_sender . "',N'" . $email . "',N'" . $title . "',N'" . $message . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_login($username, $password) {
        $query_reg = "insert into tbl_login (username,password)
            values (N'" . $username . "',N'" . $password . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_magazine($title, $message, $img, $link_magazine, $date_magazin, $type) {
        $query_reg = "insert into tbl_magazine (title,message,img,link_magazine,date_magazine,type_magazine)
            values (N'" . $title . "',N'" . $message . "',N'" . $img . "',N'" . $link_magazine . "',N'" . $date_magazin . "',N'" . $type . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_news($title, $message, $img, $comment, $taeid, $link_news, $viewer, $vizhe, $date_news, $type1, $sender, $type2, $in_out, $video) {
        $query_reg = "insert into tbl_news (title,message,img,comment,taeid,link_news,viewer,vizhe,date_news,type1,sender,type2,in_out,video)
            values (N'" . $title . "',N'" . $message . "',N'" . $img . "',N'" . $comment . "',N'" . $taeid . "',N'" . $link_news . "',N'" . $viewer . "',N'" . $vizhe . "',N'" . $date_news . "',N'" . $type1 . "',N'" . $sender . "',N'" . $type2 . "',N'" . $in_out . "',N'" . $video . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_note($title, $message, $img, $date_note, $link_note, $comment, $sender) {
        $query_reg = "insert into tbl_note (title,message,img,date_note,link_note,comment,sender)
            values (N'" . $title . "',N'" . $message . "',N'" . $img . "',N'" . $date_note . "',N'" . $link_note . "',N'" . $comment . "',N'" . $sender . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function insert_personality($name_person, $img, $message, $comment, $date_peronality, $sender, $link_personality) {
        $query_reg = "insert into tbl_personality (name_person,img,message,comment,date_personality,sender,link_personality)
            values (N'" . $name_person . "',N'" . $img . "',N'" . $message . "',N'" . $comment . "',N'" . $date_peronality . "',N'" . $sender . "',N'" . $link_personality . "')";

        $insert_reg = $this->db->prepare($query_reg);
        return $insert_reg->execute();
    }

    public function news($date) {
        $date = $date;
        $query_new = $this->db->prepare("select *,left(message,locate(' ',message,199)) as message from tbl_news where taeid=1 order by id_news DESC limit 8");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function login($usern, $pass) {
        $query_new = $this->db->prepare("select * from tbl_login where username='$usern' and password='$pass' and login_on=0");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_string($id) {
        $query_new = $this->db->prepare("select * from tbl_news where id_news=$id and taeid=1");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function email($date) {
        $query_new = $this->db->prepare("select *,left(message,50) as message,left(title,20) as title from tbl_news where taeid=1 order by id_news DESC limit 10");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_user_entezar() {
        $query_new = $this->db->prepare("select * from tbl_news where taeid=0 limit 1");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_send_user() {
        $link = "user";
        $query_new = $this->db->prepare("select * from tbl_news where link_news like '%$link%' limit 8");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function note_string($id) {
        $query_new = $this->db->prepare("select * from tbl_note where id_note=$id");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function magazine_string($id) {
        $query_new = $this->db->prepare("select * from tbl_magazine where id_magazin=$id");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function personality_string($id) {
        $query_new = $this->db->prepare("select * from tbl_personality where id_personality=$id");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function note_string_relation($name, $id_note) {
        $img = "upload";
        $jamal = explode(" ", $name);
        $arr = array();
        $i = 0;
        foreach ($jamal as $jamz) {
            $arr[$i] = trim($jamz);
            $i++;
            if ($i == 3) {
                break;
            }
            //echo $jamz."<br>";
        }
        $query_new = $this->db->prepare("select * from tbl_note where (title like '%$arr[0]%' or title like '%$arr[1]%' or title like '%$arr[2]%') and id_note!=$id_note limit 2");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function personality_string_relation($name, $id_person) {
        $img = "upload";
        $jamal = explode(" ", $name);
        $arr = array();
        $i = 0;
        foreach ($jamal as $jamz) {
            $arr[$i] = trim($jamz);
            $i++;
            if ($i == 3) {
                break;
            }
            //echo $jamz."<br>";
        }
        $query_new = $this->db->prepare("select * from tbl_personality where (name_person like '%$arr[0]%' or name_person like '%$arr[1]%' or name_person like '%$arr[2]%') and id_personality!=$id_person limit 2");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function magazine_string_relation($type1, $id_news) {
        $img = "upload";
        $query_new = $this->db->prepare("select * from tbl_magazine where type_magazine like '%$type1%' and id_magazin!=$id_news order by id_magazin DESC limit 2");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_string_relation($type1, $id_news) {
        $img = "upload";
        $query_new = $this->db->prepare("select * from tbl_news where id_news!=$id_news and type1 like '%$type1%' and taeid=1 order by id_news DESC limit 2");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_search($serach, $min) {
        $date = $date;
        $query_new = $this->db->prepare("select *,left(message,199) as message from tbl_news where
            (title like '%$serach%' or type1 like '%$serach%' or type2 like '%$serach%') and taeid=1
                order by id_news DESC limit $min,8");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_main($min) {
        $query_new = $this->db->prepare("select *,left(message,199) as message from tbl_news where taeid=1 order by id_news DESC limit $min,10");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_media($min) {
        $img = "upload";
        $query_new = $this->db->prepare("select * from tbl_news where img like '%$img%' and taeid=1 order by id_news DESC limit $min,9");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

    public function news_type2() {//left(message,locate(' ',message,199))
        $type2 = "فوری";
        $query_type2 = $this->db->prepare("select *,left(message,199) as message from tbl_news where type2 like '%$type2%' and taeid=1 order by id_news DESC limit 10");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function news_type1($type1, $min) {
        $query_type2 = $this->db->prepare("select id_news,img,left(link_news,199) as link_news,left(title,100) as title,comment,
            taeid,viewer,date_news,type1,sender,in_out,video
            from tbl_news where type1 like '%$type1%' and taeid=1 order by id_news DESC limit $min,9");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function news_type_one($type1) {
        $query_type2 = $this->db->prepare("select id_news,img,left(link_news,199) as link_news,left(title,100) as title,video 
            from tbl_news where type1 like '%$type1%' and taeid=1 order by id_news DESC limit 0,1");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function news_type_index($type1, $min) {
        $query_type2 = $this->db->prepare("select id_news,img,left(link_news,199) as link_news,left(title,100) as title,comment,
            taeid,viewer,date_news,type1,sender,in_out,video
            from tbl_news where type1 like '%$type1%' and taeid=1 order by id_news DESC limit $min,15");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }
    public function news_viewer() {
        $query_type2 = $this->db->prepare("select *,left(message,199) as message from tbl_news WHERE taeid=1 order by viewer DESC limit 8");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function news_vizhe() {
        $vizhe = 1;
        $query_type2 = $this->db->prepare("select *,left(message,199) as message from tbl_news where vizhe=$vizhe and taeid=1 order by id_news DESC limit 1,6");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function news_img($row) {
        $img = "upload";
        $query_type2 = $this->db->prepare("select *,left(message,199) as message from tbl_news where img like '%$img%' and taeid=1 order by id_news DESC limit $row,4");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function news_vizhe_1() {
        $vizhe = 1;
        $query_type2 = $this->db->prepare("select *,left(message,199) as message from tbl_news where vizhe=$vizhe and taeid=1 order by id_news DESC limit 1");
        $query_type2->execute();
        if ($query_type2->rowCount() > 0) {
            return $query_type2->fetchAll();
        }
        return FALSE;
    }

    public function personality($min) {
        $query_course = $this->db->prepare("select *,left(message,199) as message from tbl_personality order by id_personality DESC limit $min,8");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function note($min) {
        $query_course = $this->db->prepare("select *,left(message,199) as message from tbl_note order by id_note DESC limit $min,8");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function magazine($type_magazine, $min) {
        $query_course = $this->db->prepare("select *,left(message,199) as message from tbl_magazine where type_magazine like '%$type_magazine%' order by id_magazin DESC limit $min,8");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function comment_news_taeid($id) {
        $query_course = $this->db->prepare("select * from tbl_commentnews where id_news=$id and taeid_modir=1  order by id_commentnews DESC");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function comment_personality_taeid($id) {
        $query_course = $this->db->prepare("select * from tbl_commentpersonality where id_personality=$id order by id_commentpersonality DESC");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function comment_note_taeid($id) {
        $query_course = $this->db->prepare("select * from tbl_commentnote where id_note=$id order by id_commentnote DESC");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function comment_personality_entezar() {
        $query_course = $this->db->prepare("select * from tbl_commentpersonality where taeid_modir=0 limit 10");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function comment_news_entezar() {
        $query_course = $this->db->prepare("select * from tbl_commentnews where taeid_modir=0 limit 10");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function comment_note_entezar() {
        $query_course = $this->db->prepare("select * from tbl_commentnote where taeid_modir=0 limit 10");
        $query_course->execute();
        if ($query_course->rowCount() > 0) {
            return $query_course->fetchAll();
        }
        return FALSE;
    }

    public function up_comment($table, $id_comment, $id) {
        $up = "UPDATE $table SET taeid_modir=1 Where $id_comment=$id";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function up_news($id) {
        $up = "UPDATE tbl_news SET comment=comment+1 Where id_news=$id";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function up_news_viewer($id) {
        $up = "UPDATE tbl_news SET viewer=viewer+1 Where id_news=$id";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function up_note($id) {
        $up = "UPDATE tbl_note SET comment=comment+1 Where id_note=$id";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function up_personality($id) {
        $up = "UPDATE tbl_personality SET comment=comment+1 Where id_personality=$id";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function update_course($enrol, $id) {
        $up = "UPDATE tbl_course SET enrolment='" . $enrol . "' Where id='" . $id . "'";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function update_news($id) {
        $up = "UPDATE tbl_news SET taeid=1 where id_news='" . $id . "'";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function update_login($usern, $login_on) {
        $up = "UPDATE tbl_login SET login_on='$login_on' and cookie='$usern' where username='$usern'";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function del_course_reg($id) {
        $del = "delete from tbl_course_register where id='" . $id . "'";
        $del_cor_reg = $this->db->prepare($del);
        return $del_cor_reg->execute();
    }

    public function up_bazdid() {
        $up = "UPDATE tbl_bazdid SET view_user=view_user+1 Where id=1";
        $update = $this->db->prepare($up);
        return $update->execute();
    }

    public function news_last($id_last) {
        $query_new = $this->db->prepare("select *,left(message,locate(' ',message,199)) as message from tbl_news by id_news DESC limit $id_last,1");
        $query_new->execute();
        if ($query_new->rowCount() > 0) {
            return $query_new->fetchAll();
        }
        return FALSE;
    }

}

$dbclass = new db_con();
?>
