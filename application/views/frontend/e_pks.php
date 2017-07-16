<?php
	$nama_file = "KebijakanStrategis_".$filename."_".date("Ymd").".xls";
	if ($filename == null) {
		$span = 10;
	}else{
		$span = 9;
	}
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	header("Content-type: application/vnd-ms-excel");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Disposition: attachment;filename=".$nama_file."");
	header("Content-Transfer-Encoding: binary ");
?>
<table width="100%" border="1" cellpadding="5" cellspacing="0">
<tr>
	<td colspan="<?php echo $span;?>" align="center"><h2><strong>LAPORAN PROGRESS KEBIJAKAN STRATEGIS</strong></h2></td>
</tr>
<tr>
<?php 
	if ($filename != null) {
		switch ($filename) {
			case 'asdep1':
				$title ="ASISTEN DEPUTI SUMBER DAYA HAYATI";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			case 'asdep2':
				$title ="ASISTEN DEPUTI SUMBER DAYA MINERAL, ENERGI, DAN NON KONVESIONAL";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			case 'asdep3':
				$title ="ASISTEN DEPUTI JASA KEMARITIMAN";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			case 'asdep4':
				$title ="ASISTEN DEPUTI LINGKUNGAN DAN KEBENCANAAN MARITIM";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			default:
				//echo "a";
				break;
		}
	}
?>
</tr>
<tr>
	<td colspan="<?php echo $span;?>" align="center"><h2><strong>TAHUN <?php echo date("Y");?></strong></h2></td>
</tr>
<tr height="20">
</tr>
<tr>
	<td align="center" style="vertical-align:top;">NO</td>
	<td align="center" style="vertical-align:top;">Kegiatan</td>
	<td align="center" style="vertical-align:top;">Capaian</td>
	<td align="center" style="vertical-align:top;">Tanggal</td>
	<td align="center" style="vertical-align:top;">Tanggal Akhir</td>
	<td align="center" style="vertical-align:top;">Tempat</td>
	<td align="center" style="vertical-align:top;" >Kendala</td>
	<td align="center" style="vertical-align:top;">Tindak Lanjut</td>
	<td align="center" style="vertical-align:top;">Arahan yang diperlukan Menko Kemaritiman</td>
	<td align="center" style="vertical-align:top;">Tanggal Input</td>
</tr>
<?php 
	$z=1;
	$result = $data->result();
	//print_r($result);die();
	foreach ($result as $key) {
		//echo $key->narasiKebijakan."<br/>";
		$data = $this->M_progress->getProgressKebijakan_id($key->narasiKebijakan);

		$n = $data->num_rows();
		$datas = $data->result();
		//print_r($datas);die();
		if ($n > 1) {
			// Jika Data lebih dari 1
			?>
			<tr>
				<td rowspan="<?php echo $n;?>"><?php echo $z;?></td>
				<td rowspan="<?php echo $n;?>"><?php echo $datas[$n-1]->narasi;?></td>
				<td><?php echo $datas[0]->uraian;?></td>
				<td><?php echo date("d-M-Y",strtotime($datas[0]->tanggal1));?></td>
				<td><?php echo date("d-M-Y",strtotime($datas[0]->tanggal2));?></td>
				<td><?php echo $datas[0]->lokasi;?></td>
				<td rowspan="<?php echo $n;?>"><?php echo $datas[$n-1]->masalah;?></td>
				<td rowspan="<?php echo $n;?>"><?php echo $datas[$n-1]->tindak_ljt;?></td>
				<td rowspan="<?php echo $n;?>"><?php echo $datas[$n-1]->arahan;?></td>
				<td rowspan="<?php echo $n;?>"><?php echo $datas[$n-1]->created_at;?></td>
			</tr>
			<?php 
			for ($i=1; $i < $n; $i++) { 
			?>
			<tr>
				<td><?php echo $datas[$i]->uraian;?></td>
				<td><?php echo  date("d-M-Y",strtotime($datas[$i]->tanggal1));?></td>
				<td><?php echo  date("d-M-Y",strtotime($datas[$i]->tanggal2));?></td>
				<td><?php echo $datas[$i]->lokasi;?></td>
			</tr>
			<?php
			}
			?>
			<?php
			$z++;
		}else{
			//Jika banyak data 1
			foreach ($data->result() as $key1) {
				?>
				<tr>
				<td><?php echo $z?></td>
				<td><?php echo $key1->narasi;?></td>
				<td><?php echo $key1->uraian;?></td>
				<td><?php echo  date("d-M-Y",strtotime($key1->tanggal1));?></td>
				<td><?php echo  date("d-M-Y",strtotime($key1->tanggal2));?></td>
				<td><?php echo $key1->lokasi;?></td>
				<td><?php echo $key1->masalah;?></td>
				<td><?php echo $key1->tindak_ljt;?></td>
				<td><?php echo $key1->arahan;?></td>
				<td><?php echo $key1->created_at;?></td>
			</tr>
				<?php 
			}
			$z++;
		}
	}
?>
</table>