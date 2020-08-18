$.ajax({
    type:'POST',
    url:"MY_URL.php",
    data: {},
    dataType:'json'
}).done(function(data){
    var $a = $("<a>");
    $a.attr("href",data.file);
    $("body").append($a);
    $a.attr("download","file.xls");
    $a[0].click();
    $a.remove();
});
