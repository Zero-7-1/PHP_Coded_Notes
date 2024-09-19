<?php
/*
Q. EXPLAIN ARE REGULAR EXPRESSIONS ? WHAT ARE DELIMITERS AND MODIFIERS ? 

Regular Expressions (RegExp or regex) are sequences of characters that defines 
search patterns, primarily for string matching and manipulation.
They are used in scenarios like 
1. Validate Input: Ensure data conforms to a specific format 
                   (e.g., email addresses, phone numbers).
2. Search and Extract: Find specific patterns within text.
3. Replace Text: Modify parts of strings based on patterns.

Syntax: In PHP, regular expressions are strings composed of delimiters, 
a pattern and optional modifiers.

Delimiters can be any non-alphanumeric, non-backslash, non-whitespace character. 
The most common delimiter is the forward slash (/), but others like #, ~, or %. 
Note: If your pattern includes / then choose a different delimiter.

Modifiers (also known as flags) are optional characters appended after the 
closing delimiter. 
Common modifiers include:
i - Case-insensitive matching.
m - Multi-line mode.
s - Dot matches newline characters.
u - Enables UTF-8 mode.
x - Allows for whitespace and comments within the pattern for readability.
*/

$exp = "/w3schools/i";
/*
In the example above, / is the delimiter, w3schools is the pattern that is 
being searched for, and i is a modifier that makes the search case-insensitive
*/

/*
Q. EXPLAIN VARIOUS REGULAR EXPRESSION FUNCTIONS IN PHP. 
PHP provides a variety of functions for regular expressions.
*/

/* preg_match()
Perform a pattern match on a string. It returns 1 if the pattern matches, 0 if not, 
and FALSE on error.
*/











?>