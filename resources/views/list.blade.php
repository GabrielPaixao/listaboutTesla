<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">  


</head>
<body>
<div class="card mb-4" style="margin:3%;">
  <div class="card-body">   

<div class="row">
          <div class="col-md-6">
          <h3>All articles about Tesla </h3>
          </div>
      
</div>
<hr>
<br>
<table id="articles" class="table table-striped table-bordered" style="width:100%;">
        <thead class="table-primary" >
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Description</th>
               
            </tr>
        </thead>
</table>
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function () {
    var table = $('#articles').DataTable({
        ajax: '/api/articles/listAjax', //<=== CONSUMINDO API POR AJAX
        columns: [
            { data: 'author' },
            { data: 'title' },
            { data: 'description' }
            
        ],
    });

  
});
</script>
</body>
</html>