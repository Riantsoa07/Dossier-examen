<?php 
function dbconnect()              
{
    static $connect = null ;
    if($connect== null){
        $connect=mysqli_connect('localhost','root','','projet_final');
        if(!$connect === null){
        die('Erreur de connexion a la base de donnees :'.mysqli_connect_error());
        }
        mysqli_set_charset($connect,'utf8mb4');
    }
    return $connect;
}
function verifie_login($numero_etu){
    $sql="select * from membre where numero_etu ='$numero_etu'";
    $news_req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($news = mysqli_fetch_assoc($news_req)){
        $result[] = $news;
    }
    mysqli_free_result($news_req);
    return $result; 
}

function insert_membre($nom,$numero_etu){

    $sql = "INSERT INTO membre
            (nom, numero_etu, image_profil)
            VALUES
            ('$nom','$numero_etu','')";

    mysqli_query(dbconnect(),$sql);
}
?>