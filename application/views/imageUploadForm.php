<!doctype html>
<html>
  <head>
   <title>Codeigniter - Upload Multiple Files and Images Example - ItSolutionStuff.com</title>
  </head>
  <body>

    <strong><?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." files"; ?></strong>
    
    <form method='post' action='/image-upload/post' enctype='multipart/form-data'>

      <input type='file' name='files[]' multiple=""> <br/><br/>
      <input type='submit' value='Upload' name='upload' />

    </form>
 
  </body>
</html>