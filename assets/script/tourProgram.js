document.addEventListener("DOMContentLoaded", () => {
    const feature_buttons = document.querySelectorAll('.peculiaritie-header');
    const feature_texts = document.querySelectorAll('.peculiaritie__description');
    const peculiaritie_more = document.querySelectorAll('.peculiaritie__more-rotate');

    feature_buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            feature_texts[index].classList.toggle('peculiaritie__description-on');
            peculiaritie_more[index].classList.toggle('peculiaritie__more-on');
        });
    });
});