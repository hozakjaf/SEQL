<!-- main html file for SID (php version) -->
<?php echo $SID["MESSAGES"] ?><?php echo $SID["ERRORS"] ?>
<main>
<div class="form">
<form action="<?php echo $SID["SELF"] ?>" method="post" target="_self">
<table class="title_area"><tr>
<td align="right">
<select name="select_database">
<?php echo $SID["DATABASE_SELECT_LIST"] ?>
</select>
</td>
</tr></table>
    <p class="SQLfield"><textarea class="SQLfield lined" name="SQLfield"><?php echo $SID["SQLfield"] ?></textarea></p>
    <input class="btn" type="submit" value=" Go ">
    <input type="hidden" name="a" value="go">
</form>
</div>
</main>

<?php echo $SID["CONTENT"] ?>
