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
        $values = [];
        foreach ($data as $index => $row){
            $title = $conn->real_escape_string($row['title']);
            $author = $conn->real_escape_string($row['author']);
            $year = $conn->real_escape_string($row['year']);
            $category = $conn->real_escape_string($row['category']);
            $futurework = $conn->real_escape_string($row['futurework']);
            $problem = $conn->real_escape_string($row['problem']);
            $recomm = $conn->real_escape_string($row['recomm']);
            $description = $conn->real_escape_string($row['description']);
            $groupNo = $conn->real_escape_string($row['groupNo']);
            $faculty = $conn->real_escape_string($row['faculty']);
            $values[] = "('$title', '$problem', '$author', '$year', '$category', '$futurework', '$recomm', '$description', '$groupNo', '$faculty')";
       
        

        }
        $sql =
        "INSERT INTO `researches`(`title`, `problem`, `author`, `year`, `category`, `futurework`, `recomm`, `description`, `groupNo`, `faculty` VALUES " . implode(", ", $values);
        $res = $conn->query($sql);
        if ($res) {
            $res = [
                'status' => 'completed',
                "message"=> "Successully Uploaded"
            ];
        } else {
            $res = [
                'status' => 'error',
                "message" => $conn->error
            ];
        }
      
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