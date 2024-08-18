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
            $year = $row['year'];
            $category = $row['category'];
            $futurework = $row['futurework'];
            $problem = $row['problem'];
            $recomm = $row['recomm'];
            $description = $row['description'];
            $groupNo = $row['groupNo'];
            $faculty = $row['faculty'];
       
         $sql ="INSERT INTO `researches`(`title`, `problem`, `author`, `year`, `category`, `futurework`, `recomm`, `description`, `groupNo`, `faculty`) 
                 VALUES('$title', '$problem','$author','$year','$category','$futurework','$recomm','$description','$groupNo','$faculty')";
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
    public static function  ReadAllResources($conn){
        $results = [
            'success' => [],
            'errors' => []
        ];
        $response= array();
        extract($_POST);
        $sql = "SELECT *FROM `researches`";
        $res = $conn->query($sql);
        if($res){
            $data=[];
            while($rows=$res->fetch_assoc()){
                $data[]=$rows;
            }
            $response = [
                'status' => 'true',
              "data"=>$data
            ];
        }else
            $response = [
                'status' => 'false',
                "message" => $conn->error
            ];
     
      
        echo json_encode($response);
    }
}


$s = new Scholar();
$action = $_POST['action'];
if(isset($action)){
    $s::$action($s::getConnection());
}

?>