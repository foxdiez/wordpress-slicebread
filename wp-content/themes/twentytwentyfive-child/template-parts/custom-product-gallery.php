<custom-product-gallery>
    <?php
        global $product;

        if ( ! $product ) return;

        $all_images = [];

        $featured_id = $product->get_image_id();
        if ( $featured_id ) {
            $all_images[] = $featured_id;
        }

        $gallery_ids = $product->get_gallery_image_ids();
        foreach ( $gallery_ids as $id ) {
            if ( $id !== $featured_id ) {
                $all_images[] = $id;
            }
        }
    ?>

    <div class="swiper main-swiper">
        <div class="swiper-wrapper">
            <?php foreach ( $all_images as $image_id ): ?>
                <div class="swiper-slide">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'large' ) ); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="thumb-swiper-wrapper">
        <div class="swiper-button-prev thumb-prev"></div>

        <div class="swiper thumb-swiper">
            <div class="swiper-wrapper">
                <?php foreach ( $all_images as $image_id ): ?>
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img src="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'thumbnail' ) ); ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="swiper-button-next thumb-next"></div>
    </div>
</custom-product-gallery>
