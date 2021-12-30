<?php

class MasterModel extends  Database
{
    public static function get_all_row($sql)
    {
        $db = Database::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }

    public static function get_one_row($sql)
    {
        $db =  Database::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }



    public static function insert_one_row($sql, $arr)
    {
        $db = Database::connect();
        $stmt= $db->prepare($sql);
        $stmt->execute([...$arr]);
        $stmt->closeCursor();
    }


    public static function count_column($sql)
    {
        $db =  Database::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        $stmt->closeCursor();
        return $result;
    }
}
