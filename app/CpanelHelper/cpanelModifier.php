<?php

namespace App\CpanelHelper;

class cpanelModifier

{
    function passGenerator()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890[]!@#$%^&*()_+{}|?';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function createUser($userName)
    {
        // Create a new database user.
        $cpanel = new cPanel_meta("imaagahi", "##Ima1391$$", "imaagahi.ir");
        $create_db_user = $cpanel->uapi(
            'Mysql', 'create_user',
            array(
                'name' => 'imaagahi_' . $userName,
                'password' => $this->passGenerator(),
            )
        );
        return $create_db_user;
    }

    public function userPrivileges($userName, $database)
    {
        $cpanel = new cPanel_meta("imaagahi", "##Ima1391$$", "imaagahi.ir");        // Create a new database user.
        $set_dbuser_privs = $cpanel->uapi(
            'Mysql', 'set_privileges_on_database',
            array(
                'user' => 'imaagahi_' . $userName,
                'database' => 'imaagahi_' . $database,
                'privileges' => 'DELETE,UPDATE,CREATE,ALTER',
            )
        );
        $grant_all = $cpanel->uapi(
            'Mysql', 'grant_all_privileges',
            array(
                'user' => 'imaagahi_' . $userName,
                'database' => 'imaagahi_' . $database,
            )
        );
    }

    public function copyDatabase($userName, $database)
    {
//        $con = new \mysqli($this->mysql_host, 'imaagahi_' . $userName, '12345luggage');
//        mysqli_select_db($this->filename) or die('Error selecting MySQL database: ' . mysqli_error());
//        var_dump($con);
//        $query = '';
//        $sqlScript = file($this->filename);
//        foreach ($sqlScript as $line) {
//
//            $startWith = substr(trim($line), 0, 2);
//            $endWith = substr(trim($line), -1, 1);
//
//            if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
//                continue;
//            }
//
//            $query = $query . $line;
//            if ($endWith == ';') {
//                mysqli_query($con, $query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query . '</b></div>');
//                $query = '';
//            }
//        }
//        echo '<div class="success-response sql-import-response">SQL file imported successfully</div>';
    }

    public function custom_copy()
    {
        $cpanel = new cPanel_meta("imaagahi", "##Ima1391$$", "imaagahi.ir");        // Create a new database user.
        $list_files = $cpanel->uapi(
            'Fileman', 'list_files',
            array(
                'dir' => '/home/imaagahi/admin',
                'types' => 'dir|file',
                'limit_to_list' => '0',
                'show_hidden' => '1',
                'check_for_leaf_directories' => '1',
                'include_mime' => '1',
                'include_hash' => '0',
                'include_permissions' => '1',
            )
        );
//        dd($list_files->data);
        $file_count = 'file-';
        foreach ($list_files->data as $key => $file) {
            $upload_files = $cpanel->uapi(
                'Fileman', 'upload_files',
                $upload_fill = array(
                    'dir' => 'admin',
//                $file_count.=$key+1 => $file,
                    'file-1' => 'nail.html',
                    'getdiskinfo' => '0',
                    'overwrite' => '0',
                    'permissions' => '0777',
                    'status',
                    'reason'
                )
            );
        }
        dd($upload_files);
        return "all files copied successfully";
        die();
    }

    public function custom_copy2()
    {
        $cpanel = new cPanel_meta("imaagahi", "##Ima1391$$", "imaagahi.ir");        // Create a new database user.
        $new_ftp = $cpanel->uapi(
            'Ftp', 'add_ftp',
            $con=array(
                'user' => 'imaagahi',
                'pass' => '##Ima1391$$',
                'domain' => 'imaagahi.ir',
                'homedir' => '/home/imaagahi/',
                'quota' => '42',
            )
        );
}}

