

<?php if (isset($products_array)) { ?>
    <div class="top-line">
        <p class="top-line-text">Your Courses</p>
    </div>

    <div style="padding-top:2.5%" class="wp-block-atomic-blocks-ab-container ab-block-container">
        <div class="ab-container-inside"><div class="ab-container-content" style="max-width:903px">
                <h3 class="has-text-color has-text-align-center" style="color:#535353">Online Program Overview</h3>

                <p style="color:#535353" class="has-text-color has-text-align-center has-small-font-size">Online – these programs allow you to learn anytime, anywhere, at your pace. Enroll in Intro to Construction, Blueprint Reading, Basic Math, Business Literacy, or Career Readiness Bootcamp to gain critical trade and career development skills from the comfort of your home. Click the buttons below to view and sign up for courses.</p>
            </div>
        </div>
    </div>
    <div class="row">
   <?php foreach ($products_array as $element): ?>
   <div class="col-4">
       <div id="myGroup" style="padding-top:1%" class="wp-block-atomic-blocks-ab-container ab-block-container">
           <div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner" style="text-align:center">
                   <h5 class="has-text-color has-text-align-center font-weight-bold" style="color:#003366"><?php echo $element['category_name'] ?></h5>
                   <div class="wp-block-buttons aligncenter btn-btn-select">
                       <div class="wp-block-button btn-btn-wdth"><a class="wp-block-button__link has-background"
                                                                    data-toggle="collapse"
                                                                    href="#collapseExamplet_<?php echo $element['category_id']?>"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="collapseExample_<?php echo $element['category_id']?>"
                                                                    data-parent="#myGroup"
                                                                    style="background-color:#003366; width: 250px;">View Courses</a></div>
                   </div>
               </div>
           </div>
   </div>
   </div>

    <?php endforeach; ?>
    </div>
    <?php foreach ($products_array as $element): ?>
        <div class="container category__product">
    <div class="collapse" id="collapseExamplet_<?php echo $element['category_id']?>">
        <?php foreach ($element['products'] as $product): ?>
                <hr>
                <div class="container mt-5">
                    <div class="row">
                        <img src="http://localhost:10008/wp-content/uploads/other-course-thumb-6.jpg" alt="" class="wp-image-32977"/>
                        <div class="col-sm">
                            <div class="title-content h4">
                            <p><?php echo $product['name'] ?></p>
                            </div>
                            <div class="row">
                                <div class="description-content ml-4">
                                    <p><?php echo $product['short-description'] ?></p>
                                    <?php echo $product['description'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                           <a href="http://localhost:10008/cart/?add-to-cart=<?php echo $product['course-id'] ?>"> <img style="width: 25px;" src="http://localhost:10008/wp-content/uploads/shopping-cart-icon.png" alt="" class="wp-image-32976 float-right bg-coolor"/> </a></div>
                    </div>
                </div>

    <?php endforeach; ?>
    </div>
        </div>
    <?php endforeach; ?>
<?php } ?>

