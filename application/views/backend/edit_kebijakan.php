<div class="col-sm-9">
		<div class="container-fluid">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="#"><?php echo strtoupper($this->uri->Segment(1));?></a></li>
			  <li class="breadcrumb-item active"><?php echo strtoupper($this->uri->Segment(2));?></li>
			</ol>
			<div class="panel panel-info">
				<div class="panel-heading">Form</div>
				<div class="panel-body">
					<div id="FormLogin" class="text-centered">
						<form action="<?php echo base_url().$this->uri->Segment(1);?>/update/<?php echo $data[0]->no;?>" method="post">
							<div class="form-group">
								<label>Narasi : </label>
								<textarea class="form-control" name="narasi" placeholder="Narasi"><?php echo $data[0]->narasi;?></textarea>
							</div>
							<div class="form-group">
								<label>Status : </label>
								<input type="text" name="status" class="form-control" placeholder="Status" required="true" value="<?php echo $data[0]->status;?>">
							</div>
							<div class="form-group">
								<label>Indikator : </label>
								<input type="text" name="indikator" class="form-control" placeholder="indikator" required="true" value="<?php echo $data[0]->indikator;?>">
							</div>
							<div class="form-group">
								<label>PIC : </label>
								<input type="text" name="pic" class="form-control" placeholder="pic" required="true" value="<?php echo $data[0]->pic;?>">
							</div>
							<!--
							<div class="form-group">
								<label>Status : </label>
								<input type="text" name="status" class="form-control" placeholder="Status" required="true">
							</div>
							-->
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary">
								<input type="reset" value="Reset" class="btn btn-warning">
							</div>
						</form>
					</div>
				</div>
			</div>
	</div>
</div>
<div class="col-sm-1">
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/tambah" class="btn btn-primary" style="margin-bottom:20px;"><span class="glyphicon glyphicon-plus"></span> Tambah</a>	
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/delete" class="btn btn-warning" style="margin-bottom:20px;"><span class="glyphicon glyphicon-trash"></span> Delete</a>
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/update" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</a>

</div>
