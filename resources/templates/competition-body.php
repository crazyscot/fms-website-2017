      <div class="wrapper">
		<?php include 'competitions-sidebar.php'; ?>
        <div class="main-0 main-1">
			<div class="trophy">
				
<?php
				echo $content;
				echo $seasons;
?>				
				<div id="display-selected-comp">
					
				</div>
			</div>
		</div>
		<?php include 'competitions-bottombar.php'; ?>
      </div>

<script>
function displaySeason(season) {
  var x = document.getElementById("display-selected-comp");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
