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
        <div class="row justify-content-end mb-5">
          <form action="index" method="POST">
            <div class="col-8">
              <div class="form-group row mb-2">
                <label  class="col-sm-2 col-form-label">Date:</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="fdate" name="fdate">
                  </div>
                  <div class="col-2 text-center"><p>-</p></div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="tdate" name="tdate">
                  </div>
              </div>
              <div class="form-group row mb-2">
                <label  class="col-sm-2 col-form-label">User:</label>
                  <div class="col-sm-10">
                    <input type="test" class="form-control" id="user" name="user">
                  </div>
                  
              </div>
              <div class="form-group row mb-2">
                
                  <input type="submit" name="submit" value="Submit">  
              </div>
            </div>
          </form>
            <div class="col-4 my-auto text-center">  
              <a href="entrypage" class="btn btn-primary">Add New</a>
            </div>
          
        </div>
        <table class="table">
          <thead>
            <th>SL</th>
            <th>amount</th> 
            <th>buyer</th>
            <th>receipt_id</th>
            <th>items</th>
            <th>buyer_email</th>
            <th>buyer_ip</th>
            <th>note</th>
            <th>city</th>
            <th>phone</th>
            <th>entry_at</th>
            <th>entry_by</th>
          </thead>
          <tbody>
            <?php
                $sl=0;
                while($row=$data->fetch_assoc()){
             ?>
            <tr>
              <td><?php echo ++$sl;?></td>
              <td><?php echo $row['amount'];?></td>
              <td><?php echo $row['buyer'];?></td>
              <td><?php echo $row['receipt_id'];?></td>
              <td><?php echo $row['items'];?></td>
              <td><?php echo $row['buyer_email'];?></td>
              <td><?php echo $row['buyer_ip'];?></td>
              <td><?php echo $row['note'];?></td>
              <td><?php echo $row['city'];?></td>
              <td><?php echo $row['phone'];?></td>
              <td><?php echo $row['entry_at'];?></td>
              <td><?php echo $row['entry_by'];?></td>
            </tr>
              <?php } ?>
          
          </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>