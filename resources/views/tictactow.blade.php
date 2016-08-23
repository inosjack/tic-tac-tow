<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="_token" content="{{ csrf_token() }}">
    <title>Tic Tac Toe</title>
    <meta name="viewport" content="width=600px" />
    <link href="{{ asset('assets/main.css') }} " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset("assets/jquery-confirm.min.css") }}" />

</head>
<body onload="">
<div id="players">
    <div id="X" class="current-player">Player X</div>
    <div id="O" class="">Player O</div>
    <input type="button" class="button" onclick="reset()" value="New Game">
</div>
<table>
    <tr>
        <td id="1" onclick="play(1)"></td>
        <td id="2" onclick="play(2)"></td>
        <td id="3" onclick="play(3)"></td>
    </tr>
    <tr>
        <td id="4" onclick="play(4)"></td>
        <td id="5" onclick="play(5)"></td>
        <td id="6" onclick="play(6)"></td>
    </tr>
    <tr>
        <td id="7" onclick="play(7)"></td>
        <td id="8" onclick="play(8)"></td>
        <td id="9" onclick="play(9)"></td>
    </tr>
</table>
<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/jquery-confirm.min.js')}}"></script>
<script type="text/javascript">$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    var combinationX = [];
    var combinationO = [];
    var count = 0;

function play(id)
{
    if ($('#'+id).is(':empty')){
        count++;
        console.log(count);
        if($("#O").hasClass("current-player"))
        {
            combinationO.push(id)
            $("#"+id).append("<div class='O-marker'></div>");
            $("#O").removeClass();
            $("#X").addClass("current-player");
        }
        else{
            combinationX.push(id)
            $("#"+id).append("<div class='X-marker'></div>");
            $("#X").removeClass();
            $("#O").addClass("current-player");
        }

        if(count >= 5)
        {
            $.ajax({
                type:'post',
                url:'{{ URL::route('play.game') }}',
                data:{ 'combinationX':combinationX , 'combinationO' : combinationO, 'count': count},
                beforeSend: function(){
                },
                success: function(response)
                {
                    if(response.winner)
                    {
                        $.confirm({
                            title: 'Result...........!',
                            content: response.result,
                            confirm: function(){
                                 reset();
                            }
                        });
                    }
                }
            });
        }


    }
  /*  else
    {
        $.alert({
            title: 'This Already Selected ',
            content: 'Please Select the blank box',
        });
    }*/

}
    function reset()
    {

        for ( i= 1; i < 10; i++) {
            $("#"+i).empty();
        }
        combinationX = [];
        combinationO = [];
        count = 0;
        $("#O").removeClass();
        $("#X").removeClass();
        $("#X").addClass("current-player");
    }


</script>
</body>
</html>
