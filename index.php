<?php
include_once 'array_location.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <title>CedCab_payment</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light " id="mincls">
    <a class="navbar-brand nav_a_link" href="index.php">Ced<span id="spanId">C</span>ab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="maindiv">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Log IN <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sign Up <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact US <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">About US <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="bg_img">
    <h1>Book a City Taxi to your destination in town</h1>
    <p>Choose from a range of categories and prices</p>
    <div id="white_div">
      <button type="button" class="btn btn-warning btn_color">CITY TAXI </button>
      <h3>Your everyday travel partner</h3>
      <h5>AC Cabs for point to point travel</h5>
      <div id="btnpadding">
        <h6 class="danger_msg" id="danger_all"></h6>
        <form id="formId">
          <div class="input-group mb-3">
            <div class="input-group-prepend lbl_cls">
              <label class="input-group-text" for="Pick_UP">Pick UP <span id="starId">*</span></label>

            </div>
            <select class="custom-select slt_cls" id="Pick_UP" name="Pick_UP">
              <option selected value="0">Pick Up Location</option>
              <?php
              foreach ($location as $key => $value) :?>
               <option value="<?= $key  ?>"> <?= $key ?></option>
            

              <?php   endforeach ;?>

            </select>

          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend lbl_cls">
              <label class="input-group-text" for="Drop_loc">Drop<span id="starId">*</span></label>

            </div>
            <select class="custom-select slt_cls" id="Drop_loc" name="Drop_loc">
              <option selected value="0">Drop Location...</option>
              <?php
              foreach ($location as $key => $value) : ?>
                <option value="<?= $key ?>"><?= $key ?></option>
              <?php endforeach;?>

              ?>
            </select>

          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend lbl_cls">
              <label class="input-group-text" for="cab_type">Cab Type<span id="starId">*</span></label>
            </div>
            <select class="custom-select slt_cls" id="cab_type" name="cab_type">
              <option selected value="0">Select Cab Type</option>
              <?php
              foreach ($cab_type as $key => $value) : ?>

                <option ><?= $key ?></option>

              <?php endforeach;?>
            </select>

          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend lbl_cls">
              <span class="input-group-text" id="inputGroup-sizing-default">Luggage</span>
            </div>
            <input type="text" name="luggage" id="luggage" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter the Luggage in Kg">
          </div>

          <button type="button" id="btnId" class="btn btn-warning btn_color">Calculate Fare</button>
        </form>
        <!-- Button trigger modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal_fare">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="index.php"> <button type="button" class="btn btn-primary">New Ride</button></a>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="card-footer text-muted foot_cls">
    <i class="fa fa-facebook-square" style="font-size:36px; color:rgb(240, 213, 9);margin-right:2%;"></i>
    <i class="fa fa-instagram" style="font-size:36px; color:rgb(240, 213, 9);margin-right:2%;"></i>
    <i class="fa fa-linkedin-square" style="font-size:36px; color:rgb(240, 213, 9);margin-right:2%;"></i>
    <div id="fot_h">
      <h3>Ced Cabs</h3>

      <a class="foot_link" href="#">Contact UD</a>
      <a class="foot_link" href="#">Sign UP</a>
      <a class="foot_link" href="#">Log IN</a>
    </div>

  </div>
</body>
<script>
  $('#Pick_UP').change(function() {
    $("#danger_all").text("");
    $("#Drop_loc option").show();
    $('#Drop_loc option[value=' + $(this).val() + ']').hide();
  });

  $('#Drop_loc').change(function() {
    $("#danger_all").text("");
    $("#Pick_UP option").show();
    $('#Pick_UP option[value=' + $(this).val() + ']').hide();
  });
  $('#cab_type').change(function() {
    $("#danger_all").text("");

  });

  $("#cab_type").on("change", () => {
    let cab = $("#cab_type").val();
    let inp = $("#luggage");
    let countCheck =0;
    if (cab == "CedMicro") {
      inp.val("");
      inp.prop('disabled', true);
      inp.attr("placeholder", "Luggage Facility not Available !");
      countCheck++;
    } else {
      inp.prop('disabled', false);
      inp.attr("placeholder", "Enter the Luggage in Kg!");
      countCheck++;
    }

  })
  $("#btnId").on("click", function() {

    let select1 = $('#Pick_UP').val();
    let select2 = $('#Drop_loc').val();
    let select3 = $('#cab_type').val();
    let luggage = $("#luggage").val();
    let intialCount=0;
    
    if (select1 != 0) {

      if (select2 != 0) {

        if (select3 != 0) {
          $("#danger_all").text("");
          let input = {
            select1: select1,
            select2: select2,
            select3: select3,
            luggage: luggage,
            action:"chekck"
          }
          intialCount++;
          $.ajax({
            type: "post",
            url: "helper.php",
            data: input,
            success: function(result) {
              
              let res=JSON.parse(result);
              
              $(".modal_fare").html("Total Distance: "+res.total_distance +"<br> "+"Total Fare: "+res.total_fare);
              $("#exampleModalCenter").modal('show');
            },
            error: function(data_err) {
              $("#danger_all").html(data_err);
              
            }

          })

        } else {

          console.log("Please select your Cab Type");
          $("#danger_all").text("Please select your Cab Type");

        }
      } else {

        console.log("Please select your Drop Location");
        $("#danger_all").text("Please select your Drop Location");
      }
    } else {

      console.log("Please select your Pick Location");
      $("#danger_all").text("Please select your Pick Location");
    }


  })
</script>

</html>
