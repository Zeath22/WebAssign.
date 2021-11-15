<!DOCTYPE html>
<html>
    <head>
        <title>Chessboard</title>
        <style>
            body{
                background-image: url("pro.jpg");
                background-size: cover;
                color: white;
                font-size: 20px;
            }
            #black{
                width: 60px;
                height: 60px;
                background-color: rgba(204, 159, 109, 0.65);
                float: left;
                margin: 0px;
                color:white;
            }
            #white{
                width: 60px;
                height: 60px;
                background-color: rgba(108, 88, 71, 0.62);
                float: left;
                margin: 0px;
                color:white;
            }
            .row{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <?php
        for ($count =8; $count>=0; $count--){
            if ($count>0){
            echo "<div class='row' style='text-align: center;'>$count";
            }else{
                echo "<div class='row'>";
            }
            for ($counter =1; $counter<=8; $counter++){
                $cha = 96+$counter;
                if ($count==0){
                    echo "<div style='width: 60px; text-align: center'>". chr($cha++). "</div>";
                }elseif ($count%2==0){
                    if ($counter%2==0){
                        echo "<div id='white'>". chr($cha).$count. "</div>";
                    }
                    if ($counter%2!=0){
                        echo "<div id='black'> ". chr($cha). $count."</div>";
                    }
                } elseif ($counter%2==0){
                    echo "<div id='black'> ". chr($cha). $count."</div>";
                } elseif ($counter%2!=0){
                    echo "<div id='white'> ". chr($cha). $count."</div>";
                }
            }
            echo "</div>";
        }
        ?>
    </div>
    </body>
</html>