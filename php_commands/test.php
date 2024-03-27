<?php
class Uczen
{
    public $imie;
    public $nazwisko;
    public $wiek;

    /**
     * @param $imie
     * @param $nazwisko
     * @param $wiek
     */
    public function __construct($imie, $nazwisko, $wiek)
    {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->wiek = $wiek;
    }
}

$uczen1= new Uczen("piotr","szabram",20);

$myJSON = json_encode($uczen1);

echo $myJSON;

