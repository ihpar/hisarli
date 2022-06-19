<?php

require_once "class.db.php";

class Utils
{
    public static function isEmpty(&$var)
    {
        try {
            return ($var === null || is_null($var) || !isset($var) || ($var == "") || empty($var));
        } catch (Exception $e) {
            return true;
        }
    }

    public static function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function isAdmin()
    {
        $res = false;
        if (isset($_SESSION["is_logged_in"]) && ($_SESSION["is_logged_in"] == true) &&
            isset($_SESSION["user_type"]) && ($_SESSION["user_type"] == "Sistem Yöneticisi")) {
            $res = true;
        }
        return $res;
    }

    public static function myID()
    {
        if (isset($_SESSION["user_id"])) {
            return $_SESSION["user_id"];
        }
        return -1;
    }

    public static function isLoggedIn()
    {
        $res = false;
        if (isset($_SESSION["is_logged_in"]) && ($_SESSION["is_logged_in"] == true)) {
            $res = true;
        }
        return $res;
    }

    public static function getUserIP()
    {
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

    public static function logAction($user_id, $table_name, $action_name, $affected_id)
    {
        $db = DB::getInstance();

        $values = array(
            'user_id' => $user_id,
            'table_name' => $table_name,
            'action_name' => $action_name,
            'affected_id' => $affected_id
        );

        $db->insert('user_actions', $values);
    }

    public static function getAvatar()
    {
        if ($_SESSION["user_avatar"]) {
            return "img/uploads/avatars/" . $_SESSION["user_avatar"];
        }
        return "img/def_avt.png";
    }
}

