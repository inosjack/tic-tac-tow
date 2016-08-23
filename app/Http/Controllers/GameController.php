<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GameController extends Controller
{
    public $winningCombination = [
        [1,2,3], [4,5,6], [7,8,9],
        [1,4,7], [2,5,8], [3,6,9],
        [3,5,7], [1,5,9]
    ];


    public function findCombination($data)
    {

        sort($data);
        $allPossibleCombination = [];
        $l=3;
        $number = count($data)-2;
        for($j=0;$j<$number;$j++)
        {
            if($l <= count($data))
            {
                for($i=1;$i<count($data);$i++)
                {
                    for($k=$i+1;$k<count($data);$k++) {
                        $combination = [$data[0], $data[$i], $data[$k]];
                        $allPossibleCombination[] = $combination;
                    }
                }
                unset($data[0]);
                sort($data);
            }
        }
        return $allPossibleCombination;


    }

    public function checkWinner($data=[])
    {
        for($i=0;$i<count($data);$i++) {

            if (in_array( $data[$i], $this->winningCombination))
            {
                return true;
            }
        }
    }

    public function winnerPlayer(Request $request)
    {
        $arrayX = $request->combinationX;
        $arrayXcount = count($arrayX);
        $arrayO =$request->combinationO;
        $arrayOcount =count($arrayO);

        if($arrayOcount >= 3 || $arrayXcount >= 3)
        {

                $combinationX = $this->findCombination($arrayX);

                if($this->checkWinner($combinationX) == true)
                {
                    return ["winner" => "X" ,'result'=> "Player X Winner......."];
                }

                $combinationO = $this->findCombination($arrayO);
                if($this->checkWinner($combinationO) == true)
                {
                    return ["winner" => "O",'result'=> "Player O Winner......."];
                }

        }
        if($request->game == "game")
        {
            if($request->count == 81 )
            {
                return ["winner" => "Draw",'result'=> "Match Draw"];
            }
        }
        elseif($request->count == 9 )
        {
            return ["winner" => "Draw",'result'=> "Match Draw"];
        }

    }



    //
    //
}
