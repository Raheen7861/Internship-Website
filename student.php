<?php
$n=$_POST["n"];
$d=$_POST["d"];
$b=$_POST["b"];
$m=$_POST["m"];
$c=$_POST["c"];
$p=$_POST["p"];
$e=$_POST["e"];
$conn=mysqli_connect("localhost","root","root85","reema");
mysqli_query($conn,"insert into student values('$n','$d','$b','$m','$c','$p','$e')");
$res=mysqli_query($conn,"select * from student");
while($row=mysqli_fetch_assoc($res)){
    print($row["Name"]);
    print($row["USN"]);
    print($row["Branch"]);
    print($row["Sem"]);
    print($row["College"]);
    print($row["Phone"]);
    print($row["Email"]);
    
}
mysqli_close($conn);

?>