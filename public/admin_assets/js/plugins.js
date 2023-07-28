/*
Template Name: CleanSalem - Clean Green Salem
Author: 4MDesigner
Version: 2.2.0
Website: https://4MDesigner.com/
Contact: 4MDesigner@gmail.com
File: Common Plugins Js File
*/

//Common plugins
if(document.querySelectorAll("[toast-list]") || document.querySelectorAll('[data-choices]') || document.querySelectorAll("[data-provider]")){ 
  document.writeln("<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>");
  document.writeln("<script type='text/javascript' src='assets/libs/choices.js/choices.js.min.js'></script>");
  document.writeln("<script type='text/javascript' src='assets/libs/flatpickr/flatpickr.min.js'></script>");    
}