<?php

class Model {
    private $conn;
    private $server="localhost:3335";
    private $username="root";
    private $password="Passw0rd";
    private $db="oop_crud";

    public function __construct(){
        try {
            $this->conn=new mysqli($this->server,$this->username,$this->password,$this->db);
        } catch (Exception $e) {
            echo "connection Failed ".$e->getMessage();
        }
    }


    public function savedata() {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) ) {
                    if(isset($_POST['id'])){
                        $this->update($_POST);
                    }else{
                        $this->store($_POST);
                    }
                }else{
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }

    }

    public function edit($id) {
        $data=null;
        $query="select * from records where id=$id";
        $sql_res=$this->conn->query($query);
        while($row=$sql_res->fetch_assoc()){
            $data=$row;
        }
        return $data;
    }

    public function showAll() {
        $data=null;
        $query="select * from records";
        $res=$this->conn->query($query);
        while($row=mysqli_fetch_assoc($res)){
            $data[]=$row;
        }
        return $data;
    }

    public function show($id) {
        $data=null;
        $query="select * from records where id=$id";
        $sql_res=$this->conn->query($query);
        while($row=$sql_res->fetch_assoc()){
            $data=$row;
        }
        return $data;
    }

    public function update($data){
        $name=$data['name'];
        $id=$data['id'];
        $email=$data['email'];
        $mobile=$data['mobile'];
        $address=$data['address'];
        $query="Update records set name='".$name."',email='".$email."',mobile='".$mobile."',address='".$address."' where id='".$id."'";
        if ($sql_result = $this->conn->query($query)) {
            echo "<script>alert('record Updated successfully');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }else{
            echo "<script>alert('failed');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }


    }
    public function store($data){
        $name=$data['name'];
        $email=$data['email'];
        $mobile=$data['mobile'];
        $address=$data['address'];

        $query="insert into records (name,email,mobile,address) values('".$name."','".$email."','".$mobile."','".$address."')";
        if ($sql_result = $this->conn->query($query)) {
            echo "<script>alert('records added successfully');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }else{
            echo "<script>alert('failed');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }

    }

    public function delete($id){
        $query="delete from records where id=$id";
        $sql_res=$this->conn->query($query);
        if($sql_res){
            return true;
        }
        return false;
    }
}

?>