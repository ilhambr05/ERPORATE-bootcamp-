<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<style type="text/css">
	.main-raised{
		margin-top: 100px;
	}
	table{
		margin-top: 30px;
	}
	.btn{
		margin: 0px !important;
	}
	td>.form-control, td>.form-group{
		margin: 0px;
		height: 30px;
		padding: 0px;
	}
	form>.form-group{
		margin:0px;
	}
	.section{
		padding: 25px;
	}
	.alert-custom{
		position: absolute;
		top: 25px;
		right: 0px;
	}
</style>

</head>

<body class="x-page">
	<!-- Navbar -->
	<nav class="navbar navbar-transparent navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-x">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#">
					<div class="logo-container">
						<div class="logo">
							<img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Design by Ilham BR</b> powered by Material Kit <b>Creative Tim</b>" data-placement="bottom" data-html="true">
						</div>
						<div class="brand">
							<div>ERPORATE</div><small>Solusi Global</small>
						</div>
					</div>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="navigation-x">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="index.php" target="_blank">
							<i class="fa fa-address-card"></i> Data Karyawan
						</a>
					</li>
					<li>
						<a href="absen.php">
							<i class="fa fa-calendar-check-o"></i> Absen Karyawan
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<div class="wrapper col-md-10 col-md-offset-1">

		<div class="main main-raised">
			<div class="section section-basic">
					<h3>Data Karyawan     <button class="btn btn-primary" style="margin-left: 20px;" data-toggle="modal" data-target="#modal_add">
	                      Tambah Baru
	                    </button></h3>
					<div class="col-md-3 alert alert-warning alert-custom text-center" hidden="">
						Hapus data?
						<button type="button" rel="tooltip" title="confirm" class="btn btn-success btn-simple btn-xs" onclick="confirm_hapus()"><i class="fa fa-check"></i></button>
						<button type="button" rel="tooltip" title="cancel" class="btn btn-danger btn-simple btn-xs" 
							onclick="cancel_del(this)">
						<i class="fa fa-times"></i></button>
					</div>
					<table class="table">
						<!--auto-->
					</table>
			</div>
		</div>
	</div>

	<!-- Sart Modal -->
	<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Tambah Data Karyawan
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" placeholder="Nama"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">JK</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="jk" placeholder="Pria/Wanita"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="noHp" placeholder="HP"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8">
                        <TEXTAREA type="text" rows="5" class="form-control" name="alamat" placeholder="Alamat"/></TEXTAREA>
                    </div>
                  </div>
                </form>    
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="add_data()">Confirm</button>
            </div>
        </div>
    </div>
