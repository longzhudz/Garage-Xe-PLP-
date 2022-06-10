<?php
   // class DB{
      //  public $conn;
         $servername = "localhost";
         $database = "thuctap";
         $username = "root";
         $password = "";
        // Create connection
      //  function __construct()
      //  {
      //      $this->conn = mysqli_connect($this->servername,$this->username,$this->password);
      //      mysqli_select_db($this->conn,$this->database);
       //     mysqli_query($this->conn,"SET NAMES 'utf-8'");
       // }
        $conn = mysqli_connect($servername,$username,$password,$database);

        if(!$conn)
        {
            echo 'Ket noi that bai';
        }
        // Thực thi câu truy vấn

   // }
        
        

?>