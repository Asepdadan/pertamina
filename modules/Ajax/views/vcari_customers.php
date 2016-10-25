 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php  foreach ($data as $row) { ?>     

<table class="table">
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="tel" name="nama" value="<?php echo $row['customerName']; ?>" class="form-control"></td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td>:</td>
          <td><textarea name="alamat" class="form-control" rows="2" required="required"><?php echo $row['addressLine1'] ?></textarea></td>
        </tr>
        <tr>
          <td>No Telp</td>
          <td>:</td>
          <td><input type="tel" name="telp_dosen" value="<?php echo $row['phone'] ?>" class="form-control"></td>
        </tr>
        <tr>
          <td>Credit</td>
          <td>:</td>
          <td><input type="tel" name="hp_dosen" value="<?php echo $row['creditLimit'] ?>" class="form-control"></td>
        </tr>
</table>
<?php } ?>
</div>

