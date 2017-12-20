<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">

	var form = document.getElementById('upload');
	var request = new  XMLHttpRequest();

	form.addEventListener('submit', function(){
        e.prreventDefault();
        var formdata = new FormData(form);

        request.open('post', 'upload');
        request.addEventListener("load", transferComplete);
        request.send(formdata);
	});

	function transferComplete(data){
        console.log(data.currentTarget.response);
	}	
</script>
</body>
</html>