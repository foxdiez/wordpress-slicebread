class CustomAccordionComponent extends HTMLElement {
    constructor() {
        super();

        this.accordions = this.querySelectorAll(".accordion-item");
    }

    connectedCallback() {
        this.accordions.forEach(item => {
            const label = item.querySelector(".accordion-label");
            const content = item.querySelector(".accordion-content");

            label.addEventListener("click", () => {
                const isOpen = item.classList.contains("active");

                this.accordions.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove("active");
                        otherItem.querySelector(".accordion-content").style.maxHeight = null;
                    }
                });

                item.classList.toggle("active");

                if (isOpen) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    }
}

customElements.define("custom-accordion-component", CustomAccordionComponent);