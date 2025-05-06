document.addEventListener("DOMContentLoaded", () => {
    const holel_filter = document.querySelector('.Hotel__block-filter');
    const hotel_FilterButton = document.querySelector('.hotel__mob-filter');
    if(document.querySelector('.hotel__mob-filter')){
        hotel_FilterButton.addEventListener('click',()=>{
            holel_filter.classList.toggle('hotel__block-on');
        });
    }
});