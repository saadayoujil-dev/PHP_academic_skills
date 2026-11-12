<?php
    declare(strict_types = 0) ;

    // Building functions
    function additionner(float &$a = 5, float &$b = 5) : float {
        return $a + $b ;
    }

    function soustraire(float &$a = 5, float &$b = 5) : float {
        return $a - $b ;
    }

    function multiplier(float &$a = 5, float &$b = 5) : float {
        return $a * $b ;
    }

    function diviser(float &$a = 5, float &$b = 5) : float {
        if($b == 0)
            throw new InvalidArgumentException("Cannot divide by Zero !!") ;
        return $a / $b ;
    }

    function estPair(int $n): bool{
        if ($n % 2 == 0) return true ;
        else return false ;
    }

    function estPositif(int $n):bool{
        if ($n >= 0) return true ;
        else return false ;
    }

    function maximum(float $a, float $b, float $c):float{
        if($a > $b || $a > $c) return $a ;
        elseif($b > $a || $b > $c) return $b ;
        else return $c ;
    }

        function maximum2(float $a, float $b, float $c = 5):float{
            return max($a, $b, $c) ;
    }

    function estPremier(int $n): bool{
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0) return false ;
            }
        return true ;
    }

    function calculerTTC(float $ht, float $TVA = 20.0): float{
        return $ht * (1 + $TVA / 100) ;
    }

    function calculerRemise(float $prix, float $pourcentage): float{
        return round($prix + ($prix * $pourcentage)) ;
    }

    function calculerFacture(float $prixUnitaire, int $quantite, float $remise = 0, float $TVA = 20.0): float{
        return ($prixUnitaire * $quantite * CalculerTTC($TVA) * calculerRemise($prixUnitaire, $remise)) ; 
    }


    function moyenne(float ...$notes): float{
        if(count($notes)==0) return 0 ;
        $some = 0 ;
        for ($i=0; $i < count($notes); $i++){
            $some += $notes[$i] ;
        }
        $moy = $some / count($notes) ;
        return $moy ;
    }

    function aireCercle(float $rayon): float{
        $air = round(M_PI, 2) * pow($rayon, 2) ;
        return $air ;
    }

    function perimetreCercle(float $rayon): float{
        $per = round(M_PI, 2) * $rayon * 2 ;
        return $per ;
    }
    function celsiusVersFahrenheit(float $c): float{
        $f = $c * 9/5 + 32 ;
        return $f ;
    }

    function convertirDevise(float $montant, float $taux): float{
        return $montant * $taux ;
    }

    function factorielle(int $n): float{
        $f = 1 ;
        if($n < 0){
            throw new InvalidArgumentException("La factorielle d'un nombre négatif n'existe pas");
        }
        for($i=1; $i<=$n; $i++){
            $f *= $i ;
        }
        return $f ;
    }

    function fibonacci($n): array{
        $a = 0;
        $b = 1;
        $next = 0;
        $res = [];
        if ($n < 0) {
            throw new InvalidArgumentException("n doit être positif");
        }
        for($i=0; $i<$n; $i++){
            $res[] = $a ;
            $next = $a + $b ;
            $a = $b ;
            $b = $next ;
        }
        echo "Suite de ".$n." est : " ;
        return $res;
    }

    function pgcd(int $a, int $b): int{
        while($b != 0){
            $reste = $a % $b ;
            $a = $b ;
            $b = $reste ;
        }
        return $a ;
    }

    function puissance(float $x, int $n): float{
        $pow = 1 ;
        for($i=0; $i <= $n; $i++){
            $pow *= $x;
        }
        return $pow ;
    }
    /* function puissanceRecurcive(float $x, int $n): float{
    //     $n -= 1 ;
    //     if($n == 0){
    //         return 1 ;
    //     }
    //     return $x * puissanceRecurcive($x, $n-1);
    }*/