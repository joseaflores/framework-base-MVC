<?php 

//retorna la url del proyecto
function base_url(){

    return BASE_URL;
}
//Muestra información formateada
function dep($data){
    $format = print_r('<pre>');
    $format .=print_r($data);
    $format .=print_r('</pre>');
    return $format;
}
//limpiar cadenas de texto para evitar inyecciones sql
function strClean($strCadena){
    $string = preg_replace(['/\s*/','/*\s|\s$/'],[' ',''],$strCadena);
    $string = trim($string);//elimina espacios en blanco
    $string = stripslashes($string);//elimina barras invertidas
    $string = str_replace("<script>","",$string);
    $string = str_replace("/<script>","",$string);
    $string = str_replace("<script src>","",$string);
    $string = str_replace("<script type=>","",$string);
    $string = str_replace("SELECT * FROM","",$string);
    $string = str_replace("DELETE FROM","",$string);
    $string = str_replace("INSERT INTO","",$string);
    $string = str_replace("SELECT COUNT(*) FROM","",$string);
    $string = str_replace("DROP TABLE","",$string);
    $string = str_replace("OR '1'='1","",$string);
    $string = str_replace('OR "1"="1"',"",$string);
    $string = str_replace("IS NULL; --","",$string);
    $string = str_replace("LIKE '; --","",$string);
    $string = str_replace('LIKE "',"",$string);
    $string = str_replace("OR 'a'='a'","",$string);
    $string = str_replace('OR "a"="a"',"",$string);
    $string = str_replace("OR 'a'='a","",$string);
    $string = str_replace("OR a = a","",$string);
    $string = str_replace("__","",$string);
    $string = str_replace("==","",$string);
    $string = str_replace("[","",$string);
    $string = str_replace("]","",$string);
    $string = str_replace("`","",$string);
    $string = str_replace("^","",$string);
    $string = str_replace("* FROM ","",$string);
    return $string;

}

//Genera una contraseña de 10 caracteres
function passGenerator($length = 10){
    $pass = "";
    $longitudPass = $length;
    $cadena = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0987654321";
    $longitudCAdena = strlen($cadena);

    for($i=1; $i <= $longitudPass; $i++){
        $pos = rand(0,$longitudCAdena-1);
        $pass = substr($cadena,$pos,1);
    }
    return $pass;
}
//formato para valores monetarios
// notación inglesa sin separador de millares 1234.79
function formatmoney($cantidad){
    $cantidad = number_format($cantidad,2,'.','');
    return $cantidad;
}






?>