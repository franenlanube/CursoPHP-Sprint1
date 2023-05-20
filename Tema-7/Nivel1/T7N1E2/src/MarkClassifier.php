<?php
Class MarkClassifier
{
    function classifier($mark)
    {
        if (is_numeric($mark)) {            
            if ($mark >= 0 && $mark <= 100) {
                if ($mark >= 60) {
                    return 'Primera Divisió';
                } elseif ($mark >= 45) {
                    return 'Segona Divisió';
                } elseif ($mark >= 33) {
                    return 'Tercera Divisió';
                } else {
                    return 'Suspenet';
                }
            } else {
                return 'Nota fora de rang';
            }
        } else {
            return 'Entrada invàlida';
        }
    }
}
/* $mark = 'Hi!';
echo classifier($mark)
 */?>