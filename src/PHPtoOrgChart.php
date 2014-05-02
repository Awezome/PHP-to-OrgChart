<?php
    function PHPtoOrgChart(array $arr,$title='') {
        echo '<table>';
        $size=count($arr);
        if($title!='') {
            //head

            echo '<tr>';
            echo '<td colspan="'.($size*2).'">';
            echo '<div class="charttext">'.$title.'</div>';
            echo '</td>';
            echo '</tr>';
            //head line


            echo '<tr>';
            echo '<td colspan="'.($size*2).'">';
            echo '<table><tr><th class="right width-50"></th><th class="width-50"></th></tr></table>';
            echo '</td>';
            echo '</tr>';

            //line
            if($size>=2){

            $tdWidth=((100)/($size*2));

            echo '<tr>';
            echo '<th class="right" width="'.$tdWidth.'%"></th>';
                echo '<th class="top" width="'.$tdWidth.'%"></th>';
                for($j=1; $j<$size-1; $j++) {
                    echo '<th class="right top" width="'.$tdWidth.'%"></th>';
                    echo '<th class=" top" width="'.$tdWidth.'%"></th>';
                }
                echo '<th class="right top" width="'.$tdWidth.'%"></th>';
            echo '<th width="'.$tdWidth.'%"></th>';
            echo '</tr>';
            }
        }
        //
        echo '<tr>';
        foreach($arr as $key=>$value) {
            echo '<td colspan="2">';
            if(is_array($value)) {
                PHPtoOrgChart($value,$key);
            } else {
                echo '<div class="charttext">'.$value.'</div>';
            }
            echo '</td>';
        }
        echo '</tr>';
        //
        echo '</table>';
    }
