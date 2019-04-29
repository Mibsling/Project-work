<?php

include('database.php');

$FirstName = $_POST['firstname'];
print_r($FirstName);
 //include './Register.php';   
    //echo(Register.php); 
    

//$conn = getConnection();
//if (!$conn) {
//    print(mysqli_connect_error());
//    exit();
//} 
//else {
//    $query = "INSERT INTO customers('CustFirstName', 'CustLastName', 'CustAddress', 'CustCity' ,"
//            . "'CustProv', 'CusPostal', 'CustCountry','CustHomePhone', 'CusBusPhone','CustEmail','CustPassword' )";
//
//    $stmt = mysqli_prepare($conn, $query);
//    mysqli_stmt_bind_param($stmt, "ssssssi", $FirstName, $LastName, $Address, $Province, $PostalCode, $Country, $HomePhone, $BusPhone, $Email, $Password);
//    $chkResult = mysqli_stmt_execute($stmt);
//}
//$FirstName = $_POST['firstname'];
//    $LastName = $_POST['lastname'];
//    $Address = $_POST['address'];
//    $City = $_POST['city'];
//    $Province = $_POST['province'];
//    $PostalCode = $_POST['code'];
//    $Country = $_POST['country']; 
//    $HomePhone = $_POST['homephone'];
//    $BusPhone = $_POST['busphone'];
//    $Email = $_POST['email'];
//    $Password = $_POST['password'];
?>
