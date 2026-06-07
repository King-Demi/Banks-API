<?php

namespace Weave\Controllers;

use Lacebox\Sole\Cobble\QueryBuilder;



class BanksPostController
{
public function banksPost()

    {
        $name = $_POST['name'];
        $sort_code = $_POST['sort_code'];
        $address = $_POST['address'];
        $NIP_code = $_POST['NIP_code'];



       $newId = QueryBuilder::table('banks')
    ->insertGetId([
        
        'name'    => $name,
        'sort_code' => $sort_code ,
        'address' => $address ,
        'NIP_code' => $NIP_code
    ]);



}






}
    