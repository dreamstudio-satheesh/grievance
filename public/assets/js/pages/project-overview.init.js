/*
Template Name: Velzon - Admin & Dashboard Template
Author: 4MDesigner
Website: https://4MDesigner.com/
Contact: 4MDesigner@gmail.com
File: Project overview init js
*/

// favourite btn
var favouriteBtn = document.querySelectorAll(".favourite-btn");
if (favouriteBtn) {
    Array.from(document.querySelectorAll(".favourite-btn")).forEach(function (item) {
        item.addEventListener("click", function (event) {
            this.classList.toggle("active");
        });
    });
}