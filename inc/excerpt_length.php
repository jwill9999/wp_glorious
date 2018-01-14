 <!-- 
      ******************************************* 
      ********* CUSTOMISE EXCERPT LENGTH ********
      *******************************************       
    -->

    <?php
    function set_excerpt_length()
    {
        return 45;
    }
    
    add_filter('excerpt_length', 'set_excerpt_length');