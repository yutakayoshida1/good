<!-- Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
	$(function () {
	
		function changeTitle() {
			console.log("送信完了しました");
			$("#inquery_btn").click();
			$("#contactModalLabel").html("送信完了しました");
		};
	
		<?php if($inqueryComplete): ?>		
		changeTitle();
		<?php endif; ?>

	});
</script><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/layouts/inquery_responce.blade.php ENDPATH**/ ?>