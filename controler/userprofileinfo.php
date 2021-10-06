<?php
require_once('../model/userModel.php');

session_start();
$id = $_SESSION['id'];
$user=[
  'id'=>$id,
];
$userifo = getUserInfo($user);
$i=0;

$response ="<table class='table table-hover'>
            <tr>
                <th>Name</th>
                <td>{$userifo[$i]['name']}</td>
            </tr>
            <tr>
                <th>Blood Group</th>
                <td>{$userifo[$i]['bloodgrp']}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{$userifo[$i]['phoneNum']},{$userifo[$i]['phoneNum2']}</td>
            </tr>";

            if($userifo[$i]['village']!="" && $userifo[$i]['union_pl']!="" && $userifo[$i]['thana']!="" && $userifo[$i]['district']!=""){
                            
                $response .= "<tr>
                                <th>Address</th>
                                <td>{$userifo[$i]['village']},
                                {$userifo[$i]['union_pl']},
                                {$userifo[$i]['thana']},
                                {$userifo[$i]['district']}
                                </td>
                             </tr>";
            }
            else if($userifo[$i]['village']=="" && $userifo[$i]['union_pl']!="" && $userifo[$i]['thana']!="" && $userifo[$i]['district']!=""){
                            
                $response .= "<tr>
                                <th>Address</th>
                                <td>
                                {$userifo[$i]['union_pl']},
                                {$userifo[$i]['thana']},
                                {$userifo[$i]['district']}
                                </td>
                             </tr>";
            }
            else if($userifo[$i]['village']=="" && $userifo[$i]['union_pl']=="" && $userifo[$i]['thana']!="" && $userifo[$i]['district']!=""){
                            
                $response .= "<tr>
                                <th>Address</th>
                                <td>
                                {$userifo[$i]['thana']},
                                {$userifo[$i]['district']}
                                </td>
                             </tr>";
            }


            $response .="</table>";
echo $response;

?>