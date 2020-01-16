<body id="easteregg">
<div id="Michel">
  <h1>Le Bureau De Michel</h1>
  <p>"Salut je m'appelle Michel et J'adore les nounours en peluche</p>
  <p>"Tu sais au fond j'suis pas méchant j'suis là parce que Roi Dacosta 1er à décidé de me jeter en enfer"</p>
  <img src="./assets/images/Michel Beauté.png"/>
</div>
<button id="bisounours">Bisounours</button>
<button id="sataniquement">Sataniquement cool</button>
</body>
<script>
    $(document).ready(function() {
      $("#bisounours").click(function() {
        $("#easteregg").fadeOut(4000);
      });
      $("#sataniquement").click(function(){
        $("#easteregg").fadeIn(2000);
      })
    });
  </script>
