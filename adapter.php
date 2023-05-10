<?php
// Classe cible (Target)
interface ChargeurUSB {
  public function charger();
}

// Classe adaptee (Adaptee)
class ChargeurAllumeCigare {
  public function chargerAllumeCigare() {
    echo "Chargeur allume-cigare connecté. En train de charger...\n";
  }
}

// Classe adaptateur (Adapter)
class AdaptateurAllumeCigare implements ChargeurUSB {
  private $chargeur;

  public function __construct(ChargeurAllumeCigare $chargeur) {
    $this->chargeur = $chargeur;
  }

  public function charger() {
    $this->chargeur->chargerAllumeCigare();
  }
}

// Exemple d'utilisation
$chargeurAllumeCigare = new ChargeurAllumeCigare();
$adaptateurAllumeCigare = new AdaptateurAllumeCigare($chargeurAllumeCigare);

// Utilisation du chargeur USB avec l'adaptateur allume-cigare
$adaptateurAllumeCigare->charger();
