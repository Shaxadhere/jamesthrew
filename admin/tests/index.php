<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/jamesthrew/appdata/WebConfig.php');
$pageName = "tests";
session_start();
getHeader($pageName, $root."/shared/adminheader.php");
?>

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
	</ol>
</nav>
<div id="contentt">
<label>Skills:</label>
<input type="text" id="skill_input"/>
<script src="/jamesthrew/assets/jquery/jquery-3.1.1.min.js"></script>
<script src="/jamesthrew/assets/jquery/jquery-ui.min.js"></script>
hhh
<script>
$(function() {
    $("#skill_input").autocomplete({
        source: "search.php",
        select: function( event, ui ) {
            event.preventDefault();
            $("#skill_input").val(ui.item.id);
        }
    });
});
</script>
</div>
<?php
getFooter($root.'/shared/adminfooter.php');
?>