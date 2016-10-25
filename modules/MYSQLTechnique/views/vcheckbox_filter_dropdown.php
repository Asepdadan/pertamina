<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1> HALOHA </h1>
        <table border="1">
            <tr style="background-color: lightblue">
                <th>KOLOM</th>
                <th>FILTER (GUNAKAN ; SEBAGAI PEMISAH)</th>
                <th>ADOP</th>
            </tr>
            <?php foreach ($data as $row) {?>
                <tr id="<?php echo "tr".$row->Field ?>">
                    <td>
                        <?php echo $row->Field ?>
                    </td>
                    <td>
                        <input type="text" id="<?php echo "filter".$row->Field ?>" size="100"/>
                    </td>
                    <td>
                        <img src="<?php echo base_url($murl.'views/images/ok.png'); ?>" width="15" id="<?php echo "gbr".$row->Field ?>" style="display: none"/>
                        <input type="checkbox" onclick="Check('<?php echo $row->Field ?>')" id="<?php echo $row->Field ?>"/>
                    </td>
                </tr>
                
            <?php } ?>
        </table>
        <form action="<?php echo base_url('MYSQLTechnique/CreateCSV'); ?>" method="post">
            <textarea id="txtArea" readonly="true" cols="120" name="query">-</textarea>
            <br />
            <input type="submit" value="create CSV"/>
        </form>
    </body>
    <script>
        var q2 = "";
        var q4 = "";
        
        function Check(name){
            var q1 = "select ";
            var q3 = " from customers";
            el = document.getElementById(name);
            gel = document.getElementById("gbr"+name);
            tel = document.getElementById("tr"+name);
            fel = document.getElementById("filter"+name);
            if(el.checked) {
                if(q2 != "")q2 += ",";
                q2 += name;
                
                if(fel.value != ""){
                    if(q4 == "") {
                        q4 += " where ";
                    } else{
                        q4 += " and ";
                    }
                    
                    q4 += name+"="+"'"+fel.value+"'";
                }
                
                document.getElementById("txtArea").value = q1+q2+q3+q4;
//                alert(fel.value);
                el.style.visibility = "hidden";
                gel.style.display = "inline";
                tel.style.backgroundColor = "lightpink";
                fel.readOnly = true;
                fel.style.color = "red";
            } 
        }
    </script>
</html>
