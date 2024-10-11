<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\BaseModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    private $key;
    private $common;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->key = getenv('JWT_SECRET');
        // E.g.: $this->session = \Config\Services::session();
        $this->common = new BaseModel();
    }

    protected function decryptValue($string=''){
          // $key = "ankit#$"; //key to encrypt and decrypts.
          // $result = '';
          // $string = base64_decode($string);
          // for($i=0; $i<strlen($string); $i++) {
          //   $char = substr($string, $i, 1);
          //   $keychar = substr($key, ($i % strlen($key))-1, 1);
          //   $char = chr(ord($char)-ord($keychar));
          //   $result.=$char;
          // }
          // return $result;
      $method = "AES-256-CBC";
      $key = "encryptionKey123";
      $options = 0;
      $iv = '1234567891011121';

      $encryptedData = openssl_encrypt($string, $method, $key, $options,$iv);
      return $encryptedData;
      // echo "Data: ". $data. "\n";
      // echo "Encrypted Data: ". $encryptedData;
    }

    protected function encryptValue($string=''){
        // $key = "ankit#$"; //key to encrypt and decrypts.
        // $result = '';
        // for($i=0; $i<strlen($string); $i++) {
        //   $char = substr($string, $i, 1);
        //   $keychar = substr($key, ($i % strlen($key))-1, 1);
        //   $char = chr(ord($char)+ord($keychar));
        //   $result.=$char;
        // }
        // return base64_encode($result);
        // $encryptedData = "g0U5Y7oCJGiznDr2k+W9EQ==";
        $method = "AES-256-CBC";
        $key = "encryptionKey123";
        $options = 0;
        $iv = '1234567891011121';

        $decryptedData = openssl_decrypt($string, $method, $key, $options, $iv);

        return $decryptedData;
        echo "Decrypted Data: ". $decryptedData;

    }

    function sendMail($to, $subject, $message,$from_name='') { 
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();                                           
            $mail->Host       = SMTP_HOST;                   
            $mail->SMTPAuth   = true;                            
            $mail->Username   = EMAIL_ID;                
            $mail->Password   = EMAIL_PASSWORD;                       
            $mail->SMTPSecure = 'tls';                             
            $mail->Port       = SMTP_PORT; 
        
            $mail->setFrom('no-reply@missioncstestseries.com', $from_name);          
            $mail->addAddress($to);
            $mail->isHTML(true);                                 
            $mail->Subject = $subject;
            $mail->Body    = $message;
            if($mail->send()){
                return 1;
            }
        } catch (\Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return 0;
        }
    }

    public function getCartId(){
        try {
            $cart_id = '';
            if(session()->get('studentDetails')!==null){
                $studentDetails = session()->get('studentDetails');
                $studentId = $studentDetails['id'];
                $cartDetails = $this->common->getInfo('cart_table','row',array('student_id'=>$studentId));
                if(!empty($cartDetails)){
                    $cart_id = $cartDetails->cart_id;
                } else {
                  $cart_id = $this->common->dbAction('cart_table',array('student_id'=>$studentId),'insert_id',array());
                }
                if(!empty($cart_id)){
                    $response = array('success'=>true,'data'=>$cart_id);
                } else {
                    $response = array('success'=>false,'data'=>'');
                }
            }
        } catch (\Exception $e) {
            log_message('error',$e->getMessage());
            $response = array('success'=>false,'data'=>'');
        }
        return $response;
    }
}
