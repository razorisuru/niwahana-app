<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB Application for Niwahana</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid ibg">
        <div class="row ">
            <h3 class="text-center">WEB Application for Niwahana</h3>
        </div>
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card icd">
                    <div class="card-header">
                        <h4 class="text-center">1st phase</h4>
                    </div>
                    <div class="card-body">
                      <div class="phase1">
                          <form id="frm1" method="post" action="">
                              <section class="sec1 input-group">
                                <div class="input-group-text">Living Room&nbsp;</div>
                                <input type="number" class="form-control" id="i1" placeholder="Quantity">
                                <label for="l1"></label>
                                <input type="number" class="form-control" id="l1" placeholder="Length">
                                <label for="w1"></label>
                                <input type="number" class="form-control" id="w1"  placeholder="Width">
                                <p class="ilw1 po" id="ilw1"></p>
                              </section>

                              <section class="sec2 input-group mt-2">
                                <div class="input-group-text">Bedroom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <input type="number" class="form-control" id="i2" placeholder="Quantity">
                                <label for="l2"></label>
                                <input type="number" class="form-control" id="l2" placeholder="Length">
                                <label for="w2"></label>
                                <input type="number" class="form-control" id="w2"  placeholder="Width">
                                <p class="ilw2 po" id="ilw2"></p>
                              </section>

                              <section class="sec3 input-group mt-2">
                                <div class="input-group-text">Dining Room</div>
                                <input type="number" class="form-control" id="i3" placeholder="Quantity">
                                <label for="l3"></label>
                                <input type="number" class="form-control" id="l3" placeholder="Length">
                                <label for="w3"></label>
                                <input type="number" class="form-control" id="w3"  placeholder="Width">
                                <p class="ilw3 po" id="ilw3"></p>
                              </section>

                              <section class="sec4 input-group mt-2">
                                <div class="input-group-text">Bath Room &nbsp;&nbsp;</div>
                                <input type="number" class="form-control" id="i4" placeholder="Quantity">
                                <label for="l4"></label>
                                <input type="number" class="form-control" id="l4" placeholder="Length">
                                <label for="w4"></label>
                                <input type="number" class="form-control" id="w4"  placeholder="Width">
                                <p class="ilw4 po" id="ilw4"></p>
                              </section>
                              <!-- <button class="btn" type="button" onclick="multiply()">Calculate</button> -->
                              <input class="btn" type="submit" name="submit" />
                            </form>
                            <div class="card-footer">
   
                                
                              
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-2"></div>
    </div>

    <div id="preview"></div>

       
    </div>
    
        <?php

                @$submit = $_POST['submit'];
                $i1 = ($_POST["i1"]);
                $i2 = ($_POST["i2"]);
                $i3 = ($_POST["i3"]);
                $i4 = ($_POST["i4"]);
                $l1 = ($_POST["l1"]);
                $w1 = ($_POST["w1"]);
                $l2 = ($_POST["l2"]);
                $w2 = ($_POST["w2"]);
                $l3 = ($_POST["l3"]);
                $w3 = ($_POST["w3"]);
                $l4 = ($_POST["l4"]);
                $w4 = ($_POST["w4"]);

                if($submit)

                $ilw1 = $i1 * $w1  *$l1;
                $ilw2 = $i2 * $w2 * $l2;
                $ilw3 = $i3 * $w3 * $l3;
                $ilw4 = $i4 * $w4 * $l4;

                $ft = ($ilw1 + $ilw2 + $ilw3 + $ilw4);

                echo "Ft $ft <br>";
                echo "For 1sqft = Rs 9500<br>";

                $tot = $ft * 9500;
                echo "Total = Rs $tot";
        ?>

        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    
  </body>
</html>