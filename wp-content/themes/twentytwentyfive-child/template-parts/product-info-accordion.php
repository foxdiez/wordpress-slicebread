<?php
    $details_accordion = get_field('details_accordion');
    $dimensions_accordion = get_field('dimensions_accordion');
    $featured_lookbooks_accordion = get_field('details_accordion');
?>

<custom-accordion-component class="main-accordion-wrapper">
    <?php if ( $details_accordion ) : ?>
        <div id="Details" class="main-accordion-component">
            <div class="accordion-container">
                <div class="accordion-item">
                    <div class="accordion-label" data-accordion-target>
                        <h3>Details</h3>
                        <?php get_template_part( 'template-parts/icons/icon-plus' ); ?>
                    </div>
                    <article class="accordion-content">
                        <div class="accordion-inner">
                            <?php echo $details_accordion ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ( $dimensions_accordion ) : ?>
        <div id="Dimensions" class="main-accordion-component">
            <div class="accordion-container">
                <div class="accordion-item">
                    <div class="accordion-label" data-accordion-target>
                        <h3>Dimensions</h3>
                        <?php get_template_part( 'template-parts/icons/icon-plus' ); ?>
                    </div>
                    <article class="accordion-content">
                        <div class="accordion-inner">
                            <?php echo $dimensions_accordion ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ( $featured_lookbooks_accordion ) : ?>
        <div id="FeaturedLookbooks" class="main-accordion-component">
            <div class="accordion-container">
                <div class="accordion-item">
                    <div class="accordion-label" data-accordion-target>
                        <h3>Featured Lookbooks</h3>
                        <?php
                            get_template_part( 'template-parts/icons/icon-plus' );
                        ?>
                    </div>
                    <article class="accordion-content">
                        <div class="accordion-inner">
                            <?php echo $featured_lookbooks_accordion ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    <?php endif; ?>
</custom-accordion-component>