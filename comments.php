
<?php

include "form.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<div id="output"></div>
<body>
<div class = "data" hidden = "true"><?php echo $comments_js;?></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">
                    Comment
                </h2>
            </div>
            <div class="col-lg-6">
                <div id="comment-field"></div>
            </div>
            <div class="col-lg-6">
                    <form action="form.php" method="POST" class = "form">
                            <div class="form-group">
                              <label for="comment-name">Name:</label>
                              <input type="text" class="form-control" id="comment-name"  placeholder="Enter your name" name="head">
                            </div>
                            <div class="form-group">
                              <label for="comment-body">Comment:</label>
                              <textarea type="password" class="form-control" id="comment-body" placeholder="comment" name="body"></textarea>
                            </div>
                            <div class="form-group form-check text-right">
                                    <button type="submit" id="comment-add" class="btn btn-primary">add Comment</button>
                            </div>
                          </form>
                          
            </div>
        </div>
    </div>

     <script src="comments.js" type="text/javascript">
         
         let ggwp = "<?php 
       echo $comments_js;
         ?>";
         alert("Готово");
     </script>
</body>
</html>
