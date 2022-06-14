<?php
class Common{
    public function getAllRecords($conn) {
        $query = "SELECT * FROM user";
        $result = $conn->query($query) or die("Error in query1".$conn->error);
        return $result;
    }

    public function deleteRecordById($conn,$recordId) {
        $query = "DELETE FROM user WHERE id='$recordId'";
        $result = $conn->query($query) or die("Error in query2".$conn->error);
        return $result;
    }
}
?>