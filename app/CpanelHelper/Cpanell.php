<?php
namespace App\CpanelHelper;
use App\CpanelHelper\cPanel;

class Cpanell extends cPanel
{
//    public $username = "imaagahi";
//    public $password = "##Ima1391$$";
//    public $host = "imaagahi.ir";

    public function __construct()
    {
    $this->connect_cpanel();
    }
    public function connect_cpanel(){
//        global $cpanel;
////        $cpanel = new cPanel("imaagahi", "##Ima1391$$", "imaagahi.ir");
//        return $cpanel;
    }
    public function cpanelExecute($parameter){
        global $cpanel;
        $result = $cpanel->execute('uapi','SubDomain','addsubdomain',$parameter);
        var_dump($result);
        die();
    }
}

?>

