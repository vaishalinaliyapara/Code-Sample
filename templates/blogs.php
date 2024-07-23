<?php
/**
 * Page template for Blogs
 *
 * @package lolly
 */

get_header(); ?>
<style>
    a.c-button-default.jetboost-pagination-next-wr59.w-button.load_more_btn {
    color: #fff;
    text-align: center;
    letter-spacing: -.03em;
    background-color: #a597ff;
    border: 1px solid #a597ff;
    border-radius: 100vh;
    justify-content: center;
    padding: 1em 4em 0.875em;
    font-family: roc-grotesk-wide,sans-serif;
    font-weight: 600;
    line-height: 1.5em;
    transition: all .3s ease-out;
    display: flex;
    width: 240px;
}

.button-wrapper.is-center {
    justify-content: center;
}
.button-wrapper {
    grid-column-gap: 16px;
    grid-row-gap: 16px;
    display: flex;
    margin-top: 40px;
}
.blogmain_component-wrapper.is--margin-bottom-64px {
    margin-bottom: 64px;
}
#w-node-_1c628249-de13-ea72-2d9c-d868229dd4e6-ee70e734 {
    grid-area: 1/1/2/3;
}
.filters_form-block {
    width: 100%;
    flex: none;
    margin-bottom: 0;
}
.filters_form {
    z-index: 999;
}
.filters_filters-header {
    grid-column-gap: 2rem;
    grid-row-gap: 2rem;
    justify-content: space-between;
    align-items: center;
    display: flex;
    position: relative;
}
.filters_filters-header-left {
    flex: 1;
    grid-template-rows: auto;
    grid-template-columns: max-content max-content;
    grid-auto-columns: 1fr;
    justify-content: space-between;
    align-items: center;
    display: flex;
}
.filters_button-wrapper {
    color: #fff;
    position: relative;
}
.filters_filters-button {
    height: 54px;
    min-width: 142px;
    grid-column-gap: 14.88px;
    color: #fff;
    background-color: #a597ff;
    background-image: url(https://assets-global.website-files.com/63d671d…/63fffa9…_filter-arrow.svg);
    background-position: 90% 52%;
    background-repeat: no-repeat;
    background-size: auto;
    border: 1px solid #a597ff;
    border-radius: 100vh;
    align-items: center;
    margin-bottom: 0;
    padding: 16px 40px 14px 30px;
    font-family: roc-grotesk-wide,sans-serif;
    font-weight: 600;
    display: flex;
    position: relative;
}
.w-input, .w-select, a {
    color: inherit;
    text-decoration: inherit;
    font-size: inherit;
    line-height: inherit;
}

.l-hidden-filter {
    display: none;
}

element.style {
}
.filters_keyword-search {
    max-width: 25rem;
    flex: 1;
    align-items: center;
    display: flex;
    position: relative;
}
.form-input.is--search-input {
    max-height: none;
    min-height: 0;
    color: #000;
    background-image: url(https://assets-global.website-files.com/63d671d…/63ed7e7…_search-icon.svg);
    background-position: 30px;
    background-repeat: no-repeat;
    background-size: auto;
    border-color: #7116e4;
    border-radius: 16px;
    padding: 16px 30px 14px 64px;
    font-family: roc-grotesk-wide,sans-serif;
    transition: all .3s;
}
.w-form-fail {
    padding: 20px;
    color: white;
}
</style>
<?php $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'hide_empty'       => 1
) ); ?>
<main id="blogs" class="bg-black">
    <section class="blog_main">
        <div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
            <div class="row">
                <div clas="col-12">
                    <h1>The Lolly.com <span>Blog</span></h1>
                    <p>Learn from the latest digital advertising trends and insights, brought to you by our industry
                        experts.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container is--width-1700px">
        <div class="l-banner-blog-wrapper">
            <div class="l-banner-blog__collection w-dyn-list">
                <div role="list" class="l-banner-blog__list w-dyn-items">
                   <?php  $temp = $wp_query; $wp_query= null;
                    $args = array(
                        'posts_per_page'   => 3,
                        'post_type'     => 'post',
                        'post_status' => 'publish',
                        'meta_query'    => array(
                            array(
                                'key'       => 'is_featured',
                                'value'     => true,
                                'compare'   => '=',
                            ),
                        )
                    );
                    $wp_query = new WP_Query(); $wp_query->query($args);
                    if($wp_query->have_posts()):?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
							$post_date = get_the_date( 'F j, Y' );
                            $timed = get_field('time_duration',get_the_ID());

						?>
                    <div role="listitem" class="l-banner-blog__item w-dyn-item"><a
                            href="<?php the_permalink(); ?>" class="l-item__link-block w-inline-block"><img
                                src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>"
                                alt=""
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 91vw, (max-width: 991px) 90vw, 48vw"
                                class="c-link-block__image">
                            <div class="l-link-block__bottom-wrapper">
                                <div class="l-bottom__time-wrapper">
                                    <div class="c-text-time"><?php echo ($timed != "")  ? $timed : 2 ;?></div>
                                    <div class="c-text-time">MIN&nbsp;READ</div>
                                </div>
                                <h2 class="c-heading-2"><?php the_title(); ?></h2>
                                <p class="c-paragraph"><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                    <!-- <div role="listitem" class="l-banner-blog__item w-dyn-item"><a
                            href="/blog/tiktok-is-launching-into-general-availability-today"
                            class="l-item__link-block w-inline-block"><img
                                src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/6450c437a3e63febe7b0219e_tik-tok-GA.jpg"
                                alt=""
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 91vw, (max-width: 991px) 90vw, 48vw"
                                srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/6450c437a3e63febe7b0219e_tik-tok-GA-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/6450c437a3e63febe7b0219e_tik-tok-GA-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/6450c437a3e63febe7b0219e_tik-tok-GA-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/6450c437a3e63febe7b0219e_tik-tok-GA-p-1600.jpg 1600w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/6450c437a3e63febe7b0219e_tik-tok-GA.jpg 2979w"
                                class="c-link-block__image">
                            <div class="l-link-block__bottom-wrapper">
                                <div class="l-bottom__time-wrapper">
                                    <div class="c-text-time">2</div>
                                    <div class="c-text-time">MIN&nbsp;READ</div>
                                </div>
                                <h2 class="c-heading-2">TikTok is launching
                                    into General Availability today!</h2>
                                <p class="c-paragraph">We are thrilled to
                                    announce that Smartly.io for TikTok is now generally available! With Smartly.io, you
                                    can streamline TikTok workflows and manage your campaigns across ad accounts and
                                    platforms, saving you time and resources.</p>
                            </div>
                        </a></div> -->
                    <!-- <div role="listitem" class="l-banner-blog__item w-dyn-item"><a
                            href="/blog/tiktok-creative-best-practice-the-power-of-tutorials"
                            class="l-item__link-block w-inline-block"><img
                                src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64492daa2bee8a3c597de43a_tiktok-blog3.jpg"
                                alt=""
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 91vw, (max-width: 991px) 90vw, 48vw"
                                srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64492daa2bee8a3c597de43a_tiktok-blog3-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64492daa2bee8a3c597de43a_tiktok-blog3-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64492daa2bee8a3c597de43a_tiktok-blog3-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64492daa2bee8a3c597de43a_tiktok-blog3.jpg 1787w"
                                class="c-link-block__image">
                            <div class="l-link-block__bottom-wrapper">
                                <div class="l-bottom__time-wrapper">
                                    <div class="c-text-time">2</div>
                                    <div class="c-text-time">MIN&nbsp;READ</div>
                                </div>
                                <h2 class="c-heading-2">TikTok Creative Best
                                    Practice: The Power of Tutorials</h2>
                                <p class="c-paragraph">Not dissimilar to a try
                                    on or an unboxing, tutorial and demonstration videos are popular because they’re
                                    believable and drive consideration.&nbsp;</p>
                            </div>
                        </a></div> -->

                        <?php endwhile;?>
                        <?php endif; ?>

			        <?php wp_reset_postdata(); ?>
                
                    </div>
            </div>
        </div>
    </div>
    
  

    <div class="l-section">
        <div class="container">
            <div class="w-layout-grid blogmain_component-wrapper is--margin-bottom-64px">
                <div id="w-node-_1c628249-de13-ea72-2d9c-d868229dd4e6-ee70e734" class="filters_form-block w-form">
                    <form id="wf-form-Filter-6" name="wf-form-Filter-6" data-name="Filter 6" method="get" fs-cmsfilter-element="filters" class="filters_form" data-wf-page-id="6480490871747371ee70e734" data-wf-element-id="1c628249-de13-ea72-2d9c-d868229dd4e7" aria-label="Filter 6" __bizdiag="-861253600" __biza="WJ__">
                        <div class="filters_filters-header">
                            <div class="filters_filters-header-left">
                            <div class="filters_button-wrapper">
                                <select id="cat_id" onchange="fn_filter(this.value)" name="cat_id" data-name="cat_id" class="filters_filters-button jetboost-select-26mm w-select">
                                    <option value="" class="jetboost-preset-option">Filter</option>
                                    <?php  foreach($categories as $category) { ?>
                                        <option value="<?php echo $category->term_id?>"><?php echo $category->name?></option>
                                    <?php } ?>
                                    
                                </select>
                                <!-- <div class="l-hidden-filter jetboost-filter-26mm w-dyn-list">
                                    <div role="list" class="w-dyn-items">
                                        <div role="listitem" class="w-dyn-item">
                                        <div class="w-embed"><input type="hidden" class="jetboost-list-item" value="press-release"></div>
                                        <div class="c-text-block">Press Release</div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="filters_keyword-search">
                                <input onkeyup="fn_filter('',this.value)" onkeydown="fn_filter('',this.value)" onchange="fn_filter('',this.value)" type="text" class="form-input is--search-input jetboost-list-search-input-2v47 w-input" maxlength="256" name="keyword" fs-cmsfilter-field="*" data-name="Field 3" placeholder="Search" fs-cmsfilter-debounce="200" id="search">
                            </div>
                            </div>
                        </div>
                        <input type="submit" style="display: none;">
                    </form>
                    <!-- <div class="w-form-done" tabindex="-1" role="region" aria-label="Filter 6 success">
                        <div>Thank you! Your submission has been received!</div>
                    </div> -->
                    <div class="w-form-fail no-record" tabindex="-1" role="region" aria-label="Filter 6 failure" style="display: none;">
                        <div>No record found!</div>
                    </div>
                </div>
            </div>

            <div class="l-margin-bottom-80px">
                <div class="blogmain_component-wrapper">
                    <div class="blog_highlight">
                        <div class="jetboost-list-wrapper">
                        <div class="blog_list apend_blogs">
                            <?php  $temp = $wp_query; $wp_query= null;
                            $args = array(
                                'posts_per_page'   => 6,
                                'post_type'     => 'post',
                                'post_status' => 'publish',
                            ); 
                            $wp_query = new WP_Query(); $wp_query->query($args);
                            if($wp_query->have_posts()):?>
                            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
                                    $post_date = get_the_date( 'F j, Y' );
                                    $timed = get_field('time_duration',get_the_ID());

                                ?>
                                <div class="w-dyn-item">
                                    <a href="<?php the_permalink(); ?>"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div><?php echo ($timed != "")  ? $timed : 2 ;?></div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3"><?php the_title(); ?></h3>
                                            </div>
                                            <p class="c-paragraph">
                                            <?php the_excerpt(); ?></p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <?php endwhile;?>
                               
                                <?php endif; ?>

                                <?php wp_reset_postdata(); ?>
                                <?php /*
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div>
                                <div class="w-dyn-item">
                                    <a href="/blog/tiktok-creative-best-practice-the-unboxing-videos"
                                        class="bloglist_item w-inline-block">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg"
                                                    loading="lazy" alt=""
                                                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, 244px"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/643eaab9be8fd80041a854ba_tiktok-blog-2.jpg 2000w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-3">TikTok Creative Best Practice: The Unboxing
                                                    Videos</h3>
                                            </div>
                                            <p class="c-paragraph">
                                                Unboxing and Try On videos are meant to showcase tangible products in a
                                                real-life, indisputably believable context. Communities on social
                                                platforms are already inclined to advocate for products they love, so,
                                                like testimonials, unboxing videos help to establish trust and drive
                                                consideration of a product.</p>
                                            <div class="blog16_button-wrapper">
                                                <div class="l-link__read-more">
                                                    <div class="c-text-block">Read more</div>
                                                    <div class="arrow-embed w-embed"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.6484 18.8746C11.5318 18.7746 11.4734 18.6579 11.4734 18.5246C11.4734 18.3913 11.5318 18.2746 11.6484 18.1746L17.2984 12.4996H5.27344C5.12344 12.4996 5.00277 12.4539 4.91144 12.3626C4.81944 12.2706 4.77344 12.1496 4.77344 11.9996C4.77344 11.8496 4.81944 11.7286 4.91144 11.6366C5.00277 11.5453 5.12344 11.4996 5.27344 11.4996H17.2984L11.6484 5.82461C11.5318 5.72461 11.4734 5.60794 11.4734 5.47461C11.4734 5.34128 11.5318 5.22461 11.6484 5.12461C11.7484 5.02461 11.8651 4.97461 11.9984 4.97461C12.1318 4.97461 12.2484 5.02461 12.3484 5.12461L18.6734 11.4246C18.7568 11.5079 18.8151 11.5996 18.8484 11.6996C18.8818 11.7996 18.8984 11.8996 18.8984 11.9996C18.8984 12.0996 18.8818 12.1953 18.8484 12.2866C18.8151 12.3786 18.7568 12.4746 18.6734 12.5746L12.3484 18.8746C12.2484 18.9746 12.1318 19.0246 11.9984 19.0246C11.8651 19.0246 11.7484 18.9746 11.6484 18.8746V18.8746Z"
                                                                fill="currentcolor"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="w-embed"><input type="hidden" class="jetboost-list-item"
                                            value="tiktok-creative-best-practice-the-unboxing-videos"></div>
                                </div> */ ?>
                            </div>
                            <div class="button-wrapper is-center">
                            <a class="c-button-default jetboost-pagination-next-wr59 w-button load_more_btn" 
                                style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
                                Load More</a></div>
                        </div>
                    </div>
                    <div class="blog_highlight-wrapper">
                        <div class="heading_right_side">
                            <div class="c-heading-main">
                                Highlights</div>
                        </div>
                        <div class="blog_highlight">
                            <div class="w-dyn-list">
                                <div class="blog_list">
                                    <?php  $temp = $wp_query; $wp_query= null;
                                    $args = array(
                                        'posts_per_page'   => 3,
                                        'post_type'     => 'post',
                                        'post_status' => 'publish',
                                        'meta_query'    => array(
                                            array(
                                                'key'       => 'is_highlight',
                                                'value'     => true,
                                                'compare'   => '=',
                                            ),
                                        )
                                    );
                                    $wp_query = new WP_Query(); $wp_query->query($args);
                                    if($wp_query->have_posts()):?>
                                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
                                            $post_date = get_the_date( 'F j, Y' );
                                            $timed = get_field('time_duration',get_the_ID());

                                        ?>
                                    <div class="w-dyn-item"><a href="<?php the_permalink(); ?>"
                                            class="blog16_item-highlight">
                                            <div class="bloglist_image-link">
                                                <div class="bloglist_image-wrapper"><img
                                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>"
                                                        loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 6vw"
                                                        class="blog16_image"></div>
                                            </div>
                                            <div class="blog_item-content">
                                                <div class="blog_readtime-block main">
                                                    <div><?php echo ($timed != "")  ? $timed : 2 ;?></div>
                                                    <div>min read</div>
                                                </div>
                                                <div class="blog_main-title-link">
                                                    <h3 class="c-heading-right_blog"><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endwhile;?>
                                    <?php endif; ?>

                                    <?php wp_reset_postdata(); ?>
                                    <?php /*
                                    <div class="w-dyn-item"><a href="/blog/how-to-win-with-ugc-content"
                                        class="blog16_item-highlight">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2.jpg"
                                                    loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 6vw"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2.jpg 1810w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-right_blog">How to Win
                                                    With UGC Content </h3>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="w-dyn-item"><a href="/blog/how-to-win-with-ugc-content"
                                        class="blog16_item-highlight">
                                        <div class="bloglist_image-link">
                                            <div class="bloglist_image-wrapper"><img
                                                    src="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2.jpg"
                                                    loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 6vw"
                                                    srcset="https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2-p-500.jpg 500w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2-p-800.jpg 800w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2-p-1080.jpg 1080w, https://assets-global.website-files.com/63d832bd6bfa2473646a2a7d/64355b69c2464467ab5d8df3_tiktok-post-2.jpg 1810w"
                                                    class="blog16_image"></div>
                                        </div>
                                        <div class="blog_item-content">
                                            <div class="blog_readtime-block main">
                                                <div>2</div>
                                                <div>min read</div>
                                            </div>
                                            <div class="blog_main-title-link">
                                                <h3 class="c-heading-right_blog">How to Win
                                                    With UGC Content </h3>
                                            </div>
                                        </div>
                                        </a>
                                    </div> */?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-wrapper is-center"><a class="c-button-default jetboost-pagination-next-wr59 w-button"
                    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">Load
                    More</a></div>
        </div>
    </div>
