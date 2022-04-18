<?php
$dir = '.';
include 'syspkg.php';
$obj =
[
    'airplane' => 'notify',
    'app' => 'notify',
    'apps' => 'notify',
    'aud' => 'notify',
    'back' => 'notify',
    'bash' => 'notify',
    'book' => 'notify',
    'calc' => 'notify',
    'chess' => 'notify',
    'cl' => 'notify',
    'clock' => 'question',
    'console' => 'question',
    'cp' => 'question',
    'deadbeef' => 'question',
    'dir' => 'question',
    'down' => 'question',
    'downvote' => 'question',
    'edit' => 'question',
    'error' => 'question',
    'eval' => 'question',
    'exe' => 'information',
    'exit' => 'information',
    'files' => 'information',
    'fon' => 'information',
    'foot' => 'information',
    'help' => 'information',
    'home' => 'information',
    'img' => 'information',
    'info' => 'information',
    'language' => 'information',
    'launch' => 'default',
    'left' => 'default',
    'link' => 'default',
    'manage' => 'default',
    'md' => 'default',
    'mid' => 'default',
    'mv' => 'default',
    'openspace' => 'default',
    'pkg' => 'default',
    'preview' => 'default',
    'rd' => 'bootup',
    'register' => 'bootup',
    'right' => 'bootup',
    'rm' => 'bootup',
    'settings' => 'bootup',
    'setup' => 'bootup',
    'start' => 'bootup',
    'state' => 'bootup',
    'stats' => 'bootup',
    'txt' => 'bootup',
    'up' => 'shutdown',
    'upd' => 'shutdown',
    'upvote' => 'shutdown',
    'usr' => 'shutdown',
    'vid' => 'shutdown',
    'wr' => 'shutdown',
];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>System Model</title>
<link rel="shortcut icon" href="sys.settings.png?rev=<?=time();?>" type="image/x-icon">
<link href="system.css?rev=<?=time();?>" rel="stylesheet">
<script src="jquery.js?rev=<?=time();?>"></script>
<script src="base.js?rev=<?=time();?>"></script>
<script src="file.js?rev=<?=time();?>"></script>
</head>
<body>
<?php foreach ($obj as $key=>$value) { ?>
<img style="width:9%;" title="<?=ucfirst($key);?>" onmouseover="playAudio(soundPlayer, '<?=$value.'.flac';?>?rev=<?=time();?>');" src="<?='sys.'.$key.'.png';?>?rev=<?=time();?>">
<?php } ?>
<audio id="soundPlayer" <?php if (!$sounds) { ?>muted="muted"<?php } ?>>
</body>
</html>
