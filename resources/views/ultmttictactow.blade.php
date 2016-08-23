<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="_token" content="{{ csrf_token() }}">
    <title>Tic Tac Toe</title>
    <meta name="viewport" content="width=600px" />
    <link href="{{ asset('assets/ultimateTicTacTow.css') }} " rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset("assets/jquery-confirm.min.css") }}" />

</head>
<body>
<div id="players">
    <div id="X" class="">Player X</div>
    <div id="O" class="">Player O</div>
    <label id="msg"></label>
    <input type="button" onclick="funReset()" class="button" value="New Game">
</div>

<table class="table1">
    <tr>
        <td id="a">
            <table class="table2">
                <tr>
                    <td id="a1" onclick="play('a',1)"></td>
                    <td id="a2" onclick="play('a',2)"></td>
                    <td id="a3" onclick="play('a',3)"></td>
                </tr>
                <tr>
                    <td id="a4" onclick="play('a',4)"></td>
                    <td id="a5" onclick="play('a',5)"></td>
                    <td id="a6" onclick="play('a',6)"></td>
                </tr>
                <tr>
                    <td id="a7" onclick="play('a',7)"></td>
                    <td id="a8" onclick="play('a',8)"></td>
                    <td id="a9" onclick="play('a',9)"></td>
                </tr>
            </table>
        </td>
        <td id="b">
            <table class="table2">
                <tr>
                    <td id="b1" onclick="play('b',1)"></td>
                    <td id="b2" onclick="play('b',2)"></td>
                    <td id="b3" onclick="play('b',3)"></td>
                </tr>
                <tr>
                    <td id="b4" onclick="play('b',4)"></td>
                    <td id="b5" onclick="play('b',5)"></td>
                    <td id="b6" onclick="play('b',6)"></td>
                </tr>
                <tr>
                    <td id="b7" onclick="play('b',7)"></td>
                    <td id="b8" onclick="play('b',8)"></td>
                    <td id="b9" onclick="play('b',9)"></td>
                </tr>
            </table>
        </td>
        <td id="c">
            <table class="table2">
                <tr>
                    <td id="c1" onclick="play('c',1)"></td>
                    <td id="c2" onclick="play('c',2)"></td>
                    <td id="c3" onclick="play('c',3)"></td>
                </tr>
                <tr>
                    <td id="c4" onclick="play('c',4)"></td>
                    <td id="c5" onclick="play('c',5)"></td>
                    <td id="c6" onclick="play('c',6)"></td>
                </tr>
                <tr>
                    <td id="c7" onclick="play('c',7)"></td>
                    <td id="c8" onclick="play('c',8)"></td>
                    <td id="c9" onclick="play('c',9)"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td id="d">
            <table class="table2">
                <tr>
                    <td id="d1" onclick="play('d',1)"></td>
                    <td id="d2" onclick="play('d',2)"></td>
                    <td id="d3" onclick="play('d',3)"></td>
                </tr>
                <tr>
                    <td id="d4" onclick="play('d',4)"></td>
                    <td id="d5" onclick="play('d',5)"></td>
                    <td id="d6" onclick="play('d',6)"></td>
                </tr>
                <tr>
                    <td id="d7" onclick="play('d',7)"></td>
                    <td id="d8" onclick="play('d',8)"></td>
                    <td id="d9" onclick="play('d',9)"></td>
                </tr>
            </table>
        </td>
        <td id="e">
            <table class="table2">
                <tr>
                    <td id="e1" onclick="play('e',1)"></td>
                    <td id="e2" onclick="play('e',2)"></td>
                    <td id="e3" onclick="play('e',3)"></td>
                </tr>
                <tr>
                    <td id="e4" onclick="play('e',4)"></td>
                    <td id="e5" onclick="play('e',5)"></td>
                    <td id="e6" onclick="play('e',6)"></td>
                </tr>
                <tr>
                    <td id="e7" onclick="play('e',7)"></td>
                    <td id="e8" onclick="play('e',8)"></td>
                    <td id="e9" onclick="play('e',9)"></td>
                </tr>
            </table>
        </td>
        <td id="f">
            <table class="table2">
                <tr>
                    <td id="f1" onclick="play('f',1)"></td>
                    <td id="f2" onclick="play('f',2)"></td>
                    <td id="f3" onclick="play('f',3)"></td>
                </tr>
                <tr>
                    <td id="f4" onclick="play('f',4)"></td>
                    <td id="f5" onclick="play('f',5)"></td>
                    <td id="f6" onclick="play('f',6)"></td>
                </tr>
                <tr>
                    <td id="f7" onclick="play('f',7)"></td>
                    <td id="f8" onclick="play('f',8)"></td>
                    <td id="f9" onclick="play('f',9)"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td id="g">
            <table class="table2">
                <tr>
                    <td id="g1" onclick="play('g',1)"></td>
                    <td id="g2" onclick="play('g',2)"></td>
                    <td id="g3" onclick="play('g',3)"></td>
                </tr>
                <tr>
                    <td id="g4" onclick="play('g',4)"></td>
                    <td id="g5" onclick="play('g',5)"></td>
                    <td id="g6" onclick="play('g',6)"></td>
                </tr>
                <tr>
                    <td id="g7" onclick="play('g',7)"></td>
                    <td id="g8" onclick="play('g',8)"></td>
                    <td id="g9" onclick="play('g',9)"></td>
                </tr>
            </table>
        </td>
        <td id="h">
            <table class="table2">
                <tr>
                    <td id="h1" onclick="play('h',1)"></td>
                    <td id="h2" onclick="play('h',2)"></td>
                    <td id="h3" onclick="play('h',3)"></td>
                </tr>
                <tr>
                    <td id="h4" onclick="play('h',4)"></td>
                    <td id="h5" onclick="play('h',5)"></td>
                    <td id="h6" onclick="play('h',6)"></td>
                </tr>
                <tr>
                    <td id="h7" onclick="play('h',7)"></td>
                    <td id="h8" onclick="play('h',8)"></td>
                    <td id="h9" onclick="play('h',9)"></td>
                </tr>
            </table>
        </td>
        <td id="i">
            <table class="table2">
                <tr>
                    <td id="i1" onclick="play('i',1)"></td>
                    <td id="i2" onclick="play('i',2)"></td>
                    <td id="i3" onclick="play('i',3)"></td>
                </tr>
                <tr>
                    <td id="i4" onclick="play('i',4)"></td>
                    <td id="i5" onclick="play('i',5)"></td>
                    <td id="i6" onclick="play('i',6)"></td>
                </tr>
                <tr>
                    <td id="i7" onclick="play('i',7)"></td>
                    <td id="i8" onclick="play('i',8)"></td>
                    <td id="i9" onclick="play('i',9)"></td>
                </tr>
            </table>
        </td>
    </tr>

