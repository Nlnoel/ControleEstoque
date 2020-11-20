<?php
    
    namespace classes\Conexao;
    
    class Conexao{

        private $obj_conn;

        public function __construct(){

            try{

                $host = "mysqlhost=localhost";
                
                $db = "";

                $pass = "";

                $user = "root";
                
                $this->obj_conn = new PDO($host."dbname=".$db, $user, $pass, [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES uft8"
                ]);
                
            } catch(Exception $e){

                throw new Exception("Erro ao tentar conectar com o banco de dados!");

            }

        }

        public function run($str_sql, $arr_val = []){

            if(!empty($arr_val)){
                
                $stm = $this->obj_conn->prepare($str_sql);

                if($stm->execute($arr_val)){

                    return $stm;

                } else{

                    $arr_error = $stm->arrInfo();

                    throw new Exception($arr_error[2]);

                }

            } else{

                if($stm = $this->obj_conn->query($str_sql)){

                    return $stm;

                } else{

                    $arr_error = $stm->errorInfo();

                    throw new Exception($arr_error[2]);

                }
            }

        }

    }
