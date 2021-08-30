<?php
session_start();

require_once "../dbms/class.db.php";
require_once "../dbms/utils.php";

if (Utils::isEmpty($_POST["key"]) || Utils::isEmpty($_SESSION["sec_key"]) || $_SESSION["sec_key"] != $_POST["key"]) die("wrong call");

if (isset($_POST["op"]) && $_POST["op"] == "save_user") {
    // check admin
    if (!Utils::isAdmin()) die("wrong call");

    $result = array("res" => "OK");
    try {
        $db = DB::getInstance();

        $userId = $db->filter($_POST["userId"]);
        $avatar = $db->filter($_POST["avatar"]);
        $title = $db->filter($_POST["title"]);
        $role = $db->filter($_POST["role"]);
        $gender = $db->filter($_POST["gender"]);
        $name = $db->filter($_POST["name"]);
        $surname = $db->filter($_POST["surname"]);
        $tc = $db->filter($_POST["tc"]);
        $email = $db->filter($_POST["email"]);
        $phone = $db->filter($_POST["phone"]);
        $b_date = $db->filter($_POST["b_date"]);
        if (!Utils::isEmpty($b_date)) {
            $parts = explode("/", $b_date);
            $b_date = $parts[2] . "-" . $parts[1] . "-" . $parts[0];
        }

        $now = date('Y-m-d H:i:s');

        $values = array(
            'avatar' => $avatar,
            'title' => $title,
            'role' => $role,
            'gender' => $gender,
            'name' => $name,
            'surname' => $surname,
            'tc' => $tc,
            'email' => $email,
            'tel' => $phone,
            'b_date' => $b_date,
            'updated_at' => $now
        );

        if ($userId == "-1") {
            // insert new user
            $values['created_at'] = $now;

            if (!$db->insert('users', $values)) {
                $result = array("res" => "NO");
                echo json_encode($result);
                return false;
            }

            $userId = $db->lastid();
            Utils::logAction(Utils::myID(), 'users', 'insert', $userId);
        } else {
            // update user
            $where_clause = array(
                'id' => $userId
            );

            if (!$db->update('users', $values, $where_clause, 1)) {
                $result = array("res" => "NO");
                echo json_encode($result);
                return false;
            }
            Utils::logAction(Utils::myID(), 'users', 'update', $userId);
        }

    } catch (Exception $e) {
        $result = array("res" => "exception:" . $e->getMessage());
        echo json_encode($result);
        return false;
    }

    $result['affected_id'] = $userId;
    echo json_encode($result);
}

if (isset($_POST["op"]) && $_POST["op"] == "delete_user") {
    // check admin
    if (!Utils::isAdmin()) die("wrong call");

    $result = array("res" => "OK");
    try {
        $db = DB::getInstance();

        $userId = $db->filter($_POST["userId"]);

        $now = date('Y-m-d H:i:s');

        $values = array(
            'is_deleted' => 1
        );

        $where_clause = array(
            'id' => $userId
        );

        if (!$db->update('users', $values, $where_clause, 1)) {
            $result = array("res" => "NO");
            echo json_encode($result);
            return false;
        }
        Utils::logAction(Utils::myID(), 'users', 'delete', $userId);

    } catch (Exception $e) {
        $result = array("res" => "exception:" . $e->getMessage());
        echo json_encode($result);
        return false;
    }
    echo json_encode($result);
}