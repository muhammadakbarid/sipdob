<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $button; ?> Data_odp</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" onclick="location.reload()" title="Collapse">
                        <i class="fa fa-refresh"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?php echo $action; ?>" method="post">

                    <div class="form-group">
                        <label for="enum">Pelanggan <?php echo form_error('id_pelanggan') ?></label>
                        <select class="form-control" name="id_pelanggan" id="id_pelanggan">
                            <option>Pilih Pelanggan</option>
                            <?php foreach ($list_pelanggan as $value) : ?>
                                <? if ($id_pelanggan == $value->id_pelanggan) : ?>
                                    <option selected value="<?php echo $value->id_pelanggan ?>" data-id="<?php echo $value->id_pelanggan ?>"><?php echo $value->nama_pelanggan ?></option>
                                <? else : ?>
                                    <option value="<?php echo $value->id_pelanggan ?>" data-id="<?php echo $value->id_pelanggan ?>"><?php echo $value->nama_pelanggan ?></option>
                                <? endif ?>

                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="int">Odp Name <?php echo form_error('odp_name') ?></label>
                        <input type="text" class="form-control" name="odp_name" id="odp_name" placeholder="Odp Name" value="<?php echo $odp_name; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Otp Slot <?php echo form_error('otp_slot') ?></label>
                        <input type="text" class="form-control" name="otp_slot" id="otp_slot" placeholder="Otp Slot" value="<?php echo $otp_slot; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Tgl Pengecekan <?php echo form_error('tgl_pengecekan') ?></label>
                        <input type="date" class="form-control" name="tgl_pengecekan" id="tgl_pengecekan" placeholder="Tgl Pengecekan" value="<?php echo $tgl_pengecekan; ?>" />
                    </div>
                    <input type="hidden" name="id_odp" value="<?php echo $id_odp; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('data_odp') ?>" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#pelanggan').change(function() {
        var id
        $.ajax({
            url: <?php echo base_url('Data_odp/ambil_pelanggan') ?>,
            dataType: 'json',
            data: [
                'id' => id
            ]
            beforeSend: function() {
                $loader.show();
            }
        })
    })
</script>