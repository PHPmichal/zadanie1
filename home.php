<?php
 session_start();
 require_once 'DownloadNews.php';
$wiersze = $_SESSION['wiersze'];
foreach ($wiersze as $wiersz){
    echo "<div class=\"list-group mt-5\">
                      <a href=Details?n=$wiersz[0] class=\"list-group-item list-group-item-action flex-column align-items-start\">
                          <div class=\"d-flex w-100 justify-content-between\">
                              <h5 class=\"mb-1\">$wiersz[1]</h5>
                              <small class=\"text-muted\">$wiersz[5]</small>
                          </div>
                          <p class=\"mb-1\">$wiersz[2]</p>
                          <small class=\"text-muted alert-success\">$wiersz[3]</small>
                      </a>
                   </div>";}
?>