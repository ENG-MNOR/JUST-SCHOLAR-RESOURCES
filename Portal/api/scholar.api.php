<?php
include '../config/conn.php';


class Scholar extends DatabaseConnection{

    public static function  UploadResearchProjects($conn){
        $results = [
            'success' => [],
            'errors' => []
        ];
        $response= array();
        extract($_POST);
        foreach ($data as $index => $row){
            $title = $row['title'];
            $author = $row['author'];
       
         $sql ="INSERT INTO objects(title, authr) VALUES('$title', '$author')";
         $res = $conn->query($sql);
         if($res){
            $results['success'][] = [
                'index' => $index,
                'data' => $row
            ];
         }else{
            $results['errors'][] = [
                'index' => $index,
                'data' => $row,
                'error' => "Error occurred during uploading"
            ];
         }

        }
        $res =[
            'status' => 'completed',
            'success_count' => count($results['success']),
            'errors_count' => count($results['errors']),
            'success' => $results['success'],
            'errors' => $results['errors']
        ];
        echo json_encode($res);
    }
}


$s = new Scholar();
$action = $_POST['action'];
if(isset($action)){
    $s::$action($s::getConnection());
}

?>