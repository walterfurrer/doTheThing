<h1>do the thing</h1>
<p>do the thing is my first project using Laravel and PHP. It was inspired by the lovely folks in the LGT Discord who pushed me to just start building instead of getting caught up in tutorials or reading docs.</p>
<p>In addition, there are days where we have a hard time doing something, even if it is something that we enjoy! I hope to continue to add motivating quotes from those around me that I can turn to when I need help "doing the thing".</p>

![do-the-thing](https://github.com/user-attachments/assets/269ea28f-91cb-42ab-aa88-5f01b5003da3)

<h2>How It's Built:</h2>

Tech used: HTML, CSS, PHP, Laravel, TailwindCSS

I first wrote everything in HTML in order to get the basic page structure/layout figured out. Since this a very simple SPA it didn't take long. However, I did want to work on creating/maintaining best practices, so I took various parts of the page (Header, Main, Footer) and broke those out into partials that I could then `@include` in my `home.blade.php` view.

It was a lot of fun creating the PHP logic in [resources/views/partials/quote.blade.php](resources/views/partials/quote.blade.php). I didn't want the user to be able to get the same random quote back to back, so creating a session and generating a new index that was different than the previous one was fun to work out.

<h2>Future Implementations</h2>

1. I want to move the quotes to a database and learn to pull the data from there and output it onto the page. I was reading up on it a bit but decided to not mess with it *just* yet.
2. Add JavaScript. I dislike having the entire page refresh currently in order to get a new quote. I plan on making it so the "need more motivation?" button will only refresh the quote section of the page.
3. Create a light theme and then create a toggle for that. I just feel like it'd be good practice to implement something like that.
