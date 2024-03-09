<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Scraping</title>
</head>
<body>
    <div class="container" style="max-width: 50%";>

        <div class="text-center mt-5 mb-4">
            <h2>Ricerca telefono</h2>
        </div>

        <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Inserire prodotto">
    
        <div id="searchresult">

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#live_search').keyup(function(){
                var input = $(this).val();
                //alert(input);
                if(input != ""){
                    $.ajax({
                       url:"livesearch.php",
                       method: "POST",
                       data:{input:input}, 

                       success:function(data){
                            $("#searchresult").html(data);
                       }
                    });
                } else {
                    $("#searchresult").css("display", "none");
                }
            });
        });
    </script>
</body>
</html>