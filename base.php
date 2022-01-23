<?php
session_start();

class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=db01";
    protected $user="root";
    protected $pw="";
    protected $table;
    protected $pdo;

    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
    }

    public function all(...$arg){
        $sql="SELECT * FROM $this->table ";
        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key=>$value){
                    $tmp[]="`$key`='$value'";
                }
                $sql.=" WHERE " . implode(" AND ",$tmp) . " " . $arg[1];
                break;
            case 1:
                if(is_array($arg[0])){
                    foreach($arg[0] as $key=>$value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql.=" WHERE " . implode(" AND ",$tmp);
                }else{
                    $sql.=$arg[0];
                }
                break;
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id){
        $sql="SELECT * FROM $this->table WHERE ";
        if(is_array($id)){
            foreach($id as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            $sql.=implode(" AND ",$tmp);
        }else{
            $sql.=" `id`='$id'";
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function math($method,$col,...$arg){
        $sql="SELECT $method($col) FROM $this->table ";
        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key=>$value){
                    $tmp[]="`$key`='$value'";
                }
                $sql.=" WHERE " . implode(" AND ",$tmp) . " " . $arg[1];
                break;
            case 1:
                if(is_array($arg[0])){
                    foreach($arg[0] as $key=>$value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql.=" WHERE " . implode(" AND ",$tmp);
                }else{
                    $sql.=$arg[0];
                }
                break;
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    public function save($array){
        if(isset($array["id"])){
            foreach($array[0] as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            $sql="UPDATE $this->table SET " . implode(",",$tmp) . " WHERE `id`='{$array["id"]}'";
            $sql="UPDATE $this->table SET " . implode(',',$tmp) . " WHERE `id`='{$array['id']}'";
        }else{
            $sql="INSERT INTO $this->table (`" . implode("`,`",array_keys($array)) . "`) VALUES('" . implode("','",$array) . "')";
            $sql="INSERT INTO $this->table (`" . implode("`,`",array_keys($array)) . "`) VALUES('". implode("','",$array) ."')";
        }
        return $this->pdo->exec($sql);
    }

    public function del($id){
        $sql="DELETE FROM $this->table WHERE ";
        if(is_array($id)){
            foreach($id as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            $sql.=implode(" AND ",$tmp);
        }else{
            $sql.=" `id`='$id'";
        }

        return $this->pdo->exec($sql);
    }

    public function q($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

}
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:" . $url);
}

?>