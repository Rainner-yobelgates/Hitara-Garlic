<?php

use App\Store;
use App\OurContact;

function store(){
    return Store::first();
}
function ourContact(){
    return OurContact::first();
}