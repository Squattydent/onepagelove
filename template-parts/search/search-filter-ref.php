<?php
/**
 * @package onepagelove
 * @version 6.11.25
 *
*/ 
?>

<form action="" method="post" class="searchandfilter">
    <div>

        <ul>

            <li>
                <input type="text" name="ofsearch" placeholder="Search &hellip;" value="and">
            </li>

            <li>

                <ul>
                    <li>
                        <label><input type='radio' name='ofcategory[]' value='0' checked='checked' /> All Posts</label>
                    </li>  
                    <li class="cat-item cat-item-389">
                        <label><input type='radio' name='ofcategory[]' value='389' /> Blog</label>
                    </li>
                    <li class="cat-item cat-item-1569">
                        <label><input type='radio' name='ofcategory[]' value='1569' />Gallery</label>
                    </li>
                    <li class="cat-item cat-item-32">
                        <label><input type='radio' name='ofcategory[]' value='32' /> Templates</label>
                    </li>
                </ul>

                <input type="hidden" name="ofcategory_operator" value="and" />

            </li>

            <li>
                <input type="hidden" name="ofsubmitted" value="1">     
                    <input type="submit" value="Filter Results">
                        
            </li>

        </ul>

    </div>
</form>                 
