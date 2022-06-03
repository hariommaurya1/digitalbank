# Digital Dank


Requirement details:
PHP Version 8 or higher
XAMPP

STEP 1: Put the project folder in htdoc inside the xampp folder
STEP 3: Import the sql file form phpMyAdmin


REST API's

1: REST API to upload the file and save the data into Database.

URL: localhost/DigitalBank/uploadDataByJson.php
Method: POST[Multi-part form data]
Feild details:
key:trade
value: "file_name.csv" (Input type: File)


2: REST API to add individual trade records using JSON request.

URL: localhost/DigitalBank/uploadDataByJson.php

Method: POST

Request JSON Sample:

{
    "Order_No" : "O234452",
    "Share_Name" : "TCS",
    "Share_Id" : "T4565",
    "Quantity" : "56",
    "BuyOrSell" : "B",
    "PricePerShare" : "345",
    "Customer_Id" : "3454345",
    "Account" : "2345654",
    "Front_Desk_Officer_id" : "11",
    "Brach_Code" : "S3454",
    "Trading_Charge" : "233",
    "Exchange" : "BSC",
    "Trade_Date_Time" : "01/06/2022 10:30:52"
}

3: REST API to get all trade records.

URL: localhost/DigitalBank/getcustomerdata.php [EX:localhost/DigitalBank/getcustomerdata.php]

Method: GET


3: REST API to get trade records by using FrontDeskOfficerId and Date.

URL: localhost/DigitalBank/getRecordById.php?FrontDeskOfficerId={FrontDeskOfficerId}&date={date}

URL Example: localhost/DigitalBank/getRecordById.php?FrontDeskOfficerId=103&date=2022-05-11 [dateformate: yyyy-mm-dd]

Method: GET
