		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<script>
			 $(document).ready(function() {
				Materialize.updateTextFields();
				$('select').material_select();
				$('.modal').modal();
				$('.exit-btn').click(function(){
  					$('#subModal').modal('close');
				})
			  });
		</script>
