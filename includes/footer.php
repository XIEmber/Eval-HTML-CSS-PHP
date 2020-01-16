<?php
$year = date('Y');
?>
<footer id="footer1">
  <p>&copy; <?= $year ?> - Hell Corporation</p>
  <a href="index.php?page=mentions" title="Les mentions non-légales">Mentions Non-Légales</a>
</footer>
</body>
<script type="text/javascript">
if (window.location.href=='http://localhost/Eval-HTML-CSS-PHP/') {
console.log(window.location.href)
document.getElementById("footer1").style.display="none";
}
</script>
