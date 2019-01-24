<?php
// classnaam met Hoofdletter (UpperCamelCase)

class Chair
{
    // properties. Beginnen met private vanwege veiligheid
    // propertienaam met kleine letter (lowerCamelCase)
    private $screws;
    private $seat;

    // we schrijven function, maar in OOP heet het een method
    // methode namen met lowerCamelCase
    // we gebruiken vaak setters en getters.
    // setters om info in properties te zetten, getters om info uit properties te halen
    // variabelen in de zijn argumenten. Deze zijn lokaal, dus alleen te gebruiken in de methode zelf

    public function setChair($screws, $seat)
    {
        // $this-> is een verwijzing naar het huidige object. zoals hieronder zet je het argument in de propertie
        $this->screws = $screws;
        $this->seat = $seat;
    }

    public function setScrews($screws)
    {
        $this->screws = $screws;
    }

    public function getScrews()
    {
        return "aantal schroeven = ".$this->screws;
    }

}

// aanmaken van objecten. Denk aan de verschillende stoelen in een klas lokaal
$chair1 = new Chair();
$chair1->setScrews(7);
print $chair1->getScrews();

$chair2 = new Chair();
$chair2->setScrews(15);
print $chair2->getScrews();

// werkt niet omdat de propertie private staat.
// private = alleen beschikbaar in huidige class
print $chair1->screws;