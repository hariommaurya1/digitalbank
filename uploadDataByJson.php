<?php
include 'db_connect.php';

$data = file_get_contents('php://input');
$data = json_decode($data);

$Order_No = $data->Order_No;
$Share_Name = $data->Share_Name;
$Share_Id = $data->Share_Id;
$Quantity = $data->Quantity;
$BuyOrSell = $data->BuyOrSell;
$PricePerShare = $data->PricePerShare;
$Customer_Id = $data->Customer_Id;
$Account = $data->Account;
$Front_Desk_Officer_id = $data->Front_Desk_Officer_id;
$Brach_Code = $data->Brach_Code;
$Trading_Charge = $data->Trading_Charge;
$Exchange = $data->Exchange;
$Trade_Date_Time = $data->Trade_Date_Time;

$temQuery = "SELECT `Order_No` FROM `trade` WHERE `Order_No` =  '$Order_No'";
$temRes = mysqli_query($con, "$temQuery");
if (mysqli_num_rows($temRes) < 1) {
    $query = "INSERT INTO `trade` (`Order_No`,`Share_Name`,`Share_Id`,`Quantity`,`BuyOrSell`,`PricePerShare`,`Customer_Id`, `Account`, `Front_Desk_Officer_id`,`Brach_Code`, `Trading_Charge`, `Exchange`, `Trade_Date_Time`
            ) VALUES('$Order_No','$Share_Name','$Share_Id','$Quantity','$BuyOrSell','$PricePerShare', '$Customer_Id', '$Account', '$Front_Desk_Officer_id','$Brach_Code', '$Trading_Charge', '$Exchange', '$Trade_Date_Time') ;";
    // echo $query;die;
    if (mysqli_query($con, "$query")) {
        $data  = ['code' => 200, 'status' => true, 'msg' => "Record Added into database"];
    } else {
        $data  = ['code' => 201, 'status' => false, 'errmsg' => "Something wrong! Try Agian"];
    }
} else {
    $data  = ['code' => 201, 'status' => false, 'errmsg' => "Order_Id Already Found In Database"];
}
echo json_encode($data);
