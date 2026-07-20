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
                (nom, numero_etu)
                VALUES
                ('$nom','$numero_etu')";
    
        $result = mysqli_query($con,$sql);
        if(!result){
            die(mysqli_error($con));
        }
        echo "ID cree :" .mysqli_insert_id($con);
        return mysqli_insert_id($con);
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

function acheterProduit($id_produit_membre,$quantite){
    $sql = "INSERT INTO vente
            (date, heure, id_produit_membre, quantite) VALUES
            (CURDATE(), CURTIME(), '$id_produit_membre', '$quantite')";
    mysqli_query(dbconnect(),$sql);
    $sql2 = "UPDATE produit_membre SET quantite_dispo = quantite_dispo - $quantite
             WHERE id_produit_membre = $id_produit_membre";
    mysqli_query(dbconnect(),$sql2);
}

function getListeProduits(){
    $sql="select * from produit";
    $news_req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($news = mysqli_fetch_assoc($news_req)){
        $result[] = $news;
    }
    mysqli_free_result($news_req);
    return $result; 
}

function vendreProduits($id_produit,$id_membre,$prix_vente,$quantite_dispo,$date_dispo){
    $sql="INSERT INTO produit_membre
            (id_produit,id_membre,prix_vente,quantite_dispo,date_dispo)
            VALUES
            ('$id_produit','$id_membre','$prix_vente','$quantite_dispo','$date_dispo')";
    $news_req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($news = mysqli_fetch_assoc($news_req)){
        $result[] = $news;
    }
    mysqli_free_result($news_req);
    return $result; 
}


function getMesVentes($id_membre){
    $sql="SELECT
                produit.nom,
                produit_membre.prix_vente,
                produit_membre.quantite_dispo,
                produit_membre.date_dispo
            FROM produit_membre
            JOIN produit
            ON produit.id_produit = produit_membre.id_produit
            WHERE produit_membre.id_membre = '$id_membre'";
    $news_req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($news = mysqli_fetch_assoc($news_req)){
        $result[] = $news;
    }
    mysqli_free_result($news_req);
    return $result; 
}

?>