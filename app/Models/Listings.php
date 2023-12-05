<?php

namespace App\Models;

class Listings
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'title' => 'Listing One',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus asperiores qui a temporibus amet, voluptas voluptatem consectetur. Ipsum, sapiente delectus.'
      ],
      [
        'id' => 2,
        'title' => 'Listing Two',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus?'
      ]
    ];
  }

  public static function find($id)
  {
    $listings = self::all();

    foreach ($listings as $listing) {
      if ($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}
