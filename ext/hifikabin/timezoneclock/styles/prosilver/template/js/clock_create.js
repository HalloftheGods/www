	<script type="text/javascript">
		$(document).ready(function(){

			$('#clock_wash').jclocksgmt(
			{
			title: '{LA_WASHINGTON}',
			offset: '-5'
			});

			$('#clock_uk').jclocksgmt(
			{
			title: '{LA_LONDON}',
			});

			$('#clock_berlin').jclocksgmt(
			{
			title: '{LA_BERLIN}',
 			offset: '+1',
			});

			$('#clock_moscow').jclocksgmt(
			{
			title: '{LA_MOSCOW}',
			offset: '+3',
			});

			$('#clock_tokyo').jclocksgmt(
			{
			title: '{LA_TOKYO}',
			offset: '+8',
			});

			$('#clock_canberra').jclocksgmt(
			{
			title: '{LA_CANBERRA}',
			offset: '+9',
			});

		});
	</script>
