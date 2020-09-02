<html>
<head>
</head>
<?php
$msg = '';
echo $msg . '<br/>';

$host = 'rank-db-lkbdname';
$user = 'jazz';
$password = 'dlrlqja0085!';
$db = 'rank';
$conn = new mysqli($host, $user, $password, $db);

$dbmsg = '';
if($conn){
	$dbmsg  = 'mysql container connected : ' . $db; 
}else{
	$dbmsg = 'mysql container disconnected';
}
?>
<body style = "text-align:center; font-size:15pt">
<h1>SIMPLE-RANK DAFAULT PAGE</h1>
<br/>
<table style="border:2px solid black; padding: 10px; width:600px; margin:auto">
	
	<tr><td>php server connected : <?php echo phpversion(); ?> </td></tr>
	<tr><td><?php echo $dbmsg ?></td></tr>
</table>
<br/>
<style type="text/css">
.tg  {border-collapse:collapse;border-color:#9ABAD9;border-spacing:0;}
.tg td{background-color:#EBF5FF;border-color:#9ABAD9;border-style:solid;border-width:1px;color:#444;
  , sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{background-color:#409cff;border-color:#9ABAD9;border-style:solid;border-width:1px;color:#fff;
  , sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-c3ow{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg" style="margin:auto; width:600px;">
<tbody>
  <tr>
    <td class="tg-c3ow" colspan="5" style="font-size:15pt; text-align:center"><b>simple-rank-info</b></td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="2">instance name</td>
    <td class="tg-c3ow" colspan="3">lkbdname</td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="3">rank options</td>
    <td class="tg-c3ow">use_key_on_select</td>
    <td class="tg-c3ow" colspan="3">N</td>
  </tr>
  <tr>
    <td class="tg-c3ow">hash_key_expire</td>
    <td class="tg-c3ow" colspan="3">24h</td>
  </tr>
  <tr>
    <td class="tg-c3ow">sorting</td>
    <td class="tg-c3ow" colspan="3">desc</td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="4">monitor options</td>
    <td class="tg-c3ow">log_level</td>
    <td class="tg-c3ow" colspan="3">all</td>
  </tr>
  <tr>
    <td class="tg-c3ow">validate_on_action_submit</td>
    <td class="tg-c3ow" colspan="3">N</td>
  </tr>
</tbody>
</table>
<br/>
<table class="tg" style="margin:auto; width:600px;">
<tbody>
  <tr>
	<td class="tg-c3ow" colspan="1"><b>api</b></td>
	<td class="tg-c3ow" colspan="1"><b>method</b></td>
    <td class="tg-c3ow" colspan="3"><b>return</b></td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="1">players/rank</td>
	<td class="tg-c3ow" colspan="1">get</td>
    <td class="tg-c3ow" colspan="3">rank of players : json</td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="1">players/info?id=</td>
	<td class="tg-c3ow" colspan="1">get</td>
    <td class="tg-c3ow" colspan="3">info of the player : string</td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="1">submit?id=&amp;score=&amp;game_cd=&amp;hash=</td>
	<td class="tg-c3ow" colspan="1">post</td>
    <td class="tg-c3ow" colspan="3">submit status : string</td>
  </tr>
</tbody>
</table>
</body>


</html>
