/*
Template Name: CleanSalem - Clean Green Salem
Author: 4MDesigner
Website: https://4MDesigner.com/
Contact: 4MDesigner@gmail.com
File: apps-nft-create init js
*/

// FilePond
FilePond.registerPlugin(
    // encodes the file as base64 data
    FilePondPluginFileEncode,
    // validates the size of the file
    FilePondPluginFileValidateSize,
    // corrects mobile image orientation
    FilePondPluginImageExifOrientation,
    // previews dropped images
    FilePondPluginImagePreview
);

var inputMultipleElements = document.querySelectorAll('input.filepond-input-multiple');
if(inputMultipleElements){

// loop over input elements
Array.from(inputMultipleElements).forEach(function (inputElement) {
    // create a FilePond instance at the input element location
    FilePond.create(inputElement);
})

FilePond.create(
    document.querySelector('.filepond-input-circle'), {
        labelIdle: 'Drag & Drop your picture or <span class="filepond--label-action">Browse</span>',
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom',
    }
);
}