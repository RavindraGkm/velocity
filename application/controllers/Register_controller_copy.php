<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {

    public function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('register/index');
    }

    public function send_email() {
//        if($_POST && isset($_FILES['resume_file'])) {
        if(isset($_POST)) {
            $from_email = 'naresh@thedoorway.in';
//            $recipient_email = 'dileeplohar@gmail.com,rajsinghravi25.87@gmail.com';
            $recipient_email = $_POST['email'];
            $subject = $_POST['name'].' Request for Recruitment';
//            $message = 'This is body of the message';
            $reg_id =strtoupper(substr(hash('sha256',time()), 0, 8));
            $reg_number='VP-'.$reg_id;
            $message = 'Name: '.$_POST['name'].', and Registration no is: '.$reg_number.', Mobile number: '.$_POST['mobile'].', Location: '.$_POST['location'].'<br/> Thanks for registration in Velocity Placement.';
            $messages = 'Thanks and Regards for registration in Velocity Placement.';
            $file_tmp_name = $_FILES['resume_file']['tmp_name'];
            $file_name = $_FILES['resume_file']['name'];
            $file_size = $_FILES['resume_file']['size'];
            $file_type = $_FILES['resume_file']['type'];
            $file_error = $_FILES['resume_file']['error'];
            $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            if($file_error>0)
            {
                die('upload error');
            }
            $handle = fopen($file_tmp_name, "r");
            $content = fread($handle, $file_size);
            fclose($handle);
            $encoded_content = chunk_split(base64_encode($content));
            $boundary = md5("sanwebe");
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "From:".$from_email."\r\n";
            $headers .= "Reply-To: ".$user_email."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= chunk_split(base64_encode($message))."\r\n\r\n";
            $body .= chunk_split(base64_encode($messages));
            $body .= "--$boundary\r\n";
            $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
            $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
            $body .= $encoded_content;
            $sentMail = @mail($recipient_email, $subject, $body, $headers);
            if($sentMail) {
                die('Thank you for your email');
            }
            else {
                die('Could not send mail! Please check your PHP mail configuration.');
            }
        }
    }
}
