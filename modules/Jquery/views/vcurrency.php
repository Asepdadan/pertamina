<html>
    <head>
        <title>Jquery Tutorials</title>
        <script type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery-2.2.4.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url($murl.'views/js/jquery.price_format.2.0.min.js') ?>"></script>
    </head>
    <body>
        <style type="text/css">
            .big{
                font-size: 20px;
            }
            
            .small{
                font-size: 12px;
            }
        </style>
        <h4>Batas Anggaran = Rp. 50.000.000,-</h4>
        <table>
            <tr>
              <input type="hidden" value="50000000" id="limit"/>
              <td>Biaya yang diusulkan</td>
              <td>:</td>
              <td><input type="text" name="jumlah_dana" id="example1" required="true" onkeyup="check()"></td>
           </tr>
        </table>
    </body>
</html>

<script>  
  var ntv = "";
  var limit = "";
  
  $( document ).ready(function() {
        // Get the initial value
       var $el = $('#example1');
       $el.data('oldVal',  $el.val() );


       $el.change(function(){
            //store new value
            var $this = $(this);
            var newValue = $this.data('newVal', $this.val());
       })
       .focus(function(){
            // Get the value when input gains focus
            var oldValue = $(this).data('oldVal');
       });
  });
  
  function check(){
    ntv = $("#example1").val();
    ntv = parseInt(ntv.replace(/[^0-9]/g, ''));
    limit = parseInt($("#limit").val());
    if(ntv > limit){
        $("#example1").css("background-color","red");
    } else{
        $("#example1").css("background-color","white");
    }
  }
  
  $(function() {
    $('#example1').priceFormat({
        prefix: 'Rp ',
        centsSeparator: ',',
        thousandsSeparator: '.',
        centsLimit: 0
    });
  });
  </script>
