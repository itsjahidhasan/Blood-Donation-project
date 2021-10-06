<?php
require_once('../model/userModel.php');
require_once('../model/adminModel.php');

$district = $_POST["district"];
$bloodgrp = $_POST["bloodgrp"];
$thana = $_POST["thana"];
$union = $_POST["union"];
$village = $_POST["village"];
$user=[
  'district'=>$district, 
  'bloodgrp'=> $bloodgrp,
  'thana'=> $thana,
  'union'=> $union,
  'village'=> $village,
];

$response = "";
$j=0;

$flag_userDonner = getDonnerFlag($bloodgrp);
if($flag_userDonner){
              $donnerList = getAllDonner($user);
              $donnerList1 = getAllDonnerDT($user);
              $donnerList2 = getAllDonnerD($user);
              $donnerList3 = getAllDonnerB($user);
              $response .='<table class="table table-hover">
                      <tr>
                          <th align="center">No.</th>
                          <th align="center">Name</th>
                          <th align="center">Blood Group</th>
                          <th align="center">Phone Number</th>
                          <th align="center">Address</th>
                          
                      </tr>';
                     
                      /////////1
                      for($i=0; $i < count($donnerList); $i++) {
                          $j=$i+1;
                        $response .= "<tr>
                                    <td>$j</td>
                                    <td>{$donnerList[$i]['name']}</td>
                                    <td>{$donnerList[$i]['bloodgrp']}</td>
                                    <td>{$donnerList[$i]['phoneNum']},{$donnerList[$i]['phoneNum2']}</td>
                                    ";
                        if($donnerList[$i]['village']!="" && $donnerList[$i]['union_pl']!="" && $donnerList[$i]['thana']!="" && $donnerList[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList[$i]['village']},
                                          {$donnerList[$i]['union_pl']},
                                          {$donnerList[$i]['thana']},
                                          {$donnerList[$i]['district']}
                                        </td>
                                    </tr>";
                        }  
                        else if($donnerList[$i]['village']=="" && $donnerList[$i]['union_pl']!="" && $donnerList[$i]['thana']!="" && $donnerList[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList[$i]['union_pl']},
                                          {$donnerList[$i]['thana']},
                                          {$donnerList[$i]['district']}
                                        </td>
                                    </tr>";
                        } 
                        else if($donnerList[$i]['village']=="" && $donnerList[$i]['union_pl']=="" && $donnerList[$i]['thana']!="" && $donnerList[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList[$i]['thana']},
                                          {$donnerList[$i]['district']}
                                        </td>
                                    </tr>";
                        } 
                               
                      }
                      /////////2
                      if(getDonnerFlagAll($user)!="true"){
                        for($i=0; $i < count($donnerList1); $i++) {
                          $j=$j+1;
                        $response .= "<tr>
                                    <td>$j</td>
                                    <td>{$donnerList1[$i]['name']}</td>
                                    <td>{$donnerList1[$i]['bloodgrp']}</td>
                                    <td>{$donnerList1[$i]['phoneNum']},{$donnerList1[$i]['phoneNum2']}</td>
                                    ";
                        if($donnerList1[$i]['village']!="" && $donnerList1[$i]['union_pl']!="" && $donnerList1[$i]['thana']!="" && $donnerList1[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList1[$i]['village']},
                                          {$donnerList1[$i]['union_pl']},
                                          {$donnerList1[$i]['thana']},
                                          {$donnerList1[$i]['district']}
                                        </td>
                                    </tr>";
                        }  
                        else if($donnerList1[$i]['village']=="" && $donnerList1[$i]['union_pl']!="" && $donnerList1[$i]['thana']!="" && $donnerList1[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList1[$i]['union_pl']},
                                          {$donnerList1[$i]['thana']},
                                          {$donnerList1[$i]['district']}
                                        </td>
                                    </tr>";
                        } 
                        else if($donnerList1[$i]['village']=="" && $donnerList1[$i]['union_pl']=="" && $donnerList1[$i]['thana']!="" && $donnerList1[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList1[$i]['thana']},
                                          {$donnerList1[$i]['district']}
                                        </td>
                                    </tr>";
                        } 
                               
                      }

                      }
                      
                      ////////3
                      if(getDonnerFlagAll($user)!="true" && getDonnerFlagDT($user)!="true"){
                        for($i=0; $i < count($donnerList2); $i++) {
                          $j=$j+1;
                        $response .= "<tr>
                                    <td>$j</td>
                                    <td>{$donnerList2[$i]['name']}</td>
                                    <td>{$donnerList2[$i]['bloodgrp']}</td>
                                    <td>{$donnerList2[$i]['phoneNum']},{$donnerList2[$i]['phoneNum2']}</td>
                                    ";
                        if($donnerList2[$i]['village']!="" && $donnerList2[$i]['union_pl']!="" && $donnerList2[$i]['thana']!="" && $donnerList2[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList2[$i]['village']},
                                          {$donnerList2[$i]['union_pl']},
                                          {$donnerList2[$i]['thana']},
                                          {$donnerList2[$i]['district']}
                                        </td>
                                    </tr>";
                        }  
                        else if($donnerList2[$i]['village']=="" && $donnerList2[$i]['union_pl']!="" && $donnerList2[$i]['thana']!="" && $donnerList2[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList2[$i]['union_pl']},
                                          {$donnerList2[$i]['thana']},
                                          {$donnerList2[$i]['district']}
                                        </td>
                                    </tr>";
                        } 
                        else if($donnerList2[$i]['village']=="" && $donnerList2[$i]['union_pl']=="" && $donnerList2[$i]['thana']!="" && $donnerList2[$i]['district']!=""){
                            
                            $response .= "<td>{$donnerList2[$i]['thana']},
                                          {$donnerList2[$i]['district']}
                                        </td>
                                    </tr>";
                        } 
                              
                      }
                  }
                  ////////////4
                  if(getDonnerFlagAll($user)!="true" && getDonnerFlagDT($user)!="true" && getDonnerFlagD($user)!="true"){
                      for($i=0; $i < count($donnerList3); $i++) {
                        $j=$j+1;
                      $response .= "<tr>
                                  <td>$j</td>
                                  <td>{$donnerList3[$i]['name']}</td>
                                  <td>{$donnerList3[$i]['bloodgrp']}</td>
                                  <td>{$donnerList3[$i]['phoneNum']},{$donnerList3[$i]['phoneNum2']}</td>
                                  ";
                      if($donnerList3[$i]['village']!="" && $donnerList3[$i]['union_pl']!="" && $donnerList3[$i]['thana']!="" && $donnerList3[$i]['district']!=""){
                          
                          $response .= "<td>{$donnerList3[$i]['village']},
                                        {$donnerList3[$i]['union_pl']},
                                        {$donnerList3[$i]['thana']},
                                        {$donnerList3[$i]['district']}
                                      </td>
                                  </tr>";
                      }  
                      else if($donnerList3[$i]['village']=="" && $donnerList3[$i]['union_pl']!="" && $donnerList3[$i]['thana']!="" && $donnerList3[$i]['district']!=""){
                          
                          $response .= "<td>{$donnerList3[$i]['union_pl']},
                                        {$donnerList3[$i]['thana']},
                                        {$donnerList3[$i]['district']}
                                      </td>
                                  </tr>";
                      } 
                      else if($donnerList3[$i]['village']=="" && $donnerList3[$i]['union_pl']=="" && $donnerList3[$i]['thana']!="" && $donnerList3[$i]['district']!=""){
                          
                          $response .= "<td>{$donnerList3[$i]['thana']},
                                        {$donnerList3[$i]['district']}
                                      </td>
                                  </tr>";
                      } 
                            
                    }
                  }  
              $response .='</table>';
        }
else{
  $response ="<h1>No data found</h1>";
}

sleep(2);
echo $response;

?>