document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector('body');
    const modal_buy = document.querySelector('.wrappper__hotel-main__modal-buy');
    const modal_button = document.querySelector('.hotel-main__price-button');
    const modal_close = document.querySelector('.hotel-main__modal-close');

    modal_button.addEventListener('click',()=>{
        modal_buy.classList.add('hotel-main__modal-on');
        modal_buy.classList.add('hotel-main__overflow');
        body.classList.add('overflow');
        window.scrollTo({
            top: 0,
        });
    })
    modal_close.addEventListener('click',()=>{
        modal_buy.classList.remove('hotel-main__modal-on');
        modal_buy.classList.remove('hotel-main__overflow');
        body.classList.remove('overflow');
    })
});