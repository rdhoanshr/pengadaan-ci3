<!-- Memanggil file header.php -->
<?php $this->load->view("layout_backoffice/header") ?>

<!-- Memanggil file navbar.php -->
<?php $this->load->view("layout_backoffice/navbar") ?>

<!-- Memanggil file sidebar.php -->
<?php $this->load->view("layout_backoffice/sidebar") ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Menampilkan notif flashdata -->
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('message') ?>"></div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('pesanbaik')) : ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesanbaik') ?>"></div>
    <?php endif; ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Pengajuan
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url(); ?>pengajuan">Data Pengajuan</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.box -->
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="hidden" id="id" name="id" value="<?= $id; ?>">
                                        <input type="hidden" id="id_user" name="id_user" value="<?= $this->ion_auth->user()->row()->id; ?>">
                                        <div class="form-group">
                                            <label for=""> Nama Pengajuan </label>
                                            <input type="text" name="pengajuan" class="form-control" value="<?= set_value('pengajuan') ?>">
                                            <div class="form-text text-danger"><?= form_error('pengajuan'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Jenis Pengajuan </label>
                                            <select name="jenis_pengajuan" class="form-control js-example-basic-single" style="width: 100%;">
                                                <option selected disabled>-- Pilih Jenis Pengajuan --</option>
                                                <option value="Barang habis pakai">Barang habis pakai</option>
                                                <option value="Barang tidak habis pakai">Barang tidak habis pakai</option>
                                            </select>
                                            <!-- <input type="text" name="jenis_pengajuan" class="form-control"> -->
                                            <div class="form-text text-danger"><?= form_error('jenis_pengajuan'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Tanggal Pengajuan </label>
                                            <input type="text" name="tgl_pengajuan" class="form-control" value="<?= $tanggal; ?>" readonly>
                                            <div class="form-text text-danger"><?= form_error('tgl_pengajuan'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Keterangan </label>
                                            <textarea name="keterangan" cols="30" rows="10" class="form-control"></textarea>
                                            <div class="form-text text-danger"><?= form_error('keterangan'); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for=""> Barang </label>
                                            <select name="id_barang" id="id_barang" class="form-control js-example-basic-single" style="width: 100%;">
                                                <option selected disabled>-- Pilih Barang --</option>
                                                <?php foreach ($barang as $b) : ?>
                                                    <option value="<?= $b['id_barang']; ?>"><?= $b['kode_barang']; ?> - <?= $b['nama_barang']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="form-text text-danger"><?= form_error('id_barang'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Jumlah </label>
                                            <input type="number" name="jumlah" id="jumlah" class="form-control">
                                            <div class="form-text text-danger"><?= form_error('jumlah'); ?></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Pagu Biaya </label>
                                            <input type="number" name="biaya" id="biaya" class="form-control">
                                            <div class="form-text text-danger"><?= form_error('biaya'); ?></div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="temp_barang()">Tambah</button>
                                        <br><br>
                                        <div class="databarang">
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Jenis</th>
                                                            <th>Jumlah</th>
                                                            <th>Biaya</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= base_url('pengajuan'); ?>" class="btn btn-info">Batal</a>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Memanggil file footer.php -->
<?php $this->load->view("layout_backoffice/footer") ?>