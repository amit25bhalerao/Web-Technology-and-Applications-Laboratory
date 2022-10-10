<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="1"/>
        <style>
            p
            {
               color:darkred;
               font-size: 100px;
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%,-50%); 
            }
            body {background-color:cornsilk;}
        </style>
        <p><?php echo date("h:i:s A");?></p>
    </head>
</html>