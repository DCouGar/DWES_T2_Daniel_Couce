<?php

namespace clases;

class TriangleGenerator {

    static function generateTriangle(int $altura): string {
        $piramide = '';

        if ($altura < 0) {
            return '';
        }
        
        if ($altura % 2 == 0) {
            $altura++;
        }

        for ($i = 0; $i < $altura; $i++) {
            $piramide .= "<pre>";
            // Vamos a dibujar solo cuando el número de asteriscos es impar
            if ($i % 2 == 0) {
                // Bucle para generar los espacios.
                for ($j = 0; $j < ($altura - $i) / 2; $j++) {
                    $piramide .= "&nbsp;";
                }
                // Bucle para los asteriscos. Cada fila tenemos que escribir i asteriscos
                for ($k = 0; $k <= $i; $k++) {
                    $piramide .= "*";
                }
                
            }
            $piramide .= "</pre>";
        }

        return $piramide;
    }
}

