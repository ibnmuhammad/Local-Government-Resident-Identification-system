function generatePDF(){
    const element = document.getElementById("print");

    html2pdf()
    .from(element)
    .save();
}

$(document).ready(function(){
    console.log('testing');




});