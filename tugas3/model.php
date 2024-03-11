<?php

function kenaikan($nilai_tugas)
{
    if($nilai_tugas > 55)
    {
        return 'LULUS';
    } 
    elseif($nilai_tugas < 56)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function grade($nilai_tugas)
{
    if ($nilai_tugas <= 35) {
        return 'E';
    } elseif($nilai_tugas <= 55) {
        return 'D';
    } elseif($nilai_tugas <= 69) {
        return 'C';
    } elseif($nilai_tugas <= 84) {
        return 'B';
    } elseif($nilai_tugas <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
}




?>