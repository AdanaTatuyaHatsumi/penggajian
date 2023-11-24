
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

   <div class="card" style="width: 60%; margin-bottom: 100px">
   	<div class="card-body">
   		
   		<form method="POST" action="<?php echo base_url('admin/tanggalMulaiTugas/editDataAksi') ?>" enctype="multipart/form-data">
			<?php foreach($tmt as $t) : ?>

			<input type="hidden" name="id" class="form-control" value="<?php echo $t->id ?>">

   			<div class="form-group">
   				<label>NIK</label>
   				<select name="nik" class="form-control">
   					<option value="<?php echo $t->nik ?>"><?php echo $t->nik ?> - <?php echo $t->email ?></option>
   					<?php foreach($pegawai as $p) : ?>
						<option value="<?php echo $p->nik ?>"><?php echo $p->nik ?> - <?php echo $p->email ?></option>
					<?php endforeach; ?>
   				</select>
   				<?php echo form_error('nik','<div class="text-small text-danger"></div>') ?>
   			</div>
	
			<div class="form-group">
   				<label>Tanggal</label>
   				<input type="date" name="tanggal" class="form-control" value="<?php echo $t->tanggal ?>">
   				<?php echo form_error('tanggal','<div class="text-small text-danger"></div>') ?>
   			</div>
			<?php endforeach; ?>
   			<button type="submit" class="btn btn-primary">Simpan</button>
			
   		</form>

   	</div>
   </div>

</div>   