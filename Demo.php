<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="frmss" enctype="multipart/form-data">
        <input type="file" id="txtHello" name="multi-files" accept='image/*' multiple>
        <input type="submit" value="Submit">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    $("#frmss").submit(function(e){
        e.preventDefault();
        var formData = new FormData();// yourForm: form selector   
        // var ProfilePic=$('#txtHello').prop("files")[0];
        var filesLength=document.getElementById('txtHello').files.length;
        console.log(filesLength);

            for(var i=0;i<filesLength;i++){
                formData.append("file", document.getElementById('txtHello').files[i]);
            }
        // formData.append("ProfilePic",ProfilePic);
        formData.append("Tausif","Hello");

            $.ajax({
                type: "POST",
                url: "http://localhost:8006",// where you wanna post
                data: formData,
                processData: false,
                contentType: false,
                error: function(jqXHR, textStatus, errorMessage) {
                    console.log(errorMessage); // Optional
                },
                success: function(data) {
                    console.log(data)
                } 
            });
    });
</script>
</html>