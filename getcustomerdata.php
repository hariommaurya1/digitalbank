<?php
$con = mysqli_connect("localhost", 'root', '', 'digitalbank_db');
$Customer_Id = $_GET['Id'];
$Query = "SELECT `Order_No`, `Share_Name`, `Share_Id`, `Quantity`, `BuyOrSell`, `PricePerShare`,
 `Customer_Id`, `Account`, `Front_Desk_Officer_id`, `Brach_Code`, `Trading_Charge`, `Exchange`,
  `Trade_Date_Time` FROM `trade` WHERE `Customer_Id` =  '$Customer_Id'";

$temRes = mysqli_query($con, "$Query");
if (mysqli_num_rows($temRes) > 0) {
    while($row = mysqli_fetch_assoc($temRes)){
        $record[] = $row;
    }
    $data  = ['code' => 200, 'status' => true, 'errmsg' => "Customer record found", 'CustomerData'=> $record];
}else{
    $data  = ['code' => 201, 'status' => false, 'errmsg' => "Customer record not found"];
}
echo json_encode($data);