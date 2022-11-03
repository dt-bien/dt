<?php
   
    function db_select ($sql) {
        $myserver = "sql107.epizy.com";
        $myloginname = "epiz_32216234";

        $mypassword = "RwJZ2uBH89w2NJ";
        $mydbname = "epiz_32216234_QLDangKy";
        $data = array();
        $dbconnect = mysqli_connect($myserver,$myloginname,$mypassword,$mydbname);
        if (!$dbconnect) {
            die("Connection to DB fail.");
        }
       // var_dump($dbconnect);
         mysqli_query($dbconnect ,"Set names 'utf8'");
        $dataPointer = mysqli_query($dbconnect,$sql);
      
         
        if (mysqli_num_rows($dataPointer) > 0 ) {

            while ($dataRow = mysqli_fetch_assoc($dataPointer)) {
                $data[] = $dataRow;
            }
            return $data;
           /// var_dump($data);
        } else {
          
           return $data;
           
        }
        // var_dump($data);
        return $data;
        mysqli_close($dbconnect);

    }