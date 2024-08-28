<?php
include 'connect.php';
include 'smtp/PHPMailerAutoload.php';

function smtp_mailer($to, $subject, $msg) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'karthik_csd@srkrec.edu.in';
    $mail->Password = 'olwbulumnhrxznun';
    $mail->SetFrom('karthik_csd@srkrec.edu.in');
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    
    if(!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        echo "Email sent successfully!";
    }
}


$email = isset($_POST['id']) ? $_POST['id'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$imgPath = "https://purplelane.co.in/student_certificate/certificates/$email.jpg"; 
$nameQuery = "SELECT * FROM certificates WHERE student_email = '$email'";
$nameResult = mysqli_query($con, $nameQuery);
$nameData = mysqli_fetch_assoc($nameResult);
$name = isset($nameData['student_name']) ? $nameData['student_name'] : '';

$msgBody = "
<body>
<div style='font-family: Inter, sans-serif; padding: 2rem; border-radius: 1rem;'>
    <img src='https://purplelane.in/pl2.0/images/logo-dark.png' style='width: 160px; height: 40px; object-fit: contain;'><br><br>
    <div style='display: flex; flex-direction: column; background: #fff; padding-bottom: rem; border-radius: 1rem; width: 450px; height: max-content; border: 1px solid #eee; box-shadow: 2px 2px 4px #eee;'>
        <div style='background: #fff;'>
            <img src='https://ci3.googleusercontent.com/meips/ADKq_NZe8GtkPCukshzkoTilGBWi3pW5xXoZpRXm7poM9wn6biJAg6fVpCuM1CF2oCq9PMFgQ7PhTcV00IVKWX0hmReeYPqVaVG8=s0-d-e1-ft#https://purplelane.in/pl2.0//images/emailcert.png' style='width: 450px; height: auto;'>
            <h2 style='padding: 0rem 1rem; color: #333;'>Here is your certificate</h2>
            <p style='padding: 0rem 1rem; color: #474747;'>
                Congratulations <b>$name</b> on receiving your <strong>Master in UI/UX and Visual Design</strong> Course certificate! You can now download your certificate.<br><br>
                Your certificate is now available in an <a href='$url'>online format</a> so that you can retrieve it anywhere at any time, and easily share the details of your achievement.<br>
            </p>
            
            <div style='margin:1rem;'>
                <img src='$imgPath' style='width:100%;height:100%;object-fit:contain;'><br>
                <div style='margin-top:2rem;margin-bottom:2rem;'>
                    <a style='padding: 0.65rem; background: #222; color: #fff; border-radius: 0.5rem; margin-right: 1rem;text-decoration:none;' href='$imgPath' target='_blank'; download='Course Completion Certificate'>Download Certificate</a>
                    <a style='padding: 0.65rem; background: #222; color: #fff; border-radius: 0.5rem; cursor: pointer;' 
                    href='https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&name=Master+In+UIUX+-+Design&organizationId=75717400&issueYear=2023&issueMonth=06&certUrl=https://purplelane.in/c/G-Jithendra/&certId=1234'>Add To Linkedin</a>
                </div>
            </div>
        </div>
    </div>
</div>  
</body> 
";
// Call the email sending function
smtp_mailer($email, 'Course Completion Certificate', $msgBody);
?>
