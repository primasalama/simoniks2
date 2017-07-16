<?php 
    if ($this->session->userdata('session')[0]->role == 'admin') {
        $action = base_url()."Kebijakan/update/".$data[0]->no;
    }else{
        $action = base_url()."fkebijakan/update/".$data[0]->no;
    }
?>
<div class="container" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>kebijakan">Kebijakan</a></li>
        <li class="active">Update</li>
    </ol>
    <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo $action;?>" method="post">
                            <div class="form-group">
                                <label>Narasi : </label>
                                <textarea class="form-control" name="narasi" placeholder="Narasi"><?php echo $data[0]->narasi;?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Status : </label>
                                <textarea class="form-control" name="status" required="true" rows="5"><?php echo $data[0]->status;?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Indikator : </label>
                                <textarea class="form-control" name="indikator" required="true" rows="5"><?php echo $data[0]->indikator;?></textarea>
                            </div>
                            <div class="form-group">
                                <label>PIC : </label>
                                <textarea class="form-control" name="pic" required="true" rows="5"><?php echo $data[0]->pic;?></textarea>
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
                    <div class="col-sm-5 alert alert-success">
                        <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                        <ol>
                            <li>Mengisi Nama Kegiatan sesuai Kegiatan yang bejalan</li>
                            <li>Mengisi Waktu pelaksanaan dengan Benar</li>
                        </ol>
                    </div>
                </div>
            </div>    
</div>
</body>
</html>

<script type="text/javascript">
            $(document).ready(function() {
              $('#progress').DataTable();
          } );
</script>
