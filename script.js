
  
$(document).ready(function(){

    var editor =  ace.edit("editor");
    editor.session.setMode("ace/mode/html");



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

        $.post("saverecipe.php",{
            title: title,
            content: content,
            author: author,
            data:date
        }).done(function(data){
            window.location = "/foodrecipecms/index.php";
        })

    });


});

