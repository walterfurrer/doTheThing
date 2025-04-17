<?php

$quotes = [
    "Have your fun and once you have your fill, let those fingers dance on that keyboard!",
    "If you look for balance you won't find it. Just create the balance instead, or leave things unbalanced for a bit. Once you make good progress, balance it once again.",
    "Keep building, keep failing, keep learning. Rinse and repeat.",
    "Execution of a task is more valuable than the knowledge to execute without th emovement behind it.",
    "Winning satisfies hard work, but never ever stop improving your craft.",
    "When you care too much, you push yourself for perfection. When you don't care, mediocrity is accepted.",
    "It's not that you're not good enough, you're just not good enough yet. Turn rejection into an opportunity to learn."
]

?>

<main class="place-items-center">
    <div>
        @foreach ($quotes as $quote)
            <p class="text-left text-xl lg:text-2xl">{{ $quote }}</p>
            <br>
        @endforeach
    </div>
</main>
