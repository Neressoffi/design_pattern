<?
// Création de l'interface Animal
interface Animal {
    public function makeSound();
}

// Création de la classe Dog qui implémente l'interface Animal
class Dog implements Animal {
    public function makeSound() {
        echo "Le chien aboie" . "<br>";
    }
}

// Création de la classe Cat qui implémente l'interface Animal
class Cat implements Animal {
    public function makeSound() {
        echo "Le chat miaule" . "<br>";
    }
}

// Création de la Factory qui crée des objets Animal en fonction de leur type
class AnimalFactory {
    public function createAnimal($type) {
        if ($type == "chien") {
            return new Dog();
        } else if ($type == "chat") {
            return new Cat();
        } else {
            return null;
        }
    }
}

// Utilisation de la Factory pour créer des objets de groupe d'animaux
$animalFactory = new AnimalFactory();
$dog = $animalFactory->createAnimal("chien");
$cat = $animalFactory->createAnimal("chat");

// Appel de la méthode makeSound() de chaque objet créé
$dog->makeSound(); // affiche "Le chien aboie"
$cat->makeSound(); // affiche "Le chat miaule"