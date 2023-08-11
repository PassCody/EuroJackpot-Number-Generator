<?php
    
    CLASS ProbabilityCalculator {
        FUNCTION probabilityCalculator_init ($array, $variables) {
            
            $switch = count($array);
            switch($switch) {
                case 2:
                    for ($i = 0; $i != $switch; $i++) {
                        $this->probabilityCalculator_super($array[$i], $variables);
                    }
                break;
                case 5:
                    for ($i = 0; $i != $switch; $i++) {
                        $this->probabilityCalculator_lotto($array[$i], $variables);
                    }
                break;
            }
        }

        FUNCTION probabilityCalculator_lotto ($number, $variables) {
            $variables->setProbabilityLotto($number);
        }

        FUNCTION probabilityCalculator_super ($number, $variables) {
            $variables->setProbabilitySuper($number);
        }

        FUNCTION getProbabilityCalculator_lotto($variables) {
            return $variables->getProbabilityLotto();
        }
        FUNCTION getProbabilityCalculator_super($variables) {
            return $variables->getProbabilitySuper();
        }
    }
?>