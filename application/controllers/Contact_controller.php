<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_controller extends CI_Controller {

    public function index()
    {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('contact/index');
    }
    public function send_email() {
        if(isset($_POST)) {
            $from_email = 'naresh@thedoorway.in';
            $recipient_email = $_POST['email'];
            $subject = $_POST['name'].' send feedback';
            $message = 'Name: '.$_POST['name'].', Registration no: '.', Email: '.$_POST['email'].', Mobile number: '.$_POST['mobile'].', Message: '.$_POST['contact_message'];
            $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $boundary = md5("sanwebe");
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "From:".$from_email."\r\n";
            $headers .= "Reply-To: ".$user_email."" . "\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
            $body = "--$boundary\r\n";
            $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $body .= chunk_split(base64_encode($message));
            $body .= "--$boundary\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
            $sentMail = @mail($recipient_email, $subject, $body, $headers);
            if($sentMail) {
                die('Thank you for your email'.'Hello');
            }
            else {
                die('Could not send mail! Please check your PHP mail configuration.');
            }
        }
    }
}