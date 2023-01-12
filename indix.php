

    <?php

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

        $auteur = new Auteur("Stephen", "King");

        $livre1 = new Livre("Ca", "1986", "1138", "20", $auteur);
        $livre2 = new Livre("Simeterre", "1983", "374", "15", $auteur);
        $livre3 = new Livre("Le Fléau", "1978", "823", "14", $auteur);
        $livre4 = new Livre("Shining", "1977", "447", "16", $auteur);
        
        
        echo $auteur -> afficherBibliographie();
        



    ?>




</body>
</html>