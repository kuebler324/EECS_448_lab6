'use strict';
const $ = a => document.getElementById(a);

function validateNumber(value, min, max) {
  const num = Number(value);
  return value !== '' && !isNaN(num) && num >= min && num <= max && num % 1 === num;
}
function validateString(value, min, max) {
  const { length } = value;
  return value && length >= min && length <= max;
}

function submit(e) {
  const errors = [];
  if(!validateNumber($('item-a').value, 0, 100)) {
   errors.push('Milk quantity field is invalid. It must be a positive whole number.');
  }
  if(!validateNumber($('item-b').value, 0, 100)) {
   errors.push('Chocolate milk quantity field is invalid. It must be a positive whole number.');
  }
  if(!validateNumber($('item-c').value, 0, 100)) {
   errors.push('Cow quantity field is invalid. It must be a positive whole number.');
  }
  if(!$('username').value.match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/)) {
    errors.push('Username is not a valid email');
  }
  if(!validateString($('password').value, 6, Infinity)) {
    errors.push('Password length is invalid. Must be minimum 6 characters');
  }
  
  const shippingRadios = document.querySelectorAll('input[name="shipping"]');
  for(let i = 0; i < 3; ++i) {
    if(shippingRadios[i].checked) {
      break;
    }
    if(i === 2) {
      errors.push('Please select a shipping option.');
    }
  }
  
  if(errors.length !== 0) {
    const errorContainer = $('errors');
    errorContainer.innerHTML = '';
    errors.forEach(error => {
      const p = document.createElement('p');
      p.innerText = error;
      errorContainer.appendChild(p);
    });
    e.preventDefault();
  }
}
window.onload = () => {
  $('form').addEventListener('submit', submit);
};