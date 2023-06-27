<!DOCtype html>
<html>
    <head>
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MH9JRKQ');</script>
<!-- End Google Tag Manager -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GTM-MH9JRKQ');
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
*{
        margin:0;
        padding:0;
        text-decoration: none;
        box-sizing: border-box;
        list-style: none;
      }
body{
   font-family: 'Roboto',sans-serif;
   background: #B6D0E2;
   color: black;
   text-align: center;
}
br{
  display: block;
  margin: 100px;
}
.topnav{
  background-color: #333;
  overflow: hidden;
}
.topnav a{
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover{
  background-color: #ddd;
  color: black;
}
.topnav a.active{
  background-color: #04AA6D;
  color: white;
}
a{
color:white;
  text-decoration:none;
  display:inline-block;
  padding: 8px 16px;
}
a:hover{
  background-color: #ddd;
  color:black;
}
.previous{
  background-color: #f1f1f1;
  color: black;
}
.next{
  background-color: #3D75EE;
  color: white;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


   </style>
   </head>
<body>
<div class="topnav">
  <img src="QwikConsult_logo.png" width="200px" height="50px" align="left"></img>
  <u1>
  <li> <a href="support.php">Contact us</a></li>
  <li> <a class="active" href="index.php">Home</a></li>
  </ul>
</div>
<br>
  <h1> Vishvas Mithraas</h1>
<br>
<img src="img1.png" width="300px" height="300px"></img>
<br>
<p> Our projects</p>
<br>
<img src="img2.png" width="300px" height="300px"></img>
<br>
<p> Our projects</p>
<br>

<a href="https://forms.gle/zkiL8TNppvpLZhfx9" style="color:blue"> <strong> Enter the details in this form for us to contact you! </strong> </a>

<br>



<!-- Calendly badge widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/qwikconsult/qwikconsult-intro', text: 'Schedule some time!', color: '#ff003f', textColor: '#ffffff', branding: undefined }); }</script>
<!-- Calendly badge widget end -->
        <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "/home/u1ewclzlplgf/public_html/PHPMailer-master/src/PHPMailer.php";
require "/home/u1ewclzlplgf/public_html/PHPMailer-master/src/Exception.php";
require "/home/u1ewclzlplgf/public_html/PHPMailer-master/src/SMTP.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "/home/u1ewclzlplgf/public_html/mixpanel-php-master/lib/Mixpanel.php";
$mp = Mixpanel::getInstance("4eee140182cfa0f760f4527869bfcc6a", array("host" => "api-eu.mixpanel.com"));

$mp->track("button clicked", array("label" => "sign-up"));
$mp->people->set(12345, array(  '$first_name'       => "John",
'$last_name'        => "Doe",
'$email'            => "john.doe@example.com",
'$phone'            => "5555555555",
"Favorite Color"    => "red"));
if (isset($_POST["upload"])){
    $phone_no = $_POST["phone"];
    //echo $email_address;
    $mail = new PHPMailer(true);
    if(!empty($phone_no))
{
    {
       // echo $email_address;
       // echo "<br>";
       // echo "We have recieved your mail id";
       // echo "<br>";
        $host="localhost";
        $username="gayathri_n";
        $password="Varalakshmi@99";
        $database="email_addresses";
       // $to = $email_address;
       /* $from="consultmy@gmail.com";
          $subject ='QwikConsult';
          $message = '<!DOCTYPE html>
          <head>
          <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
          </head>
          <body>
          <div>
          <p>Hello there, </p>
          <p>Thank you for signing up with QwikConsult.</p>
          <p>Download the program from the link on the website.</p>
          <p>Thank you.</p>
          </div>
          </body>
          </html>
          ';
          $message = stripslashes($message);
         // $file = "/home/g6bau7mbk3r2/public_html/Column Details.zip";
         $headers="Content-type: text/html; charset=UTF-8"."\r\n";
         $headers .= "MIME-Version: 1.0"."\r\n";
         $headers .= "From: consultmy@gmail.com". "\r\n" . "CC: consultmy@gmail.com";
    $mail->SMTPOptions = array (
      'ssl' => array(
          'verify_peer'=>false,
          'verify_peer_name'=>false,
          'allow_self_signed'=>true,
      ),
      );
      */
    } 
    // Send email 
    //$mail = @mail($to, $subject, $message, $headers);  
     
    // Email sending status 
    //echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 
     //     echo "Sent you a mail";
          $host="localhost";
          $username="gayathri_n";
          $password="Varalakshmi@99";
          $database="email_addresses";
          $conn=mysqli_connect($host,$username,$password);
          mysqli_select_db($conn,$database);
          if (mysqli_connect_error()){
              echo "we are not connected to the database";
              die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());  
          }
      else {
          
          //cho "we are connected to database";
              $SELECT = "SELECT Phone_Number FROM Phone_Number";
              $INSERT = "INSERT into Phone_Number (Phone_Number) values (?)";
              $stmt=$conn->prepare($INSERT);
              $stmt->bind_param("s",$phone_no);
              $stmt->execute();
              $stmt->store_result();
              $rnum = $stmt->num_rows;
              $stmt->close();
              $conn->close();       
    }
    } 
}
    ?>

</body>
</html>
