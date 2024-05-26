

        <?php
        $arr = array(
            "Name" => "Warisha",
            "Age" => "20",
            "city" => "Karachi",
            "designation" => "Teacher",
            "emailid" => "warisha@gmail.com",
            "Address" => "N Nazimabad"
        );
        
        echo $arr["Name"];

        //foreacharray
        $for = array (
            "Name" => "Warisha",
            "Age" => "20",
            "city" => "Karachi",
            "designation" => "Teacher",
            "emailid" => "warisha@gmail.com",
            "Address" => "N Nazimabad",
        );
            foreach($for as $a=>$b){
                echo("<br>");
                echo $a,"   ",$b;
            }
        

        ?>
        