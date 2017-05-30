<style type="text/css">
    #parentdiv
    {
        width: 30px;
        height: 30px;
        background-color:#F00;
        border-radius: 150px;
        font-size:10pt;
        text-align:center;
        color:#FFF;
        box-shadow: 10px 10px 5px #888888;
    }
    #parentdivs
    {
        width: 30px;
        height: 30px;
        background-color:#009900;
        border-radius: 150px;
        font-size:10pt;
        text-align:center;
        color:#FFF;
        box-shadow: 10px 10px 5px #888888;
    }
    #parentdivss
    {
        width: 30px;
        height: 30px;
        background-color:#FF9900;
        border-radius: 150px;
        font-size:10pt;
        text-align:center;
        color:#FFF;
        box-shadow: 10px 10px 5px #888888;
    }
    #parentdivssss
    {
        width: 30px;
        height: 30px;
        background-color:#5BADFF;
        border-radius: 150px;
        font-size:10pt;
        text-align:center;
        color:#FFF;
        box-shadow: 10px 10px 5px #888888;
    }
</style>
<div class="page-content">
<div class="page-body">
<div class="row">

<table class="table table-bordered"/>
<tr>
<td>Film</td>
	<?php foreach ($film ->result() as $films){
		?>
<td><?php echo $films->nama_film;?></td>
	<?php } ?>
</tr>

<tr>
<td>Jam</td>
	<?php foreach ($jadwal->result() as $jams){
		?>
<td><?php echo $jams->jadwal_jam;?></td>
	<?php } ?>
</tr>

</table>
 <table width="566" height="89" align="center">
                <tr>
                        <!--<td width="50"><div id="parentdiv"></div></td>
                    <td width="23">:</td>
                    <td width="143">Pesanan Anda</td>-->
                    <td width="43"><div id="parentdivss"></div></td>
                    <td width="20">:</td>
                    <td width="259">Sudah di Pesan Orang Lain</td>
                </tr>
                <tr>
                    <td><div id="parentdivs"></div></td>
                    <td>:</td>
                    <td>Masih Kosong</td>
                </tr>
            </table>
<table class="table table-bordered"/>
	
	<?php  
	$no=1;
	for ($i = 1; $i <= 10; $i++) {
		?>
		<tr>
		
			   <td>A<?php echo $no;?><div id="parentdivs"></td>
			   <td>B<?php echo $no;?><div id="parentdivs"></td>
			   <td>C<?php echo $no;?><div id="parentdivs"></td>
			   <td>D<?php echo $no;?><div id="parentdivs"></td>
			   <td>E<?php echo $no;?><div id="parentdivs"></td>
			   <td>F<?php echo $no;?><div id="parentdivss"></td>
			</tr>
			
	<?php 
	$no++;
	} ?>

</table>
</div>
</div>
</div>