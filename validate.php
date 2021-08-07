<?php
    if(isset($_POST['g-recaptcha-response']))
    {
        $secreatkey ="6Ldm9NAbAAAAAMBuVRDL3FVZuDo9EpUD0fBhkjUX";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response = $_POST['g-recaptcha-response'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secreatkey&response=$response&remoteip=$ip";
        $fire = file_get_contents($url);
        $data = json_decode($fire);
        if($data->success==true){
            echo '<script>alert("Logged In Successfully")</script>';

        }
        else{
            echo '<script>alert("Please Fill Recaptcha")</script>';
        }
    }
    else
    {
        echo '<script>alert("Recaptcha Error")</script>';
    }


?>