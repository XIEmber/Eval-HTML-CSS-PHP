<?php
require './includes/html.php';
require './includes/header.php';
require './includes/main.php';
require './includes/footer.php';
require_once './functions/checkInput.php';
require_once './includes/pdo.php';
?>
<audio id="musique" src="./assets/music/music1.mp3" autoplay/>
<script type="text/javascript">
var monElementAudio = document.getElementById('musique');
monElementAudio.volume = 0.1;
</script>
