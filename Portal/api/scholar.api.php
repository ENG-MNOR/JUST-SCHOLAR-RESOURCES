<?php
include '../config/conn.php';
include '../utils/php.utils.php';


class Scholar extends DatabaseConnection{

    public static function  InsertData($conn){
        $response= array();
        extract($_POST);
         $fileName = uploadFile("doc","Doc");
    
         $sql ="INSERT INTO `researches`(`title`, `problem`, `author`, `year`, `category`, `futurework`, `recomm`, `description`, `groupNo`, `faculty`) 
                 VALUES('$title', '$problem','$author','$year','$category','$futurework','$recomm','$description','$groupNo','$faculty')";
         $res = $conn->query($sql);
         if($res){
            $response = [
                "status"=> true,
                "message"=> "Inserted Successfully",
                "doc"=> $fileName
            ];

            $lastInsertediD = Scholar::lastInsertIUID($conn);
            Scholar::InsertDocument($conn,$fileName,$lastInsertediD);
         }else{
            $response = [
                "status"=> false,
                "message"=> $conn->error,
                "doc"=> $fileName
            ];
         }

        echo json_encode($response);
    }
    public static function  SubmitAnswer($conn){
        $response= array();
        extract($_POST);
         $sql ="INSERT INTO `answers`( `ans`, `qId`, `user`) VALUES ('$answer','$qid','$user')";
         $res = $conn->query($sql);
         if($res){
            $sql ="UPDATE questions SET status='answered' where id ='$qid'";
            $res = $conn->query($sql);
            $response = [
                "status"=> true,
                "message"=> "Submitted Successfully"
             
            ];

          
         }else{
            $response = [
                "status"=> false,
                "message"=> $conn->error
                
            ];
         }

        echo json_encode($response);
    }


    public static function  InsertDocument($conn, $name, $id, $type="thesis"){
         $sql ="INSERT INTO `documents`(`name`, `type`, `paperId`) VALUES ('$name','$type','$id')";
         $res = $conn->query($sql);
         if($res){
           return true;
         }else{
          return false;}
    }

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
    public static function  READLATEST($conn){
        $results = [
            'success' => [],
            'errors' => []
        ];
        $response= array();
        extract($_POST);
        $sql = "SELECT *FROM `researches` ORDER BY action DESC LIMIT 15";
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
    public static function  GetFaq($conn){
        $results = [
            'success' => [],
            'errors' => []
        ];
        $response= array();
        extract($_POST);
        $sql = "SELECT *FROM `questions` ORDER BY action DESC";
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
    public static function  ReadAllDocs($conn){
        $results = [
            'success' => [],
            'errors' => []
        ];
        $response= array();
        extract($_POST);
        $sql = "SELECT doc.id, doc.name, doc.action, researches.title FROM `documents` doc 
join researches
on doc.paperId=researches.id";
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
    public static function  fetch($conn){
        $results = [
            'success' => [],
            'errors' => []
        ];
        $response= array();
        extract($_POST);
        $sql = "SELECT COUNT(*) as num from $table";
        $res = $conn->query($sql);
        if($res){
           
            $rows=$res->fetch_assoc();
            $response = [
                'status' => 'true',
              "num"=>$rows['num']
            ];
        }else
            $response = [
                'status' => 'false',
                "message" => $conn->error
            ];
     
      
        echo json_encode($response);
    }
    public static function  lastInsertIUID($conn){
       $id ="0";
     
        $sql = "SELECT id FROM `researches` ORDER BY id Desc LIMIT 1";
        $res = $conn->query($sql);
        if($res){
          $rows=$res->fetch_assoc();
          $id = $rows['id'];
        }
      return $id;
    }
    public static function  DeleteData($conn){
       
        $response= array();
        extract($_POST);
        $sql = "DELETE FROM `researches` where id ='$id'";
        $res = $conn->query($sql);
        if($res){
         
            $response = [
                'status' => 'true',
              "message"=>"Data has been deleted successfully"
            ];
        }else
            $response = [
                'status' => 'false',
                "message" => $conn->error
            ];
     
      
        echo json_encode($response);
    }
    public static function  DeleteFq($conn){
       
        $response= array();
        extract($_POST);
        $sql = "DELETE FROM `questions` where id ='$id';";
        $sql2 = "DELETE FROM `answers` where qId ='$id';";
        $res = $conn->query($sql);
        $res2 = $conn->query($sql2);
        if($res){
         
            $response = [
                'status' => 'true',
              "message"=>"Data has been deleted successfully"
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