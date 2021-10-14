<!DOCTYPE html>
<html>
    <head>
    <title>test</title>
    </head>

    <body>

        <?php
        //Aufgabe 1
        $arr = array('Max','Daniel','Eva');
        foreach ($arr as $key => $nam) {
           echo "<ul> $nam</ul>";
        }

        //Aufgabe 2

        function getLenth($bname='')
        {
            return strlen($bname);

        }

        $bname = "jkendler";

        echo getLenth($bname);
        echo "<br />";

        //Aufgabe 3

        for ($i=1; $i < 21; $i++) { 

            if ($i%2 == 0) {
                echo "<br />";
                
                echo "<strong>$i</strong>";
                echo "<br />";
            }

            else{
                echo $i;
            }
            
        }

        //Aufgabe 4
        echo "<br />";
        echo  date("h");


        if (date("h")< 12) {

            echo "Guten Morgen";
            
        }


        ?>
        

    </body>

</html>