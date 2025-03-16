
<?php
// Applying function to evaluate the quiz
function evaluateQuiz(array $questions , array $answers): int{
    $score = 0 ;
    foreach( $questions as $index => $question ) {
    if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

// Quiz Quistions
$questions = [
    ['question' => 'What Is 5+4?', 'correct' => '9'],
    ['question' => 'What Is The Capital Of Peru?', 'correct' => 'Lima'],
    ['question' => 'Who Submitted This Project?', 'correct' => 'Imon Hosen'],
    ['question' => 'who Wrote "Steal Like An Artist"?', 'correct' => 'Austin Kleon'],
];

$answers = [];
foreach($questions as $index => $question) {
    echo ($index + 1). "." .$question['question']."\n";
    $answers[] = trim(readline("Your Answer: "));

}

$score = evaluateQuiz($questions , $answers);
echo "\nYou Scored $score out of " .count($questions).".\n";

if($score === count($questions)){
    echo "Excellent Job. Winner Winner Chicken dinner!\n";
}elseif($score===3){
    echo "You're Rocking! Keep Growing.\n";
}elseif($score>=1){
    echo "Good Effort!\n";
}else{
    echo "Better Luck Next Time!\n";
} 

?>
