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

            public function select($username) {
                $sql="SELECT * FROM details where username LIKE '%$username'";
                if (!$sql) {
                    echo mysql_error();
                }

                $result = mysql_query($sql);
                while ($row = mysql_fetch_array($result)) {
                    print_r[$row];
                    echo "Username: " . $row["username"] . " " . "City: ".$row["city"]."<br>";
                }
            }

            
     //For Task 3, to prevent modification of string by user. 
           public function clean_String($str)
           {
               if(get_magic_quotes_gpc())
               {
                   $str=  stripslashes($str);
               }
               return mysql_real_escape_string($str);
           }
        }
        ?>



    </body>





</html>