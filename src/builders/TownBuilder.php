<?php
namespace Serj\Town\Builders;
class TownBuilder {
            function getTownOptions() {
                return array(
                    'townNameRand' => rand(0, 3), //'Kiev', 'Kharkov', 'Odessa', 'Donetsk'
                    'streetCountRand' => rand(5, 25)
                );
            }
        }
?>
