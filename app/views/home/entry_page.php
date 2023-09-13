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
                <form id="myForm" action="index" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row mb-2">
                                <label  class="col-sm-3 col-form-label">Buyer: </label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" id="buyer" name="buyer" placeholder="Buyer" maxlength="20" oninput="validateInputSpaceNumber(this)">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label  class="col-sm-3 col-form-label">Buyer Email: </label>
                                <div class="col-sm-9">
                                <input type="email" class="form-control" id="buyer_email" name="buyer_email" placeholder="Buyer Email" oninput="emailValidation(this)" required >
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
                                <input type="text" class="form-control" id="receipt_id" name="receipt_id" placeholder="Receipt ID" oninput="validateInputText(this)" >
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label  class="col-sm-2 col-form-label">City:</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" oninput="validateInputText(this)">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label  class="col-sm-2 col-form-label">Phone:</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" oninput="validateInputNumber(this)">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label  class="col-sm-2 col-form-label">Amount:</label>
                                <div class="col-sm-10">
                                <input type="text"  class="form-control" id="amount" name="amount" placeholder="Amount" oninput="validateInputNumber(this)">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Note</label>
                                <div class="col-sm-10">
                                    <textarea class=" form-control" id="note" name="note" oninput="wordLimiter(this,30)" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Items</label>
                                <div class="col-sm-10">
                                    <span id="item_span">
                                    <input type="text" class="form-control" name="item[]" placeholder="item" oninput="validateInputText(this)" required>
                                    <br>    
                                </span>
                                    
                                    <a id="add" class="btn btn-info" >Add Item</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
        $("#add").click(function(){

            $("#item_span").append('<input type="text" class="form-control" name="item[]" placeholder="item"><br>')
        });
        });


        function validateInputNumber(input) {
            input.value = input.value.replace(/[^0-9]/g, '');

        }

        
        function validateInputSpaceNumber(input) {
            input.value = input.value.replace(/[^a-zA-Z0-9\s]/g, '');

        }
        function validateInputText(input) {
            input.value = input.value.replace(/[^a-zA-Z\s]/g, '');

        }
        document.getElementById("myForm").addEventListener("submit", function(event) {

            const phone = document.getElementById("phone").value;
            const phone_no = "880" + phone;
            document.getElementById("phone").value = phone_no;

            const input = document.getElementById("buyer_email").value;
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (emailPattern.test(input)) {
        
                $.ajax({
                url:"store",
                method:"POST",
                dataType:"JSON",

                data:$("#myForm").serialize(),

                success: function(result, msg){
                alert("Data Inserted....");


}
});	

        
            } else {
        alert("Invalid email format. Please enter a valid email address.");
        }

        



});

        function wordLimiter(input ,maxwords){
            
            const inputField = document.getElementById("note");
            const text = input.value;
            const words = text.trim().split(/\s+/);
            if(words.length > maxwords ){

                const truncatedText = words.slice(0, maxwords).join(" ");
                inputField.value = truncatedText;
            }
        }


    </script>





  </body>
</html>