<?php
namespace App\Utils;

class UrlUtil {
    public static function home() {
        return "/";
    }
    public static function checkout() {
        return "/checkout";
    }
    public static function codes() {
        return "/codes";
    }
    public static function contact() {
        return "/contact";
    }
    public static function electronic() {
        return "/electronic";
    }
    public static function mens() {
        return "/mens";
    }
    public static function single() {
        return "/single";
    }
    public static function womens() {
        return "/womens";
    }
    public static function athletic() {
        return "/athletic";
    }
    public static function sandals() {
        return "/sandals";
    }
    public static function casual() {
        return "/casual";
    }
    public static function boots() {
        return "/boots";
    }
    public static function dress() {
        return "/dress";
    }
    public static function slippers() {
        return "/slippers";
    }
    public static function wides() {
        return "/wides";
    }
    public function getHome() {return UrlUtil :: home(); }
    public function getCheckOut() {return UrlUtil :: checkout(); }
    public function getCodes() {return UrlUtil :: codes(); }
    public function getContact() {return UrlUtil :: contact(); }
    public function getElectronic() {return UrlUtil :: electronic(); }
    public function getSingle() {return UrlUtil :: single(); }
    public function getWomens() {return UrlUtil :: womens(); }
    public function getMens() {return UrlUtil :: mens(); }
    public function getAthletic() {return UrlUtil :: athletic(); }
    public function getSandals() {return UrlUtil :: sandals(); }
    public function getCasual() {return UrlUtil :: casual(); }
    public function getBoots() {return UrlUtil :: boots(); }
    public function getDress() {return UrlUtil :: dress(); }
    public function getSlippers() {return UrlUtil :: slippers(); }
    public function getWides() {return UrlUtil :: wides(); }

}
