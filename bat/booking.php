<?php
$connection = mysqli_connect('localhost','root','','wonder-tour','3306');
if(isset($_POST['book'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Noofperson = $_POST['number of person'];

    $request = "insert into booking(Name, E-mail, Phone, Noofperson ) values
    ('$Name','$Email','$Phone','$Noofperson')";

    mysqli_query($connection,$request);

    header('location:maruitius.html');
}
echo 'something went wrong'

?>