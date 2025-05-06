document.addEventListener("DOMContentLoaded", () => {
    let priceBlocks = document.querySelectorAll('.price-block');

    priceBlocks.forEach(block => {
        let full_year = block.querySelector('.full-year');
        let hidden_columns = block.querySelectorAll('.wrapper__column-night__hiden');
        let fullYearIcon = block.querySelectorAll('.full-year__icon');

        if (full_year) {
            full_year.addEventListener("click", () => {
                fullYearIcon.forEach(el => {
                    el.classList.toggle('full-year__icon__reverse');
                })
                hidden_columns.forEach(el => {
                    el.classList.toggle('hiden-off');
                });
            });
        }
    });
});