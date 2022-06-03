<?php
include 'db_connect.php';

$Query = "SELECT `Order_No`, `Share_Name`, `Share_Id`, `Quantity`, `BuyOrSell`, `PricePerShare`,
 `Customer_Id`, `Account`, `Front_Desk_Officer_id`, `Brach_Code`, `Trading_Charge`, `Exchange`,
  `Trade_Date_Time` FROM `trade`";

$temRes = mysqli_query($con, "$Query");
if (mysqli_num_rows($temRes) > 0) {
    while($row = mysqli_fetch_assoc($temRes)){
        $record[] = $row;
    }
    $data  = ['code' => 200, 'status' => true, 'errmsg' => "Record found", 'records'=> $record];
}else{
    $data  = ['code' => 201, 'status' => false, 'errmsg' => "Record not found"];
}
echo json_encode($data);