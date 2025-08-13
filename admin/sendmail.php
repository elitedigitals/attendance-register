
<?php 
require("./header.php");
require 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$id = $_GET['id'];

$query = $con->query("SELECT * FROM project WHERE id='$id'");
$query->execute();

$client = $query->fetch(PDO::FETCH_OBJ);

//getting data from form to send mail

// if (isset($_POST['submit'])) {
//     $email= $_POST['email'];
//     $name= $_POST['name'];sd
//     $subject= $_POST['subject'];
//     $message= $_POST['message'];
// }

$name = $_POST["name"];
$toEmail = $_POST["email"];
$subject = $_POST["Subject"];
$message = $_POST["message"];
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eliteworld23@gmail.com';                     //SMTP username
    $mail->Password   = 'mjqo uvax auan wbap';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email);
    $mail->addAddress('elite23@gmail.com', 'Domain renewal');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('julius@mail.com', 'Digilanx Hr department');
    $mail->addCC('eeimiuhi@gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    

    $mail->send();
    echo "<script>alert('Email sent successfully..')</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>



<div class="container">
    <form action="sendmail.php" method="post"> 
        <div class=" col-sm-6 mb-3">
            <label for="exampleInputEmail1" class="form-label" width= "50px" >Send to:</label>
            <input type="email" name="email" value="<?php echo $client->email;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
    

        <div class=" col-sm-6 mb-3">
            <label for="exampleInputPassword1" class="form-label">Site name</label>
            <input type="text" name="name" value="<?php echo $client->name; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class=" col-sm-6 mb-3">
            <label for="exampleInputPassword1" class="form-label">Email Subject</label>
            <input type="text" name="subject" value="Website Renewal" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="col-sm-6 mb-3">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <textarea name="message"  cols="30" class="form-control"  id="exampleInputPassword1" value="Your website have expired and it up for renewal contact the developer to renew it"></textarea>  
        </div>
    

        <button type="submit" name="submit" class="btn btn-primary">Send Mail</button>
    </form>
</div>