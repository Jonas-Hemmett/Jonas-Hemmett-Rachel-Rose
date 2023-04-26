<nav>   
        <a class="<?php 
        if ($pathParts['filename'] == "index"){
            print 'activePage';
        }  
        ?> " href=index.php>Home</a>


        <a class="<?php 
        if ($pathParts['filename'] == "detail"){
            print 'activePage';
        }  
        ?> " href=detail.php>2</a>

        <a class="<?php 
        if ($pathParts['filename'] == "array"){
            print 'activePage';
        }  
        ?> " href=array.php>3</a>

        <a class="<?php 
        if ($pathParts['filename'] == "form"){
            print 'activePage';
        }  
        ?> " href=form.php>Form</a>
</nav>  