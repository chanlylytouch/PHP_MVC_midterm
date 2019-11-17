<?php
    function m_view(){
        $query = "SELECT * FROM student";
        include 'connection.php';
        $result= mysqli_query($connection,$query);
        if($result && mysqli_num_rows($result)>0){
            foreach ($result as $row){
                $rows[] = $row;
            }
            return $rows;
        }

    }
    function m_add($data){
        // var_dump($data); die();
        $name = $_POST['user'];
        $class = $_POST['class'];
        $mark = $_POST['num'];
        $sex = $_POST['sex'];
        include 'connection.php';
        $query = "INSERT INTO student(name,class,mark,sex) VALUE('$name','$class','$mark','$sex')";
        $result = mysqli_query($connection,$query);
        return $result;
    }
?>