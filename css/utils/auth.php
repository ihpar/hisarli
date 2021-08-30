<?php
session_start();
require_once "../dbms/class.db.php";
require_once "../dbms/utils.php";

function endUserSession()
{
    $_SESSION["is_logged_in"] = false;
    $_SESSION["user_id"] = false;
    $_SESSION["user_avatar"] = false;
    $_SESSION["user_email"] = false;
    $_SESSION["user_type"] = false;
    $_SESSION["user_name"] = false;
    $_SESSION["user_surname"] = false;
}

function logLoginAttempt($email, $ip, $success)
{
    $db = DB::getInstance();
    $email = $db->filter($email);
    $ip = $db->filter($ip);

    $values = array(
        "email" => $email,
        "ip" => $ip,
        "success" => $success
    );
    $db->insert('login_attempts', $values);

    $query = "DELETE FROM login_attempts WHERE trial_date < DATE_SUB(NOW(), INTERVAL 14 DAY)";
    $db->query($query);
}

if (isset($_POST["op"]) && $_POST["op"] == "login") {
    $res = array("res" => "OK");

    if (Utils::isEmpty($_SESSION["sec_key"]) || Utils::isEmpty($_POST["key"]) || ($_SESSION["sec_key"] != $_POST["key"])
        || Utils::isEmpty($_POST["email"]) || Utils::isEmpty($_POST["password"])
    ) {
        // no secret key is passed, reject
        $res = array("res" => "NO");
        endUserSession();
    } else {
        // valid call, try to authenticate
        $email = $_POST["email"];
        $password = $_POST["password"];

        $db = DB::getInstance();
        $email = $db->filter($email);
        $password = $db->filter($password);

        $query = "SELECT u.id AS user_id, u.avatar, u.name, u.surname, r.user_role " .
            "FROM users u, user_roles r " .
            "WHERE (u.role = r.id) AND (u.email = '$email') AND (u.password = '$password')";

        $success = 0;
        if ($db->num_rows($query) != 1) {
            // something wrong
            $res = array("res" => "NO");
            endUserSession();
        } else {
            $userRow = $db->get_row_assoc($query);
            $_SESSION["user_id"] = $userRow["user_id"];
            $_SESSION["user_avatar"] = Utils::isEmpty($userRow["avatar"]) ? false : $userRow["avatar"];
            $_SESSION["is_logged_in"] = true;
            $_SESSION["user_email"] = $email;
            $_SESSION["user_type"] = $userRow["user_role"];
            $_SESSION["user_name"] = $userRow["name"];
            $_SESSION["user_surname"] = $userRow["surname"];
            $success = 1;
        }
        // log attempt
        logLoginAttempt($email, Utils::getUserIP(), $success);
    }
    echo json_encode($res);
}