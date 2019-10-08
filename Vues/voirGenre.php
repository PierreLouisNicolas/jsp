<?php
require 'Vues/menu.php';
$lesGenres = $_SESSION['lesGenres'];
$m = 0;
$limite = 3;
echo "<div class='container h-100'>
    <div class='row h-100 justify-content-center align-items-center'>
        <table class='table w-50'>

";

  foreach($lesGenres as $lesG)
  {
    if($m == 0)
    {
      echo "<TR>";
    }
    echo "
          <td class='td-table justify-content-center text-white'><a href='papuche'>".$lesG['libelleGenre']."<br><img style='display:block;' width='100%' src='Images/".$lesG['image']."'></a></td>
        ";
    $m += 1;
    if($m == $limite)
    {
      echo "</TR>";
      $m = 0;
    }
  }

echo    "</table>
</div>
</div>";

?>
