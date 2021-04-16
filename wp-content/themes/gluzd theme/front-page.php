<?php 
    get_header(); 
?>

<h1>
    <?php the_title() ?>
</h1>

<div id="Clients" class="clients">
            <h2>Recent clients</h2>
            <p>We help websites stay SEO-compliant, mobile-friendly, fast, secure, and inclusive.</p>
            <div class="clients-thumbnails-w-description">
                <?php 
                    $posts_query = new WP_Query(['posts_per_page' => 6]);
                ?>
                <?php while($posts_query->have_posts()) {
                    $posts_query->the_post(); ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <div class=main-page-post-thumbnail>
                                <?php echo get_the_post_thumbnail(); ?>
                                <p><?php the_title(); ?></p>
                            </div>
                         </a>

                <?php } ?>

                <?php  wp_reset_query(); ?>
            </div>

            <p>Read detailed reviews at <a href="#">clutch.co</a></p>
    </div>
    
    <div id="Services" class="services">
        <h2>Our services cover all websites’ needs</h2>
            <h3>Front End Support</h3>
            <p>Clear and intuitive interfaces to make your customers spend less time and effort buying your products or services.</p>
            <details>
                <summary><span>Unroll details</span></summary>
                <ul>
                    <li>identifying objectives and KPIs before ideation>prototyping>design,</li>
                    <li>fixing visual bugs,</li>
                    <li>changing UX design layout to improve conversions,</li>
                    <li>changing the color scheme of the whole website,</li>
                    <li>adding inclusive options, e.g. dark theme or website design for the visually impaired, etc.</li>
                </ul>
            </details>
                <h3>Back End Support</h3>
                <p>Fixing any WordPress websites’ mistakes that affect performance, SEO compatibility, the appearance of interactive elements (forms, pop-ups, etc.)</p>
                <details>
                    <summary><span>Unroll details</span></summary>
                    <h4>Fixing mistakes in SEO:</h4>
                    <ul>
                        <li>HTTPS status,</li>
                        <li>404 Errors,</li>
                        <li>not crawled pages,</li>
                        <li>broken links and images,</li>
                        <li>redirects (permanent and temporary),</li>
                        <li>uploading meta tags,</li>
                        <li>removing H1 duplicates,</li>
                        <li>adding missing Alt attributes,</li>
                        <li>removing page duplicates,</li>
                        <li>improving crawlability,</li>
                        <li>structuring robots.txt,</li>
                        <li>structuring .htaccess,</li>
                        <li>structuring sitemap.xml,</li>
                        <li>removing hreflang conflicts.</li>
                    </ul>
                    
                    <h4>Removing performance issues:</h4>
                    <ul>
                        <li>fixing AMP HTML issues,</li>
                        <li>caching JavaScript and CSS files,</li>
                        <li>minifying JavaScript and CSS files,</li>
                        <li>improving page time to interactive,</li>
                        <li>reducing initial server response time,</li>
                        <li>minimizing the impact of third-party code,</li>
                        <li>avoiding an excessive DOM size,</li>
                        <li>fixing interactive elements issues (not sending forms, non-closing pop-ups, etc.),</li>
                        <li>preventing crushes and setting live alerts,</li>
                        <li>adjusting third-party integration influence.</li>
                    </ul>
                </details>
            
            <h3>New Features Development</h3>
            <p>When your business is evolving, your website must coincide. We help to keep your online presence on track while you’re doing business.</p>

            <details>
                <summary><span>Unroll details</span></summary>               
                <ul>
                    <li>MVP creation,</li>
                    <li>offline-to-online transformation,</li>
                    <li>custom templates for new services/products,</li>
                    <li>new formats of content promotion,</li>
                    <li>best web 2.0 practices to make your website more user-friendly,</li>
                    <li>reducing manual tasks, e.g. price changing,</li>
                    <li>improving customer support with personal user pages,</li>
                    <li>automating report generation,</li>
                    <li>connecting with third-party cloud solutions,</li>
                    <li>data protection,</li>
                    <li>cookie settings.</li>
                </ul>
            </details>
    </div>
    
    <div id="team" class="team">
        <h2>Our team is small and flexible</h2>
        <p>We’re keeping our agency small enough to be flexible and reliable.</p>
            <div class="main-page-team-w-description">
                
                    <?php
                    

                    $user_query = new WP_User_Query( array( 'role__not_in' => 'Subscriber' ) );
                
                    // User Loop
                    if ( ! empty( $user_query->get_results() ) ) {
                        foreach ( $user_query->get_results() as $user ) { ?>
                            <div class="main-page-team">
                                <?php
                                    echo get_avatar( get_the_author_meta( 'id' ), 100 );
                                    echo '<p class="team-name">' . $user->display_name . '</p>';
                                    echo '<p class="team-bio">' . $user->user_description . '</p>';
                                ?>
                            </div>
                        
                        <?php 
                            
                        }
                        
                        
                    } else {
                        echo 'No users found.';
                    }
                                    
                    ?>
                
            </div>
            

            
    </div>
        
    <div id="pricing" class="pricing">
        <h2>Our pricing is transparent</h2>
        <p>You send us a list of your issues, we estimate their complexity and commit to those we WILL finish by the end of the term. With no exceptions.</p>
        <p>We provide our clients with fixed pricing:</p>

        <p><strong>$500/mo:</strong> up to 15 story points of teamwork (UX/UI designer, developer, Q&A, and project manager).</p>
        <p><strong>$900/mo:</strong> up to 30 story points of teamwork (UX/UI designer, developer, Q&A, and project manager).</p>
        
        <details>
            <summary><span>What are story points?</span></summary>
            <p>Story points are units to measure and estimate the overall effort required to implement a to-do list of the website’s changes/features. We assign story points to each item according to work complexity, the amount of work, as well as risk or uncertainty.</p>
            <p>This approach helps us to break down work into smaller pieces more effectively and estimate time to finish tasks more clearly.</p>
        </details>
    </div>
        
    <div id="security" class="security">
        <h2>You’re secured</h2>
            <ol>
                <li>We always prepare a detailed list of tasks we’re going to complete during the period.</li>
                <li>Before we change anything on your website, we create a backup copy.</li>
                <li>If you’re willing to update your website on the regular basis, we’ll add version control.</li>
            </ol>
    </div>

    <div id="contacts" class="contacts">
        <h2>Get in touch</h2>
        <p>To get a preliminary estimate on how long it’ll take to finish your project, send us your contacts and a brief description of tasks you have in mind (Name, E-mail, Your project description).</p>
    </div>

<?php 
    the_content(); 
    get_footer();
?>