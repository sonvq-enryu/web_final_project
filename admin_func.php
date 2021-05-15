<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','googleplay');

    function open_database(){
        $conn = new mysqli(HOST, USER, PASS, DB);
        if ($conn->connect_error) die('Connect error: ' . $conn->connect_error);
        return $conn; 
    }
    
    function get_all_pending_apps(){
        $sql = 'select * from pending_application';

        $conn = open_database();
        $stm = $conn->prepare($sql);
        if(!$stm->execute()){
            return array('code' => 2,'error'=> 'Can not execute command');
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0){
            return array('code'=> 1, 'error'=> 'No app');
        }
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return array('code' => 0,'message'=> 'success','data'=>$data);
    }
    function check_pending_apps($id){
        $conn = open_database();
        $sql = "select * FROM pending_application WHERE app_id = ?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$id);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = $result;

        // if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        // while ($item = $result->fetch_assoc()){
        //     $data[] = $item;
        // }

        return array('code'=>0, 'data'=>$data);
    }
    function edit_app_status($id,$status,$email){
        $sql = "update pending_application SET status = ?  WHERE app_id = ?";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ss',$status,$id);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }
        send_deny_email($email);
        return array('code' => 0, 'message' => 'App status changed successful');
    }
    function edit_publish_status($id,$status){
        $sql = "update pending_application SET status = ?  WHERE app_id = ?";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ss',$status,$id);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }
    
        return array('code' => 0, 'message' => 'App status changed successful');
    }
    function push_app($app_id,$name,$price,$updated,$size,$developer,$image,$content,$description,$file,$status,$detail,$email){
        $sql = "insert into application (id, name, price, updated, size, developer,detail, image, content, description,file,status) value (?,?,?,?,?,?,?,?,?,?,?,?) ";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ssisssssssss',$app_id,$name,$price,$updated,$size,$developer,$detail,$image,$content,$description,$file,$status);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }
        send_approved_email($email);
        return array('code' => 0, 'message' => 'App had been published');
    }
    function send_approved_email($email){
            

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();  
            $mail->CharSet = 'UTF-8';                                          //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'castlerealestatead@gmail.com';                     //SMTP username
            $mail->Password   = 'realestate123';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('castlerealestatead@gmail.com', 'Admin');
            $mail->addAddress($email, 'Người nhận');     //Add a recipient
            /*$mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your application has been approved !!!';
            $mail->Body    = "Your application has been approved !!!";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
           return false;
        }
    }   
    function send_deny_email($email){
            

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();  
            $mail->CharSet = 'UTF-8';                                          //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'castlerealestatead@gmail.com';                     //SMTP username
            $mail->Password   = 'realestate123';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('castlerealestatead@gmail.com', 'Admin');
            $mail->addAddress($email, 'Người nhận');     //Add a recipient
            /*$mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your application has been rejected !!!';
            $mail->Body    = "Your application has been rejected !!!";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
           return false;
        }
    }   
?>