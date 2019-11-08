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
	<div class="col">
	    <label>Basic</label>
		<div id="lols">
			<input class="typeahead" type="text" placeholder="States of USA">
		</div>
    </div>
    <p>
    
</p>
<script src="/jamesthrew/assets/jquery/jquery-3.1.1.min.js"></script>
<script src="/jamesthrew/assets/ajax/jquery.unobtrusive-ajax.min.js"></script>
<script src="/jamesthrew/assets/dashboard/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>

<script>
    
    $(document).ready(function(){
        $('#lols .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1},{
            source: function(query, result){
                $.ajax({
                    url: "filter?query="+query,
                    method: "GET",
                   // data: JSON.stringify({query:query}),
                    success: function(data){
                        result($.map(data, function(item){
                            return item;
                        }))
                    }
                })
            }
        })
    })


$(document).ready(function(){
 
 $('#useremail').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"filter",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>

</div>
<?php
getFooter($root.'/shared/adminfooter.php');
?>