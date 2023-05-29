<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                "id" => 1,
                "title" => "Listing one",
                "description" => "description of listing one"
            ],
            [
                "id" => 2,
                "title" => "Listing two",
                "description" => "description of listing two"
            ],
            [
                "id" => 3,
                "title" => "Listing three",
                "description" => "description of listing three"
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if ($listing["id"] == $id) {
                return $listing;
            }
        }
    }
}
