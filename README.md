# digitalbank


Requirement details:
PHP Version: 8 or higher
Mysql
Xampp for local server.


REST API's

1: REST API to upload the file and save the data into Database.


URL: localhost/DigitalBank/uploadDataByJson.php

Method: POST[Multi-part form data]

Feild details:

key:trade

value: "file_name.csv" (Input type: File)


2: REST API to add individual trade records using JSON request
.

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

3: REST API to add individual trade records using JSON request.

URL: localhost/DigitalBank/getcustomerdata.php?Id={Customer_Id} [EX:localhost/DigitalBank/getcustomerdata.php?Id=9488878]

Method: GET
