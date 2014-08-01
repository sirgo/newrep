<?php
    namespace Serj\Town\Builders;
    class BuildingBuilder {
            function getBuildingOptions() {
                return array(
                    'houseNumberRand' => rand(1, 199),
                    'floorCountRand' => rand(0, 2), //9, 12, 16 этажей
                    'porchCountRand' => rand(2, 4)
                );
            }
        }
?>

