<?php
/**
 * Created by lexaqpdev.com
 * User: AlexanderDheins
 * Date: 10/02/2024
 * Time: 6:22 PM
 */

 define('SERVIDOR', 'localhost');
 define('USUARIO', 'root');
 define('PASSWORD', '');
 define('BD', 'sisgestionescolar');

 define('APP_NAME','SISTEMA DE GESTION ESCOLAR');
 define('APP_URL', 'http://localhost/sysgestionescolar/');
 define('KEY_API_MAPS','');

 $servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

 try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAME utf8"));

    echo "conexion exitosa a la base de datos";
 }catch (PDOException $e){
    echo "error de conexion con la db";
 }