</div>
	<!--  End Modal -->
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">
	var data;
	var adaProses=false;
	$(document).ready(function() {
		muat();
		$('#modal_add').on('shown.bs.modal', function (e){
			$('#modal_add input').eq(0).focus();
		});
	});
	function muat(){
		$.ajax({
			url : "./crud/conn.php",
			type: "GET",
			success: function(result)
			{
				data = JSON.parse(result);
				buatTabel(data);
				//console.log(JSON.parse(result));
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error memuat data');
			}

		});        
	}
	function buatTabel(json){
		isi = "<table class='table '>";
	      //header = Object.keys(hasil[0]);
	      //thead tr th
	      isi+="<thead><tr>";
	      isi += "<th>ID</th><th>Nama</th><th>Jk</th><th>Jabatan</th><th>No HP</th><th>Alamat</th><th class='text-right'>Action</th>";
	      /*for(x in header){
	        isi += "<th>"+header[x]+"</th>";
	    }*/
	    isi+="</tr></thead>";
	      //tbody tr td
	      count = 1;
	      isi+="<tbody>";
	      for(x in json){
	      	isi+="<tr class='data_real'>";
	      	isi+="<td class='data_id'>"+json[x].id_karyawan+"</td>";
	      	isi+="<td>"+json[x].nama_karyawan+"</td>";
	      	isi+="<td>"+json[x].jenis_kelamin+"</td>";
	      	isi+="<td>"+json[x].jabatan+"</td>";
	      	isi+="<td>"+json[x].no_hp+"</td>";
	      	isi+="<td>"+json[x].alamat+"</td>";
	      	isi+='<td class="text-right"><button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs" onclick="edit('+count+')"><i class="fa fa-edit"></i></button><button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" onclick="hapus(this)"><i class="fa fa-trash"></i></button></td>';
	      	isi+="</tr>";
	      	isi+= '<tr class="data_edit">';
	    	isi+='<td>'+data[x].id_karyawan+'</td>';
	    	isi+='<td><div class="form-group edit"><input type="text" class="form-control" value="'+data[x].nama_karyawan+'"><span class="material-input"></span></div></td>';
	    	isi+='<td><div class="form-group edit"><input type="text" class="form-control" value="'+data[x].jenis_kelamin+'"><span class="material-input"></span></div></td>';
	    	isi+='<td><div class="form-group edit"><input type="text" class="form-control" value="'+data[x].jabatan+'"><span class="material-input"></span></div></td>';
	    	isi+='<td><div class="form-group edit"><input type="text" class="form-control" value="'+data[x].no_hp+'"><span class="material-input"></span></div></td>';
	    	isi+='<td><div class="form-group edit"><input type="text" class="form-control" value="'+data[x].alamat+'"><span class="material-input"></span></div></td>';
	    	isi+='<td class="text-right"><button type="button" rel="tooltip" title="confirm" class="btn btn-success btn-simple btn-xs" onclick="confirm_edit('+count+')"><i class="fa fa-check"></i></button><button type="button" rel="tooltip" title="cancel" class="btn btn-danger btn-simple btn-xs" onclick="cancel('+x+')	"><i class="fa fa-times"></i></button></td>';
	    	isi+="</tr>";
	      	
	      	count++;
	      }
	      
	      isi+="</tbody>";
	      isi+="</table>";
	      $(".table").html(isi);
	      //console.log(isi);
	      $('[rel="tooltip"]').tooltip();//init tooltip
	      $('[data-toggle="popover"]').popover();//init popover
	      $('.data_edit').hide();
    }
    function reload_tabel(){
    	$(".table").html('');
    	muat();
    }
    function add_data(){
    	data = {
    		nama:$("[name='nama']").val(),
    		jk:$("[name='jk']").val(),
    		jabatan:$("[name='jabatan']").val(),
    		noHp:$("[name='noHp']").val(),
    		alamat:$("[name='alamat']").val(),
    	}
		//console.log(data);
		$.ajax({
			url : "./crud/insert.php",
			type: "POST",
			data: data,
			success: function(result)
			{
				if(result){
					$("#modal_add").modal('hide')
					alert("Data berhasil di Tambahkan");
					reload_tabel();
					adaProses=false;
				}else{
					alert('Terjadi Error');		
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Terjadi Error');
			}
		});
    }
    function edit(x){
    	if(!adaProses){
    		$('th').eq(2).css("width", "75");
	    	$('th').eq(3).css("width", "150");
	    	$('th').eq(4).css("width", "150");
	    	$('th').eq(5).css("width", "200");

	    	$('.data_real').eq(x-1).hide();
	    	$('.data_edit').eq(x-1).show();		
	    	$('input:visible').eq(0).focus();
    	}else{
    		alert('Selesaikan dulu proses sebelumnya / cancel');
    	}
    	adaProses = true;
    }
    function confirm_edit(index){
    	data = {
    		id:$('tr:eq('+(index*2)+')>td').eq(0).html(),
    		nama:$('input:visible').eq(0).val(),
    		jk:$('input:visible').eq(1).val(),
    		jabatan:$('input:visible').eq(2).val(),
    		noHp:$('input:visible').eq(3).val(),
    		alamat:$('input:visible').eq(4).val(),
    	}
    	//console.log(data);
    	$.ajax({
			url : "./crud/edit.php",
			type: "POST",
			data: data,
			success: function(result)
			{
				if(result){
					alert("Data berhasil di update");
					reload_tabel();
					adaProses=false;
				}else{
					alert('Terjadi Error');		
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Terjadi Error');
			}
		});
    }
    function confirm_hapus(){
    	$.ajax({
			url : "./crud/delete.php",
			type: "POST",
			data: {id:$('.mauDel>td').eq(0).html(),
					bag:'data',
				},
			success: function(result)
			{
				if(result){
					$('.alert').fadeOut();
					alert("Data berhasil di hapus");
					reload_tabel();
					adaProses=false;
				}else{
					alert('Terjadi Error');		
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Terjadi Error');
			}

		});
    }
    function cancel(x){
    	$('thead>tr').html("<th>ID</th><th>Nama</th><th>Jk</th><th>Jabatan</th><th>No HP</th><th>Alamat</th><th class='text-right'>Action</th>");
    	$('.data_edit').eq(x).hide();
    	$('.data_real').eq(x).show();
    	adaProses= false;
    }
    function cancel_del(ini){
    	$(ini).parent('.alert').fadeOut();
    	$('.mauDel').css('background-color','transparent');
    	adaProses= false;
    }
    function hapus(ini){
    	if(!adaProses){
    		$(ini).parent().parent().css("background-color","#fbc53c");
	    	$(ini).parent().parent().addClass("mauDel");
	    	$('.alert').fadeIn();
    	}else{
    		alert('Selesaikan dulu proses sebelumnya / cancel');
    	}
    	adaProses = true;
    }
</script>
</html>
