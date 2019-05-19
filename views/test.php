<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chart using codeigniter and morris.js</title>
    <link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/css/morris.css'?>">
  </head>
  <body>
    <h2>Chart using Codeigniter and Morris.js</h2>
 
    <div id="graph"></div>
 
    <script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/jquery.min.js'?>"></script>
    <script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/raphael-min.js'?>"></script>
    <script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/morris.min.js'?>"></script>
    <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $FileDetails;?>,
          xkey: 'max_date',
          ykeys: ['file_id'],
          labels: ['file_id']
        });
    </script>
  </body>
</html>