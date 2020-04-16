//
//$.ajax({
//    url:"page1.php",
//    method:"POST",
//    dataType:"text",
//
//    
//    
//    
//    success:function(data){
//        console.log(data['notes']);
//        $('#tarea').text(data['notes']);
////        $('#tarea').text(data);
//    
//
//    }
//    
//})
//window.location("page1.html");
//location.reload(true);
//var ll = <?=$enc?>;
//console.log(ll);
//var xmlhttp = new XMLHttpRequest();
//xmlhttp.onreadystatechange = function() {
//  if (this.readyState == 4 && this.status == 200) {
//    var myObj = JSON.parse(this.responseText);
//    document.getElementById("tarea").innerHTML = myObj.notes;
//  }
//};
//xmlhttp.open("POST", "page1.php", true);
//xmlhttp.send();
//function afterupload(){
//var totalfiles = document.getElementById('files').files.length;
// for (var index = 0; index < totalfiles; index++) {
//      form_data.append("files[]", document.getElementById('files').files[index]);
//   }
//}



let sr;
$(document).ready(function(){
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file' , files);
    
    
    $.ajax({
                type: 'POST',
                url: 'page1.php',
                data: fd,
//                data: {map: map},   
                cache: false,
                dataType: 'json',
//                contentType: false,
//                processData: false,
                success: function(response) {
                  console.log(response['note']);
                    $('#tarea').text(response['note']);
                    $('#link1').text(response['link']);
                    console.log(response['link']);
//                    var src = response['image'];
//                    console.log(response['im']);
                    console.log(response['shit']);
                     sr = response['im'];
                    console.log(sr);
                    
//                    $('#preview').append('<img src="'+sr+'" width="200px;" height="200px">');
                    if(sr!=''){
                    $('#preview').append('<img id="theImg" src=sr />');
                    }
                }
});

    
});



