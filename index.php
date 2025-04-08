<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
  ADD DATA
</button>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" id="closed" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
            <form id="upload_form" method="POST" role="form" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Files</label>
                    <input type="file" class="form-control" id="files" name="files[]" multiple aria-describedby="fileHelp">
                </div>

                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>


        </div>
      
    </div>
  </div>
</div>



<div class="container">
            <div class="row">
                <div class=" m-auto">
                <table id="table_data" class="table table-hover border my-6">
            
                </table>
                </div>
            </div>
</div>

    
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit_modal" style="display:">
  EDIT
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" id="closes" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body" id="modal_form">
                        
                        
                    </div>
                
            </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="jquery.js"></script>
  </body>
</html>