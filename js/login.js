$('document').ready(function(){
	$('#btnlogin').click(function(){
		idmember=$("#idmember").val();
		pin=$("#pin").val();

		var data = $("#login-form").serialize();

		$.ajax({
			type:"POST",
			url:"login.php",
			data:data,
			success:function(pesan){
				if(pesan=='ok'){
					window.location="admin/index.php";
				}
				else{
					//alert('login gemiagal');
					$("#peringatan").html("ID Member dan Pin salah, Silakan coba kembali");
				}
			}
		});
		return false;
	});
});