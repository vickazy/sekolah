<div class="content">

    <?php $this->load->view('frontend/element/vcontentleft'); ?>
    <div class="center">
        <div class="content_center"></div>
        <h6>ARTIKEL TERBARU</h6>
        <?php
        if(isset($posting)){
           foreach($posting as $row){
               ?>


            <h3>
                <?php echo $row->title_posting; ?>
            </h3>
            <p style="text-indent: 20px">
                <?php echo $row->note_posting; ?>
            </p>


               <?php
           }
        }?>

        <div class="ajaxurl"></div>
    </div>

    <?php $this->load->view('frontend/element/vcontentright'); ?>

</div>
