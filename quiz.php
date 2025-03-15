
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



# Quiz Application

This is a simple PHP-based quiz application that evaluates user responses to a set of predefined questions.

## How to Use

1. Clone the repository or download the `quiz.php` file.
2. Open a terminal and navigate to the directory containing `quiz.php`.
3. Run the script using the PHP command:
    ```sh
    php quiz.php
    ```
4. Answer the questions as prompted.
5. The script will evaluate your answers and display your score along with a message based on your performance.

## Questions

The quiz consists of the following questions:
1. What Is 5+4?
2. What Is The Capital Of Peru?
3. Who Submitted This Project?
4. Who Wrote "Steal Like An Artist"?

## Scoring

- Each correct answer awards you one point.
- The total score is displayed at the end along with a performance message:
  - "Excellent Job. Winner Winner Chicken dinner!" for a perfect score.
  - "You're Rocking! Keep Growing." for a score of 3.
  - "Good Effort!" for a score between 1 and 2.
  - "Better Luck Next Time!" for a score of 0.

## Requirements

- PHP 7.0 or higher

## License

This project is licensed under the MIT License.