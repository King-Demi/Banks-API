<?php

namespace Weave\Controllers;
use Lacebox\Sole\Cobble\QueryBuilder;

class BanksDBController
{
public function banksDB()
    {
    

    $rows = QueryBuilder::table('banks') ->get();


        while($row = $rows->fetch_assoc()) {
            $result_array[] = [
                "id" => $row["id"],
                "name" => $row["name"],
                "code" => $row["sort_code"],
                "address" => $row["address"],
                "NIP_code" => $row["NIP_code"]
            ];
    }

}

}