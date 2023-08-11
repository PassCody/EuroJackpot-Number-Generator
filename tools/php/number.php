<?php
    CLASS Number{
        PRIVATE $lottonumbers = Array(), $lottospecial = Array(); 
        FUNCTION numberMain($variables, $pc) {
            for ($i = 0; $i != 5; $i++) {
                $this->setLottoNumbersI($i);
            }
            for ($i = 0; $i != 2; $i++) {
                $this->setLottoSpecialI($i);
            }
            include_once("./tools/php/sorter.php");
            $sort = new Sorter();
            $this->setLottoNumbersII($sort->sorter($this->getLottoNumbers(), $this));
            $this->setLottoSpecialII($sort->sorter($this->getLottoSpecial(), $this));
            unset($sort);
            $pc->probabilityCalculator_init($this->getLottoNumbers(), $variables);
            $pc->probabilityCalculator_init($this->getLottoSpecial(), $variables);
        }

        FUNCTION setLottoNumbersI($Index) {
            $this->lottonumbers[$Index] = rand(1, 50);
        }

        FUNCTION setLottoNumbersII($myArray) {
            $this->lottonumbers = $myArray;
        }

        FUNCTION getLottoNumbers() {
            return $this->lottonumbers;
        }

        FUNCTION setLottoSpecialI($Index) {
            $this->lottospecial[$Index] = rand(1, 12);
        }

        FUNCTION setLottoSpecialII($myArray) {
            $this->lottospecial = $myArray;
        }

        FUNCTION getLottoSpecial() {
            return $this->lottospecial;
        }

    }
?>