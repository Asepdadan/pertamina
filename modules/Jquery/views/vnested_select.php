<h1> THIS IS NESTED SELECT VIEW </h1>
<script type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery-2.2.4.js') ?>"></script>
<select class="form-control" id="country"  name="country">
    <option>--- Pilih Negara ---</option>
    <?php foreach ($country as $row) { ?>
    <option value="<?php echo $row->country ?>"><?php echo $row->country ?></option>
    <?php } ?>
</select>

<select class="form-control" id="customers" name="isu" >
</select>

<script>       
    $(document).ready(function() { 
        //alert("Handoko");
    });
    
    $("#country").change(function () {
        Nama($("#country").val());
    });
    
    function Nama(country){
        //alert("Negara di nama ="+country);
        $.get("<?php echo base_url(); ?>Jquery/JsonData/"+country, function(json){
            var data = JSON.parse(json);
            
            console.log('data Nama Custoomer: ');
            console.log(data);
            var opt='';
            
            jQuery.each(data, function(i, val){
                opt+='<option value="'+val.id+'">'+val.text+'</option>';
            });
            
            $("#customers").html(opt); 
        });
    }
</script>