<center><img src="./assets/logo.png"></center>

#Pass - PHP CSS Preprocessor#

## Requirements ##

Ensure both the Pass class and your CSS folder are writable so that Pass can generate the stylesheet and save it.

## Setting it up ##
With Pass you can create dynamic cascading stylesheets simply by including the Pass class into your projects.

To get started, include the Pass class to your project and simply instantiate it with the '.pass' of your choice, like so: 

```
require 'src/pass.php';
$pass = new pass('pass/style.pass');
```

The `$pass` variable contains the var `->name`, this is the name of the newly created '.css' file, this is where you include it into the header of your page: 

```
<link rel="stylesheet" type="text/css" href="<?=$pass->name;?>">
```

And thats it! You are ready to go!

## Creating a Pass stylesheet ##

Create a new .pass file, ideally put it in a folder named 'pass' just like you would for css files and make sure your 'pass' folder is in the same directory of your ''css' folder. 

Now, simply add variables to the top of the Pass file in a similar syntax to PHP like so:

```
$primary_green = #2ecc71;
$heading = #FFFFFF;
$pad_a = 20px;
$font = Arial, Helvetica, sans-serif;
```

and add these variable names to your styles as you normally would with CSS: 

```
body h1 {
	color: $heading;
	font-family: $font;
	text-align: center;
}
```
Feel free to include comments /* like this */ as they aren't affected during conversion.

Any questions or comments? @jakebown1
