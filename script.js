
  
$(document).ready(function(){

    var editor =  ace.edit("editor");
    editor.session.setMode("ace/mode/html");
    editor.setValue($("#content").val());




    $("#nuevo").click(function(){
        window.location = "/foodrecipecms/recipeform.php";
    });
    
    var options= {
        valueNames:['title']
    };

    new List('sortable-blog-list',options);

    
 

    $("#submit").click(function(){
        var title = $("#title").val();
        var author = $("#autor").val();
        var date = $("#date").val();
        var content = editor.getValue();


        $.post("/foodrecipecms/saverecipe.php",{
            title: title,
            content: content,
            author: author,
            date:date
        }).done(function(data){
           // alert(data);
            window.location = "/foodrecipecms/index.php";
        })

        
    });


     

    $("#delete").click(function(){
        var title = $("#title").val();
       

        $.post("/foodrecipecms/deleterecipe.php",{
            title: title
        }).done(function(data){
            //alert(data);
            window.location = "/foodrecipecms/index.php";
        })

        
    });



});

