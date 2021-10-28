<?php 
if(isset($_POST['submit'])){
    $mailto = 'xenom380@gmail.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject = "Your message Submitted Successfully";
    $message = "Client Name: ". $name. "Wrote the following Message"."\n\n" .$_POST['message'];
    $message2 = "Dear: ". $name. "\n\n" ."Thank You for contacting Dramani Yinsongte Kizito!";
    $headers .= "From: ". $from;
    $headers2 .= "From: ". $mailto;
    $result = mail($mailto,$subject,$message,$headers);
    $result2 = mail($from,$subject2,$message2,$headers2);
    if($result){
        echo '<script type="text/javascript">alert("Message was sent successfully")</script>';
    }else{
        echo '<script type="text/javascript">alert("Message was not sent,Try again")</script>';
    }
}
?>
