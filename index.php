<?php

$movieTitle = "Indiana Jones et la dernière Croisades";
$releaseDate = 1989;
$alreadySeen = true;
$imbdSiteQuote = "8.3 / 10";

echo "The movie '$movieTitle'", " was relased in ", $releaseDate, " and obtain a ", $imbdSiteQuote, " on the IMDb site.";

 //to log something more nice than "1" if boolean is true : prompt function

 function alreadyWatched($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}

//program

$prompt_msg = "Your comment ?";
$answer = alreadyWatched($prompt_msg);

$output_msg = $answer;
echo " Comment : ", $output_msg;

?>