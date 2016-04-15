
<?php 


class PHP_API
{

    
    
    public function verify($email,$password)
    {

        $token = $this->get_token();
        $res = $this->login($token,$email,$password);
        return $res;

    }


    public function get_token()
    {    

            header("Content-Type: text/html; charset='utf-8'");

            $url = "https://fanssify.accesscontrol.windows.net/WRAPv0.9/";



            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'wrap_name=fanssify_droid&wrap_password=Nakel1@awurab&wrap_scope=http://fanssify.com/');
            curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");

            $output = curl_exec($ch);
            $error = curl_error($ch);

            curl_close($ch);

            $access_token =  $output;


            $a = explode("&", $access_token);
            foreach ($a as $key => $value) {
                  $b = explode("=", $value);
                if($b[0] == "wrap_access_token")
                {
                    $token = $b[1];
                    $str = urldecode($token);

                    $encoding = mb_detect_encoding( $str, 'ASCII,ISO-8859-1,Windows-1252,UTF-8' );
                    $utf8_mb = mb_convert_encoding( $str, 'UTF-8', $encoding );
                    $utf8_iconv = iconv( $encoding, 'UTF-8', $str );
                    $token = $utf8_iconv;


                }



            }


    }

    public function login($token,$email,$password){

        $url = "https://fanssifyapi.azurewebsites.net/api/v1/login";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, 'array("Email"=>"'.$email.'","Password"=>"'.$password.'"');

        //curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, 1);

        curl_setopt ($ch, CURLOPT_HTTPHEADER,array('Content-type: application/json','Authorization: WRAP access_token="'.$token.'"'));

        $output = curl_exec($ch);

        $error = curl_error($ch);

        curl_close($ch);
        //echo $output;
        $response = json_encode($output);
        return $response;


    }

//validation methods
    
    public function emptyval($val)
    {
        if(empty($val))
        {
            return 1;
        }else{
            return 0;
        }
            
        
    }
   
    
    public function emailval($val)
    {
        if(!filter_var($val,FILTER_VALIDATE_EMAIL) === false)
        {
            return 0;
        }else{
            return 1;
        }
        
    }
    
    public function sanitize_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    
}


$instance = new PHP_API();

$data = array();

if(isset($_POST['email']) && isset($_POST['password']) )
{
    
    $email = $instance->sanitize_input($_POST['email']);
    $password = $instance->sanitize_input($_POST['password']);
    
    if($instance->emptyval($email))
    {
        $data['errors'] = array('Email Address cannot be empty <br/>');
        
    }
    
    if($instance->emailval($email))
    {
        $data['errors'] = array($email.' is not a vaild Email Address<br/>');
        
    }
    
    if($instance->emptyval($password))
    {
        $data['errors'] = array('Password cannot be empty <br/>');

    }
    
    
    if(empty($errors))
    {
        
       $response = $instance->verify($email,$password);
        var_dump($response);
    }
        
    
}



?>

<html>
<head>
    <meta charset=“utf-8”> 
</head>

<body>
<form method="post" action="">
    <?php
        if(!empty($data['errors'])):
        foreach($data['errors'] as $error):
    ?>
    <div>
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <div>
        <p><label>Email</label></p>
        <input type="text" name="email" value="" />
    </div>
    <div>
        <p><label>Password</label></p>
        <input type="password" name="password" value="" />
    </div>
        
</form>
    
</body>
</html>
