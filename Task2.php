<html>
    <head>
        <title>Database Connectivity</title>
    </head>
    <body>
        <?php

        class Database {

            public $host;
            public $username;
            public $password;
            public $database;
            public $con;

            function Database() {
                $this->host = "localhost";
                $this->username = "root";
                $this->password = "root";
                $this->database = "Users";
            }

            public function connect() {
                $this->con = mysql_connect($this->host, $this->username, $this->password);
                if (!$this->con) {
                    echo mysql_error();
                }
                $sel = mysql_select_db($this->database, $this->con);
                if (!$sel) {
                    echo mysql_error();
                }
            }

            public function select() {
                $sql = "SELECT * FROM coupons";
                if (!$sql) {
                    echo mysql_error();
                }

                $result = mysql_query($sql);
                while ($row = mysql_fetch_array($result)) {
                   // print_r[$row];
                    echo "Coupon: " . $row["coupon"] . " " . "<br>";
                }
            }

            public function search($coupon) {

                $query = "SELECT * FROM coupons WHERE coupon LIKE '%$coupon%'";
                if (!$query) {
                    echo mysql_error();
                }
                $result = mysql_query($query);

                if (!$result) {
                    die("couldnt");
                }
                while ($row = mysql_fetch_array($result)) {
                    echo "Coupon: " . $row["coupon"] . " " . "Offer: " . $row["offer"] . "<br>";
                }
            }

            public function insert($coupon, $offer) {
                $sql = mysql_query("INSERT INTO coupons(coupon,offer) VALUES('$coupon','$offer')");
                if (!$sql) {
                    echo mysql_error();
                } else {
                    echo "Offer inserted successfully!";
                }
            }

        }
        ?>



    </body>





</html>