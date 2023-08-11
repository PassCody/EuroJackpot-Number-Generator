<?php
    CLASS Sorter {
        PRIVATE $helper, $jumper, $jumperII;
        FUNCTION sorter($array, $super) {
            return $this->functionChoicer($array, $super);
        }

        FUNCTION functionChoicer($array, $super) {
            $arraySize = count($array);
            switch($arraySize) {
                case 2:
                    return $this->sortSpecialnumbers($array, $super);
                case 5:
                    return $this->sortLotterynumber($array, $super);
            }
        }

        FUNCTION sortSpecialnumbers($array, $super) {
            $newArray = $array;
            for ($i = 1; $i != 0; $i++) {
                for ($specialnumbersII = 0; $specialnumbersII != 1; $specialnumbersII++) {
                    if ($newArray[0] == $newArray[1]) {
                        $newArray[1] = rand(1, 12);
                        if ($newArray[0] > $newArray[1]) {
                            $this->jumperII = $newArray[1];
                            $newArray[1] = $newArray[0];
                            $newArray[0] = $this->jumperII;
                        }
                    } else {
                        if ($newArray[0] > $newArray[1]) {
                            $this->jumperII = $newArray[1];
                            $newArray[1] = $newArray[0];
                            $newArray[0] = $this->jumperII;
                        } else {
                            break;
                        }
                    }
                }
                if ($newArray[0] != $newArray[1]) {
                    break;
                }
            }
            return $newArray;
        }

        FUNCTION sortLotterynumber($array, $super) {
            $newArray = $array;
            for ($i = 0; $i != 5; $i++) {
                for ($lotteryII = 0; $lotteryII != 4; $lotteryII++) {
                    $this->helper = $lotteryII + 1;
                    if ($newArray[$lotteryII] == $newArray[$this->helper]) {
                        $newArray[$this->helper] = rand(1,50);
                    } else {
                        if ($newArray[$lotteryII] > $newArray[$this->helper]) {
                            $this->jumper = $newArray[$this->helper];
                            $newArray[$this->helper] = $newArray[$lotteryII];
                            $newArray[$lotteryII] = $this->jumper;
                        }
                    }
                }
            }
            return $newArray;
        }
    }
?>