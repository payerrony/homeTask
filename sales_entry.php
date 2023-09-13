<?php 
include ("support/db_connect.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Data Entry
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group row mb-2">
                            <label  class="col-sm-3 col-form-label">Buyer: </label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="buyer" name="buyer" placeholder="Buyer">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label  class="col-sm-3 col-form-label">Buyer Email: </label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" id="buyer_email" name="buyer_email" placeholder="Buyer Email">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label  class="col-sm-3 col-form-label">Buyer IP: </label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="buyer_ip" name="buyer_ip" placeholder="Buyer IP">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label  class="col-sm-3 col-form-label">Entry By: </label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="entry_by" name="entry_by" placeholder="Entry By">
                            </div>
                        </div>


                    </div>
                    <div class="col">
                        <div class="form-group row mb-2">
                            <label  class="col-sm-2 col-form-label">Receipt ID:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="receipt_id" name="receipt_id" placeholder="Receipt ID">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label  class="col-sm-2 col-form-label">City:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label  class="col-sm-2 col-form-label">Phone:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label  class="col-sm-2 col-form-label">Amount:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Note</label>
                            <div class="col-sm-10">
                                <textarea class=" form-control" id="note" name="note" ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Items</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="item" name="item" placeholder="item">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>