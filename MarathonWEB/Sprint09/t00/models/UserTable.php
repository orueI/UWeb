<?php

require_once("Model.php");
class UserTable extends Model
{
    public $login;
    public $password;
    public $full_name;
    public $email_address;

    public function __construct()
    {
        parent::__construct("users");
    }

    public function __destruct()
    {
        unset($this->connection);
    }

    public function find($login)
    {
        if ($this->connection->getConnectionStatus()) {
            if (!$this->isEmpty()) {
                $stmt = $this->connection->connection->prepare($this->connection->connection, "SELECT * FROM " . $this->table . " WHERE login = $login" . ";");
                $stmt->bindParam(":login", $this->login);
                $stmt->bindParam(":password", $this->password);
                $stmt->bindParam(":full_name", $this->full_name);
                $stmt->bindParam(":email_address", $this->email_address);
                $stmt->execute();
            }
        }
    }

    public function save()
    {
        if ($this->connection->getConnectionStatus()) {
            $row = $this->isEmpty();
            if ($row) {
                $this->insert();
            } else {
                $this->update();
            }
        }
    }

    public function delete()
    {
        if ($this->connection->getConnectionStatus()) {
            if (!$this->isEmpty()) {
                $stmt = $this->connection->connection->prepare($this->connection->connection, "DELETE name FROM " . $this->table . " WHERE login = " . $this->login . ";");
                $stmt->execute();
                $this->login = null;
                $this->password = null;
                $this->full_name = null;
                $this->email_address = null;
            }
        }
    }

    public function isEmpty()
    {
//        echo $this->login;
        $request = "
                    SELECT 1 as isntEmpty
                    FROM users
                    WHERE login =  '$this->login';";
        echo $request;
        $stmt = $this->connection->connection->prepare($request);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return !$res;
    }

    public function insert()
    {
        $request = "INSERT INTO users(login,password, fullName,emailUser)
        VALUE ('$this->login','$this->password','$this->full_name','$this->email_address');";
        $stmt = $this->connection->connection->prepare($request);
        $stmt->execute();
    }

    public function update()
    {
        $request = "UPDATE users SET  login = '$this->login' , password = '$this->password' , full_name = '$this->full_name' , email_address = '$this->email_address'  WHERE login = '$this->login';";
        $stmt = $this->connection->connection->prepare($request);
        $stmt->execute();
    }
}
