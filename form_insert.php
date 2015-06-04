<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form id="login" action="query_insert.php" method="post">
            <label for="coupon"> Coupon:</label>
            <input type="text" name="coupon" id="coupon"/>
            <label for="coupon"> Offer:</label>
            <input type="text" name="offer" id="offer"/>
            <input type="submit" name="Insert" value="Insert"/>
        </form>
        <?php
        require_once 'query_insert.php';
        ?>



    </body>





</html>