<?php
session_start();
include_once("../Template/class.TemplatePower.inc.php");
$tpl = new TemplatePower("../tpl/index.tpl");
$tpl->prepare();

$rock = "rock";
$paper = "paper";
$scissors = "scissors";
$win = "You win";
$lose = "You lose";
$draw = "draw";

if(!(isset($_POST ['submit'])))
{
    $player = NULL;
}
else
{
    $player = $_POST ['submit'];
}
if(!isset($_SESSION['win']) || (!isset($_SESSION['lose'] )))
{
    $_SESSION['win'] = 0;
    $_SESSION['lose'] = 0;
}
if(isset($_POST['reset']))
{
    $_SESSION['win'] = 0;
    $_SESSION['lose'] = 0;
}
$array = array($rock, $paper, $scissors);
$computer = ($array[rand(0, count($array)-1)]);

if(!(isset($player)))
{
    $tpl->newBlock('RPS');
}
elseif($player == $rock)
{
    $tpl->newBlock('RPS FILLED');
    switch ($computer)
    {
        case "rock";
            $tpl->assign('ITEM', $rock);
            $tpl->assign('COMPITEM', $rock);
            $tpl->assign('RESULT', $draw);
            break;
        case "paper";
            $tpl->assign('ITEM', $rock);
            $tpl->assign('COMPITEM', $paper);
            $tpl->assign('RESULT', $lose);
            $_SESSION['lose'] += 1;
            break;
        case "scissors";
            $tpl->assign('ITEM', $rock);
            $tpl->assign('COMPITEM', $scissors);
            $tpl->assign('RESULT', $win);
            $_SESSION['win'] += 1;
            break;
    }
    $tpl->assign('WIN', $_SESSION['win']);
    $tpl->assign('LOSE', $_SESSION['lose']);
}
elseif($player == $paper)
{
    $tpl->newBlock('RPS FILLED');
    switch ($computer)
    {
        case "rock";
            $tpl->assign('ITEM', $paper);
            $tpl->assign('COMPITEM', $rock);
            $tpl->assign('RESULT', $win);
            $_SESSION['win'] += 1;
            break;
        case "paper";
            $tpl->assign('ITEM', $paper);
            $tpl->assign('COMPITEM', $paper);
            $tpl->assign('RESULT', $draw);
            break;
        case "scissors";
            $tpl->assign('ITEM', $paper);
            $tpl->assign('COMPITEM', $scissors);
            $tpl->assign('RESULT', $lose);
            $_SESSION['lose'] += 1;
            break;

    }
    $tpl->assign('WIN', $_SESSION['win']);
    $tpl->assign('LOSE', $_SESSION['lose']);
}
elseif($player == $scissors)
{
    $tpl->newBlock('RPS FILLED');
    switch ($computer)
    {
        case "rock";
            $tpl->assign('ITEM', $scissors);
            $tpl->assign('COMPITEM', $rock);
            $tpl->assign('RESULT', $lose);
            $_SESSION['lose'] += 1;
            break;
        case "paper";
            $tpl->assign('ITEM', $scissors);
            $tpl->assign('COMPITEM', $paper);
            $tpl->assign('RESULT', $win);
            $_SESSION['win'] += 1;
            break;
        case "scissors";
            $tpl->assign('ITEM', $scissors);
            $tpl->assign('COMPITEM', $scissors);
            $tpl->assign('RESULT', $draw);
            break;
    }
    $tpl->assign('WIN', $_SESSION['win']);
    $tpl->assign('LOSE', $_SESSION['lose']);
}
else
{
    $tpl->newBlock('RPS');
}
$tpl->printToScreen();
?>