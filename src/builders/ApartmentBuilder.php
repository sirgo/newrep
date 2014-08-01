<?php
    namespace Serj\Town\Builders;
    class ApartmentBuilder {
            function getApartmentOptions() {
                return array(
                    'roomRand' => rand(1, 3),
                    'squareRand' => rand(25, 35),
                    'tenantRand' => rand(1, 5),
                    'gasRand' => rand(0, 1), //централ, автоном
                    'kvtRand' => rand(0, 999)
                );
            }
        }
?>
