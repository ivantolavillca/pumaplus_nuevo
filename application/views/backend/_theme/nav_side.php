<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php
$conter = 0;
foreach (Hasher::getMenu() as $mKey => $mVal) {
    $conter++;
    if (gettype($mVal) == "string") {

        if (isset($mMenu)) {
            if ($mKey == $mMenu) {
              //  echo "<li class='active'>";
            } else {
               // echo "<li>";
            }
        } else {
          //  echo "<li>";
        }
    
    } elseif (gettype($mVal) == "array") {

        if (isset($mMenu)) {
            if ($mSubMenu == $mKey) {
                //echo "<li >";
            } else {
              
                //echo "<li class='xn-openable'>";
            }
        } else {
             //  echo "<li class='nav-item'>";
            
        }

    
  
       


    //     echo' <li>
    //     <a href="'. $mKey .'"><i class="fa '. Mapping::iconn()[$conter].'"></i>
    //     <span> ' . $mKey . ' </span><i class="accordion-icon fa fa-angle-left"></i></a>
    //     <ul class="sub-menu">
          
           
    //   ';


    echo '
    <li class="nav-item">
    <a href="#" class="nav-link nav-toggle">
        <i class="material-icons">'. Mapping::iconn()[$conter].'</i>
        <span class="title"> ' . $mKey . ' </span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        
    
    ';

        // echo'<span>UI Kits</span><i class="accordion-icon fa fa-angle-left"></i></a>';
        // echo'<ul class="sub-menu">';
        foreach ($mVal as $smKey => $smVal) {
            if (isset($mMenu) && isset($mSubMenu)) {
                if ($mKey == $mSubMenu && $smKey == $mMenu) {
                   // echo "<li >";
                  
                } else {
                   // echo "<li>";
                }
            } else {
                //echo "<li>";
                //  echo ' <li class="nav-item ">';
            }
           echo '
           <li class="nav-item">
            <a href="'.site_url($smVal).'" class="nav-link ">
                <span class="title">'. $smKey . '</span>
            </a>
        </li>
           '; 
       
        // echo'<li><a href="'.site_url($smVal).'"> '. $smKey . '</a></li>
        // ';
        }

         echo'  </ul>
         </li>';
   

    }
}
?>
 



