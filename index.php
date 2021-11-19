<!DOCTYPE html>
<html>
<head>
    <style>
        
        table{
            
            height: 500px;
            width: 500px;
            margin: 50px;      
        }
        .white{
            width: 50px;
            height: 50px;
            background: whitesmoke;
            text-align: center;
        }
        .black{
            width: 50px;
            height: 50px;
            background: gray;
            text-align: center;
        }
        
        
    </style>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table>

    
        <?php

        
            echo "<tr>";
            for($i = 8 ; $i>0 ;$i--){
                for($j=0 ; $j<8 ; $j++){
                    $total = $i + $j;
                    if($total%2==1){
                        if($j==0){
                            echo "<td class = 'black'> A$i </td> ";
                        }elseif($j==1){
                            echo "<td class = 'black'> B$i </td> ";
                        }elseif($j==2){
                            echo "<td class = 'black'> C$i </td> ";
                        }elseif($j==3){
                            echo "<td class = 'black'> D$i </td> ";
                        }elseif($j==4){
                            echo "<td class = 'black'> E$i </td> ";
                        }elseif($j==5){
                            echo "<td class = 'black'> F$i </td> ";
                        }elseif($j==6){
                            echo "<td class = 'black'> G$i </td> ";
                        }elseif($j==7){
                            echo "<td class = 'black'> H$i </td> ";
                        } 
                    }else{
                        if($j==0){
                            echo "<td class = 'white'> A$i </td> ";
                        }elseif($j==1){
                            echo "<td class = 'white'> B$i </td> ";
                        }elseif($j==2){
                            echo "<td class = 'white'> C$i </td> ";
                        }elseif($j==3){
                            echo "<td class = 'white'> D$i </td> ";
                        }elseif($j==4){
                            echo "<td class = 'white'> E$i </td> ";
                        }elseif($j==5){
                            echo "<td class = 'white'> F$i </td> ";
                        }elseif($j==6){
                            echo "<td class = 'white'> G$i </td> ";
                        }elseif($j==7){
                            echo "<td class = 'white'> H$i </td> ";
                        }                  
                    }

                }
                echo "</tr>";
            }


        ?>
        
    </table>
   
    
</body>
</html>