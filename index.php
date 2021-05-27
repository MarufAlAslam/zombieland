<?php 

    include './reset/reset.php';
    include 'upload.php';

    include './database-php/col-1.php';
    include './database-php/col-2.php';
    include './database-php/col-3.php';
    include './database-php/col-4.php';
    include './database-php/col-5.php';
    include './database-php/col-6.php';
    include './database-php/col-7.php';
    include './database-php/col-8.php';
    include './database-php/col-9.php';
    include './database-php/col-10.php';
    include './database-php/col-11.php';
    include './database-php/col-12.php';
    include './database-php/col-13.php';
    include './database-php/col-14.php';
    include './database-php/col-15.php';
    include './database-php/col-16.php';
    include './database-php/col-17.php';
    include './database-php/col-18.php';
    include './database-php/col-19.php';
    include './database-php/col-20.php';
    include './database-php/col-21.php';
    include './database-php/col-22.php';
    include './database-php/col-23.php';
    include './database-php/col-24.php';
    include './database-php/col-25.php';
    include './database-php/col-26.php';
    include './database-php/col-27.php';
    include './database-php/col-28.php';
    include './database-php/col-29.php';
    include './database-php/col-30.php';
    include './database-php/col-31.php';
    include './database-php/col-32.php';

    include './database-php/col-33.php';
    include './database-php/col-34.php';
    include './database-php/col-35.php';
    include './database-php/col-36.php';
    include './database-php/col-37.php';
    include './database-php/col-38.php';
    include './database-php/col-39.php';
    include './database-php/col-40.php';
    include './database-php/col-41.php';
    include './database-php/col-42.php';
    include './database-php/col-43.php';
    include './database-php/col-44.php';
    include './database-php/col-45.php';
    include './database-php/col-46.php';
    include './database-php/col-47.php';
    include './database-php/col-48.php';
    include './database-php/col-49.php';
    include './database-php/col-50.php';
    include './database-php/col-51.php';
    include './database-php/col-52.php';
    include './database-php/col-53.php';
    include './database-php/col-54.php';
    include './database-php/col-55.php';
    include './database-php/col-56.php';
    include './database-php/col-57.php';
    include './database-php/col-58.php';
    include './database-php/col-59.php';
    include './database-php/col-60.php';
    include './database-php/col-61.php';
    include './database-php/col-62.php';
    include './database-php/col-63.php';
    include './database-php/col-64.php';

    // include './reset/reset.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="style/style.css">

    <title>Title here</title>
  </head>
  <body>
    


    <!-- wrapper -->
    <div class="wrapper">
      
        <img src="uploads/map.png" class="img-fluid h-100" id="mapImg" alt="">

        <div class="operatinalbtn">
            <button class="btn btn-dark arrow-btn">
                <i class="fa fa-arrow-up"></i>
            </button>
            <div class="popup">
            <form action="index.php" class="upform" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" id="" value="1000000">
                <label for="image">Upload Map</label>
                <input type="file" style="display:none" name="image" id="image" required>
                <input type="submit" name="upload" value="upload" id="upload">
            </form>
            <form action="index.php" method="post">
                <input type="submit" class="btn btn-dark clearBtn" name="clearAllBtn" value="Clear Grids" id="">
            </form>
            </div>
        </div>
        <!-- grids -->
        <div class="gridss">
            <div class="row">

                <!-- grid row 1 -->
                <div class="col-1 b1">
                    <div class="btns">
                        <form action="index.php" method="post">
                            <input type="submit" name="clear1" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress1" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue1" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b2">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear2" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress2" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue2" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b3">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear3" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress3" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue3" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b4">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear4" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress4" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue4" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b5">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear5" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress5" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue5" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b6">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear6" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress6" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue6" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b7">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear7" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress7" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue7" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b8">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear8" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress8" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue8" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b9">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear9" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress9" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue9" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b10">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear10" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress10" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue10" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b11">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear11" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress11" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue11" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b12">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear12" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress12" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue12" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <!-- grid row 1 -->

                <!-- grid row 2 -->
                <div class="col-1 b13">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear13" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress13" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue13" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b14">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear14" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress14" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue14" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b15">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear15" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress15" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue15" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b16">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear16" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress16" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue16" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b17">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear17" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress17" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue17" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b18">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear18" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress18" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue18" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b19">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear19" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress19" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue19" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b20">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear20" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress20" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue20" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b21">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear21" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress21" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue21" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b22">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear22" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress22" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue22" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b23">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear23" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress23" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue23" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b24">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear24" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress24" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue24" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <!-- grid row 2 -->

                <!-- grid row 3 -->
                <div class="col-1 b25">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear25" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress25" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue25" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b26">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear26" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress26" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue26" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b27">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear27" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress27" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue27" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b28">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear28" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress28" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue28" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b29">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear29" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress29" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue29" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b30">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear30" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress30" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue30" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b31">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear31" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress31" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue31" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b32">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear32" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress32" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue32" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b33">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear33" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress33" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue33" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b34">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear34" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress34" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue34" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b35">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear35" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress35" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue35" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b36">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear36" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress36" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue36" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <!-- grid row 3 -->

                <!-- grid row 4 -->
                <div class="col-1 b37">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear37" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress37" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue37" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b38">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear38" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress38" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue38" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b39">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear39" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress39" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue39" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b40">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear40" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress40" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue40" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b41">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear41" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress41" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue41" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b42">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear42" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress42" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue42" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b43">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear43" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress43" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue43" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b44">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear44" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress44" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue44" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b45">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear45" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress45" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue45" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b46">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear46" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress46" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue46" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b47">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear47" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress47" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue47" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b48">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear48" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress48" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue48" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <!-- grid row 5 -->

                <!-- grid row 6 -->
                <div class="col-1 b49">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear49" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress49" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue49" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b50">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear50" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress50" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue50" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b51">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear51" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress51" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue51" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b52">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear52" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress52" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue52" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b53">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear53" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress53" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue53" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b54">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear54" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress54" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue54" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b55">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear55" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress55" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue55" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b56">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear56" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress56" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue56" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b57">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear57" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress57" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue57" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b58">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear58" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress58" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue58" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b59">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear59" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress59" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue59" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b60">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear60" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress60" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue60" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <!-- grid row 6 -->

                <!-- grid row 7 -->
                <div class="col-1 b61">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear61" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress61" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue61" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b62">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear62" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress62" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue62" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b63">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear63" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress63" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue63" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
                <div class="col-1 b64">
                    <div class="btns">
                    <form action="index.php" method="post">
                            <input type="submit" name="clear64" class="btn btn-success" value="CLEARED">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="progress64" class="btn btn-warning" value="PROGRESS">
                        </form>
                        <form action="index.php" method="post">
                            <input type="submit" name="issue64" class="btn btn-danger" value="ISSUES">
                        </form>
                    </div>
                </div>
              

            
                
                <!-- grid row 9 -->
                
                
                <!-- grid row 10 -->

              
                
            </div>

        </div>
    </div>
    <!-- wrapper -->


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <!-- main js -->
    <script src="js/main.js"></script>


    <script>
        var text1 = "<?php echo $myText ?>"
        console.log(text1)

        if(text1=="cleared"){
            $('.b1').css("background-color","rgba(0,255,0,0.4)")
        }

        var text2 = "<?php echo $myText4 ?>"
        console.log(text2)

        if(text2=="progress"){
            $('.b1').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text3 = "<?php echo $myText8 ?>"
        console.log(text3)

        if(text3=="issue"){
            $('.b1').css("background-color","rgba(255, 0, 0,0.4)")
        }

// -----------------------------------------------------

        var text4 = "<?php echo $myText9 ?>"
        console.log(text4)

        if(text4=="cleared"){
            $('.b2').css("background-color","rgba(0,255,0,0.4)")
        }

        var text5 = "<?php echo $myText13 ?>"
        console.log(text5)

        if(text5=="progress"){
            $('.b2').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text6 = "<?php echo $myText17 ?>"
        console.log(text6)

        if(text6=="issue"){
            $('.b2').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------
        var text7 = "<?php echo $myText18 ?>"
        console.log(text7)

        if(text7=="cleared"){
            $('.b3').css("background-color","rgba(0,255,0,0.4)")
        }

        var text8 = "<?php echo $myText22 ?>"
        console.log(text8)

        if(text8=="progress"){
            $('.b3').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text9 = "<?php echo $myText26 ?>"
        console.log(text9)

        if(text9=="issue"){
            $('.b3').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text10 = "<?php echo $myText27 ?>"
        console.log(text10)

        if(text10=="cleared"){
            $('.b4').css("background-color","rgba(0,255,0,0.4)")
        }

        var text11 = "<?php echo $myText31 ?>"
        console.log(text11)

        if(text11=="progress"){
            $('.b4').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text12 = "<?php echo $myText35 ?>"
        console.log(text12)

        if(text12=="issue"){
            $('.b4').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text13 = "<?php echo $myText36 ?>"
        console.log(text13)

        if(text13=="cleared"){
            $('.b5').css("background-color","rgba(0,255,0,0.4)")
        }

        var text14 = "<?php echo $myText40 ?>"
        console.log(text14)

        if(text14=="progress"){
            $('.b5').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text15 = "<?php echo $myText44 ?>"
        console.log(text15)

        if(text15=="issue"){
            $('.b5').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text16 = "<?php echo $myText45 ?>"
        console.log(text16)

        if(text16=="cleared"){
            $('.b6').css("background-color","rgba(0,255,0,0.4)")
        }

        var text17 = "<?php echo $myText49 ?>"
        console.log(text17)

        if(text17=="progress"){
            $('.b6').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text18 = "<?php echo $myText53 ?>"
        console.log(text18)

        if(text18=="issue"){
            $('.b6').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text19 = "<?php echo $myText54 ?>"
        console.log(text19)

        if(text19=="cleared"){
            $('.b7').css("background-color","rgba(0,255,0,0.4)")
        }

        var text20 = "<?php echo $myText58 ?>"
        console.log(text20)

        if(text20=="progress"){
            $('.b7').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text21 = "<?php echo $myText62 ?>"
        console.log(text21)

        if(text21=="issue"){
            $('.b7').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text22 = "<?php echo $myText63 ?>"
        console.log(text22)

        if(text22=="cleared"){
            $('.b8').css("background-color","rgba(0,255,0,0.4)")
        }

        var text23 = "<?php echo $myText67 ?>"
        console.log(text23)

        if(text23=="progress"){
            $('.b8').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text24 = "<?php echo $myText71 ?>"
        console.log(text24)

        if(text24=="issue"){
            $('.b8').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text25 = "<?php echo $myText72 ?>"
        console.log(text25)

        if(text25=="cleared"){
            $('.b9').css("background-color","rgba(0,255,0,0.4)")
        }

        var text26 = "<?php echo $myText76 ?>"
        console.log(text26)

        if(text26=="progress"){
            $('.b9').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text27 = "<?php echo $myText80 ?>"
        console.log(text27)

        if(text27=="issue"){
            $('.b9').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text28 = "<?php echo $myText81 ?>"
        console.log(text28)

        if(text28=="cleared"){
            $('.b10').css("background-color","rgba(0,255,0,0.4)")
        }

        var text29 = "<?php echo $myText85 ?>"
        console.log(text29)

        if(text29=="progress"){
            $('.b10').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text30 = "<?php echo $myText89 ?>"
        console.log(text30)

        if(text30=="issue"){
            $('.b10').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text31 = "<?php echo $myText90 ?>"
        console.log(text31)

        if(text31=="cleared"){
            $('.b11').css("background-color","rgba(0,255,0,0.4)")
        }

        var text32 = "<?php echo $myText94 ?>"
        console.log(text32)

        if(text32=="progress"){
            $('.b11').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text33 = "<?php echo $myText98 ?>"
        console.log(text33)

        if(text33=="issue"){
            $('.b11').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text34 = "<?php echo $myText99 ?>"
        console.log(text34)

        if(text34=="cleared"){
            $('.b12').css("background-color","rgba(0,255,0,0.4)")
        }

        var text35 = "<?php echo $myText103 ?>"
        console.log(text35)

        if(text35=="progress"){
            $('.b12').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text36 = "<?php echo $myText107 ?>"
        console.log(text35)

        if(text36=="issue"){
            $('.b12').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text37 = "<?php echo $myText108 ?>"
        console.log(text37)

        if(text37=="cleared"){
            $('.b13').css("background-color","rgba(0,255,0,0.4)")
        }

        var text38 = "<?php echo $myText112 ?>"
        console.log(text38)

        if(text38=="progress"){
            $('.b13').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text39 = "<?php echo $myText116 ?>"
        console.log(text39)

        if(text39=="issue"){
            $('.b13').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text40 = "<?php echo $myText117 ?>"
        console.log(text40)

        if(text40=="cleared"){
            $('.b14').css("background-color","rgba(0,255,0,0.4)")
        }

        var text41 = "<?php echo $myText121 ?>"
        console.log(text41)

        if(text41=="progress"){
            $('.b14').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text42 = "<?php echo $myText125 ?>"
        console.log(text42)

        if(text42=="issue"){
            $('.b14').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text43 = "<?php echo $myText126 ?>"
        console.log(text43)

        if(text43=="cleared"){
            $('.b15').css("background-color","rgba(0,255,0,0.4)")
        }

        var text44 = "<?php echo $myText130 ?>"
        console.log(text44)

        if(text44=="progress"){
            $('.b15').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text45 = "<?php echo $myText134 ?>"
        console.log(text45)

        if(text45=="issue"){
            $('.b15').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text46 = "<?php echo $myText135 ?>"
        console.log(text46)

        if(text46=="cleared"){
            $('.b16').css("background-color","rgba(0,255,0,0.4)")
        }

        var text47 = "<?php echo $myText139 ?>"
        console.log(text47)

        if(text47=="progress"){
            $('.b16').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text48 = "<?php echo $myText143 ?>"
        console.log(text48)

        if(text48=="issue"){
            $('.b16').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
        var text49 = "<?php echo $myText144 ?>"
        console.log(text49)

        if(text49=="cleared"){
            $('.b17').css("background-color","rgba(0,255,0,0.4)")
        }

        var text50 = "<?php echo $myText148 ?>"
        console.log(text50)

        if(text50=="progress"){
            $('.b17').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text51 = "<?php echo $myText152 ?>"
        console.log(text51)

        if(text51=="issue"){
            $('.b17').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text52 = "<?php echo $myText153 ?>"
        console.log(text52)

        if(text52=="cleared"){
            $('.b18').css("background-color","rgba(0,255,0,0.4)")
        }

        var text53 = "<?php echo $myText157 ?>"
        console.log(text53)

        if(text53=="progress"){
            $('.b18').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text54 = "<?php echo $myText161 ?>"
        console.log(text54)

        if(text54=="issue"){
            $('.b18').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text55 = "<?php echo $myText162 ?>"
        console.log(text55)

        if(text55=="cleared"){
            $('.b19').css("background-color","rgba(0,255,0,0.4)")
        }

        var text56 = "<?php echo $myText166 ?>"
        console.log(text56)

        if(text56=="progress"){
            $('.b19').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text57 = "<?php echo $myText170 ?>"
        console.log(text57)

        if(text57=="issue"){
            $('.b19').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text58 = "<?php echo $myText171 ?>"
        console.log(text58)

        if(text58=="cleared"){
            $('.b20').css("background-color","rgba(0,255,0,0.4)")
        }

        var text59 = "<?php echo $myText175 ?>"
        console.log(text59)

        if(text59=="progress"){
            $('.b20').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text60 = "<?php echo $myText179 ?>"
        console.log(text60)

        if(text60=="issue"){
            $('.b20').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text61 = "<?php echo $myText180 ?>"
        console.log(text61)

        if(text61=="cleared"){
            $('.b21').css("background-color","rgba(0,255,0,0.4)")
        }

        var text62 = "<?php echo $myText184 ?>"
        console.log(text62)

        if(text62=="progress"){
            $('.b21').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text63 = "<?php echo $myText188 ?>"
        console.log(text63)

        if(text63=="issue"){
            $('.b21').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        // -----------------------------------------------------

        var text64 = "<?php echo $myText189 ?>"
        console.log(text64)

        if(text64=="cleared"){
            $('.b22').css("background-color","rgba(0,255,0,0.4)")
        }

        var text65 = "<?php echo $myText193 ?>"
        console.log(text65)

        if(text65=="progress"){
            $('.b22').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text66 = "<?php echo $myText197 ?>"
        console.log(text66)

        if(text66=="issue"){
            $('.b22').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        // -----------------------------------------------------

        var text67 = "<?php echo $myText198 ?>"
        console.log(text67)

        if(text67=="cleared"){
            $('.b23').css("background-color","rgba(0,255,0,0.4)")
        }

        var text68 = "<?php echo $myText202 ?>"
        console.log(text68)

        if(text68=="progress"){
            $('.b23').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text69 = "<?php echo $myText206 ?>"
        console.log(text69)

        if(text69=="issue"){
            $('.b23').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        // -----------------------------------------------------

        var text70 = "<?php echo $myText207 ?>"
        console.log(text70)

        if(text70=="cleared"){
            $('.b24').css("background-color","rgba(0,255,0,0.4)")
        }

        var text71 = "<?php echo $myText211 ?>"
        console.log(text71)

        if(text71=="progress"){
            $('.b24').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text72 = "<?php echo $myText215 ?>"
        console.log(text72)

        if(text72=="issue"){
            $('.b24').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text73 = "<?php echo $myText216 ?>"
        console.log(text73)

        if(text73=="cleared"){
            $('.b25').css("background-color","rgba(0,255,0,0.4)")
        }

        var text74 = "<?php echo $myText220 ?>"
        console.log(text74)

        if(text74=="progress"){
            $('.b25').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text75= "<?php echo $myText224 ?>"
        console.log(text75)

        if(text75=="issue"){
            $('.b25').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text76 = "<?php echo $myText225 ?>"
        console.log(text76)

        if(text76=="cleared"){
            $('.b26').css("background-color","rgba(0,255,0,0.4)")
        }

        var text77 = "<?php echo $myText229 ?>"
        console.log(text77)

        if(text77=="progress"){
            $('.b26').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text78= "<?php echo $myText233 ?>"
        console.log(text78)

        if(text78=="issue"){
            $('.b26').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text79 = "<?php echo $myText234 ?>"
        console.log(text79)

        if(text79=="cleared"){
            $('.b27').css("background-color","rgba(0,255,0,0.4)")
        }

        var text80 = "<?php echo $myText238 ?>"
        console.log(text80)

        if(text80=="progress"){
            $('.b27').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text81= "<?php echo $myText242 ?>"
        console.log(text81)

        if(text81=="issue"){
            $('.b27').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
        var text82 = "<?php echo $myText243 ?>"
        console.log(text82)

        if(text82=="cleared"){
            $('.b28').css("background-color","rgba(0,255,0,0.4)")
        }

        var text83 = "<?php echo $myText247 ?>"
        console.log(text83)

        if(text83=="progress"){
            $('.b28').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text84= "<?php echo $myText251 ?>"
        console.log(text84)

        if(text84=="issue"){
            $('.b28').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

          
        var text85 = "<?php echo $myText252 ?>"
        console.log(text82)

        if(text85=="cleared"){
            $('.b29').css("background-color","rgba(0,255,0,0.4)")
        }

        var text86 = "<?php echo $myText256 ?>"
        console.log(text86)

        if(text86=="progress"){
            $('.b29').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text87= "<?php echo $myText260 ?>"
        console.log(text87)

        if(text87=="issue"){
            $('.b29').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

         
        var text88 = "<?php echo $myText261 ?>"
        console.log(text88)

        if(text88=="cleared"){
            $('.b30').css("background-color","rgba(0,255,0,0.4)")
        }

        var text89 = "<?php echo $myText265 ?>"
        console.log(text89)

        if(text89=="progress"){
            $('.b30').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text90= "<?php echo $myText269 ?>"
        console.log(text90)

        if(text90=="issue"){
            $('.b30').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

         
        var text91 = "<?php echo $myText270 ?>"
        console.log(text91)

        if(text91=="cleared"){
            $('.b31').css("background-color","rgba(0,255,0,0.4)")
        }

        var text92 = "<?php echo $myText274 ?>"
        console.log(text92)

        if(text92=="progress"){
            $('.b31').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text93= "<?php echo $myText278 ?>"
        console.log(text93)

        if(text93=="issue"){
            $('.b31').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

         
        var text94 = "<?php echo $myText279 ?>"
        console.log(text94)

        if(text94=="cleared"){
            $('.b32').css("background-color","rgba(0,255,0,0.4)")
        }

        var text95 = "<?php echo $myText283 ?>"
        console.log(text95)

        if(text95=="progress"){
            $('.b32').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text96= "<?php echo $myText287 ?>"
        console.log(text96)

        if(text96=="issue"){
            $('.b32').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text97 = "<?php echo $myText288 ?>"
        console.log(text97)

        if(text97=="cleared"){
            $('.b33').css("background-color","rgba(0,255,0,0.4)")
        }

        var text98 = "<?php echo $myText292 ?>"
        console.log(text98)

        if(text98=="progress"){
            $('.b33').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text99= "<?php echo $myText296 ?>"
        console.log(text99)

        if(text99=="issue"){
            $('.b33').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text100 = "<?php echo $myText297 ?>"
        console.log(text100)

        if(text100=="cleared"){
            $('.b34').css("background-color","rgba(0,255,0,0.4)")
        }

        var text101 = "<?php echo $myText301 ?>"
        console.log(text101)

        if(text101=="progress"){
            $('.b34').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text102= "<?php echo $myText305 ?>"
        console.log(text102)

        if(text102=="issue"){
            $('.b34').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text103 = "<?php echo $myText306 ?>"
        console.log(text103)

        if(text103=="cleared"){
            $('.b35').css("background-color","rgba(0,255,0,0.4)")
        }

        var text104 = "<?php echo $myText310 ?>"
        console.log(text104)

        if(text104=="progress"){
            $('.b35').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text105= "<?php echo $myText314 ?>"
        console.log(text105)

        if(text105=="issue"){
            $('.b35').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text106 = "<?php echo $myText315 ?>"
        console.log(text106)

        if(text106=="cleared"){
            $('.b36').css("background-color","rgba(0,255,0,0.4)")
        }

        var text107 = "<?php echo $myText319 ?>"
        console.log(text107)

        if(text107=="progress"){
            $('.b36').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text108= "<?php echo $myText323 ?>"
        console.log(text108)

        if(text108=="issue"){
            $('.b36').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text109 = "<?php echo $myText324 ?>"
        console.log(text109)

        if(text109=="cleared"){
            $('.b37').css("background-color","rgba(0,255,0,0.4)")
        }

        var text110 = "<?php echo $myText328 ?>"
        console.log(text110)

        if(text110=="progress"){
            $('.b37').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text111= "<?php echo $myText332 ?>"
        console.log(text111)

        if(text111=="issue"){
            $('.b37').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text112 = "<?php echo $myText333 ?>"
        console.log(text112)

        if(text112=="cleared"){
            $('.b38').css("background-color","rgba(0,255,0,0.4)")
        }

        var text113 = "<?php echo $myText337 ?>"
        console.log(text113)

        if(text113=="progress"){
            $('.b38').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text114= "<?php echo $myText341 ?>"
        console.log(text114)

        if(text114=="issue"){
            $('.b38').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text115 = "<?php echo $myText342 ?>"
        console.log(text115)

        if(text115=="cleared"){
            $('.b39').css("background-color","rgba(0,255,0,0.4)")
        }

        var text116 = "<?php echo $myText346 ?>"
        console.log(text116)

        if(text116=="progress"){
            $('.b39').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text117= "<?php echo $myText350 ?>"
        console.log(text117)

        if(text117=="issue"){
            $('.b39').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text118 = "<?php echo $myText351 ?>"
        console.log(text118)

        if(text118=="cleared"){
            $('.b40').css("background-color","rgba(0,255,0,0.4)")
        }

        var text119 = "<?php echo $myText355 ?>"
        console.log(text119)

        if(text119=="progress"){
            $('.b40').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text120= "<?php echo $myText359 ?>"
        console.log(text120)

        if(text120=="issue"){
            $('.b40').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text121 = "<?php echo $myText360 ?>"
        console.log(text121)

        if(text121=="cleared"){
            $('.b41').css("background-color","rgba(0,255,0,0.4)")
        }

        var text122 = "<?php echo $myText364 ?>"
        console.log(text122)

        if(text122=="progress"){
            $('.b41').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text123= "<?php echo $myText368 ?>"
        console.log(text123)

        if(text123=="issue"){
            $('.b41').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------
        var text124 = "<?php echo $myText369 ?>"
        console.log(text124)

        if(text124=="cleared"){
            $('.b42').css("background-color","rgba(0,255,0,0.4)")
        }

        var text125 = "<?php echo $myText373 ?>"
        console.log(text125)

        if(text125=="progress"){
            $('.b42').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text126= "<?php echo $myText377 ?>"
        console.log(text126)

        if(text126=="issue"){
            $('.b42').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text127 = "<?php echo $myText378 ?>"
        console.log(text127)

        if(text127=="cleared"){
            $('.b43').css("background-color","rgba(0,255,0,0.4)")
        }

        var text128 = "<?php echo $myText382 ?>"
        console.log(text128)

        if(text128=="progress"){
            $('.b43').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text129= "<?php echo $myText386 ?>"
        console.log(text129)

        if(text129=="issue"){
            $('.b43').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text130 = "<?php echo $myText387 ?>"
        console.log(text130)

        if(text130=="cleared"){
            $('.b44').css("background-color","rgba(0,255,0,0.4)")
        }

        var text131 = "<?php echo $myText391 ?>"
        console.log(text131)

        if(text131=="progress"){
            $('.b44').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text132= "<?php echo $myText395 ?>"
        console.log(text132)

        if(text132=="issue"){
            $('.b44').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text133 = "<?php echo $myText396 ?>"
        console.log(text133)

        if(text133=="cleared"){
            $('.b45').css("background-color","rgba(0,255,0,0.4)")
        }

        var text134 = "<?php echo $myText400 ?>"
        console.log(text134)

        if(text134=="progress"){
            $('.b45').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text135= "<?php echo $myText404 ?>"
        console.log(text135)

        if(text135=="issue"){
            $('.b45').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text136 = "<?php echo $myText405 ?>"
        console.log(text136)

        if(text136=="cleared"){
            $('.b46').css("background-color","rgba(0,255,0,0.4)")
        }

        var text137 = "<?php echo $myText409 ?>"
        console.log(text137)

        if(text137=="progress"){
            $('.b46').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text138= "<?php echo $myText413 ?>"
        console.log(text138)

        if(text138=="issue"){
            $('.b46').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text139 = "<?php echo $myText414 ?>"
        console.log(text139)

        if(text139=="cleared"){
            $('.b47').css("background-color","rgba(0,255,0,0.4)")
        }

        var text140 = "<?php echo $myText418 ?>"
        console.log(text140)

        if(text140=="progress"){
            $('.b47').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text141= "<?php echo $myText422 ?>"
        console.log(text141)

        if(text141=="issue"){
            $('.b47').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text142 = "<?php echo $myText423 ?>"
        console.log(text142)

        if(text142=="cleared"){
            $('.b48').css("background-color","rgba(0,255,0,0.4)")
        }

        var text143 = "<?php echo $myText427 ?>"
        console.log(text143)

        if(text143=="progress"){
            $('.b48').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text144= "<?php echo $myText431 ?>"
        console.log(text144)

        if(text144=="issue"){
            $('.b48').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
        var text145 = "<?php echo $myText432 ?>"
        console.log(text145)

        if(text145=="cleared"){
            $('.b49').css("background-color","rgba(0,255,0,0.4)")
        }

        var text146 = "<?php echo $myText436 ?>"
        console.log(text146)

        if(text146=="progress"){
            $('.b49').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text147= "<?php echo $myText440 ?>"
        console.log(text147)

        if(text147=="issue"){
            $('.b49').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
        var text148 = "<?php echo $myText441 ?>"
        console.log(text148)

        if(text148=="cleared"){
            $('.b50').css("background-color","rgba(0,255,0,0.4)")
        }

        var text149 = "<?php echo $myText445 ?>"
        console.log(text149)

        if(text149=="progress"){
            $('.b50').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text150= "<?php echo $myText449 ?>"
        console.log(text150)

        if(text150=="issue"){
            $('.b50').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
        var text151 = "<?php echo $myText450 ?>"
        console.log(text151)

        if(text151=="cleared"){
            $('.b51').css("background-color","rgba(0,255,0,0.4)")
        }

        var text152 = "<?php echo $myText454 ?>"
        console.log(text152)

        if(text152=="progress"){
            $('.b51').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text153= "<?php echo $myText458 ?>"
        console.log(text153)

        if(text153=="issue"){
            $('.b51').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text154 = "<?php echo $myText459 ?>"
        console.log(text154)

        if(text154=="cleared"){
            $('.b52').css("background-color","rgba(0,255,0,0.4)")
        }

        var text155 = "<?php echo $myText463 ?>"
        console.log(text155)

        if(text155=="progress"){
            $('.b52').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text156= "<?php echo $myText467 ?>"
        console.log(text156)

        if(text156=="issue"){
            $('.b52').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text157 = "<?php echo $myText468 ?>"
        console.log(text157)

        if(text157=="cleared"){
            $('.b53').css("background-color","rgba(0,255,0,0.4)")
        }

        var text158 = "<?php echo $myText472 ?>"
        console.log(text158)

        if(text158=="progress"){
            $('.b53').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text159= "<?php echo $myText476 ?>"
        console.log(text159)

        if(text159=="issue"){
            $('.b53').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text160 = "<?php echo $myText477 ?>"
        console.log(text160)

        if(text160=="cleared"){
            $('.b54').css("background-color","rgba(0,255,0,0.4)")
        }

        var text161 = "<?php echo $myText481 ?>"
        console.log(text161)

        if(text161=="progress"){
            $('.b54').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text162= "<?php echo $myText485 ?>"
        console.log(text162)

        if(text162=="issue"){
            $('.b54').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text163 = "<?php echo $myText486 ?>"
        console.log(text163)

        if(text163=="cleared"){
            $('.b55').css("background-color","rgba(0,255,0,0.4)")
        }

        var text164 = "<?php echo $myText490 ?>"
        console.log(text164)

        if(text164=="progress"){
            $('.b55').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text165= "<?php echo $myText494 ?>"
        console.log(text165)

        if(text165=="issue"){
            $('.b55').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
        var text166 = "<?php echo $myText495 ?>"
        console.log(text166)

        if(text166=="cleared"){
            $('.b56').css("background-color","rgba(0,255,0,0.4)")
        }

        var text167 = "<?php echo $myText499 ?>"
        console.log(text167)

        if(text167=="progress"){
            $('.b56').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text168= "<?php echo $myText503 ?>"
        console.log(text168)

        if(text168=="issue"){
            $('.b56').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

            
        var text169 = "<?php echo $myText504 ?>"
        console.log(text169)

        if(text169=="cleared"){
            $('.b57').css("background-color","rgba(0,255,0,0.4)")
        }

        var text170 = "<?php echo $myText508 ?>"
        console.log(text170)

        if(text170=="progress"){
            $('.b57').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text171= "<?php echo $myText512 ?>"
        console.log(text171)

        if(text171=="issue"){
            $('.b57').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text172 = "<?php echo $myText513 ?>"
        console.log(text172)

        if(text172=="cleared"){
            $('.b58').css("background-color","rgba(0,255,0,0.4)")
        }

        var text173 = "<?php echo $myText517 ?>"
        console.log(text173)

        if(text173=="progress"){
            $('.b58').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text174= "<?php echo $myText521 ?>"
        console.log(text174)

        if(text174=="issue"){
            $('.b58').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------
        var text175 = "<?php echo $myText522 ?>"
        console.log(text175)

        if(text175=="cleared"){
            $('.b59').css("background-color","rgba(0,255,0,0.4)")
        }

        var text176 = "<?php echo $myText526 ?>"
        console.log(text176)

        if(text176=="progress"){
            $('.b59').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text177= "<?php echo $myText530 ?>"
        console.log(text177)

        if(text177=="issue"){
            $('.b59').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------
        var text178 = "<?php echo $myText531 ?>"
        console.log(text178)

        if(text178=="cleared"){
            $('.b60').css("background-color","rgba(0,255,0,0.4)")
        }

        var text179 = "<?php echo $myText535 ?>"
        console.log(text179)

        if(text179=="progress"){
            $('.b60').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text180= "<?php echo $myText539 ?>"
        console.log(text180)

        if(text180=="issue"){
            $('.b60').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text181 = "<?php echo $myText540 ?>"
        console.log(text181)

        if(text181=="cleared"){
            $('.b61').css("background-color","rgba(0,255,0,0.4)")
        }

        var text182 = "<?php echo $myText544 ?>"
        console.log(text182)

        if(text182=="progress"){
            $('.b61').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text183= "<?php echo $myText548 ?>"
        console.log(text183)

        if(text183=="issue"){
            $('.b61').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text184 = "<?php echo $myText549 ?>"
        console.log(text184)

        if(text184=="cleared"){
            $('.b62').css("background-color","rgba(0,255,0,0.4)")
        }

        var text185 = "<?php echo $myText553 ?>"
        console.log(text185)

        if(text185=="progress"){
            $('.b62').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text186= "<?php echo $myText557 ?>"
        console.log(text186)

        if(text186=="issue"){
            $('.b62').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text187 = "<?php echo $myText558 ?>"
        console.log(text187)

        if(text187=="cleared"){
            $('.b63').css("background-color","rgba(0,255,0,0.4)")
        }

        var text188 = "<?php echo $myText563 ?>"
        console.log(text188)

        if(text188=="progress"){
            $('.b63').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text189= "<?php echo $myText566 ?>"
        console.log(text189)

        if(text189=="issue"){
            $('.b63').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        var text190 = "<?php echo $myText567 ?>"
        console.log(text190)

        if(text190=="cleared"){
            $('.b64').css("background-color","rgba(0,255,0,0.4)")
        }

        var text191 = "<?php echo $myText572 ?>"
        console.log(text191)

        if(text191=="progress"){
            $('.b64').css("background-color","rgba(255, 255, 0,0.4)")
        }

        var text192= "<?php echo $myText575 ?>"
        console.log(text192)

        if(text192=="issue"){
            $('.b64').css("background-color","rgba(255, 0, 0,0.4)")
        }

        // -----------------------------------------------------

        
    </script>



  </body>
</html>
