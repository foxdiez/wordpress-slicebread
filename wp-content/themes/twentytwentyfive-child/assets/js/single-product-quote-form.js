class SingleProductQuoteForm extends HTMLElement {
    constructor() {
        super();

        this.quoteForm = this.querySelector('[data-product-quote-form]')
        this.quoteFormOpenButton = this.querySelector('[data-request-quote-open]');
        this.quoteFormCloseButton = this.querySelector('[data-request-quote-close]');
    }

    connectedCallback() {
        this.controlForm();
    }

    controlForm() {
        this.quoteFormOpenButton.addEventListener('click', () => {
            this.quoteForm.classList.add('open');
        });

        this.quoteForm.addEventListener('click', (event) => {
            if (event.target.hasAttribute('data-request-quote-close') || !event.target.closest('.quote-popup-box')) {
                this.quoteForm.classList.remove('open');
            }
        });
    }
}

if (!customElements.get('single-product-quote-form')) {
  customElements.define('single-product-quote-form', SingleProductQuoteForm);
}