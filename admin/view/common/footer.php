</div>
<!-- /#wrapper -->

	<!-- jQuery -->
	<script src="public/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="public/bower_components/metisMenu/dist/metisMenu.min.js"></script>


	<!-- Custom Theme JavaScript -->
	<script src="public/dist/js/sb-admin-2.js"></script>
<script>
	function validateForm() {
    var title = document.forms["newsform"]["title"].value;
    var content = document.forms["newsform"]["content"].value;
    var location = document.forms["newsform"]["location"].value;
    var date = document.forms["newsform"]["create_date"].value;
    var thumbnails = document.forms["newsform"]["thumb"].value;
    var tags = document.forms["newsform"]["tags"].value;
    if (title == null || title == "") {
        alert("title must be filled out");
        return false;
    }

    if (content == null || content == "") {
        alert("content must be filled out");
        return false;
    }
    if (location == null || location == "") {
        alert("location must be filled out");
        return false;
    }
    if (date == null || date == "") {
        alert("date must be filled out");
        return false;
    }
    if (thumbnails == null || thumbnails == "") {
        alert("thumbnails must be filled out");
        return false;
    }
    if (tags == null || tags == "") {
        alert("tags must be filled out");
        return false;
    }

}
</script>


</body>

</html>
