<!-- update feed -->
<div class="container mq">
    <div class="row mar-right">
        <div class="update">
            <div class="button">
                <p style="padding: 1px 4px;line-height: 33px;font-size:14px;" >Latest News</p>
            </div>
            <div class="scroll">
                <div class="marquee" data-duration='15000'>
					<?php foreach ($latest_news as $key => $news) { ?>
					<i style="color:#C50405;" class="fa fa-chevron-circle-right"></i> <a target="_blank" style="font-weight:bold;" href="<?php echo base_url('home/news_update?id='.$news->id);?>"><?php echo $news->latest_news_title;?></a> &nbsp; &nbsp;
                    <?php } ?>							
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main body -->
<div class="container">
    <div class="row main">