</table>

<script src="{{asset('assets/jquery.min.js')}}"></script>
<script src="{{asset('assets/jquery-confirm.min.js')}}"></script>
<script type="text/javascript">$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    var playblock = 0;
    var combinationX = [];
    var combinationO = [];
    var count = 0;

    var currantPlayer = "";

    var combinationAX = [];
    var combinationAO = [];

    var combinationBX = [];
    var combinationBO = [];

    var combinationCX = [];
    var combinationCO = [];

    var combinationDX = [];
    var combinationDO = [];

    var combinationEX = [];
    var combinationEO = [];

    var combinationFX = [];
    var combinationFO = [];

    var combinationGX = [];
    var combinationGO = [];

    var combinationHX = [];
    var combinationHO = [];

    var combinationIX = [];
    var combinationIO = [];

    function play(tdId,val) {
        $("#msg").html("");
        if(playblock == "0" || playblock == tdId)
        {
            if ($('#'+tdId+val).is(':empty')) {
                chngbg(val);
                count++;
                if ($("#O").hasClass("current-player")) {
                    switch(tdId) {
                        case "a":
                            combinationAO.push(val);
                            combinationO = combinationAO;
                            break;
                        case "b":
                            combinationBO.push(val);
                            combinationO = combinationBO;
                            break;
                        case "c":
                            combinationCO.push(val);
                            combinationO = combinationCO;
                            break;
                        case "d":
                            combinationDO.push(val);
                            combinationO = combinationDO;
                            break;
                        case "e":
                            combinationEO.push(val);
                            combinationO = combinationEO;
                            break;
                        case "f":
                            combinationFO.push(val);
                            combinationO = combinationFO;
                            break;
                        case "g":
                            combinationGO.push(val);
                            combinationO = combinationGO;
                            break;
                        case "h":
                            combinationHO.push(val);
                            combinationO = combinationHO;
                            break;
                    }
                    $("#"+tdId+val).append("<div class='O-marker'></div>");
                    $("#O").removeClass();
                    $("#X").addClass("current-player");
                }
                else {
                    switch(tdId) {
                        case "a":
                            combinationAX.push(val);
                            combinationX = combinationAX;
                            break;
                        case "b":
                            combinationBX.push(val);
                            combinationX = combinationBX;
                            break;
                        case "c":
                            combinationCX.push(val);
                            combinationX = combinationCX;
                            break;
                        case "d":
                            combinationDX.push(val);
                            combinationX = combinationDX;
                            break;
                        case "e":
                            combinationEX.push(val);
                            combinationX = combinationEX;
                            break;
                        case "f":
                            combinationFX.push(val);
                            combinationX = combinationFX;
                            break;
                        case "g":
                            combinationGX.push(val);
                            combinationX = combinationGX;
                            break;
                        case "h":
                            combinationHX.push(val);
                            combinationX = combinationHX;
                            break;
                    }
                    $("#"+tdId+val).append("<div class='X-marker'></div>");
                    $("#X").removeClass();
                    $("#O").addClass("current-player");
                }
            }
            if(count >= 5)
            {
                $.ajax({
                    type:'post',
                    url:'{{ URL::route('play.game') }}',
                    data:{ 'combinationX':combinationX , 'combinationO' : combinationO, 'count': count ,'game':'game'},
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
                                    funReset();
                                }
                            });
                        }
                    }
                });
            }
        }
        else
        {
            $("#msg").html('Please Play in Colored box block.');
            $("#msg").addClass('msg');
        }

        console.log(combinationX+" ===== "+combinationO);
    }

    function chngbg(val)
    {
        $("#a").removeClass();
        $("#b").removeClass();
        $("#c").removeClass();
        $("#d").removeClass();
        $("#e").removeClass();
        $("#f").removeClass();
        $("#g").removeClass();
        $("#h").removeClass();
        $("#i").removeClass();

        switch (val)
        {
            case 1:
                $("#a").addClass('tdbg');
                playblock = "a";
                break;
            case 2:
                $("#b").addClass('tdbg');
                playblock = "b"
                break;
            case 3:
                $("#c").addClass('tdbg');
                playblock = "c";
                break;
            case 4:
                $("#d").addClass('tdbg');
                playblock = "d";
                break;
            case 5:
                $("#e").addClass('tdbg');
                playblock = "e";
                break;
            case  6:
                $("#f").addClass('tdbg');
                playblock = "f";
                break;
            case  7:
                $("#g").addClass('tdbg');
                playblock = "g";
                break;
            case  8:
                $("#h").addClass('tdbg');
                playblock = "h";
                break;
            case  9:
                $("#i").addClass('tdbg');
                playblock = "i";
                break;
        }
    }

function funReset()
{
    location.reload();
}


</script>
</body>
</html>