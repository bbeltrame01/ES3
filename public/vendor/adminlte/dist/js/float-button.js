$(document).ready(function(){
    flag=0;
    $("#main").click(function(){
        if(flag==0)
        {
            $("#main").animate({height:'52px',width:'52px'},100);

            $("#c1").animate({top:'82%',left:'95%'},150);
            $("#c1").animate({height:'40px',width:'40px'},150);
            $("#c1 img").delay(500).fadeIn(100);

            $("#c2").animate({top:'84.7%',left:'92.1%'},150);
            $("#c2").animate({height:'40px',width:'40px'},150);
            $("#c2 img").delay(500).fadeIn(100);

            $("#c3").animate({top:'90%',left:'90.5%'},150);
            $("#c3").animate({height:'40px',width:'40px'},150);
            $("#c3 img").delay(500).fadeIn(100);

            $("#main").css("background-image","url('cancel.png')");
            $("#main").css("background-size","60% 60%");
            document.getElementById("main").className = "fas fa-times";

            flag=1;
        }
        else
        {
            $("#main").animate({height:'55px',width:'55px'},100);
            $("#c1").animate({height:'5px',width:'5px'},100);
            $("#c1").animate({top:'90%',left:'95%'},200);
            $("#c1 img").css("display","none");

            $("#c2").animate({height:'5px',width:'5px'},100);
            $("#c2").animate({top:'90%',left:'95%'},200);
            $("#c2 img").css("display","none");

            $("#c3").animate({height:'5px',width:'5px'},100);
            $("#c3").animate({top:'90%',left:'95%'},200);
            $("#c3 img").css("display","none");
            $("#main").css("background-image","none");
            document.getElementById("main").className = "fas fa-pen";

            flag=0;
        }
    });
    $('[data-toggle="tooltip"]').tooltip(); 
});