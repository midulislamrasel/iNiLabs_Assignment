<?php
abstract class Animal {
    abstract public function makeSound();
}

class Horse extends Animal {
    public function makeSound() {
        return "Neigh!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Fox extends Animal {
    public function makeSound() {
        return "Yelp!";
    }
}

function animalSound(Animal $animal) {
    echo $animal->makeSound() . "\n";
}

// Example usage
$horse = new Horse();
$cat = new Cat();
$fox = new Fox();


animalSound($horse);
animalSound($cat);
animalSound($fox);

