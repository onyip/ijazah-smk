
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>

    </h1>
  </section>

  <section class="content container-fluid">
    <?php if (@$main->skl): ?>
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-info"></i> Info!</h4>
        <h4>Selamat Kami Ucapkan Kepada <b class="text-success"><?=@$main->name?></b>. Anda Telah Di Nyatakan <b class="text-success">LULUS</b>, Gunakan Dokumen Di Bawah Ini Dengan Bijak!</h4>
      </div>
    <?php endif ?>
    <div class="row">
      <a href="<?php if(@$main->skl){echo 'ijazah/skl_down/'.$main->skl;}else{echo "#";} ?>">
        <div class="col-sm-6">
          <div class="callout callout-warning callout-disable text-center">
            <i class="fa fa-<?php if(@$main->skl){echo 'cloud-download';}else{echo "times";} ?> fa-6" style="font-size: 15rem"></i>
            <h4><?php if(@$main->skl){echo 'Download SKL';}else{echo "SKL Belum Tersedia";} ?></h4>
          </div>
        </div>
      </a>
      <div class="col-sm-6">
        <a href="<?php if(@$main->ijasah){echo 'ijazah/ijz_down/'.$main->ijasah;}else{echo "#";} ?>">
          <div class="callout callout-success text-center">
            <i class="fa fa-<?php if(@$main->ijasah){echo 'cloud-download';}else{echo "times";} ?> fa-6" style="font-size: 15rem"></i>
            <h4><?php if(@$main->ijasah){echo 'Download Ijazah';}else{echo "Ijazah Belum Tersedia";} ?></h4>
          </div>
        </a>
      </div>
    </div>
  </section>
</div>


