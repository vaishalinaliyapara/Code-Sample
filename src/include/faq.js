const handleFaqClick = (event) => {
    if ( event.currentTarget.classList.contains('faq-active')){
        event.currentTarget.classList.remove("faq-active")
        event.currentTarget.lastElementChild.classList.add("hidden");
        event.currentTarget.querySelector("#faq-toggle-icon").lastElementChild.classList.add('rotate-90');
    } else {
        Array.from(faqItems.children).forEach(faqItem => {
            faqItem.classList.remove("faq-active");
            faqItem.lastElementChild.classList.add('hidden');
            faqItem.querySelector("#faq-toggle-icon").lastElementChild.classList.add('rotate-90');
        });
    
        event.currentTarget.classList.add("faq-active")
        event.currentTarget.lastElementChild.classList.remove("hidden");
        event.currentTarget.querySelector("#faq-toggle-icon").lastElementChild.classList.remove('rotate-90');
        
    }


};

const addFaqEvent = () => {
    if (null !== faqItems) {

        faqItems.childNodes.forEach(faqItem => {
            faqItem.addEventListener('click', handleFaqClick);
        });

    }
}
const removeFaqEvent = () => {
    if (null !== faqItems) {

        faqItems.childNodes.forEach(faqItem => {
            faqItem.removeEventListener('click', handleFaqClick);
        });

    }
}

const handleFaqSelector = (event) => {
    let target = event.target.dataset.target;
    if ('faq-brands' === target) {
        faqCreators.classList.add('hidden');
        faqBrands.classList.remove('hidden');
        removeFaqEvent();
        faqItems = document.getElementById("brand-faq-items");
        addFaqEvent();
    } else if ('faq-creators' === target) {
        faqBrands.classList.add('hidden');
        faqCreators.classList.remove('hidden');
        removeFaqEvent();
        faqItems = document.getElementById("creators-faq-items");
        addFaqEvent();
    }
}
let faqBrands;
let faqCreators;
let faqSelectors;
let faqItems;

document.addEventListener("DOMContentLoaded", () => {

    faqBrands = document.getElementById("faq-brands");
    faqCreators = document.getElementById("faq-creators");
    faqItems = document.getElementById("brand-faq-items");
    faqSelectors = document.querySelectorAll(".faq-selector");
    faqSelectors.forEach(faqSelector => faqSelector.addEventListener('click', handleFaqSelector));
    addFaqEvent();
    
});

