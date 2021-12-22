        <?php
 // 1                
  $text = $_POST["text"];
  $base_array = ["0", "1","2", "3", "4", "5", "6", "7", "8", "9"];
  $text_array = str_split($text);
 
         $summa = 0;
         $dlina = count($text_array);
         $flag = 0;
         
      for($i = 0; $i < $dlina ; $i++){
           if( in_array($text_array[$i]  , $base_array))
              { $flag++;}
          }     
      
       if($flag==$dlina) {
           for($i = 0; $i < $dlina; $i++){
              $summa+= $text_array[$i] ;
             }
                echo $summa;
       }    
        else
               {echo "oops";}      
         
    
   
        
        
        
        
        
 