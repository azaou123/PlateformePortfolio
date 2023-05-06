<?php

include('connect.php');

$todo = $_POST['todo'];
if ($todo=='addSkill'){
    $id = $_POST["id"];
    $skill = $_POST["skill"];
    $label = $_POST["label"];
    $score = $_POST["score"];
    $color = $_POST["color"];
    if ($skill != ''){
        $sql = "select id from `skills` where label=$skill";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $idSkill = $row['id'];
            ?>
                <option value="<?php echo $label; ?>"><?php echo $label; ?></option>
            <?php
            }
        }
        $sql = "insert into `userskills`(`user_id`, `skill_id`, `color`, `score`) values($id,$idSkill,$color,$score)" ;
        $conn->query($sql);
        echo '
            <script>
                window.location = "../partitions/dashboard/index.php";
            </script>
        ';
    }
    else if ($label != ''){
        $sql = "insert into `skills`(`label`) values ('$label')" ;
        $conn->query($sql);
        $sql = "select id from `skills` where label='$label'";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $idSkill = $row['id'];
            ?>
                <option value="<?php echo $label; ?>"><?php echo $label; ?></option>
            <?php
            }
        }
        $sql = "insert into `userskills`(`user_id`, `skill_id`, `color`, `score`) values('$id','$idSkill','$color','$score')" ;
        $conn->query($sql);
        echo '
            <script>
                window.location = "../partitions/dashboard/index.php";
            </script>
        ';
    }
    else {
        echo '
            <script>
            alert("You have to choose a skill");
                window.location = "../partitions/dashboard/index.php";
            </script>
        ';
    }
}
else {
    echo 'no action detected !';
}



?>
