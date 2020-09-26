<?php

class ConnectPdo {
    protected $server    = "localhost",
              $username  = "zuve",
              $password  = "12345678";

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$server;dbname=Evaluasi3",$user, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $z) {
            echo "Connection Failed: ".$z->getMessage();
            exit;
        }
    }

    public function select(){
        $query = "SELECT * FROM Data;";
        $show = $this->conn->prepare($query);
        $show->execute();
        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        return $result;
        
    }

    public function insert(){
        echo " Masukan Data\n";
        echo "===============\n\n";

        echo "Masukan Data yang ingin dimasukan : ";
        $banyak = trim(fgets(STDIN));
        for($m=0;$m<$banyak;$m++){
            echo "Input Nama : ";
            $data[$m]['nama'] = trim(fgets(STDIN));
            echo "Input Nilai : ";
            $data[$m]['nilai'] = trim(fgets(STDIN));
            echo "\n";
        }
        
        foreach ($data as $key => $value) {
            $sql = "INSERT INTO Data(nama,nilai) VALUES('".$value['nama']."', ".$value['nilai'].");";
            $stm = $this->conn->prepare($query);
            $stm->execute();
        }

        print_r($this->select());
        
    }

    public function update(){
        echo "        Update      ";
        echo "================\n\n";
        print_r($this->select());
        echo "\nData yang ingin di Update : ";
        $id = trim(fgets(STDIN));
        echo "Input Nama : ";
        $nama = trim(fgets(STDIN));
        echo "Input Nilai : ";
        $nilai = trim(fgets(STDIN));

        $query = "UPDATE Data SET nama = '".$nama."', nilai=".$nilai." WHERE =".$id;
        $show = $this->conn->prepare($query);
        $show->execute();

        print_r($this->select());
    }

    public function delete(){
        echo "\n DELETE \n";
        echo "===============\n\n";
        print_r($this->select());
        echo "\Data yang ingin di delete : ";
        $id = trim(fgets(STDIN));

        $query = "DELETE FROM Data WHERE nama=".$id;
        $show = $this->conn->prepare($query);
        $show->execute();

        print_r($this->select());
    }

}