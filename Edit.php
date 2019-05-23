<?php
session_start();
require_once 'YouNews.php';
$wiersze = $_SESSION['wierszeUsera'];

foreach ($wiersze as $wiersz){
    echo "<div class=\"list-group mt-5\" id='$wiersz[0]'>
                      <div  class=\"list-group-item list-group-item-action flex-column align-items-start\">                    
                          <div class=\"d-flex w-100 justify-content-between\">
                              <h5 class=\"mb-1\">$wiersz[1]</h5>                            
                              <small class=\"text-muted\">$wiersz[5]</small>                                                          
                          </div>                         
                          <p class=\"mb-1\">$wiersz[2]</p>                   
                          <small class=\"text-muted alert-success\">$wiersz[3]</small>                             
                          <span onclick='Delet($wiersz[0])'  class='text-right click icon-trash'>Usuń</span>     
                          <a href='Edytuj?n=$wiersz[0]'  class='text-right click-edit click icon-pencil'>Edytuj</a>                
                      </div>                  
                   </div>";
        }
?>

