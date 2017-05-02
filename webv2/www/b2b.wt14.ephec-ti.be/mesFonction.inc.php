<?php
    function creeTableau($liste, $titre='tableau', $index) {
        $keys = array_keys($liste);
        $listeTitre = array_keys($liste[$keys[0]]);

        $table = '<table>';
        $table .= '<caption>'.$titre.'</caption>';
        $table .= '<thead>';
        $table .= '<tr>';
        if($index){
            $table .= '<th>Index</th>';
        }
        for($i=0; $i < count($listeTitre); $i++){
            $table .= '<th>'.ucwords($listeTitre[$i]).'</th>';
        }
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';
        for($i = 0; $i < count($keys); $i++) {
            $table .= '<tr>';
            if ($index) {
                $table .= '<td>' . $keys[$i] . '</td>';
            }
            for ($j = 0; $j < count($listeTitre); $j++){
                $table .= '<td>' . $liste[$keys[$i]][$listeTitre[$j]] . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</tbody>';
        $table .= '</table>';
        return $table;
    }

    function monPrint_r($liste) {
        $myPrint = '<pre>';
        $myPrint .= print_r($liste, true);
        $myPrint .= '</pre>';
        echo $myPrint;
    }

    function getServer() {
        return '193.190.65.94';
    }