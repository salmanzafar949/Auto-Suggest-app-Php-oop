<?php
/**
 * Created by Salman Zafar.
 * User: sam
 * Date: 11/21/17
 * Time: 9:49 AM
 */

include "db.php";
include "scripts.php";
?>

<div class="container">
    <span>
        <form class="form form-horizontal" name="s_form" id="s_form">
            <label>Enter a name to search:</label> &nbsp;
            <input name="search" id="search" class="form form-group" required onkeydown="findmatch();">
        </form>
        <div id="results">
        </div>
    </span>
</div>
