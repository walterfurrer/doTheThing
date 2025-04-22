<?php

$quotes = [
    [
        "text" => "Have your fun and once you have your fill, let those fingers dance on that keyboard!",
        "author" => "Danny Thompson"
    ],
    [
        "text" => "If you look for balance you won't find it. Just create the balance instead, or leave things unbalanced for a bit. Once you make good progress, balance it once again.",
        "author" => "Danny Thompson"
    ],
    [
        "text" => "Keep building, keep failing, keep learning. Rinse and repeat.",
        "author" => "Shashi Lo"
    ],
    [
        "text" => "Execution of a task is more valuable than the knowledge to execute without the movement behind it.",
        "author" => "Danny Thompson"
    ],
    [
        "text" => "Winning satisfies hard work, but never ever stop improving your craft.",
        "author" => "Shashi Lo"
    ],
    [
        "text" => "When you care too much, you push yourself for perfection. When you don't care, mediocrity is accepted.",
        "author" => "Shashi Lo"
    ],
    [
        "text" => "It's not that you're not good enough, you're just not good enough yet. Turn rejection into an opportunity to learn.",
        "author" => "Shashi Lo"
    ],
];

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$randomIndex = array_rand($quotes);

if (isset($_SESSION['previous_quote_index']) && count($quotes) > 1) {
    while ($randomIndex == $_SESSION['previous_quote_index']) {
        $randomIndex = array_rand($quotes);
    }
}

$_SESSION['previous_quote_index'] = $randomIndex;

$randomQuote = $quotes[$randomIndex];

?>

<main class="place-items-center h-36 mx-auto">
    <div>
        <p class="text-left font-semibold text-md lg:text-3xl mb-2">{{ $randomQuote['text'] }}</p>
        <p class="text-right text-lg italic text-zinc-600">— {{ $randomQuote['author'] }}</p>
    </div>
</main>
