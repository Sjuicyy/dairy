<?php
if (isset($_POST['submit'])) {
    require_once 'Connection.php';
    $A =   $_POST['Rate'];
    $B=$_POST['Agent'];
    $C=$_POST['Id'];
    $D=$_POST['Unit'];
    $i=1;
//   print_r($A);
//  print_r($B);
//    print_r($C);
//    print_r($D);
    $sql = "select * from item";
    $query = mysqli_query($conn,$sql);
    while($rows = mysqli_fetch_array($query)){
     //      print_r($rows['Id']);
       // echo "<br>";
        $checked = $rows['Id']==$C[$i];
        if($checked){

              $s = "INSERT INTO irate(Agentid, Iname, Rate,Unit)VALUES('$B','$C[$i]', '$A[$i]','$D[$i]')";

            if($conn->query($s) ===TRUE)
            {
                echo "<script>window.location='members.php'</script>";
            }
            $i++;
        }
        else{
            $i++;
        }
    }
}
?>