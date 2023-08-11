<?php
    CLASS Printer {
        private $lottoNumbers = Array(), $superNumbers = Array();
        FUNCTION print($object) {
            $this->lottoNumbers = array_slice($object->getProbabilityLotto(), 0, 5, true);
            $this->superNumbers = array_slice($object->getProbabilitySuper(), 0, 2, true);
            echo("
            <table>
                <tr>
            ");
            echo("<th>Lotto Zahlen:</th>");
            foreach($this->lottoNumbers as $key => $value) {
                $this->lottoNumbers[$key] = $key;
            }
            sort($this->lottoNumbers);
            foreach($this->lottoNumbers as $key => $value) {
                echo ("<td>".$value."</td>");
            }
            echo("
                </tr>
                <tr>
            ");
            echo("<th>Super Zahlen:</th>");
            foreach($this->superNumbers as $key => $value) {
                $this->superNumbers[$key] = $key;
            }
            sort($this->superNumbers);
            foreach($this->superNumbers as $key => $value) {
                echo ("<td>".$value."</td>");
            }
            echo("
                </tr>
            </table>
            ");
        }
    }
?>