<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<?php
/*


    Template Name: Sub-Homepage

*/

get_header('sub');

global $post;
//Get the type of page 
$terms = wp_get_post_terms($post->ID, 'pagetype');

//Pages only have one taxonomy need to change [0] if more are added 
$slug = $terms[0]->slug;
$pagetype = '';
if ($slug == 'mc2-page') {
    get_header('sub');
    $pagetype = 'mc2';
} elseif ($slug == 'battery-page') {
    get_header('sub');
    $pagetype = 'battery';
}
?>


<body id="subhome-body">
    <div id="subBanner">
        <?php
        /*----------Get the proper intro video/image--------*/
        if ($pagetype == 'mc2') :
        ?>
            <div id="vid-container" style="background-image: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)), url(<?php echo get_template_directory_uri() ?>/includes/theme_imgs/mc2.jpg)">
                <!--Remove when video updated -->
                <img id="lab-thumbnail" src="<?php echo get_template_directory_uri() ?>/includes/theme_imgs/mc2-square-logo.jpg" alt="">
                <!--add back in once video is up to date
                <iframe id="embeded-vid" width="560" height="315" src="https://www.youtube.com/embed/ww9GLp69Jrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            -->
            </div>

        <?php elseif ($pagetype == 'battery') : ?>
            <div id="vid-container" style="background-image: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)), url(<?php echo get_template_directory_uri() ?>/includes/theme_imgs/battery-lab.jpg)">
                <video type="video/mp4" poster="<?php echo get_template_directory_uri() ?>/includes/theme_imgs/batLabVidThumbnail.PNG" id="embeded-vid" width="560" height="315" preload="metadata" src="<?php echo get_template_directory_uri() ?>/includes/theme_imgs/BatLabVid.mp4" title="VideoPlayer" frameborder="0" allowfullscreen controls></video>

            </div>
        <?php endif; ?>


        <?php   /*----------List the proper mission statement--------*/
        if ($pagetype == 'mc2') :
        ?>

            <div id="mission-statement">

                <h1>The UM Center for Materials Characterization</h1>
                <h2>The Michigan Center for Materials Characterization, also known as (MC)<sup>2</sup>, is the University of Michigan’s
                    facility dedicated to the micron and nanoscale imaging and analysis of materials. The center, housed in
                    Building 22 of the North Campus Research Complex, provides state-of-the-art instruments, professional
                    training, and in-depth education for students and other internal researchers, fellow academic
                    institutions, and local industry. (MC)<sup>2</sup> supports a diverse multi-disciplinary user base of more than 450
                    users from various colleges and departments, 100+ internal research groups, and over 20 non-academic
                    companies. </h2>
            </div>

        <?php elseif ($pagetype == 'battery') : ?>

            <div id="mission-statement">

                <h1>The UM Battery Lab</h1>
                <h2>The UM Battery Lab is a campus research core offering academic and industrial users from
                    around the globe the expertise and resources required to prototype, test and analyze batteries
                    and the materials that go into them. The lab’s aim: work with the industrial and academic energy
                    storage community to bring together scientists and engineers, as well as suppliers and
                    manufacturers, to ease a bottleneck in battery development near the nation’s automotive
                    capital. The lab is available for any firm or researcher to use, and is a safe zone for IP-protected
                    discovery, scale-up, and testing of next-generation batteries and battery materials.
                    <br><br>The Battery Lab, part of the <a href="<?php echo esc_url('/') ?>">Michigan Materials Research Institute</a>, was developed by U-M in
                    cooperation with the Michigan Economic Development Corporation and Ford Motor Company.
                </h2>
            </div>

        <?php endif; ?>

    </div>
    <?php /*--------------List the Proper Services-----------*/ ?>

    <?php if ($pagetype == "mc2") : ?>
        <div id="services">
            <div class="service" onclick="window.location.href='<?php echo esc_url('/mc2-equipment-listing/'); ?>'">
                <i class="fas fa-toolbox"></i>
                <h1>(MC)<sup>2</sup> Equipment</h1>
            </div>
            <div class="service" onclick="window.location.href='<?php echo esc_url('/mc2-service/become-a-user/'); ?>'">
                <i class="fas fa-user"></i>
                <h1>Become A User</h1>
            </div>
            <div class="service" onclick="window.location.href='<?php echo esc_url('/mc2-service/facility-description/'); ?>'">
                <i class="fas fa-building"></i>
                <h1>Facility Description</h1>
            </div>
            <div class="service" onclick="window.location.href='<?php echo esc_url('/mc2-service/policies/'); ?>'">
                <i class="fas fa-file-contract"></i>
                <h1>View Our Policies</h1>
            </div>
        </div>

    <?php elseif ($pagetype == "battery") : ?>


        <div id="services">

            <div class="service" onclick="window.location.href='<?php echo esc_url('/battery-service/arriving-at-the-battery-lab/'); ?>'">
                <i class="fas fa-map"></i>
                <h1>Arriving at the Lab</h1>
            </div>
            <div class="service" onclick="window.location.href='<?php echo esc_url('/battery-service/become-a-user/'); ?>'">
                <i class="fas fa-user"></i>
                <h1>Become A User</h1>
            </div>
            <div class="service" onclick="window.location.href='<?php echo esc_url('/battery-service/facility-description/'); ?>'">
                <i class="fas fa-building"></i>
                <h1>Facility Description</h1>
            </div>
            <div class="service" onclick="window.location.href='<?php echo esc_url('/battery-service/policies/'); ?>'">
                <i class="fas fa-file-contract"></i>
                <h1>View Our Policies</h1>
            </div>
        </div>
    <?php endif; ?>


    <?php
    get_template_part('/includes/section', 'news-and-announcements');
    ?>


    <?php
    get_template_part('/includes/section', 'contact-' . $pagetype);
    ?>


</body>

<?php get_footer(); ?>