$(function (event) {
// Get the modal

$(".effect").click(function(){
  $("#myModal").css("display", "block")
  $("#img01").attr("src", $(this).attr("src"))
});

// Get the <span> element that closes the modal

// When the user clicks on <span> (x), close the modal
$(".close").click(function(){
    
$("#myModal").css("display", "none")
});

});
