<html>
<head>
<script>

function showUser(str) {
    
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } 
    else { 
    
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } 
        else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        
        xmlhttp.open("GET","getuser.php?="+str,true);
        
        xmlhttp.send();
    }
}

</script>
</head>

<body style="background-image: linear-gradient(white,#4286f4);">

<div style="text-align: center;font-size: 30px">

<form>
<input style="min-height: 50px;min-width: 200px;border-radius: 50px;background-color: rgba(50,53,34,0.4);"
 type="button" name="users" value="Listo" onclick="showUser(this.value)">
</form>

<br>
<div id="txtHint"><b>Person info will be listed here...</b>
</div>
<br>

<form method="post" action="dataout.php">

<p style="font-size: 15px">Klientin qe deshironi ta fshini!Duke shkruar ID e tij!</p><br>  
ID:<input type="Text" id="idelete" name="idelete" style="min-height: 40px;"><br><br>

<input style="min-height: 50px;min-width: 200px;border-radius: 50px;background-color: rgba(50,53,34,0.4)" type="Submit" name="submit" value="Delete">
</form>

</div>
</body>
</html>