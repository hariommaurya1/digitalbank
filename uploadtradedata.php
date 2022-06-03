<?php
include 'db_connect.php';

$ser_file_path = "upload/" . $_FILES["trade"]["name"];
move_uploaded_file($_FILES["trade"]["tmp_name"], $ser_file_path);

$scount = 0;
$fcount = 0;
$ae = '';
$aefids = array();
$fids = array();


$row  = 1;
$query = " ";
if (($handle = fopen($ser_file_path, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //for ($c=0; $c < $num; $c++) {
        $Order_No = $data[0];
        $Share_Name = $data[1];
        $Share_Id = $data[2];
        $Quantity = $data[3];
        $BuyOrSell = $data[4];
        $PricePerShare = $data[5];
        $Customer_Id = $data[6];
        $Account = $data[7];
        $Front_Desk_Officer_id = $data[8];
        $Brach_Code = $data[9];
        $Trading_Charge = $data[10];
        $Exchange = $data[11];
        $Trade_Date_Time = $data[12];
        if ($row != 1) {
            $temQuery = "SELECT `Order_No` FROM `trade` WHERE `Order_No` =  '$Order_No'";
            $temRes = mysqli_query($con, "$temQuery");
            if (mysqli_num_rows($temRes) < 1) {
                $query = "INSERT INTO `trade` (`Order_No`,`Share_Name`,`Share_Id`,`Quantity`,`BuyOrSell`,`PricePerShare`,`Customer_Id`, `Account`, `Front_Desk_Officer_id`,`Brach_Code`, `Trading_Charge`, `Exchange`, `Trade_Date_Time`
            ) VALUES('$Order_No','$Share_Name','$Share_Id','$Quantity','$BuyOrSell','$PricePerShare', '$Customer_Id', '$Account', '$Front_Desk_Officer_id','$Brach_Code', '$Trading_Charge', '$Exchange', '$Trade_Date_Time') ;";
                // echo $query;die;
                if (mysqli_query($con, "$query")) {
                    $scount++;
                } else {
                    $fcount++;
                    $fids[] = $Order_No;
                }
            }else{
                $ae++;
                $aefids[] = $Order_No;
            }
        }
        $row++;
        //}

    }
    fclose($handle);
}
$data  = ['code' => 200, 'status' => 'success',
 'msg' => $scount . " Added into database",
  'errmsg' => $fcount . ' Failed to add into database',
   'failedRecodesOrderId' => $fids,
   'recodeAlreadyFoundmsg' => $ae . ' Recode Already Found into database',
   'recodeAlreadyFound' => $aefids
];
// echo $query;
echo json_encode($data);
// mysqli_query($con, "SELECT * FROM trade")/;
// die;
