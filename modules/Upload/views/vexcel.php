<h1> SELAMAT DATANG DI HALAMAN UPLOAD EXCEL </h1>
Jumlah Konten Tabel Test Saat Ini : <?php echo $test ?>
<div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px;">
    <?php // echo $error;?>
    <h3>Download Sample Excel Yang digunakan: <a href="<?php echo base_url($murl."/views/upload_excel/test.xlsx") ?>"> DISINI!!! </a></h3>
    <?php echo form_open_multipart('Upload/UploadExcel');?>
        <input type="file" name="userfile" size="20" />
        <br /><br />
        <input type="submit" value="upload" />
    </form>
</div>