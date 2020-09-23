<div class="top-line">
    <p class="top-line-text">Your Courses</p>
</div>

<div class="content-w">
    <div class="container">
    <div style="padding-top:2.5%" class="wp-block-atomic-blocks-ab-container ab-block-container">
        <div class="ab-container-inside"><div class="ab-container-content" style="max-width:903px">
                <h3 class="has-text-color has-text-align-center" style="color:#535353">Your Courses Dashboard</h3>
                <p class="has-text-color has-text-align-center has-small-font-size letter-style">Below are the courses that you are currently enrolled in. Click the button on the course that you wish to continue.</p>
            </div>
    </div>
    </div>

    </div>
</div>

<?php foreach ($product as $row): ?>
<div class="container-grey">
    <h4 class="sub-text-color has-text-color pt-5 ml-5"><strong><?php echo $row ?></strong></h4>
    <p  class="has-text-color letter-style has-small-font-size w-50 ml-5">The Hot Work program has 4 segments and covers the core concepts behind business communication and technical writing while improving the overall writing quality of the student. Lessons include:</p>
    <div class="wp-block-button btn-start float-right "><a href="http://localhost:10008/hot-work-online-class/" class="wp-block-button__link has-background" style="background-color:#003366">Start Course</a></div>
</div>
<?php endforeach; ?>
