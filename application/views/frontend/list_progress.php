
<div class="container" style="margin-top:120px;" >
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>progress">Progress</a></li>
		<li class="pull-right"><a href="<?php echo base_url();?>Fprogress/tambah" class="btn btn-xs btn-primary">Tambah</a></li>
	</ol>
	<table id="progress" class="table table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kegiatan</th>
							<th>Tanggal</th>
							<th>Hasil</th>
							<th>Tindak Lanjut</th>
							<th>Masalah</th>
							<th>Dokumentasi</th>
							<?php 
							if ($this->uri->segment(2)) {
								?><th>Action</th><?php
							}
							?>
						</tr>
					</thead>
					<tbody>
					<?php
						$i=1;
						foreach ($data as $key) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $key->kegiatan;?></td>
							<td><?php 
                            if ($key->tanggal1 == $key->tanggal2) {
                               echo date("d-M-Y h:i:s",strtotime($key->tanggal1));
                            }else{
                                //echo date("d-M-Y h:i:s",strtotime($key->tanggal1))." s/d ".date("d-M-Y h:i:s",strtotime($key->tanggal2));
                                echo date("d-M-Y h:i:s",strtotime($key->tanggal1));
                            }
                            ?></td>
							<td><?php echo $key->hasil;?></td>
							<td><?php echo $key->tindak_ljt;?></td>
							<td><?php echo $key->masalah;?></td>
							<td>
								<?php if ($key->dokumentasi1 != "") {
									?><a href="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi1;?>" data-lightbox="<?php echo $key->dokumentasi1?>" data-title="<?php echo $key->dokumentasi2;?>">
								<img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi1;?>"></img></a><?php
								}
								if ($key->dokumentasi2 != "") {
									?>
									<a href="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi2;?>" data-lightbox="<?php echo $key->dokumentasi1?>" data-title="<?php echo $key->dokumentasi1;?>">
								<img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi2;?>"></img>
								</a>
									<?php
								}
								?>
							</td>
							<?php 
							if ($this->uri->segment(2)) {
								?>
								<td>
									<a class="btn btn-danger" href="<?php echo base_url()."f".$this->uri->segment(1);?>/delete/<?php echo $key->no;?>"><span class="glyphicon glyphicon-trash"></span></a>
									<a class="btn btn-warning" href="<?php echo base_url()."f".$this->uri->segment(1);?>/edit/<?php echo $key->no;?>"><span class="glyphicon glyphicon-edit"></span></a>
								</td>
								<?php
							}
							?>
						</tr>
						<?php
						$i++;}
					 ?>
					</tbody>
				</table>
</div>
</body>
</html>

<script type="text/javascript">
            $(document).ready(function() {
              $('#progress').DataTable();
          } );
</script>
