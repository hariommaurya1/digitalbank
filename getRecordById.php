<?php
include 'db_connect.php';

$Front_Desk_Officer_id = $_GET['FrontDeskOfficerId'];
$date = $_GET['date'];
$Query = "SELECT `Order_No`, `Share_Name`, `Share_Id`, `Quantity`, `BuyOrSell`, `PricePerShare`,
 `Customer_Id`, `Account`, `Front_Desk_Officer_id`, `Brach_Code`, `Trading_Charge`, `Exchange`,
  `Trade_Date_Time` FROM `trade` WHERE `Front_Desk_Officer_id` = '$Front_Desk_Officer_id' AND 
  DATE(Trade_Date_Time) = '$date'";
// echo $Query;die;
$temRes = mysqli_query($con, $Query);
if (mysqli_num_rows($temRes) > 0) {
    $scount = 0;
    $bcount = 0;
    $tcount = 0;
    while($row = mysqli_fetch_assoc($temRes)){
        $record[] = $row;
        if($row['BuyOrSell'] == 'B'){
            $bcount++;
        }
        if($row['BuyOrSell'] == 'S'){
            $scount++;
        }
        $tcount++;
    }
    $uniqueCount = count(array_unique(array_column($record, 'Customer_Id'))); 
    $report = [
        "tot_num_trade" => $tcount,
        "sell_count" => $scount,
        "buy_count" =>  $bcount,
        "diff_clients" => $uniqueCount,
        "dates" => $date
    ];
    $data  = ['code' => 200, 'status' => true, 'errmsg' => "Record found", 'report' => $report ,'records'=> $record];
}else{
    $data  = ['code' => 201, 'status' => false, 'errmsg' => "Record not found"];
}
echo json_encode($data);