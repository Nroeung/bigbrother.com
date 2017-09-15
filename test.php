
<html>
<head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<style>

#test {
  position: fixed;
  top: 40px;
}

</style>

</head>
<body>
<button type="button">Click Me</button>
<p></p>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

            $.ajax({
                type: 'POST',
                url: 'script.php',
                success: function(data) {
                    alert(data);
                    $("p").text(data);

                }
            });
   });
});
</script>

</body>
</html>
