<?php
/**
 * Created by Salman zafar.
 * User: sam
 * Date: 11/21/17
 * Time: 10:12 AM
 */
include "db.php";
class Search{

    public function search()
    {
        if(isset($_GET['search']))
        {
            $search = $_GET['search'];
            if(!empty($search))
            {
                $db   = DbConn::get_instance();
                $conn = $db->conn;
                $sql = "SELECT name FROM `users` WHERE name='$search'";
                $res = $conn->query($sql);
                if($res->num_rows > 0)
                {
                    while ($row = $res->fetch_assoc())
                    {
                          return $row['name'];
                    }
                }
                else
                {
                    return "No Match found";
                }
            }
            else
            {
                echo "Cannot be empty";
            }
        }
    }
}

$sr = new Search();
echo $sr->search();