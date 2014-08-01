<?php
    namespace Serj\Town\Builders;
    class StreetBuilder {
            function getStreetOptions() {
                return array(
                    'streetNameRand' => rand(0, 4), // 'Pushkinskaya', 'Symskaya', 'Petrovskogo', 'Akademika Pavlova', 'Clochkovskaya'
                    'streetLengthRand' => rand(200, 4999),
                    'streetCoordsRand' => (rand(48, 50) . "°" . rand(00, 59) . "′" . " с. ш. " . rand(30, 37) . "°" . rand(00, 59) . "′" . " в.д."),
                    'houseCountRand' => rand(9, 19)
                );
            }
        }
?>
