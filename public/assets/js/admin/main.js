const formControls = document.querySelector('#controls');
const rowCount = document.querySelector('#row-count');

rowCount.addEventListener('change', () => {
    formControls.submit();
});
