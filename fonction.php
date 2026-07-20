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

function getProduits(){
    $sql="SELECT 
                produit_membre.id_produit_membre,
                produit.nom,
                categorie.nom_categorie,
                membre.nom AS vendeur,
                produit_membre.prix_vente,
                produit_membre.quantite_dispo,
                produit_membre.date_dispo
            FROM produit_membre JOIN produit 
            ON produit.id_produit = produit_membre.id_produit JOIN categorie
            ON categorie.id_categorie = produit.id_categorie JOIN membre
            ON membre.id_membre = produit_membre.id_membre
            WHERE produit_membre.quantite_dispo > 0";
    $news_req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($news = mysqli_fetch_assoc($news_req)){
        $result[] = $news;
    }
    mysqli_free_result($news_req);
    return $result; 
}

function getListeProduits(){

    $sql="SELECT * FROM produit";

    $req=mysqli_query(dbconnect(),$sql);

    $result=array();

    while($produit=mysqli_fetch_assoc($req)){
        $result[]=$produit;
    }

    mysqli_free_result($req);

    return $result;
}
?>
