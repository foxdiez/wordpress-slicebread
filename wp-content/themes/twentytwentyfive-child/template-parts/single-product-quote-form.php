<single-product-quote-form data-single-product-quote-form>
    <div class="artistic-description">
        <p>
            Pricing on Ebanista’s collection is available by request due to the many custom options of our pieces. 
            Please select “Request a Quote” to receive a prompt message or contact an Ebanista showroom or Design Studio 
            for more information.
        </p>		
    </div>

    <div>
        <button class="uppercase" data-request-quote-open>
            Request a Quote
        </button>
    </div>

    <div class="quote-popup-overlay" data-product-quote-form>
        <div class="quote-popup-box flex flex-col">
            <button class="close-btn" data-request-quote-close>
                <?php get_template_part( 'template-parts/icons/icon-close' ); ?>
            </button>

            <h2 class="uppercase">Request a Quote</h2>
            
            <?php echo do_shortcode('[contact-form-7 id="2688fd4" title="Request a quote"]'); ?>
        </div>
    </div>
</single-product-quote-form>