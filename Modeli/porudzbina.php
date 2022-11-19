<?php

class Porudzbina{
    public $korinsik;
    public $proizvod;

    public static function porudzbineKorisnika($mysqli, $idkorisnika){
        $query = "SELECT por.korisnik_id,(SELECT prod.ime FROM prodavnice AS prod WHERE prod.id=p.prodavnica) AS ime_prodavnice , p.ime,p.cena  FROM `porudzbine` AS por, proizvodi AS p WHERE por.proizvod_id=p.id AND por.korisnik_id=$idkorisnika";
        return $mysqli->query($query);
    }
}

?>