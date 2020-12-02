<?php
const  SCORE_0 = 'Love';
const  SCORE_1 = 'Fifteen';
const  SCORE_2 = 'Thirty';
const  SCORE_3 = 'Forty';
const  SCORE_4 = 'Deuce';
const BANG_NHAU = '-All';
const LOI_THE_1 =  "Advantage player1";
const LOI_THE_2 =  "Advantage player2";
const KET_QUA_1 =  "Win for player1";
const  KET_QUA_2= "Win for player2";

class TennisGame
{
    public $player_score1;
    public $player_score2;

    public function docDiem($diem)
    {
        switch ($diem) {
            case 0:
                return SCORE_0;
                break;
            case 1:
                return SCORE_1;
                break;
            case 2:
                return SCORE_2;
                break;
            case 3:
                return SCORE_3;
                break;
            default:
                break;
        }

    }

    public function kiemTraThangThua($player_score1, $player_score2)
    {
        $lonHon1 = $player_score1 >= 4;
        $lonHon2 = $player_score2 >= 4;
        $hieuDiemSo = $player_score1 - $player_score2;

        if($player_score1==$player_score2){
            if(!$lonHon1){
                return $this->docDiem($player_score1).BANG_NHAU;
            }
            return SCORE_4;
        }

        if ($lonHon1 || $lonHon2) {
            if ($hieuDiemSo == 1)
                return LOI_THE_1;

            if ($hieuDiemSo == -1)
                return LOI_THE_2;

            if ($hieuDiemSo >= 2) {
                return KET_QUA_1;
            } else {
                return KET_QUA_2;
            }

        } else {
            return $this->docDiem($player_score1) . '-' . $this->docDiem($player_score2);
        }
    }
}
//    public function getScore($player1Name, $player2Name, $player_score1, $player_score2)
//    {
//        $tempScore = 0;
//
//        if ($player_score1 == $player_score2) {
//            switch ($player_score1) {
//                case 0:
//                    $this->score = "Love-All";
//                    break;
//                case 1:
//                    $this->score = "Fifteen-All";
//                    break;
//                case 2:
//                    $this->score = "Thirty-All";
//                    break;
//                case 3:
//                    $this->score = "Forty-All";
//                    break;
//                default:
//                    $this->score = "Deuce";
//                    break;
//
//            }
//        } else if ($player_score1 >= 4 || $player_score2 >= 4) {
//            $minusResult = $player_score1 - $player_score2;
//            if ($minusResult == 1) $this->score = "Advantage player1";
//            else if ($minusResult == -1) $this->score = "Advantage player2";
//            else if ($minusResult >= 2) $this->score = "Win for player1";
//            else $this->score = "Win for player2";
//        } else {
//            for ($i = 1; $i < 3; $i++) {
//                if ($i == 1) $tempScore = $player_score1;
//                else {
//                    $this->score .= "-";
//                    $tempScore = $player_score2;
//                }
//                switch ($tempScore) {
//                    case 0:
//                        $this->score .= "Love";
//                        break;
//                    case 1:
//                        $this->score .= "Fifteen";
//                        break;
//                    case 2:
//                        $this->score .= "Thirty";
//                        break;
//                    case 3:
//                        $this->score .= "Forty";
//                        break;
//                }
//            }
//        }
//    }
//
//    public function __toString()
//    {
//        return $this->score;
//    }
