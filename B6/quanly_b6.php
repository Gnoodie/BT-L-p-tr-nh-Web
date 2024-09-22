<?php
class Database
{
  private $host = "localhost";
  private $db_name = "b5_mydb";
  private $username = "root";
  private $password = "";
  private $table_name = "my_guests";
  public $conn;
  public function getConnection()
  {
    $this->conn = new mysqli($this->host, $this->username, $this->password,$this->db_name);

    // Kiểm tra kết nối
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }

    return $this->conn;
  }
  public function createDB()
  {
    $conn = new mysqli($this->host, $this->username, $this->password);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE IF NOT EXISTS $this->db_name CHARACTER SET utf8 COLLATE utf8_general_ci";
    if ($conn->query($sql) === TRUE) {
      echo "Database '$this->db_name' đã được tạo thành công!";
    } else {
      echo "Lỗi khi tạo cơ sở dữ liệu: " . $conn->error;
    }

    $conn->close();
  }
  public function createTable($table_name)
  {
    $this->conn=$this->getConnection();
    $sql = "CREATE TABLE $table_name (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($this->conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $this->conn->error;
    }
    $this->conn->close();
  }
  public function insetData($table_name,$data_array){
    $this->conn=$this->getConnection();
    $sql="INSERT INTO $table_name (firstname, lastname, email) VALUES (?,?,?)";
    $stmt=$this->conn->prepare($sql);
    if ($stmt === FALSE) {
      die("Error preparing statement: " . $this->conn->error);
    }

    foreach ($data_array as $data) {
      $stmt->bind_param("sss", $data['firstname'], $data['lastname'], $data['email']);

      if ($stmt->execute() === TRUE) {
          echo "Record for {$data['firstname']} {$data['lastname']} inserted successfully.<br>";
      } else {
          echo "Error inserting record for {$data['firstname']} {$data['lastname']}: " . $stmt->error . "<br>";
      }
  }

  $stmt->close();
  $this->conn->close();
  }
  
}