</main>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
<script>

jQuery(document).ready(function() {
    var page = 1;
    var catID = jQuery("#cat_id").val();

    jQuery('.load_more_btn').on('click', function() {
        page++;
        jQuery.ajax({
            url: "<?php echo site_url()?>/wp-admin/admin-ajax.php",
            type: 'Post',
            data: { action: 'load_more_post_data','page': page, 'catID':catID },
            dataType: "json",
            before: function(data) {
            },
            success: function(data) {
                jQuery('#paged').val(data.page_number);
                    var count = data.count;
                    // if(count == 0){
                    //     jQuery('.no-record').show();
                    // }else{
                    //     jQuery('.no-record').hide();
                    // }
                    console.log(count);
                    if (count < 6) {
                        jQuery('.load_more_btn').hide();
                    } else {
                        jQuery('.load_more_btn').show();
                    }
                    jQuery('.apend_blogs').append(data.data);
               
            }
        });
    
    });
});

function fn_filter(val1 = "",val2= ""){
    catID = val1;
    keyword = val2;

    if(keyword == "") keyword = jQuery('#search').val();

    if(keyword != "" &&  keyword.length < 3){
        return false;
    }
    jQuery('.apend_blogs').css('opacity',0.5);

    page = 1;
    // jQuery('.apend_blogs').hide();
    jQuery.ajax({
        url: "<?php echo site_url()?>/wp-admin/admin-ajax.php",
        type: 'Post',
        data: { action: 'load_more_post_data','page': page, 'catID':catID, 'keyword': keyword },
        dataType: "json",
        before: function(data) {
        },
        success: function(data) {
            jQuery('#paged').val(data.page_number);
                var count = data.count;
                if (count < 6) {
                    jQuery('.load_more_btn').hide();
                } else {
                    jQuery('.load_more_btn').show();
                }

                if(count == 0){
                    jQuery('.no-record').show();
                }else{
                    jQuery('.no-record').hide();
                }
                
                // jQuery('.apend_blogs').append(data.data);
                jQuery('.apend_blogs').html(data.data);
                // jQuery('.apend_blogs').show();
                jQuery('.apend_blogs').css('opacity',1);
            
        }
    });
}

</script>
<?php 
get_footer();

