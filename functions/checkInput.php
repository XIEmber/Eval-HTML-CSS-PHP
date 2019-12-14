<?php
function checkInput($chain) {
  return htmlspecialchars(addslashes(urldecode(trim($chain))));
}
