<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div id="txtfield">
  <input type="text" name="steps[]" placeholder="Enter step description..">
</div>
<button onclick="addbox()">Append list items</button>
<script src="/jamesthrew/assets/jquery/jquery-3.1.1.min.js"></script>
<script>
  function addbox(){
        $("#txtfield").append("<input type='text' name='steps[]' placeholder='Enter step description..''>");
  };
</script>
</body>
</html>
