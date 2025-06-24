<?php

function getListings(): array
{
   return [
   
   ["title" => "Rocket League PS4", "price" => 20, "image" => "rocket-league.jpg", "discription" => "Test description"],
   ["title" => "Test2", "price" => 90, "image" => "rocket-league.jpg", "discription" => "Test description"],
   ["title" => "Test3", "price" => 80, "image" => "rocket-league.jpg", "discription" => "Test description"],

   ];
}

function getListingById(int $id): array 
{
$listings = getListings();
return $listings[$id];
}