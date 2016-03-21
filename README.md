You are given a function 'secret()' that accepts a single integer parameter and returns an integer. In your favorite programming language, write a command-line program that takes one command-line argument (a number) and determines if the secret() function is additive [secret(x+y) = secret(x) + secret(y)], for all combinations x and y, where x and y are all prime numbers less than the number passed via the command-line argument.  Describe how to run your examples. Please generate the list of primes without using built-in functionality.

How to run:

###Option 1:

On a machine that has PHP 5.5 or greater and git installed:

1. In a terminal window on the machine, create a folder with a name of your choosing and change directory into the new folder.
2. Clone this repository by typing the following command:

   ```bash
   git clone https://github.com/ronaldcs/sf-mb-php.git
   ```

3. Change directory to the `sf-mb-php` folder.
4. Type the following command:

   ```bash
   ./coding-exercise.php <param>
   ```

   Where `<param>` is the integer parameter of your choosing.

###Option 2:

1. Visit https://repl.it/ByGL. Note that this link is essentially a duplicate of the coding-exercise.php file.
2. Click on the "run" button.
3. In the console, run the following command:

   ```php
   $ce->areAllPairsAdditive(<param>);
   ```

   Where `<param>` is the integer parameter of your choosing.
