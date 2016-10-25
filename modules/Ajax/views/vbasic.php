    <script type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery-2.2.4.js') ?>"></script>
    
<script type="text/javascript" charset="utf-8" async defer>
       function cari_dosen(){
        
            var id=$("#id").val();
            $.ajax({
                type:"GET",
                url:"Ajax/cari_customers",
                data:'id='+id,
                success:function(html){
                    $("#list_customer").html(html);
                }
            })

       }
</script>
      
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <h4>Data Customer</h4>  
      <table class="table">
      <div>
        <tr>
          <td>Customer Number</td>
          <td>:</td>
          <td><input type="text" size="2" class="form-control" name="id" id="id" >
          <button type="button" class="btn btn-default" id="cek_dosen" onclick="cari_dosen()" >Cek Data</button></td>
        </tr><br>
        <div id="list_customer">
          
        </div>
        </div>
       

    </table>    
    </div>