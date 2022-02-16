
   <section class="bg-overlay">

<?php require 'views/partials/header.view.php' ?>
     


<div class="container">
        <product></product>
    </div>





        <div class="container">
    
        <div class="row">
            <div class="col space_above_content"></div>
        </div>

        <div class="row mb-4 ">
            <div class="col-md-4 "></div>
            <div class="col-md-4 text-white text-center "><h1 class="text-nowrap display-1">De productendetails</h1></div>
            <div class="col-md-4"></div>
        </div>
     
        <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-md-4 pt-3">
            
                <div class="card border-0">
                    
                    <img src="<?= '/public/images/webshop/' . $product->image ?> " class="img_items card-img-top shadow rounded-top" alt="<?= $product->image ?>">
                
                    <div class="card_body_items card-body">
                        <h5 class="card-title fs-3 fw-bold"><?= $product->name ?></h5>
                        <p class="card-text"><?= $product->description ?></p>
                        <p class="card-text"> € <?= $product->price ?></p>
                        <p>Voorraad: <?= $product->stock ?></p>
                        <div class="row">                       
                            <!-- <input type="button" class="col-md-4 fs-5 btn position-absolute bottom-0 start-0 my-1 mx-1" :disabled="product.stock === 0" @click="addToCart(product)" value="Order">                 -->
                        </div>
                         <li>
           
            
        </li>

                    </div>
                </div>
            </div>
            
            <?php endforeach ?> 

            
        </div>

    </div>
</section>
<?php require 'views/partials/footer.view.php' ?>
