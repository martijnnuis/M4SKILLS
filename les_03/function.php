<?php
    function nummers(int $nummertje): void{
        $ArrayName = array();
        for($i = 0; $i<= $nummertje; $i++){
            $ArrayName[] = $i;
        }
        print_r($ArrayName);
    }

    function woorden(array $arr): void{
        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i];
        }
    }

    function cijfers(int $nummertje = 100): void{
        $ArrayName = array();
        for($i = 0; $i<= $nummertje; $i++){
            $ArrayName[] = $i;
        }
        print_r($ArrayName);
    }
