<?php

require_once "class.db.php";

class DBHelper
{
    public static function GetTableContents($tableName, $orderCol)
    {
        $db = DB::getInstance();
        $tableName = $db->filter($tableName);
        $query = "SELECT *
                    FROM $tableName";

        if ($orderCol) {
            $orderCol = $db->filter($orderCol);
            $query .= " 
            ORDER BY $orderCol";
        }

        return $db->get_results($query);
    }

    public static function GetUsers($asJS)
    {
        $db = DB::getInstance();
        $query = "SELECT t.id AS title_id, r.id AS role_id, g.id AS gender_id, 
                        u.id AS user_id, u.avatar, u.name, u.surname, u.tc, u.email, u.tel, DATE_FORMAT(u.b_date, \"%e/%m/%Y\") AS b_date    
                    FROM users u, user_roles r, user_titles t, user_genders g 
                    WHERE u.is_deleted = 0 AND u.title = t.id AND u.role = r.id AND u.gender = g.id
                    ORDER BY u.name, u.surname";
        if ($asJS) {
            $res = [];
            $tbl = $db->get_results($query);
            foreach ($tbl as $r) {
                array_push($res, [$r["avatar"], $r["title_id"], $r["role_id"], $r["gender_id"],
                    $r["user_id"], $r["name"], $r["surname"], $r["tc"], $r["email"], $r["tel"], $r["b_date"]]);
            }
            return json_encode($res);
        } else {
            return $db->get_results($query);
        }
    }
}