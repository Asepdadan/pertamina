
    <!-- Custom CSS -->
    <link href="<?php echo base_url($murl); ?>/views/css/heroic-features.css" rel="stylesheet">
    

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
          <!-- Title -->
            <div class="row">
                <div class="map-container"><svg id="svg" width="100%" height="100%"  viewBox="0 0 1322 620.4"></svg></div>
            </div>
            <!-- /.row -->
             
            <div id="detailModal" class="modal fade">
                <div class="modal-dialog modal-lg ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                            <h4 class="modal-title">Detail WPS</h4>
                        </div>
                        <div class="modal-body">
                            <img class="img-responsive" id="peta"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal --> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url($murl); ?>/views/js/jquery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->



    <script src="<?php echo base_url($murl); ?>/views/js/snap.svg-min.js"></script>

    
      <script>
        $(document).ready(function(){
            var s = Snap("#svg");
    
            Snap.load("<?php echo base_url($murl); ?>/views/images/Indonesia_wps.svg", function (data) {
                s.append( data );
                $.each(s.selectAll("path").items, function() {
                    if (this.attr('id')!= null && this.attr('id').slice(0, 3) == 'wps') {
                        this.click(function () {
                            $("#peta").attr("src", "<?php echo base_url($murl); ?>/views/detail_wps/" + this.attr('id') + ".png");
                            $('#detailModal').modal('show')
                        });
                    }
                });
//                $.each(s.selectAll("g").items, function() {
//                    if (this.attr('id')!= null && this.attr('id').slice(0, 3).toUpperCase() == 'WPS') {
//                        var el = this;
//                        var t = s.text(el.getBBox().cx, el.getBBox().cy, el.attr('id').toUpperCase());
//                        t.attr({fill: "#000", "font-size": "15px"});
//                        el.append(t);
//                    }
//                });
            });
        });
    
    </script>