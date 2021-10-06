<?php
require_once('../model/adminModel.php');

session_start();
$id = $_SESSION['id'];
$user=[
  'id'=>$id,
];
$adminifo = getAdminIfo($user);
$i=0;

$response ="<table class='table table-hover'>
            <tr>
                <th>Name</th>
                <td>{$adminifo[$i]['name']}</td>
            </tr>
            <tr>
                <th>Blood Group</th>
                <td>{$adminifo[$i]['bloodgrp']}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{$adminifo[$i]['phoneNum']},{$adminifo[$i]['phoneNum2']}</td>
            </tr>";

            if($adminifo[$i]['village']!="" && $adminifo[$i]['union_pl']!="" && $adminifo[$i]['thana']!="" && $adminifo[$i]['district']!=""){
                            
                $response .= "<tr>
                                <th>Address</th>
                                <td>{$adminifo[$i]['village']},
                                {$adminifo[$i]['union_pl']},
                                {$adminifo[$i]['thana']},
                                {$adminifo[$i]['district']}
                                </td>
                             </tr>";
            }
            else if($adminifo[$i]['village']=="" && $adminifo[$i]['union_pl']!="" && $adminifo[$i]['thana']!="" && $adminifo[$i]['district']!=""){
                            
                $response .= "<tr>
                                <th>Address</th>
                                <td>
                                {$adminifo[$i]['union_pl']},
                                {$adminifo[$i]['thana']},
                                {$adminifo[$i]['district']}
                                </td>
                             </tr>";
            }
            else if($adminifo[$i]['village']=="" && $adminifo[$i]['union_pl']=="" && $adminifo[$i]['thana']!="" && $adminifo[$i]['district']!=""){
                            
                $response .= "<tr>
                                <th>Address</th>
                                <td>
                                {$adminifo[$i]['thana']},
                                {$adminifo[$i]['district']}
                                </td>
                             </tr>";
            }


            $response .="</table>";
echo $response;

?>