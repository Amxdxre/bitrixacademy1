<?
function dump($var, $die = false, $all = false)
{
    global $USER;
    if( $USER->IsAdmin() || $all){
      ?>
        <iont style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></iont><br>
        <?
    }
    if($die)
    {
        die;
    }
}
?>
