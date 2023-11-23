<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Wisata</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditMahasiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="IdMhsw" name="IdMhsw" value=" <?= $data_mahasiswa->IdMhsw; ?>">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= $data_mahasiswa->Nama; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Kota</legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="JenisKelamin" name="JenisKelamin" value="<?= $data_mahasiswa->JenisKelamin; ?>">
                                <small class="text-danger">
                                <?php echo form_error('JenisKelamin') ?>
                                 </small>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= $data_mahasiswa->Alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Agama" name="Agama">
                                <option value="Pantai" selected disabled>Pilih</option>
                                <option value="Pantai" <?php if ($data_mahasiswa->Agama == "Pantai") : echo "selected";
                                                        endif; ?>>Pantai</option>
                                <option value="Pegunungan" <?php if ($data_mahasiswa->Agama == "Pegunungan") : echo "selected";
                                                            endif; ?>>Pegunungan</option>
                                <option value="Air Terjun" <?php if ($data_mahasiswa->Agama == "Air Terjun") : echo "selected";
                                                        endif; ?>>Air Terjun</option>
                                <option value="Kolam Renang" <?php if ($data_mahasiswa->Agama == "Kolam Renang") : echo "selected";
                                                        endif; ?>>Kolam Renang</option>
                                <option value="Kebun Binatang" <?php if ($data_mahasiswa->Agama == "Kebun Binatang") : echo "selected";
                                                        endif; ?>>Kebun Binatang</option>
                                <option value="Wisata Sejarah" <?php if ($data_mahasiswa->Agama == "Wisata Sejarah") : echo "selected";
                                                            endif; ?>>Wisata Sejarah</option>
                                <option value="Perkebunan" <?php if ($data_mahasiswa->Agama == "Perkebunan") : echo "selected";
                                                            endif; ?>>Perkebunan</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('Agama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NoHp" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHp" name="NoHp" value="<?= $data_mahasiswa->NoHp; ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHp') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Upload Foto</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="Email" name="Email" value="<?= $data_mahasiswa->Email; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Email') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>