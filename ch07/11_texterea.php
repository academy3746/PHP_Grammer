<?php
$song = "Finished with my woman 'cause
She couldn't help me with my mind
People think I'm insane because
I am frowning all the time

All day long I think of things
But nothing seems to satisfy
Think I'll lose my mind
If I don't find something to pacify

Can you help me
Occupy my brain?
Oh yeah

I need someone to show me
The things in life that I can't find
I can't see the things that make
True happiness, I must be blind

Make a joke and I will sigh
And you will laugh and I will cry
Happiness I cannot feel
And love to me is so unreal

And so as you hear these words
Telling you now of my state
I tell you to enjoy life
I wish I could but it's too late";
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Textarea</title>
</head>
<body>
<h1>Paranoid</h1>
    <form action="12_textarea_result.php" method="post">
        <textarea name="text" cols="50" rows="10"><?php echo $song ?></textarea>
        <input type="submit" value="Send!">
    </form>
</body>
</html>
