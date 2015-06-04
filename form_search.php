<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form id="login" action="query_search.php" method="post">
            <label for="coupon"> Coupon:</label>
            <input type="text" name="coupon" id="coupon"/>
            <input type="submit" name="Search" value="Search"/>
        </form>
        <?php
        require_once 'query_search.php';
        ?>



    </body>





</html>