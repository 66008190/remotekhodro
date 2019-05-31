
<section id="page-title" class="page-title-right rtl">

    <div class="container clearfix">
        <h1><?=$export['cat_alt']?></h1>
        <span><?=$export['cat_meta_description']?></span>
        <ol class="breadcrumb">
            <li><a href="<?=RELA_DIR?>">خانه</a></li>
            <li><a href="<?=RELA_DIR?>services/<?=SERVICES_SLUG?>">خدمات</a></li>
            <li class="active"><?=$export['cat_alt']?></li>
        </ol>
    </div>

</section>


<section id="" class=" cloud1 clearfix rtl"  >
    <div class="content-wrap">

        <div class="container clearfix">

            <div class="row">


                <div class="col-md-12">


                <!-- Post Content
                ============================================= -->
                <div class="  ">
                    <div id="portfolio" class="portfolio grid-container clearfix">
                        <? foreach($export['export']['list'] as $k => $v):?>
                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="<?=RELA_DIR?>statics/services/<?=$v['image']?>" alt="<?=$v['title']?>">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="<?=RELA_DIR?>statics/services/<?=$v['image']?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="<?=RELA_DIR?>services/<?=$v['category_id']?>/<?=$v['Services_id']?>/<?=$v['title']?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="<?=RELA_DIR?>services/<?=$v['category_id']?>/<?=$v['Services_id']?>/<?=$v['title']?>"><?=$v['title']?></a></h3>
                                <span><?=$v['brief_description']?></span>
                            </div>
                        </article>
                        <? endforeach;?>

                    </div>






        </div>
                </div>
            </div>
        </div>
    </div>


    </section><!-- #content end -->
