<?php
$dir = '.';
$list = str_replace($dir.'/','',(glob($dir.'/*.pkg')));
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Package Manager</title>
<link rel="shortcut icon" href="sys.deadbeef.png?rev=<?=time();?>" type="image/x-icon">
<link href="system.css?rev=<?=time();?>" rel="stylesheet">
<script src="jquery.js?rev=<?=time();?>"></script>
<script src="base.js?rev=<?=time();?>"></script>
</head>
<body>
<div class='top'>
<p align='center'>
<?php include 'getman.php'; ?>
</p>
</div>
<div class='panel'>
<p align='center'>
<table id="table" width="100%">
<thead>
<tr>
<th width="10%">Icon</th>
<th width="25%">
<a href="javascript:SortTable(1,'T');">Name</a></th>
<th width="8%">
<a href="javascript:SortTable(2,'T');">Branch</a></th>
<th width="8%">
<a href="javascript:SortTable(3,'T');">Author</a></th>
<th width="22%">Actions</th>
</tr>
</thead>
<tbody>
<?php
foreach ($list as $key=>$value) {
    $pkgID = basename($value, '.pkg');
    $pkgOpen = file_get_contents($value);
    $pkgDiv1 = explode('|[1]|', $pkgOpen);
    $pkgHead = $pkgDiv1[0];
    $pkgDiv2 = explode('|[2]|', $pkgHead);
    $pkgAuthor = $pkgDiv2[0];
    $pkgBranch = $pkgDiv2[3];
?>
<tr>
<td>
<a href="sys.pkg.png">
<img width="80%" class='actionIcon' src="sys.pkg.png?rev=<?=time();?>">
</a>
</td>
<td>
<?=$pkgID;?>
</td>
<td>
<?=$pkgBranch;?>
</td>
<td>
<?=$pkgAuthor;?>
</td>
<td>
<img class='actionIconButton' width="25%" src="sys.upd.png?rev=<?=time();?>" title="Update" onclick="get('i','','from','<?=$pkgID;?>','<?=$pkgBranch;?>','<?=$pkgAuthor;?>',false);">
<img class='actionIconButton' width="25%" src="sys.rm.png?rev=<?=time();?>" title="Remove" name="<?=$pkgID;?>" onclick="get('d','','<?=$pkgID;?>','from','','here',false);">
</td>
</tr>
<?php } ?>
</tbody>
</table>
</p>
</div>
</body>
</html>
