<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form id="login" action="validate.php" method="post">
            <label for="username"> UserName:</label>
            <input type="text" name="username" id="username"/>
            
            <input type="submit" name="Submit" value="Submit"/>
        </form>
        <?php
        require_once 'validate.php';
        ?>
        
        
        
    </body>
   
    
    
    
    
</html>