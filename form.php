<?php

$emojis = [':)', ':-D', '<3', 'O/', '^^', '*.*', '<>', '^_^', '8D', ':P'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputPrompt = sanitize_text_field($_POST['prompt']);
    $transformedPrompt = '';
    $words = explode(' ', $inputPrompt);
    
    foreach ($words as $word) {
        $transformedPrompt .= $word . ' ' . $emojis[array_rand($emojis)] . ' ';
    }
    
    echo '<div style="color:#28303d">' . $transformedPrompt . '</div>';
}

?>

<form action="" method="post" style="background-color:#28303d; color: white;">
    <label for="prompt">Enter a prompt:</label>
    <input type="text" id="prompt" name="prompt" required>
    <input type="submit" value="Submit">
</form>
