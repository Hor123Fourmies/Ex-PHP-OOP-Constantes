<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 12/12/2018
 * Time: 09:52
 */


// La classe dragon hérite de ma classe personnage

class dragon extends personnage {

        // La classe dragon n'utilise pas le constructeur de la classe personnage,
        // vous allez implémenter une variable statique privée
    protected static $numInstances;

    public function __construct()
    {
        // Je redéfinis le constructeur de cette classe, je souhaite que mes instances de dragon
        // aient une propriété id définie aléatoirement entre 1 et 99 999
        $this->setId(rand(1,99999));

        //Je souhaite également que les propriétés x et y soient définies aléatoirement
        // pour chaque instance dragon
        // Je vais définir x et y aléatoirement entre 1 et 900
        $this->x = rand(1,900);
        $this->y = rand(1,900);

        $this->vie = 100;

                // Vous allez incrémenter cette propriété dans le constructeur comme cela a été fait
                // pour la classe personnage

        self::$numInstances++;
    }

                // Puis vous allez créer une méthode statique qui retourne le nombre de dragons créés

    public static function getNumInstances()
    {
        echo self::$numInstances;
    }

    // Je redéfinis la méthode héritée setNom
    public function setNom($nom)
    {
        $this->nom = "Dragon ".$this->id;
    }

    // J'ajoute une méthode cracheFeu, pour le moment cette méthode ne fait rien du tout
    public function cracheFeu()
    {

    }
} 