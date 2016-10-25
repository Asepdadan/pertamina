<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1> HALOHA </h1>
        <?php foreach ($data as $row) {?>
        <input type="checkbox" onclick="Check('<?php echo $row->Field ?>')" id="<?php echo $row->Field ?>"/><img src="<?php echo base_url($murl.'views/images/ok.png'); ?>" width="15" id="<?php echo "gbr".$row->Field ?>" style="display: none"/><?php echo $row->Field ?> <br />
        <?php } ?>
        <textarea id="txtArea" readonly="true" cols="120">-</textarea>
    </body>
    <script>
        var q2 = "";
        function Check(name){
            var q1 = "select ";
            var q3 = " from sa_jp";
            el = document.getElementById(name);
            gel = document.getElementById("gbr"+name);
            if(el.checked) {
                if(q2 != "")q2 += ",";
                q2 += name;
                document.getElementById("txtArea").value = q1+q2+q3;
//                alert(q1+q2+q3);
                el.style.visibility = "hidden";
                gel.style.display = "inline";
            } 
            //alert('Handoko tampan '+name);
        }
    </script>
</html>
