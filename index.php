<?php
require_once 'app/start.php';
use Cart\Workshop;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title>Document</title>
</head>
<style type="text/css">

</style>
<body>
    <div class="container">
        <pre style="padding:0px; margin:0px;">
            <h2 style="margin-top:0px; padding-top:0; padding-left: 5px;">
                Add to cart functionality in php and mysql with CCAvenue payment
                gateway integration
            </h2>
        </pre>

        <div class="row">
        <?php
            $objRequest = new Workshop();
            $workshops = $objRequest->getAllWorkshops();
            foreach ($workshops as $key => $workshop) {
        ?>
            <div class="col-sm-6 col-md-3 ">
                <div class="thumbnail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="<?=$workshop['image'];?>"
                        data-target="#image-gallery">
                        <img class="img-thumbnail"
                            src="app/resources/images/<?=$workshop['image'];?>"
                            alt="<?=$workshop['image'];?>" style="width:200px; height:200px;">
                    </a>
                    <p>
                        <?=substr($workshop['description'], 0, 60) . '...';?>
                    </p>
                    <div class="row">
                        <div class="col-sm-6 com-md-6">
                            <strong>
                                <span style="font-size:18px; "> &#x20b9;
                                </span><?=number_format($workshop['price'], 2);?>
                            </strong>
                        </div>
                        <div class="col-sm-6 com-md-6">
                            <button class="btn btn-success" onclick="addToCart(<?=$workshop['id'];?>)"
                                role="button"> Book Seat
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>

    <div style="positon: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            Kevin Montalvo Flores
        </strong>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>
