// console.log('MODULE LOADED: colorPIckerToIcon.js');

let colorPickerInput = document.getElementById('bank_account_icon_color_hexa');
let iconsFormFieldset = document.getElementById('bank_account_icon');

colorPickerInput.addEventListener('change', event =>{
    let colorHexaCode = event.target.value;
    iconsFormFieldset.style.color = colorHexaCode;
});
